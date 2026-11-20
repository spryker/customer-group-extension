<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupCollectionTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

/**
 * Use this plugin to provide the customer groups a customer belongs to through something other than a direct
 * assignment, for example through their company or business unit.
 */
interface CustomerGroupProviderPluginInterface
{
    /**
     * Specification:
     * - Executed by `CustomerGroupFacade::getCustomerGroupCollectionByCustomer()`.
     * - Returns only the groups this plugin provides.
     * - Returns an empty collection when it does not apply to the customer.
     *
     * @api
     */
    public function provideCustomerGroups(CustomerTransfer $customerTransfer): CustomerGroupCollectionTransfer;
}
