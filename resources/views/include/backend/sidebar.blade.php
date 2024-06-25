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
          
            <a href="{{route('user.index')}}">
              <div class="parent-icon"><i class="material-icons-outlined">support</i>
              </div>
              <div class="menu-title">ACL</div>
            </a>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
            <ul>
              <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>Halaman Data 1</a>
              </li>
              <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>Halaman Data 2</a>
              </li>
            </ul>
          </li>

        <!--end navigation-->
    </div>
  </aside>