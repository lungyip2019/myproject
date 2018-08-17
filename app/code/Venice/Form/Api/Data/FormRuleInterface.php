<?php

namespace Venice\Form\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;


interface FormRuleInterface extends ExtensibleDataInterface
{

    const FORMAT_ID = 'format_id';
    const NAME = 'ame';
    const DETAIL = 'detail';

    public function getFormatId();

    public function setFormatId($id);

    public function getName();

    public function setName($name);

    public function getDetail();

    public function setDetail($detail);

}

