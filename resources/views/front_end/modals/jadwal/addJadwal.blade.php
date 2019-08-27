<div class="modal fade" id="jadwalModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">
        <span class="fa fa-calendar mr-1"> Form Tambah Jadwal
        </span>
      </h4>
      </div>
      <div class="modal-body">
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <!-- Form Nama Sekolah -->
                <div class="form-group">
                  <label for="nama">Nama Sekolah</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form Alamat -->
                <div class="form-group">
                  <label for="alamat">Alamat Sekolah</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-map"></i>
                    </div>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap" name="note"></textarea>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form Jurusan -->
                <div class="form-group">
                  <label for="nama">Jurusan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-bookmark"></i>
                    </div>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Jurusan">
                  </div>
                </div>
                  <!-- End Form -->

                <!-- Form Start Date -->
                <div class="form-group">
                  <label>Mulai PKL</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker4" placeholder="Masukkan Tanggal Mulai">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form End Date -->
                <div class="form-group">
                  <label>Selesai PKL</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar-times-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker5" placeholder="Masukkan Tanggal Selesai">
                  </div>
                </div>
                <!-- End Form -->

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Save changes</button>
      </div>
    </div>
  </div>
</div>