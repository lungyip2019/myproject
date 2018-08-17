<?php

namespace Venice\Form\Api;
use Venice\Form\Api\Data\FormRuleInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface FormRuleRepositoryInterface{

    /**
     * Save form
     * @api
     * @param \Venice\Form\Api\Data\FormRuleInterface $FormRule
     * @return \Venice\Form\Api\Data\FormRuleInterface
     */
    public function save(FormRuleInterface $FormRule);

    /**
     * Get form by form rule id.
     * @param int $formatId
     * @return \Venice\Form\Api\Data\FormRuleInterface
     */
    public function getByFormatId($formatId);


    /**
     * Get form by form name.
     * @param string $name
     * @return \Venice\Form\Api\Data\FormRuleInterface
     */
    public function getByName($name);

    /**
     * Get form by form detail.
     * @param string $detail
     * @return \Venice\Form\Api\Data\FormRuleInterface
     */
    public function getByDetail($detail);
}

