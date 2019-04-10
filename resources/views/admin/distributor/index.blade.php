@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<section class="content">
	<div class="box">
		<div class="box-body">
          <div class="box-body">
          	<div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
              <div class="modal fade" id="modal-default">
          
          <!-- MODAL TAMBAH/ADD -->
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form action="{{url('/admin/distributor/save')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">iddistributor</label>
                     <input type="text" class="form-control" name="iddistributor" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">namadistributor</label>
                     <input type="text" class="form-control" name="namadistributor" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">alamat</label>
                     <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">kotaasal</label>
                     <input type="text" class="form-control" name="kotaasal" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">email</label>
                     <input type="text" class="form-control" name="email" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">telepon</label>
                     <input type="text" class="form-control" name="telepon" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>

          @csrf

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
        </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

              <a class="btn btn-warning" data-toggle="modal" data-target="#modal-default" href="#modal-default" style="float: right;"><i class="fa fa-plus"></i></a>

            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>iddistributor</th>
                  <th>namadistributor</th>
                  <th>alamat</th>
                  <th>kotaasal</th>
                  <th>email</th>
                  <th>telepon</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $distributor = \App\tbldistributor::all();
                    ?>
                  @foreach($distributor as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->iddistributor}}</td>
                  <td>{{$q->namadistributor}}</td>
                  <td>{{$q->alamat}}</td>
                  <td>{{$q->kotaasal}}</td>
                  <td>{{$q->email}}</td>
                  <td>{{$q->telepon}}</td>
                  <td>

                  	<a href="{{url('admin/distributor/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>

                  	<a  data-toggle="modal" data-target="#modal-edit{{$q->id}}" href="#modal-edit{{$q->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                  </td>

                 


      <!-- MODAL EDIT -->
        <div class="modal fade" id="modal-edit{{$q->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form action="{{url('/admin/distributor/update')}}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">iddistributor</label>
                      <input type="text" class="form-control" name="iddistributor" id="formGroupExampleInput" 
                      placeholder="iddistributor" value="{{$q->iddistributor}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">namadistributor</label>
                      <input type="text" class="form-control" name="namadistributor" id="formGroupExampleInput" 
                      placeholder="namadistributor" value="{{$q->namadistributor}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">alamat</label>
                      <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
                      placeholder="alamat" value="{{$q->alamat}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">kotaasal</label>
                      <input type="text" class="form-control" name="kotaasal" id="formGroupExampleInput" 
                      placeholder="kotaasal" value="{{$q->kotaasal}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">email</label>
                      <input type="text" class="form-control" name="email" id="formGroupExampleInput" 
                      placeholder="email" value="{{$q->email}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">telepon</label>
                      <input type="text" class="form-control" name="telepon" id="formGroupExampleInput" 
                      placeholder="telepon" value="{{$q->telepon}}" required>
                    </div>

                    @csrf
                    <input type="hidden" name="id" value="{{$q->id}}">
              </div>
              <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
                  </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                </tr>
                @endforeach
                </tbody>
          
              </table>
            </div>
    	</div>
    </div>
 </section>

</body>
</html>

@endsection