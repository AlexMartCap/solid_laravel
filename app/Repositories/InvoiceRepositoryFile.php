<?php
/**
 * Created by Alex Martinez Capilla @2015.
 * User: Alex
 * Date: 11/06/15
 * Time: 17:03
 */

namespace SolidLaravel\Repositories;

use SolidLaravel\Invoices;
use SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface;

/**
 * Class InvoiceRepositoryDB
 * @package SolidLaravel\Repositories
 */
class InvoiceRepositoryDB implements InvoiceRepositoryInterface {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquent object
     */
    public function get($id) {
        //TODO: get Invoice from file!
    }

}