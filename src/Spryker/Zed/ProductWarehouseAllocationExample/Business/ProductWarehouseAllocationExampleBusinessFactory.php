<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerExample\Zed\ProductWarehouseAllocationExample\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerExample\Zed\ProductWarehouseAllocationExample\Business\Allocator\SalesOrderWarehouseAllocator;
use SprykerExample\Zed\ProductWarehouseAllocationExample\Business\Allocator\SalesOrderWarehouseAllocatorInterface;

/**
 * @method \SprykerExample\Zed\ProductWarehouseAllocationExample\Persistence\ProductWarehouseAllocationExampleRepositoryInterface getRepository()
 * @method \SprykerExample\Zed\ProductWarehouseAllocationExample\ProductWarehouseAllocationExampleConfig getConfig()
 */
class ProductWarehouseAllocationExampleBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \SprykerExample\Zed\ProductWarehouseAllocationExample\Business\Allocator\SalesOrderWarehouseAllocatorInterface
     */
    public function createSalesOrderWarehouseAllocator(): SalesOrderWarehouseAllocatorInterface
    {
        return new SalesOrderWarehouseAllocator($this->getRepository());
    }
}
