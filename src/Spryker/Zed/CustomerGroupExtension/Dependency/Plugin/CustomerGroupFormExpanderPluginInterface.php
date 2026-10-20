<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerGroupExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerGroupTransfer;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Use this plugin when additional fields must be added to the customer group form of the Back Office.
 */
interface CustomerGroupFormExpanderPluginInterface
{
    /**
     * Specification:
     * - Adds form parts to the customer group form builder.
     * - Receives the customer group the form is built for, its `idCustomerGroup` is null on the Add page.
     * - Submitted values are mapped onto `CustomerGroupTransfer`, which is passed to the customer group save.
     *
     * @api
     *
     * @param \Symfony\Component\Form\FormBuilderInterface<string, \Symfony\Component\Form\FormBuilderInterface> $builder
     *
     * @return \Symfony\Component\Form\FormBuilderInterface<string, \Symfony\Component\Form\FormBuilderInterface>
     */
    public function expand(FormBuilderInterface $builder, CustomerGroupTransfer $customerGroupTransfer): FormBuilderInterface;
}
