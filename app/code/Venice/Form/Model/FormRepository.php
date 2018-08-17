<?php

namespace Venice\Form\Model;

use Magento\Store\Model\StoreManagerInterface;
use Venice\Form\Api\FormRepositoryInterface;
use Venice\Form\Api\Data\FormInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class FormRepository implements FormRepositoryInterface {

    protected $formFactory;
    protected $storeManager;

    public function __construct(
        FormFactory $formFactory,
        StoreManagerInterface $storeManager){

        $this->formFactory = $formFactory;
        $this->storeManager = $storeManager;
    }
    

    /**
     * @param FormInterface $form
     * @return FormInterface|null
     */
    public function save(FormInterface $form){

        try {
            $form->save();
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the exchnage_form: %1',
                $exception->getMessage()
            ));
        }
        return $form;
    }

    
    /**
     * @param int $formId
     * @return FormInterface|null
     */
    public function getByFormId($formId){
        $form = $this->formFactory->create();
        $data = $form->load($formId);
        if(!$data->getId()){
            NoSuchEntityException::singleField('form_id',$formId);
        }
        return $data;
    }

    /**
     * @param int $formatId
     * @return FormInterface|null
     */
    public function getByFormatId($formatId){
        $form = $this->formFactory->create();
        $data = $form->load($formatId);
        if(!$data->getId()){
            NoSuchEntityException::singleField('format_id',$formatId);
        }
        return $data;
    }

    /**
     * @param string $detail
     * @return FormInterface|null
     */
    public function getByDetail($detail)
    {
        $form = $this->formFactory->create();
        $data = $form->load($detail, 'detail');
        if(!$data->getId()){
            NoSuchEntityException::singleField('detail',$detail);
        }
        return $data;
    }

 }
