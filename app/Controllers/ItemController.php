<?php

namespace App\Controllers;

use App\Models\ItemModel;

class ItemController extends BaseController
{
    public function index()
    {
        $itemModel = new ItemModel();
        $data['items'] = $itemModel->findAll();

        return view('items', $data);
    }

    public function addItemAction()
    {
        if ($this->request->getMethod() === 'post') {
            $itemModel = new ItemModel();

            $warehouseValue = $this->request->getPost('warehouse');
            $warehouseText = '';

            // Konversi nilai dari dropdown ke teks yang sesuai
            if ($warehouseValue == '1') {
                $warehouseText = 'SPL 1';
            } elseif ($warehouseValue == '2') {
                $warehouseText = 'SPL 2';
            } elseif ($warehouseValue == '3') {
                $warehouseText = 'SPL 3';
            }
            $data = [
                'kodeItem' => $this->request->getPost('kodeItem'),
                'namaItem' => $this->request->getPost('namaItem'),
                'brand' => $this->request->getPost('brand'),
                'type' => null,
                'detail' => null,
                'warehouse' => $warehouseText,
                'lokasiItem' => $this->request->getPost('lokasiItem'),
                'tglPembelian' => $this->request->getPost('tglPembelian'),
                'kerusakan' => null,
                'peminjam' => null, // Awalnya belum dipinjam
                'keterangan' => null,
                'kondisi' => $this->request->getPost('kondisi'),
                'status' => '0', // Awalnya tersedia
            ];


            $itemModel->insert($data);
            // print_r($itemModel);
            // die();

            return redirect()->to('/dashboard/master/maset')->with('succes', 'barang telah ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Silakan isi formulir dengan benar.');
        }
    }
}
