<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbldetailbrgmasuk;

class TbldetailbrgmasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.detailbrgmasuk.index');
    }

    public function add()
    {
    	return view('admin.detailbrgmasuk.add');
    }
    public function save(Request $r)
    {
    	$t = new tbldetailbrgmasuk;
    	$t->nonota = $r->input('nonota');
    	$t->kodebarang = $r->input('kodebarang');
    	$t->jumlah = $r->input('jumlah');
    	$t->subtotal = $r->input('subtotal');
    	
    	$t->save();
    	return redirect(url('admin/detailbrgmasuk/index'));
    }
    public function edit($id)
    {
    	$detailbrgmasuk = tbldetailbrgmasuk::find($id);
    	return view('admin.detailbrgmasuk.edit')->with('detailbrgmasuk',$detailbrgmasuk);
    }
    public function update(Request $m)
    {
    	$s = tbldetailbrgmasuk::find($m->input('id'));

    	$s->nonota = $m->input('nonota');
    	$s->kodebarang = $m->input('kodebarang');
    	$s->jumlah = $m->input('jumlah');
    	$s->subtotal = $m->input('subtotal');
        
    	$s->save();
    	return redirect(url('admin/detailbrgmasuk/index'));
    }
    public function delete($id)
    {
    	$detailbrgmasuk = tbldetailbrgmasuk::find($id);
    	$detailbrgmasuk->delete();
    	return redirect(url('admin/detailbrgmasuk/index'));
    }
}
