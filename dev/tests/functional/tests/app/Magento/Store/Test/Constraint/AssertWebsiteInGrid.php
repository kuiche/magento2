<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Store\Test\Constraint;

use Magento\Backend\Test\Page\Adminhtml\StoreIndex;
use Magento\Store\Test\Fixture\Website;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Class AssertWebsiteInGrid
 * Assert that created Website can be found in Stores grid
 */
class AssertWebsiteInGrid extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     * Assert that created Website can be found in Stores grid by name
     *
     * @param StoreIndex $storeIndex
     * @param Website $website
     * @return void
     */
    public function processAssert(StoreIndex $storeIndex, Website $website)
    {
        $websiteName = $website->getName();
        $storeIndex->open()->getStoreGrid()->search(['website_title' => $websiteName]);
        \PHPUnit_Framework_Assert::assertTrue(
            $storeIndex->getStoreGrid()->isWebsiteExists($website),
            'Website \'' . $websiteName . '\' is not present in grid.'
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Website is present in grid.';
    }
}
