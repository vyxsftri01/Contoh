    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @guest
          @else
          <a href="#" class="d-block">{{Auth::user()->name}}</a> 
          @endguest
          
        </div>  
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search"
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/post" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/siswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/nilai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jurusan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/wali" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wali</p>
                </a>
              </li>
            </ul>
          </li>
          @guest
          @if(Route::has('login'))
            <li class="nav-item">
              <a href="{{route('login')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <p>
                  {{ __('Login')}}
                </p>
              </a>
            </li>
            @endif
            @if(Route::has('register'))
              <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>
                    {{ __('Register')}}
                  </p>
                </a>
              </li>
            @endif
          @else
          @endguest

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>