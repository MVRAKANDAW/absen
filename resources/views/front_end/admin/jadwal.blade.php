@extends('front_end.layout.admin')
@section('home', 'active')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jadwal PKL
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#jadwalModal"><i class="fa fa-plus mr-1"> Tambah Data</i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr align="center">
                          <th>Nama Sekolah</th>
                          <th>Alamat Sekolah</th>
                          <th>Jurusan</th>
                          <th>Mulai PKL</th>
                          <th>Selesai PKL</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td align="center">
                              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editjadwalModal">
                                  <i class="fa fa-edit mr-1"></i> Edit Data</button>
                              <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                                  <i class="fa fa-remove mr-1"></i> Delete</button>
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>  
        </div>
        <!-- ./col -->

      <!-- Modals -->
      @include('front_end.modals.jadwal.deleteJadwal')
      @include('front_end.modals.jadwal.editJadwal')
      <!-- End Modals -->
      
      </div>
      <!-- /.row -->

      <!-- modals -->
      @include('front_end.modals.jadwal.addJadwal')
      <!-- end Modals -->

    </section>
    <!-- /.content -->
  </div>

@endsection

<!-- jQuery 3 -->
<script src="{{ url('lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('lte/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="{{ url('lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ url('lte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('lte/dist/js/demo.js') }}"></script>

<!-- bootstrap datepicker -->
<script src="{{ url('/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#datepicker2').datepicker({
      autoclose: true
    })

    $('#datepicker3').datepicker({
      autoclose: true
    })

    $('#datepicker4').datepicker({
      autoclose: true
    })

    $('#datepicker5').datepicker({
      autoclose: true
    })

    $('#example').DataTable();
} );
</script>
