<?php

namespace Solid;


class Invoicing
{
    
    public function getInvoices() {

        if ( !defined('CLIENT_2') ) {

            $invoices = Database::getInstance()
                                ->query("SELECT * FROM invoices");

        } else {

            $invoices = DatabaseMSSql::getInstance()
                ->query("SELECT * FROM invoices");

        }
        
        return $invoices;
        
    }
    
}