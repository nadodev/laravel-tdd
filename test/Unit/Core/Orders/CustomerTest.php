<?php

namespace Test\Unit\Core\Orders;
use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testeAttributes()
    {
        $customer = new Customer(
            name : 'John Doe',
        );

        $this->assertEquals(
            expected: 'John Doe',
            actual: $customer->getName()
        );

        $customer->changeName(
            name: 'Leonardo'
        );

        $this->assertEquals(
            expected: 'Leonardo',
            actual: $customer->getName()
        );
    }
}