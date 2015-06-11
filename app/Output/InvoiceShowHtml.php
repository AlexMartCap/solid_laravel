<?php
/**
 * Created by Alex Martinez Capilla @2015.
 * User: Alex
 * Date: 11/06/15
 * Time: 16:37
 */

namespace SolidLaravel\Output;

use SolidLaravel\Output\Contracts\InvoiceShowInterface;

class InvoiceShowHtml implements InvoiceShowInterface {

    public function show($invoice)
    {
        return "<strong>" . $invoice->totalAmmount . " </strong>";
    }
}