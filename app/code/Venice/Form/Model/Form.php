<?php
namespace Venice\Form\Model;
use Venice\Form\Api\Data\FormInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Form extends AbstractModel implements IdentityInterface,FormInterface
{

    const CACHE_TAG = 'venice_exchange_form';

    protected $_cacheTag = 'venice_exchange_form';

    protected $_eventPrefix = 'venice_exchange_form';

    protected function _construct()
    {
        $this->_init('Venice\Form\Model\ResourceModel\Form');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getFormId(){
        return $this->getData(self::FORM_ID);
    }

    public function setFormId($id){
        return $this->setData(self::FORM_ID,$id);
    }

    public function getFormatId(){
        return $this->getData(self::FORMAT_ID);
    }

    public function setFormatId($id){
        return $this->setData(self::FORMAT_ID,$id);
    }

    public function getDetail(){
        return $this->getData(self::DETAIL);
    }

    public function setDetail($detail){
        return $this->setData(self::DETAIL,$name);
    }

}
