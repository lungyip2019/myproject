<?php
namespace Venice\Form\Model\ResourceModel\FormRule;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Venice\Form\Model\FormRule','Venice\Form\Model\ResourceModel\FormRule');
    }
}

?>