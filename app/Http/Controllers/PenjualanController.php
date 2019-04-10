<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblpenjualan;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.penjualan.index');
    }

    public function add()
    {
    	return view('admin.penjualan.add');
    }
    public function save(Request $r)
    {
    	$t = new tblpenjualan;
    	$t->nofaktur = $r->input('nofaktur');
    	$t->tglpenjualan = $r->input('tglpenjualan');
    	$t->idpetugas = $r->input('idpetugas');
    	$t->bayar = $r->input('bayar');
    	$t->sisa = $r->input('sisa');
    	$t->total = $r->input('total');
    	
    	$t->save();
    	return redirect(url('admin/penjualan/index'));
    }
    public function edit($id)
    {
    	$penjualan = tblpenjualan::find($id);
    	return view('admin.penjualan.edit')->with('penjualan',$penjualan);
    }
    public function update(Request $m)
    {
    	$s = tblpenjualan::find($m->input('id'));

    	$s->nofaktur = $m->input('nofaktur');
    	$s->tglpenjualan = $m->input('tglpenjualan');
    	$s->idpetugas = $m->input('idpetugas');
    	$s->bayar = $m->input('bayar');
    	$s->sisa = $m->input('sisa');
    	$s->total = $m->input('total');
        
    	$s->save();
    	return redirect(url('admin/penjualan/index'));
    }
    public function delete($id)
    {
    	$penjualan = tblpenjualan::find($id);
    	$penjualan->delete();
    	return redirect(url('admin/penjualan/index'));
    }
}
