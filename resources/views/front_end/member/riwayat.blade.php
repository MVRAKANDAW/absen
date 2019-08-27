@extends('front_end.layout.master')
@section('home', 'active')

@section('content')


<body class="content-section-uu">

@include('front_end.layout.navbar')

<div class="wrapper">

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        <div align="left">
        Dashboard
        <small>Admin</small>
        </div>
      </h4>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">

          <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse($data_absen as $absen)
                                <tr>
                                    <td>{{$absen->date}}</td>
                                    <td>{{$absen->time_in}}</td>
                                    <td>{{$absen->time_out}}</td>
                                    <td>{{$absen->note}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4"><b><i>TIDAK ADA DATA UNTUK DITAMPILKAN</i></b></td>
                                </tr>
                            @endforelse 
                        </tbody>
                    </table>
          
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
	
</div>


</body>


@endsection