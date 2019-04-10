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
                <form action="{{url('/admin/barang/save')}}" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">kodebarang</label>
                     <input type="text" class="form-control" name="kodebarang" id="formGroupExampleInput" 
                    placeholder="kodebarang" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">namabarang</label>
                     <input type="text" class="form-control" name="namabarang" id="formGroupExampleInput" 
                    placeholder="namabarang" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">kodejenis</label>
                     <select class="form-control" name="kodejenis">
                      <?php
                        $kodejenis = \App\tbljenis::all();

                      ?>
                      @foreach($kodejenis as $p)
                      <option>{{$p->kodejenis}}</option>
                      @endforeach
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">harganet</label>
                     <input type="text" class="form-control" name="harganet" id="formGroupExampleInput" 
                    placeholder="harganet" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">hargajual</label>
                     <input type="text" class="form-control" name="hargajual" id="formGroupExampleInput" 
                    placeholder="hargajual" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">stok</label>
                     <input type="text" class="form-control" name="stok" id="formGroupExampleInput" 
                    placeholder="stok" required>
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
                  <th>kodebarang</th>
                  <th>namabarang</th>
                  <th>kodejenis</th>
                  <th>harganet</th>
                  <th>hargajual</th>
                  <th>stok</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $barang = \App\tblbarang::all();
                    ?>
                  @foreach($barang as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->kodebarang}}</td>
                  <td>{{$q->namabarang}}</td>
                  <td>{{$q->kodejenis}}</td>
                  <td>{{$q->harganet}}</td>
                  <td>{{$q->hargajual}}</td>
                  <td>{{$q->stok}}</td>
                  <td>

                    <a href="{{url('admin/barang/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>

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
                <form action="{{url('/admin/barang/update')}}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">kodebarang</label>
                      <input type="text" class="form-control" name="kodebarang" id="formGroupExampleInput" 
                      placeholder="kodebarang" value="{{$q->kodebarang}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">namabarang</label>
                      <input type="text" class="form-control" name="namabarang" id="formGroupExampleInput" 
                      placeholder="namabarang" value="{{$q->namabarang}}" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput">kodejenis</label>
                     <select class="form-control" name="kodejenis">
                      <?php
                        $kodejenis = \App\tbljenis::all();

                      ?>
                      @foreach($kodejenis as $p)
                      <option>{{$p->kodejenis}}</option>
                      @endforeach
                      </select> 
                  </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">harganet</label>
                      <input type="text" class="form-control" name="harganet" id="formGroupExampleInput" 
                      placeholder="harganet" value="{{$q->harganet}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">hargajual</label>
                      <input type="text" class="form-control" name="hargajual" id="formGroupExampleInput" 
                      placeholder="hargajual" value="{{$q->hargajual}}" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">stok</label>
                      <input type="text" class="form-control" name="stok" id="formGroupExampleInput" 
                      placeholder="stok" value="{{$q->stok}}" required>
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