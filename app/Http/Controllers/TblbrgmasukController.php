<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblbrgmasuk;

class TblbrgmasukController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.brgmasuk.index');
    }

    public function add()
    {
    	return view('admin.brgmasuk.add');
    }
    public function save(Request $r)
    {
    	$t = new tblbrgmasuk;
    	$t->nonota = $r->input('nonota');
    	$t->kodebarang = $r->input('kodebarang');
    	$t->jumlah = $r->input('jumlah');
    	$t->subtotal = $r->input('subtotal');
    	
    	$t->save();
    	return redirect(url('admin/brgmasuk/index'));
    }
    public function edit($id)
    {
    	$brgmasuk = tblbrgmasuk::find($id);
    	return view('admin.brgmasuk.edit')->with('brgmasuk',$brgmasuk);
    }
    public function update(Request $m)
    {
    	$s = tblbrgmasuk::find($m->input('id'));

    	$s->nonota = $m->input('nonota');
    	$s->kodebarang = $m->input('kodebarang');
    	$s->jumlah = $m->input('jumlah');
    	$s->subtotal = $m->input('subtotal');
        
    	$s->save();
    	return redirect(url('admin/brgmasuk/index'));
    }
    public function delete($id)
    {
    	$brgmasuk = TblbrgmasukController::find($id);
    	$brgmasuk->delete();
    	return redirect(url('admin/brgmasuk/index'));
    }
}
