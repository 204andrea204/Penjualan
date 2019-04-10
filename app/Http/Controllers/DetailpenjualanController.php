<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbldetailpenjualan;

class DetailpenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.detailpenjualan.index');
    }

    public function add()
    {
    	return view('admin.detailpenjualan.add');
    }
    public function save(Request $r)
    {
    	$t = new tbldetailpenjualan;
    	$t->nofaktur = $r->input('nofaktur');
    	$t->kodebarang = $r->input('kodebarang');
    	$t->jumlah = $r->input('jumlah');
    	$t->subtotal = $r->input('subtotal');
    	
    	$t->save();
    	return redirect(url('admin/detailpenjualan/index'));
    }
    public function edit($id)
    {
    	$detailpenjualan = tbldetailpenjualan::find($id);
    	return view('admin.detailpenjualan.edit')->with('detailpenjualan',$detailpenjualan);
    }
    public function update(Request $m)
    {
    	$s = tbldetailpenjualan::find($m->input('id'));

    	$s->nofaktur = $m->input('nofaktur');
    	$s->kodebarang = $m->input('kodebarang');
    	$s->jumlah = $m->input('jumlah');
    	$s->subtotal = $m->input('subtotal');
        
    	$s->save();
    	return redirect(url('admin/detailpenjualan/index'));
    }
    public function delete($id)
    {
    	$detailpenjualan = tbldetailpenjualan::find($id);
    	$detailpenjualan->delete();
    	return redirect(url('admin/detailpenjualan/index'));
    }
}
