<?php namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    /**
     * table name
     */
    protected $table = "barangs";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id',
        'barcode',
        'nama',
        'departmen',
        'uom',
        'stok',
    ];
}