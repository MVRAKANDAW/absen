@if(Auth::user()->hasRole('admin')) 

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../lte/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../lte/dist/img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                  Hallo, Selamat Datang !!<br>
                  {{ Auth::user()->name }}
                </p>
              </li>
              @role('member')
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="kegiatan">Kegiatan</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="riwayat">Log</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              @endrole
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-danger btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

@else
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              @role('member')
                <a href="{{ url('/') }}">
                    <img src="../../img/logos.png" alt="" height="50" class="mr-2">
                    <b>IS OPERATION</b>
                </a>
              @endrole
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                    </ul>


                      <ul class="navbar-nav navbar-right ml-auto">

                            <li class="nav-item dropdown user user-menu">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="../../lte/dist/img/avatar5.png" class="user-image" alt="User Image"> {{ Auth::user()->name }}
                                </a>
                                  <ul class="dropdown-menu">


                                    <li class="user-header bg-red">
                                      <img src="../../lte/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                      <p>
                                        Hallo, Selamat Datang !!
                                        <h5>{{ Auth::user()->name }}</h5>
                                      </p>
                                    </li>

                                  @role('member')  

                                  <li class="user-body">
                                    <div class="row">
                                      <div class="col-xs-4 text-center">
                                        <a href="kegiatan">Kegiatan</a>
                                      </div>
                                      <div class="col-xs-4 text-center">
                                        <a href="riwayat">Log</a>
                                      </div>
                                      <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                      </div>
                                    </div>

                                  </li>
                                  @endrole


                                    <li class="user-footer">
                                      <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-danger btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                      </div>
                                    </li>

                                  </ul>
                            </li>
                      </ul>
                </div>
            </div>
        </nav>

@endif