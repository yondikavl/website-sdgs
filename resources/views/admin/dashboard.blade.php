@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$tujuans}}</h3>
        <p>Data Tujuan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$indikators}}</h3>
        <p>Data Indikator</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$users}}</h3>
        <p>User</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{$pencapaianCount}}</h3>
        <p>Pencapaian</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>

<div class="row">
  @if(in_array(auth()->user()->roles_id, [1, 2]))
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Notifikasi Pencapaian</h3>
        <div class="card-tools">
          <form action="{{ route('super.pencapaian.markAllRead') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">
                Tandai Semua sebagai Dibaca ({{$unreadPencapaianCount}})
            </button>
          </form>
        </div>
      </div>
      <div class="card-body">
        @if($unreadPencapaianCount > 0)
          <p>Anda memiliki {{$unreadPencapaianCount}} pencapaian yang belum dibaca.</p>
        @else
          <p>Semua pencapaian telah dibaca.</p>
        @endif
      </div>
    </div>
  </div>
  @endif
</div>
@endsection
