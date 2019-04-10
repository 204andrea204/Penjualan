@extends('layouts.admin')
@section('content')

         <form action="{{url('/admin/barang/update')}}" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="formGroupExampleInput">kodebarang</label>
            <input type="text" class="form-control" name="kodebarang" id="formGroupExampleInput" 
            placeholder="kodebarang" value="{{$barang->kodebarang}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">namabarang</label>
            <input type="text" class="form-control" name="namabarang" id="formGroupExampleInput" 
            placeholder="namabarang" value="{{$barang->namabarang}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">kodejenis</label>
            <input type="text" class="form-control" name="kodejenis" id="formGroupExampleInput" 
            placeholder="kodejenis" value="{{$barang->kodejenis}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">harganet</label>
            <input type="text" class="form-control" name="harganet" id="formGroupExampleInput" 
            placeholder="harganet" value="{{$barang->harganet}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">hargajual</label>
            <input type="text" class="form-control" name="hargajual" id="formGroupExampleInput" 
            placeholder="hargajual" value="{{$barang->hargajual}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">stok</label>
            <input type="text" class="form-control" name="stok" id="formGroupExampleInput" 
            placeholder="stok" value="{{$barang->stok}}" required>
          </div>

          @csrf
          <input type="hidden" name="id" value="{{$barang->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update</button>
        </form>
@endsection