<?php
namespace Venice\Form\Model;
use Venice\Form\Api\Data\FormRuleInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class FormRule extends AbstractModel implements IdentityInterface,FormRuleInterface
{
    
    const CACHE_TAG = 'venice_exchange_formRule';

    protected $_cacheTag = 'venice_exchange_formRule';

    protected $_eventPrefix = 'venice_exchange_formRule';

    protected function _construct()
    {
        $this->_init('Venice\Form\Model\ResourceModel\FormRule');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    
    public function getFormatId(){
        return $this->getData(self::FORMAT_ID);
    }

    public function setFormatId($id){
        return $this->setData(self::FORMAT_ID,$id);
    }

    public function getName(){
        return $this->getData(self::NAME);
    }

    public function setName($name){
        return $this->setData(self::NAME,$name);
    }

    public function getDetail(){
        return $this->getData(self::DETAIL);
    }

    public function setDetail($detail){
        return $this->setData(self::DETAIL,$detail);
    }

}
