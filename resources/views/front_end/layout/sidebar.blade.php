<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="lte/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color: white;">Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{ request()->is('jadwal') ? 'active' : '' }}"><a href="jadwal"><i class="fa fa-edit"></i> <span>Jadwal</span></a></li>
        <li class="{{ request()->is('siswa') ? 'active' : '' }}"><a href="siswa"><i class="fa fa-users"></i> <span>Siswa</span></a></li>
        <li><a href="absensi"><i class="fa fa-book"></i> <span>Absensi</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>