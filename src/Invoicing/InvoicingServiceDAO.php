<?php

namespace Solid\Invoicing;


use Solid\Database\DatabaseInterface;

class InvoicingServiceDAO
{

    /**
     * @var DatabaseInterface
     */
    private $database;


    /**
     * InvoicingServiceDAO constructor.
     *
     * @param DatabaseInterface $database
     */
    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    /**
     * @return mixed
     */
    public function getAllInvoices()
    {
        return $this->database->query("SELECT * FROM invoices LIMIT 3");
    }

}