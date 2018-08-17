<?php

namespace Venice\Form\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\Setup\ModuleDataSetupInterface;
use \Magento\Framework\Registry;
use \Venice\Form\Model\FormRuleRepository;


class Index extends Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    protected $moduleDataSetupInterface;

    protected $registry;

    protected $formRuleRepository;


    public function __construct(Context $context,
                                PageFactory $pageFactory,
                                ModuleDataSetupInterface $moduleDataSetupInterface,
                                Registry $registry,
                                FormRuleRepository $formRuleRepository
                               )
    {
        $this->resultPageFactory = $pageFactory;
        $this->moduleDataSetupInterface = $moduleDataSetupInterface;
        $this->registry = $registry;
        $this->formRuleRepository = $formRuleRepository;
        parent::__construct($context);
    }


    /**
     * The controller action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();

        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            $form = $this->formRuleRepository->getByName($post['format_id']);
            $json =$form->getDetail();

            $obj = json_encode($post);
            $data = [
                'form_id' => '',
                'format_id' => 'sell-other',
                'detail' => $obj
            ];

            $this->moduleDataSetupInterface->getConnection()->insert($this->moduleDataSetupInterface->getTable('exchange_form'), $data);

            $this->resultPageFactory->create();
            $resultRedirect->setUrl('/form/result');

            return $resultRedirect;

        } else {
            $typeId = (int)$this->getRequest()->getParam('type');
            $type = $this->formRuleRepository->getByFormatId($typeId);
            $this->registry->register('type', $type);

            // 2. GET request : Render the form page
            $this->_view->loadLayout();
            $this->_view->renderLayout();
        }


    }
}

