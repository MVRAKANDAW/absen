@extends('front_end.layout.master')
@section('home', 'active')

@section('content')

<body class="content-section-uu">
<div class="container">
    <div class="absen-box">

        <div class="absen-box-body">
            <h4>Absensi IS Operation</h4>
                <div id="clock" align="center"></div>
            <center>
                <script language='JavaScript'>document.write(tanggallengkap);</script>
            </center>
        </div>

        <form action="{{ route('absen') }}" method="post">
            
            {{csrf_field()}}

            <div class="content-box-body">
                <center>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukkan NIS">
                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    </div>
                </center>
                <br>
                <div class="row">
                    <div align="center">              
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-lg btn-primary" name="btnIn">ABSEN MASUK</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-lg btn-primary" name="btnOut">ABSEN KELUAR</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="keterangan-box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                        <label>KETERANGAN : </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="note"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
</body>

<!-- JavaScript -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js'></script>
<script src='http://rawgit.com/g00fy-/angular-datepicker/1.0.4/dist/index.js'></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Scripts -->
<script src="/js/script.js"></script>
<script src="/js/app.js"></script>

<!-- Jam -->
<script type="text/javascript">
function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
         document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }
 
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
</script>


<!-- Waktu -->
<script language="JavaScript">
    var tanggallengkap = new String();
    var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
    var tgl = new Date();
    var hari = tgl.getDay();
    var tanggal = tgl.getDate();
    var bulan = tgl.getMonth();
    var tahun = tgl.getFullYear();
    tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
</script>