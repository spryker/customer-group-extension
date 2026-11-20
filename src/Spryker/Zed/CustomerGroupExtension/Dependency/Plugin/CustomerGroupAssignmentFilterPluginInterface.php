<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupConditionsTransfer;

/**
 * Use this plugin to add an assignment type, for example a customer or a company, to the assignment filter
 * of the Back Office customer group list.
 */
interface CustomerGroupAssignmentFilterPluginInterface
{
    /**
     * Specification:
     * - Returns the key of the assignment type, unique across the plugins of the stack, for example `customer`.
     * - The key is submitted with the filter form and selects this plugin when the list is filtered.
     *
     * @api
     */
    public function getAssignmentType(): string;

    /**
     * Specification:
     * - Returns the untranslated label of the assignment type option in the filter form.
     *
     * @api
     */
    public function getLabel(): string;

    /**
     * Specification:
     * - Returns the URL of the Back Office endpoint that suggests the entities of this type.
     * - The endpoint receives the search text as the `term` query parameter and responds with
     *   `{"results": [{"id": <entity ID>, "text": <label>}]}`.
     *
     * @api
     */
    public function getSuggestUrl(): string;

    /**
     * Specification:
     * - Returns the label of the entity with the given ID, shown as the selected value after the filter is submitted.
     * - Returns `null` when no entity has the given ID.
     *
     * @api
     */
    public function findAssignedEntityName(int $idAssignedEntity): ?string;

    /**
     * Specification:
     * - Adds the entity with the given ID to the customer group conditions.
     * - Returns the expanded conditions.
     *
     * @api
     */
    public function expandCustomerGroupConditions(
        int $idAssignedEntity,
        CustomerGroupConditionsTransfer $customerGroupConditionsTransfer
    ): CustomerGroupConditionsTransfer;
}
