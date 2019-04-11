@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section class="content">
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
              <?php
              $q = \App\tblpetugas::all()->first();
              ?>
            <div class="inner">
              <h3>{{$q->count()}}</h3>

              <p>Petugas</p>
            </div>
            <div class="icon" style="margin-top: 2%;">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{asset('admin/petugas/index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
              <?php
              $q = \App\tblbarang::all()->first();
              ?>
            <div class="inner">
              <h3>{{$q->count()}}</h3>

              <p>Barang</p>
            </div>
            <div class="icon" style="margin-top:2%;"> 
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{asset('admin/barang/index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
                <?php
              $q = \App\tblpenjualan::all()->first();
              ?>
            <div class="inner">
              <h3>{{$q->count()}}</h3>

              <p>Penjualan</p>
            </div>
            <div class="icon" style="margin-top: 2%;">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{asset('admin/penjualan/index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <?php
              $q = \App\tbldistributor::all()->first();
              ?>
            <div class="inner">
              <h3>{{$q->count()}}</h3>

              <p>Distributor</p>
            </div>
            <div class="icon"style="margin-top: 2%;">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{asset('admin/distributor/index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </section>
</body>
</html>

@endsection