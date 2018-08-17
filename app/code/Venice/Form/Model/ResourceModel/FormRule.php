<?php

namespace Venice\Form\Model\ResourceModel;

use Venice\Form\Api\Data\FormRuleInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Model\ResourceModel\Db\Context;

class FormRule extends AbstractDb {

    public function __construct(
        Context $context)
	{
		parent::__construct($context);
	}

    protected function _construct()
    {
        $this->_init('exchange_form_format', 'format_id');
    }

}

