<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">
        <span class="fa fa-users">
          Form Tambah Siswa
        </span>
      </h4>
      </div>
      <div class="modal-body">
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <!-- Form Nama -->
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                  </div>
                </div>
                <!-- end Form -->

                <!-- Form Tanggal -->
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" placeholder="Masukkan Tanggal Lahir">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form Jenis Kelamin -->
                <div class="form-group">
                  <label for="jenis">Jenis Kelamin</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-intersex"></i>
                    </div>  
                      <select class="form-control">
                        <option>Masukkan Jenis Kelamin</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                      </select>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form Alamat -->
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-map"></i>
                    </div>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap" name="note"></textarea>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form Asal -->
                <div class="form-group">
                  <label for="asal">Asal Sekolah</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input type="text" class="form-control" id="asal" placeholder="Masukkan Asal Sekolah">
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