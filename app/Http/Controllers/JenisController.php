<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbljenis;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.jenis.index');
    }

    public function add()
    {
    	return view('admin.jenis.add');
    }
    public function save(Request $r)
    {
    	$t = new tbljenis;
    	$t->kodejenis = $r->input('kodejenis');
    	$t->jenis = $r->input('jenis');
    	
    	$t->save();
    	return redirect(url('admin/jenis/index'));
    }
    public function edit($id)
    {
    	$jenis = tbljenis::find($id);
    	return view('admin.jenis.edit')->with('jenis',$jenis);
    }
    public function update(Request $m)
    {
    	$s = tbljenis::find($m->input('id'));

    	$s->kodejenis = $m->input('kodejenis');
    	$s->jenis = $m->input('jenis');
        
    	$s->save();
    	return redirect(url('admin/jenis/index'));
    }
    public function delete($id)
    {
    	$jenis = tbljenis::find($id);
    	$jenis->delete();
    	return redirect(url('admin/jenis/index'));
    }
}
