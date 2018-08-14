<?php

namespace Solid\Invoicing;


class InvoicingService
{

    /**
     * @var InvoicingServiceDAO
     */
    private $invoicingServiceDAO;

    /**
     * InvoicingService constructor.
     *
     * @param InvoicingServiceDAO $invoicingServiceDAO
     */
    public function __construct(InvoicingServiceDAO $invoicingServiceDAO )
    {
        $this->invoicingServiceDAO = $invoicingServiceDAO;
    }

    public function getAllInvoices() {
        return $this->invoicingServiceDAO->getAllInvoices();
    }

}