<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\TabsViewTransfer;

/**
 * Use this plugin when additional tabs must be rendered on the customer group Add and Edit pages of the Back Office.
 */
interface CustomerGroupFormTabExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the tabs of the customer group form.
     * - Executed after the built-in tabs are added, so the added tabs are rendered after them unless `CustomerGroupConfig::getFormTabOrder()` lists another order.
     * - `CustomerGroupConfig::getFormTabOrder()` positions an added tab by its name.
     * - Give each added tab a name no other tab uses: the name identifies the tab and its pane on the page.
     * - Every tab is rendered, including one without a name or with a name another tab uses; a tab whose name `getFormTabOrder()` doesn't list is rendered after the listed tabs.
     * - The tab template is included with the context of the customer group page, which provides the form view as `customerGroupForm`.
     *
     * @api
     */
    public function expand(TabsViewTransfer $tabsViewTransfer): TabsViewTransfer;
}
