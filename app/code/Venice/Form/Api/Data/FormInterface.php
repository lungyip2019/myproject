<?php

namespace Venice\Form\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;


interface FormInterface extends ExtensibleDataInterface
{

    const FORM_ID = 'form_id';
    const FORMAT_ID = 'format_id';
    const DETAIL = 'detail';

    public function getFormId();

    public function setFormId($id);

    public function getFormatId();

    public function setFormatId($formatId);

    public function getDetail();

    public function setDetail($detail);

}
