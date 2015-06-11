<?php
/**
 * Created by Alex Martinez Capilla @2015.
 * User: Alex
 * Date: 11/06/15
 * Time: 16:09
 */

namespace SolidLaravel\Repositories;

use SolidLaravel\Invoices;

class InvoiceRepository {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquent object
     */
    public function get($id) {
        return Invoices::find($id);
    }

}
