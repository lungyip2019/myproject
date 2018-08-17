<?php

namespace Venice\Form\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class Result extends \Magento\Framework\App\Action\Action
{

    /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    protected $resultJsonFactory;

    protected $moduleDataSetupInterface;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        ModuleDataSetupInterface $moduleDataSetupInterface
    )
    {

        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->moduleDataSetupInterface = $moduleDataSetupInterface;
        return parent::__construct($context);
    }


    public function execute()
    {
//        $post = $this->getRequest()->getPostValue();
//
//        //
//        $obj = json_encode($post);
//        $data = [
//            'form_id' => '',
//            'form_name' => 'sell-other',
//            'detail' => $obj
//        ];
//
//        $this->moduleDataSetupInterface->getConnection()->insert($this->moduleDataSetupInterface->getTable('exchange_form'),$data);

        $result = $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();



    }
}