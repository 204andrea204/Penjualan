<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblbarang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.barang.index');
    }

    public function add()
    {
    	return view('admin.barang.add');
    }
    public function save(Request $r)
    {
    	$t = new tblbarang;
    	$t->kodebarang = $r->input('kodebarang');
    	$t->namabarang = $r->input('namabarang');
    	$t->kodejenis = $r->input('kodejenis');
    	$t->harganet = $r->input('harganet');
    	$t->hargajual = $r->input('hargajual');
    	$t->stok = $r->input('stok');
    	
    	$t->save();
    	return redirect(url('admin/barang/index'));
    }
    public function edit($id)
    {
    	$barang = tblbarang::find($id);
    	return view('admin.barang.edit')->with('barang',$barang);
    }
    public function update(Request $m)
    {
    	$s = tblbarang::find($m->input('id'));

    	$s->kodebarang = $m->input('kodebarang');
    	$s->namabarang = $m->input('namabarang');
    	$s->kodejenis = $m->input('kodejenis');
    	$s->harganet = $m->input('harganet');
    	$s->hargajual = $m->input('hargajual');
    	$s->stok = $m->input('stok');
        
    	$s->save();
    	return redirect(url('admin/barang/index'));
    }
    public function delete($id)
    {
    	$barang = tblbarang::find($id);
    	$barang->delete();
    	return redirect(url('admin/barang/index'));
    }
}
