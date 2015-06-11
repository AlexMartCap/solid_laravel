<?php
/**
 * Created by Alex Martinez Capilla @2015.
 * User: Alex
 * Date: 11/06/15
 * Time: 17:02
 */

namespace SolidLaravel\Repositories\Contracts;

/**
 * Interface InvoiceRepository
 * @package SolidLaravel\Repositories\Contracts
 */
interface InvoiceRepositoryInterface {

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

}