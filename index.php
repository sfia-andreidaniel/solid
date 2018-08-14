<?php

use Solid\DI\DI;
use Solid\Invoicing\InvoicingService;

require_once __DIR__ . '/vendor/autoload.php';

//    define('CLIENT_2', true);
//
//    $invoicing = new \Solid\Invoicing();
//
//    print_r($invoicing->getInvoices());

/** @var InvoicingService $invoicingService */
$invoicingService = DI::get(InvoicingService::class);

$invoiceList = $invoicingService->getAllInvoices();

print_r($invoiceList);