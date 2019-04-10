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
        $t->tglmasuk = $r->input('tglmasuk');
        $t->iddistributor = $r->input('iddistributor');
        $t->idpetugas = $r->input('idpetugas');
        $t->total = $r->input('total');
        
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
        $s->tglmasuk = $m->input('tglmasuk');
        $s->iddistributor = $m->input('iddistributor');
        $s->idpetugas = $m->input('idpetugas');
        $s->total = $m->input('total');
        
        $s->save();
        return redirect(url('admin/brgmasuk/index'));
    }
    public function delete($id)
    {
        $brgmasuk = tblbrgmasuk::find($id);
        $brgmasuk->delete();
        return redirect(url('admin/brgmasuk/index'));
    }
}
