@extends('layouts.admin')
@section('content')

         <form action="{{url('/admin/barang/save')}}" method="POST" enctype="multipart/form-data">


          <div class="form-group">
            <label for="formGroupExampleInput">kodebarang</label>
             <input type="text" class="form-control" name="kodebarang" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">namabarang</label>
             <input type="text" class="form-control" name="namabarang" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">kodejenis</label>
             <input type="text" class="form-control" name="kodejenis" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">harganet</label>
             <input type="text" class="form-control" name="harganet" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">hargajual</label>
             <input type="text" class="form-control" name="hargajual" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">stok</label>
             <input type="text" class="form-control" name="stok" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>

          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>

@endsection