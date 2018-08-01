<?php
namespace Venice\Checkout\Model\Plugin;

use Magento\Checkout\Block\Checkout\AttributeMerger;

// Todo add the placehoder to the checkout

class ShippingPlaceHolder
{
    public function afterMerge(AttributeMerger $subject, $result)
    {
        if (array_key_exists('street', $result)) {
            $result['street']['children'][0]['label'] = __('Street Address*');
            $result['street']['children'][1]['label'] = __('Street Address 2');
        }

        if (array_key_exists('firstname', $result)) {
            $result['firstname']['label'] = __('First Name*');
        }

        if (array_key_exists('lastname', $result)) {
            $result['lastname']['label'] = __('Last Name*');
        }

        if (array_key_exists('telephone', $result)) {
            $result['telephone']['label'] = __('Phone Number*');
        }

        if (array_key_exists('city', $result)) {
            $result['city']['label'] = __('City*');
        }

        if (array_key_exists('region_id', $result)) {
            $result['region_id']['label'] = __('State/Province*');
        }

        if (array_key_exists('postcode', $result)) {
            $result['postcode']['label'] = __('Zip/Postal Code*');
        }

        return $result;
    }
}