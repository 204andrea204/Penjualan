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
                  <input type="hidden" name="id" value="">
                  <div class="form-group">
                    <label for="formGroupExampleInput">nonota</label>
                     <input type="text" class="form-control" name="nonota" id="formGroupExampleInput" 
                    placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">tglmasuk</label>
                     <input type="date" class="form-control" name="tglmasuk" id="formGroupExampleInput" 
                    placeholder="tglmasuk" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">iddistributor</label>
                     <select class="form-control" name="iddistributor">
                      <?php
                        $iddistributor = \App\tbldistributor::all();

                      ?>
                      @foreach($iddistributor as $p)
                      <option>{{$p->iddistributor}}</option>
                      @endforeach
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">idpetugas</label>
                     <select class="form-control" name="idpetugas">
                      <?php
                        $idpetugas = \App\tblpetugas::all();

                      ?>
                      @foreach($idpetugas as $p)
                      <option>{{$p->idpetugas}}</option>
                      @endforeach
                      </select> 
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
                  <th>nonota</th>
                  <th>tglmasuk</th>
                  <th>iddistributor</th>
                  <th>idpetugas</th>
                  <th>total</th>
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
                  <td>{{$q->tglmasuk}}</td>
                  <td>{{$q->iddistributor}}</td>
                  <td>{{$q->idpetugas}}</td>
                  <td>{{$q->total}}</td>
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
                      <label for="formGroupExampleInput">tglmasuk</label>
                      <input type="date" class="form-control" name="tglmasuk" id="formGroupExampleInput" 
                      placeholder="tglmasuk" value="{{$q->tglmasuk}}" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput">iddistributor</label>
                     <select class="form-control" name="iddistributor">
                      <?php
                        $iddistributor = \App\tbldistributor::all();

                      ?>
                      @foreach($iddistributor as $p)
                      <option>{{$p->iddistributor}}</option>
                      @endforeach
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">idpetugas</label>
                     <select class="form-control" name="idpetugas">
                      <?php
                        $idpetugas = \App\tblpetugas::all();

                      ?>
                      @foreach($idpetugas as $p)
                      <option>{{$p->idpetugas}}</option>
                      @endforeach
                      </select> 
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