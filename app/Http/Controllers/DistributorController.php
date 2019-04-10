<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbldistributor;

class DistributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.distributor.index');
    }

    public function add()
    {
    	return view('admin.distributor.add');
    }
    public function save(Request $r)
    {
    	$t = new tbldistributor;
    	$t->iddistributor = $r->input('iddistributor');
    	$t->namadistributor = $r->input('namadistributor');
    	$t->alamat = $r->input('alamat');
    	$t->kotaasal = $r->input('kotaasal');
    	$t->email = $r->input('email');
    	$t->telepon = $r->input('telepon');
    	
    	$t->save();
    	return redirect(url('admin/distributor/index'));
    }
    public function edit($id)
    {
    	$distributor = tbldistributor::find($id);
    	return view('admin.distributor.edit')->with('distributor',$distributor);
    }
    public function update(Request $m)
    {
    	$s = tbldistributor::find($m->input('id'));

    	$s->iddistributor = $m->input('iddistributor');
    	$s->namadistributor = $m->input('namadistributor');
    	$s->alamat = $m->input('alamat');
    	$s->kotaasal = $m->input('kotaasal');
    	$s->email = $m->input('email');
    	$s->telepon = $m->input('telepon');
        
    	$s->save();
    	return redirect(url('admin/distributor/index'));
    }
    public function delete($id)
    {
    	$distributor = tbldistributor::find($id);
    	$distributor->delete();
    	return redirect(url('admin/distributor/index'));
    }
}
