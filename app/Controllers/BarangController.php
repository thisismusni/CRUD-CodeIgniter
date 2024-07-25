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

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $model = new BarangModel();
        $data = [
            'barcode' => $this->request->getPost('barcode'),
            'nama' => $this->request->getPost('nama'),
            'departmen' => $this->request->getPost('departmen'),
            'uom' => $this->request->getPost('uom'),
            'stok' => $this->request->getPost('stok'),
        ];
        $model->save($data);
        return redirect()->to('/barang');
    }
}