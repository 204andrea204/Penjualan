@extends('layouts.admin')
@section('content')

         <form action="{{url('/admin/petugas/save')}}" method="POST" enctype="multipart/form-data">


          <div class="form-group">
            <label for="formGroupExampleInput">idpetugas</label>
             <input type="text" class="form-control" name="idpetugas" id="formGroupExampleInput" 
            placeholder="idpetugas" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">namapetugas</label>
             <input type="text" class="form-control" name="namapetugas" id="formGroupExampleInput" 
            placeholder="namapetugas" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">alamat</label>
             <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
            placeholder="alamat" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">email</label>
             <input type="text" class="form-control" name="email" id="formGroupExampleInput" 
            placeholder="email" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">telepon</label>
             <input type="text" class="form-control" name="telepon" id="formGroupExampleInput" 
            placeholder="telepon" required>
          </div>
          @csrf
          <button class="btn btn-success float-right" type="submit">Tambah Data</button>
        </form>

@endsection