<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BarangModel;

class BarangController extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        $model = new BarangModel();
        $data['barangs'] = $model->findAll();
        return view('barang/index', $data);
    }
}