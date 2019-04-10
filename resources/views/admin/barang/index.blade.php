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
              <a href="{{url('admin/barang/add')}}" class="btn btn-warning" style="float: right;"><i class="fa fa-plus"></i></a>
            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Kode Jenis</th>
                  <th>Harga Net</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
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
                  	<a href="{{url('admin/barang/edit/'.$q->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                  </td>
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