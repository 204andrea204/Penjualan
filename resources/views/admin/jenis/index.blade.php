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
                <form action="{{url('/admin/jenis/save')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">kodejenis</label>
                     <input type="text" class="form-control" name="kodejenis" id="formGroupExampleInput" 
                    placeholder="kodejenis" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">jenis</label>
                     <input type="text" class="form-control" name="jenis" id="formGroupExampleInput" 
                    placeholder="jenis" required>
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
                  <th>kodejenis</th>
                  <th>jenis</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $jenis = \App\tbljenis::all();
                    ?>
                  @foreach($jenis as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->kodejenis}}</td>
                  <td>{{$q->jenis}}</td>
                  <td>

                  	<a href="{{url('admin/jenis/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>

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
                <form action="{{url('/admin/jenis/update')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                      <label for="formGroupExampleInput">kodejenis</label>
                      <input type="text" class="form-control" name="kodejenis" id="formGroupExampleInput" 
                      placeholder="kodejenis" value="{{$q->kodejenis}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">jenis</label>
                      <input type="text" class="form-control" name="jenis" id="formGroupExampleInput" 
                      placeholder="jenis" value="{{$q->jenis}}" required>
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