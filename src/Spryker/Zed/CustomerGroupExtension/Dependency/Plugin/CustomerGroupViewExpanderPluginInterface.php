<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupTransfer;

/**
 * Use this plugin when additional blocks must be rendered on the customer group View page of the Back Office.
 */
interface CustomerGroupViewExpanderPluginInterface
{
    /**
     * Specification:
     * - Returns the name of the block on the customer group View page.
     * - `CustomerGroupConfig::getFormTabOrder()` positions the block by its name, like the tabs of the Add and Edit pages:
     *   return the name of the matching tab to give the block the tab's position.
     * - The built-in blocks are named `CustomerGroupConfig::FORM_TAB_NAME_GENERAL` and `FORM_TAB_NAME_CUSTOMER_ASSIGNMENT`.
     * - A block replaces the block with the same name that is added before it, including a built-in block.
     *
     * @api
     */
    public function getBlockName(): string;

    /**
     * Specification:
     * - Returns the path of the template rendered as a block on the customer group View page.
     * - By default, the blocks are rendered after the built-in "General Information" and "Customers" panels, in the order of the plugin stack.
     * - Each block is rendered outside any panel: embed `@Gui/Partials/widget.twig` in the template to show the block as a panel.
     *
     * @api
     */
    public function getTemplatePath(): string;

    /**
     * Specification:
     * - Returns the variables the template of `getTemplatePath()` is rendered with.
     *
     * @api
     *
     * @return array<string, mixed>
     */
    public function getTemplateData(CustomerGroupTransfer $customerGroupTransfer): array;
}
