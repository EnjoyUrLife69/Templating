   <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">Maxwin</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">

          <a href="{{route('home')}}">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          
            <a href="{{route('user.index')}}">
              <div class="parent-icon"><i class="material-icons-outlined">support</i>
              </div>
              <div class="menu-title">ACL</div>
            </a>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">apple</i>
              </div>
              <div class="menu-title">Data</div>
            </a>
            <ul>
              <li><a href="#"><i class="material-icons-outlined">arrow_right</i>Artikel</a>
              </li>
              <li><a href="{{route ("kategori.index")}}"><i class="material-icons-outlined">arrow_right</i>Kategori</a>
              </li>
              <li><a href="#"><i class="material-icons-outlined">arrow_right</i>Testimoni</a>
              </li>
              <li><a href="#"><i class="material-icons-outlined">arrow_right</i>Pendaftar</a>
              </li>
            </ul>
          </li>

        <!--end navigation-->
    </div>
  </aside>