<?php
/**
 * Created by Alex Martinez Capilla @2015.
 * User: Alex
 * Date: 11/06/15
 * Time: 16:11
 */

namespace SolidLaravel\Output;

class InvoiceShow {

    public function show($invoice)
    {
        return "<strong>" . $invoice->totalAmmount . " </strong>";
    }

}