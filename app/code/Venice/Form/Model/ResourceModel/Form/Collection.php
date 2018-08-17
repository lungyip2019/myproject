<?php
namespace Venice\Form\Model\ResourceModel\Form;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Venice\Form\Model\Form','Venice\Form\Model\ResourceModel\Form');
    }
}
