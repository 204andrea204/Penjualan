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
                <form action="{{url('/admin/brgmasuk/save')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">nonota</label>
                     <input type="text" class="form-control" name="nonota" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">kodebarang</label>
                     <select class="form-control" name="kodebarang">
                      <?php
                        $kodebarang = \App\tblbarang::all();

                      ?>
                      @foreach($kodebarang as $p)
                      <option>{{$p->kodebarang}}</option>
                      @endforeach
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">jumlah</label>
                     <input type="text" class="form-control" name="jumlah" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">subtotal</label>
                     <input type="text" class="form-control" name="subtotal" id="formGroupExampleInput" 
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
                  <th>nonota</th>
                  <th>kodebarang</th>
                  <th>jumlah</th>
                  <th>subtotal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $brgmasuk = \App\tblbrgmasuk::all();
                    ?>
                  @foreach($brgmasuk as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->nonota}}</td>
                  <td>{{$q->kodebarang}}</td>
                  <td>{{$q->jumlah}}</td>
                  <td>{{$q->subtotal}}</td>
                  <td>

                  	<a href="{{url('admin/brgmasuk/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>

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
                <form action="{{url('/admin/brgmasuk/update')}}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">nonota</label>
                      <input type="text" class="form-control" name="nonota" id="formGroupExampleInput" 
                      placeholder="nonota" value="{{$q->nonota}}" required>
                    </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">kodebarang</label>
                     <select class="form-control" name="kodebarang">
                      <?php
                        $kodebarang = \App\tblbarang::all();

                      ?>
                      @foreach($kodebarang as $p)
                      <option>{{$p->kodebarang}}</option>
                      @endforeach
                      </select> 
                  </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">jumlah</label>
                      <input type="text" class="form-control" name="jumlah" id="formGroupExampleInput" 
                      placeholder="jumlah" value="{{$q->jumlah}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">subtotal</label>
                      <input type="text" class="form-control" name="subtotal" id="formGroupExampleInput" 
                      placeholder="subtotal" value="{{$q->subtotal}}" required>
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