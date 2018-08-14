<?php

use Solid\Invoicing\InvoicingService;
use Solid\Invoicing\InvoicingServiceDAO;

class InvoicingServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var InvoicingServiceDAO|PHPUnit_Framework_MockObject_MockObject
     */
    private $invoicingDAOMock;

    /**
     * @var InvoicingService
     */
    private $sut;

    public function setUp()
    {

        $this->invoicingDAOMock = $this->getMockBuilder(InvoicingServiceDAO::class)
                        ->getMock();


        $this->sut = new InvoicingService( $this->invoicingDAOMock );
    }

    public function testGetAllInvoices()
    {

        $this->invoicingDAOMock
            ->expects($this->once())
            ->method('getAllInvoices');

        $invoicesList = $this->sut->getAllInvoices();

    }
}
