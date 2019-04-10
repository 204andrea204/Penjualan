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
              <a href="{{url('admin/petugas/add')}}" class="btn btn-warning" style="float: right;"><i class="fa fa-plus"></i></a>
            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>idpetugas</th>
                  <th>namapetugas</th>
                  <th>alamat</th>
                  <th>email</th>
                  <th>telepon</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i= 1;
                    $petugas = \App\tblpetugas::all();
                    ?>
                  @foreach($petugas as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>


                  <td>{{$q->idpetugas}}</td>
                  <td>{{$q->namapetugas}}</td>
                  <td>{{$q->alamat}}</td>
                  <td>{{$q->email}}</td>
                  <td>{{$q->telepon}}</td>
                  <td>
                  	<a href="{{url('admin/petugas/delete/'.$q->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapusnya ?');"><i class="fa fa-trash"></i></a>
                  	<a href="{{url('admin/petugas/edit/'.$q->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

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