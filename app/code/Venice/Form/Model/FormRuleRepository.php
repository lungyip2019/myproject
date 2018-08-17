<?php

namespace Venice\Form\Model;

use Magento\Store\Model\StoreManagerInterface;
use Venice\Form\Api\FormRuleRepositoryInterface;
use Venice\Form\Api\Data\FormRuleInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class FormRuleRepository implements FormRuleRepositoryInterface {

    protected $formRuleFactory;
    protected $storeManager;

    public function __construct(
        FormRuleFactory $formRuleFactory,
        StoreManagerInterface $storeManager){

        $this->formRuleFactory = $formRuleFactory;
        $this->storeManager = $storeManager;
    }
    

    /**
     * @param FormRuleInterface $FormFormat
     * @return FormRuleInterface|null
     */
    public function save(FormRuleInterface $FormFormat){

        try {
            $FormFormat->save();
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the exchange_form: %1',
                $exception->getMessage()
            ));
        }
        return $FormFormat;
    }

    
    /**
     * @param int $specId
     * @return FormRuleInterface|null
     */
    public function getByFormatId($specId){
        $formRule = $this->formRuleFactory->create();
        $data = $formRule->load($specId);
        if(!$data->getId()){            
            NoSuchEntityException::singleField('format_id',$specId);
        }
        return $data;
    }

    /**
     * @param string $name
     * @return FormRuleInterface|null
     */
    public function getByName($name)
    {
        $formRule = $this->formRuleFactory->create();
        $data = $formRule->load($name, 'name');
        if(!$data->getId()){
            NoSuchEntityException::singleField('name',$name);
        }
        return $data;
    }

    /**
     * @param string $detail
     * @return FormRuleInterface|null
     */
    public function getByDetail($detail)
    {
        $formRule = $this->formRuleFactory->create();
        $data = $formRule->load($detail);
        if(!$data->getId()){
            NoSuchEntityException::singleField('detail',$detail);
        }
        return $data;
    }


}
