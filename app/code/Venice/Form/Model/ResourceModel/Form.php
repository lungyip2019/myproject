<?php

namespace Venice\Form\Model\ResourceModel;

use Venice\Form\Api\Data\FormInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Form extends AbstractDb {

    public function __construct(
        Context $context)
	{
		parent::__construct($context);
	}

    protected function _construct()
    {
        $this->_init('exchange_form', 'form_id');
    }

}

