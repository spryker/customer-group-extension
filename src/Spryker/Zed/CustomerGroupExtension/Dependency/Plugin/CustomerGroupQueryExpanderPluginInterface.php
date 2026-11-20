<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupCriteriaTransfer;
use Generated\Shared\Transfer\QueryJoinCollectionTransfer;

/**
 * Use this plugin to narrow customer group reads by a condition the CustomerGroup module does not know, for example
 * the companies the groups are assigned to.
 */
interface CustomerGroupQueryExpanderPluginInterface
{
    /**
     * Specification:
     * - Executed by `CustomerGroupFacade::getCustomerGroupCollection()` and `CustomerGroupQueryContainer::queryCustomerGroupByCriteria()`.
     * - Adds to the collection the joins that narrow a query on `spy_customer_group` by the
     *   `CustomerGroupCriteria.customerGroupConditions` this plugin handles.
     * - Returns the collection unchanged when the criteria does not set the conditions this plugin handles.
     * - Returns the expanded collection.
     *
     * @api
     */
    public function expand(
        CustomerGroupCriteriaTransfer $customerGroupCriteriaTransfer,
        QueryJoinCollectionTransfer $queryJoinCollectionTransfer
    ): QueryJoinCollectionTransfer;
}
