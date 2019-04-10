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
                <form action="{{url('/admin/penjualan/save')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">nofaktur</label>
                     <input type="text" class="form-control" name="nofaktur" id="formGroupExampleInput" 
                    placeholder="nofaktur" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">tglpenjualan</label>
                     <input type="text" class="form-control" name="tglpenjualan" id="formGroupExampleInput" 
                    placeholder="tglpenjualan" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">idpetugas</label>
                     <select class="form-control" name="idpetugas">
                      <?php
                        $petugas = \App\tblpetugas::all();

                      ?>
                      @foreach($petugas as $p)
                      <option>{{$p->idpetugas}}</option>
                      @endforeach
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">bayar</label>
                     <input type="text" class="form-control" name="bayar" id="formGroupExampleInput" 
                    placeholder="bayar" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">sisa</label>
                     <input type="text" class="form-control" name="sisa" id="formGroupExampleInput" 
                    placeholder="sisa" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">total</label>
                     <input type="text" class="form-control" name="total" id="formGroupExampleInput" 
                    placeholder="total" required>
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
                  <th>nofaktur</th>
                  <th>tglpenjualan</th>
                  <th>idpetugas</th>
                  <th>bayar</th>
                  <th>sisa</th>
                  <th>total</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $penjualan = \App\tblpenjualan::all();
                    ?>
                  @foreach($penjualan as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->nofaktur}}</td>
                  <td>{{$q->tglpenjualan}}</td>
                  <td>{{$q->idpetugas}}</td>
                  <td>{{$q->bayar}}</td>
                  <td>{{$q->sisa}}</td>
                  <td>{{$q->total}}</td>
                  <td>

                  	<a href="{{url('admin/penjualan/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>

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
                <form action="{{url('/admin/penjualan/update')}}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">nofaktur</label>
                      <input type="text" class="form-control" name="nofaktur" id="formGroupExampleInput" 
                      placeholder="nofaktur" value="{{$q->nofaktur}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">tglpenjualan</label>
                      <input type="text" class="form-control" name="tglpenjualan" id="formGroupExampleInput" 
                      placeholder="tglpenjualan" value="{{$q->tglpenjualan}}" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput">idpetugas</label>
                     <select class="form-control" name="idpetugas">
                      <?php
                        $petugas = \App\tblpetugas::all();

                      ?>
                      @foreach($petugas as $p)
                      <option>{{$p->idpetugas}}</option>
                      @endforeach
                      </select> 
                  </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">bayar</label>
                      <input type="text" class="form-control" name="bayar" id="formGroupExampleInput" 
                      placeholder="bayar" value="{{$q->bayar}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">sisa</label>
                      <input type="text" class="form-control" name="sisa" id="formGroupExampleInput" 
                      placeholder="sisa" value="{{$q->sisa}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">total</label>
                      <input type="text" class="form-control" name="total" id="formGroupExampleInput" 
                      placeholder="total" value="{{$q->total}}" required>
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