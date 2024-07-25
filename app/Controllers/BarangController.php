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

    public function edit($id = null)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);
        return view('barang/edit', $data);
    }

    public function update()
    {
        $model = new BarangModel();
        $id = $this->request->getPost('id');
        $data = [
            'barcode' => $this->request->getPost('barcode'),
            'nama' => $this->request->getPost('nama'),
            'departmen' => $this->request->getPost('departmen'),
            'uom' => $this->request->getPost('uom'),
            'stok' => $this->request->getPost('stok'),
        ];
        $model->update($id, $data);
        return redirect()->to('/barang');
    }

    public function delete($id = null)
    {
        $model = new BarangModel();
        $model->delete($id);
        return redirect()->to('/barang');
    }
}