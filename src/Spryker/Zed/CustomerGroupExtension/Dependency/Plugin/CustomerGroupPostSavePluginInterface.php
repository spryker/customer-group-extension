<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupTransfer;

/**
 * Use this plugin when data related to a customer group must be persisted together with the customer group.
 */
interface CustomerGroupPostSavePluginInterface
{
    /**
     * Specification:
     * - Executed after a customer group is created or updated, with `idCustomerGroup` set.
     * - Executed inside the customer group save transaction: an exception rolls the whole save back.
     * - Returns the customer group transfer, expanded or unchanged.
     *
     * @api
     */
    public function postSave(CustomerGroupTransfer $customerGroupTransfer): CustomerGroupTransfer;
}
