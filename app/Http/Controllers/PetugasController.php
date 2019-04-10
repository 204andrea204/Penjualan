<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblpetugas;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.petugas.index');
    }

    public function add()
    {
    	return view('admin.petugas.add');
    }
    public function save(Request $r)
    {
    	$t = new tblpetugas;
    	$t->idpetugas = $r->input('idpetugas');
    	$t->namapetugas = $r->input('namapetugas');
    	$t->alamat = $r->input('alamat');
    	$t->email = $r->input('email');
    	$t->telepon = $r->input('telepon');
    	
    	$t->save();
    	return redirect(url('admin/petugas/index'));
    }
    public function edit($id)
    {
    	$petugas = tblpetugas::find($id);
    	return view('admin.petugas.edit')->with('petugas',$petugas);
    }
    public function update(Request $m)
    {
    	$s = tblpetugas::find($m->input('id'));

    	$s->idpetugas = $m->input('idpetugas');
    	$s->namapetugas = $m->input('namapetugas');
    	$s->alamat = $m->input('alamat');
        $s->email = $m->input('email');
    	$s->telepon = $m->input('telepon');

    	$s->save();
    	return redirect(url('admin/petugas/index'));
    }
    public function delete($id)
    {
    	$petugas = tblpetugas::find($id);
    	$petugas->delete();
    	return redirect(url('admin/petugas/index'));
    }


}
