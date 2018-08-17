<?php

namespace Venice\Form\Api;
use Venice\Form\Api\Data\FormInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface FormRepositoryInterface{

    /**
     * Save form
     * @api
     * @param \Venice\Form\Api\Data\FormInterface $Form
     * @return \Venice\Form\Api\Data\FormInterface
     */
    public function save(FormInterface $Form);

    /**
     * Get form by form id.
     * @param int $formId
     * @return \Venice\Form\Api\Data\FormInterface
     */
    public function getByFormId($formId);


    /**
     * Get form by form form rule id.
     * @param string $formatId
     * @return \Venice\Form\Api\Data\FormRuleInterface
     */
    public function getByFormatId($formatId);


    /**
     * Get form by detail.
     * @param string $detail
     * @return \Venice\Form\Api\Data\FormInterface
     */
    public function getByDetail($detail);

}

