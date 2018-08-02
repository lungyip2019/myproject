<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Venice\Customer\Block\Account;

/**
 * Class for sortable links.
 */
class SortLink extends CurrentDashboard implements \Magento\Customer\Block\Account\SortLinkInterface
{
    /**
     * {@inheritdoc}
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}
