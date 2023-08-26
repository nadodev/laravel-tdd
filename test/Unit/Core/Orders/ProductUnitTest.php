<?php 

namespace Test\Unit\Core\Orders;

use PHPUnit\Framework\TestCase;

use Core\Orders\Product;

class ProductUnitTest extends TestCase
{
    public function testCalc()
    {
        $product = new Product(
            name: 'Product 1',
            price: 19.90
        );

        $this->assertEquals(
            expected: 19.90,
            actual: $product->getPrice()
        );

        $product->changePrice(
            price: 25.90
        );

        $this->assertEquals(
            expected: 25.90,
            actual: $product->getPrice()
        );

        $product->getTotal(
            name: 'Product 1',
            price: 25.90,
            quantity: 2
        );

        $this->assertEquals(
            expected: 51.80,
            actual: $product->getTotal(
                name: 'Product 1',
                price: 25.90,
                quantity: 2
            )
        );

        $product->setTaxation(
            taxation: 0.10
        );

        $this->assertEquals(
            expected: 0.10,
            actual: $product->getTaxation()
        );

        $product->getTotalTaxation(
            name: 'Product 1',
            price: 25.90,
            quantity: 2,
            taxation: 0.10
        );

        $this->assertEquals(
            expected: 5.18,
            actual: $product->getTotalTaxation(
                name: 'Product 1',
                price: 25.90,
                quantity: 2,
                taxation: 0.10
            )
        );

        $this->assertEquals(
            expected: 56.98,
            actual: $product->getTotal(
                name: 'Product 1',
                price: 25.90,
                quantity: 2
            ) + $product->getTotalTaxation(
                name: 'Product 1',
                price: 25.90,
                quantity: 2,
                taxation: 0.10
            )
        );

        $this->assertEquals(
            expected: 48.00,
            actual: $product->getTotalTaxation(
                name: 'Product 1',
                price: 120,
                quantity: 2,
                taxation: 0.20
            )
        );
    }

   
}