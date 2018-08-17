<?php

namespace Venice\Form\Block;

use \Magento\Framework\Registry;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Venice\Form\Model\FormRuleFactory;

class form extends Template
{
    protected $storeManager;
    protected $formRuleFactory;
    protected $registry;


    public function __construct(Context $context,
                                \Magento\Store\Model\StoreManagerInterface $storeManager,
                                FormRuleFactory $formRuleFactory,
                                Registry $registry
    )
    {
        $this->registry = $registry;
        $this->storeManager = $storeManager;
        $this->formRuleFactory = $formRuleFactory;
        parent::__construct($context);
    }

    public function getBaseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    public function getCurrentFormId()
    {
        return $this->registry->registry('type');
    }

    public function getFormDetail($formType){

        $formObj = $formType->getDetail();
        $formArray = json_decode($formObj);
        return $formArray;

    }



}