

<header>

    <nav id="mdb-sidenav" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{route('admin')}}" class="list-group-item list-group-item-action py-2 active ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>main</span>
                </a>
                <a href="{{route('product')}}" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>product </span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->





    <nav id="mdb-navbar" class="  navbar fixed-top navbar-expand-lg navbar-light bg-white shadow-2" style="">
        <div class="container-fluid">
            <button id="sidenav-toggler" data-mdb-toggle="sidenav" data-mdb-target="#mdb-sidenav" type="button"
                    class="btn shadow-0 p-0 me-3 "style="min-width: 20px" aria-expanded="true"><i class="fas fa-bars fa-lg"></i></button>
            <a class="navbar-brand me-2" id="mdb-navbar-brand-logo" href="{{route('admin')}}">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt=""
                     loading="lazy" style="margin-top: -1px">
            </a>


            <span id="dpl-navbar-new-right-buttons" class="navbar-nav ms-auto d-flex flex-row">
      <ul id="main-navbar" class="nav navbar-nav nav-flex-icons ml-auto ms-auto flex-row">
        <li class="nav-item me-3 me-lg-0 d-none d-sm-inline-block dropdown">
          <a class="nav-link dropdown-toggle" id="new-mdb-technologies-dropdown" role="button"
             data-mdb-toggle="dropdown" aria-expanded="false">
            Docs
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="new-mdb-technologies-dropdown">
            <li><h5 class="dropdown-header">Bootstrap 5</h5></li>

            <li>
              <a class="dropdown-item" href="/docs/standard/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/javascript.png"
                      alt="" height="20px" class="me-2">
                <span>Standard (plain JS)<i class="fas fa-check ms-2" style="color: #00B74A"></i></span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/b5/angular/">
                <img
                    src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/angular.png"
                    alt="" height="20px" class="me-2">
                <span>Angular</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/b5/react/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/react.png"
                      alt="" height="20px" class="me-2">
                <span>React</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/b5/vue/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/vue.png"
                      alt="" height="20px" class="me-2">
                <span>Vue</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h5 class="dropdown-header">Bootstrap 4</h5></li>

            <li>
              <a class="dropdown-item" href="/docs/b4/jquery/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/jquery.png"
                      alt="" height="20px" class="me-2">
                <span>Standard (jQuery)</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/angular/">
                <img
                    src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/angular.png"
                    alt="" height="20px" class="me-2">
                <span>Angular</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/react/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/react.png"
                      alt="" height="20px" class="me-2">
                <span>React</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/docs/vue/"><img
                      src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/vue.png"
                      alt="" height="20px" class="me-2">
                <span>Vue</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item me-3 me-lg-0 " alt="Support" id="navbar-static-support">
          <a class="nav-link" href="/support/">
          <span class="d-none d-lg-inline-block ml-1">Support</span>
          <i class="fas fa-question-circle d-inline-block d-lg-none"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0 d-none d-xl-inline-block">
          <a class="nav-link" href="/services/">
            <span class="d-none d-lg-inline-block">Services</span>
            <i class="fas fa-question-circle d-inline-block d-lg-none"></i>
          </a>
        </li>
        <li class="nav-item d-none d-xl-inline-block">
          <a class="nav-link" href="/snippets/">
            <span class="d-none d-lg-inline-block">Playground</span>
            <i class="fas fa-code d-inline-block d-lg-none"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0 ">
          <a class="nav-link" href="/blog/">
            <span class="d-none d-lg-inline-block">Blog</span>
            <i class="fas fa-fire-alt d-inline-block d-lg-none"></i>
          </a>
        </li>




        <li class="nav-item me-3 me-lg-0 dropdown">
          <a gtm-id="Notifications" class="nav-link dropdown-toggle hidden-arrow" role="button" alt="Notifications"
             id="navbarNotification" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fas fa-bell" alt="Notifications"></i>
            <span id="navbarNotificationCounter" class="badge rounded-pill badge-notification bg-danger"
                  alt="Notifications" style="color: rgb(255, 255, 255) !important;">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-end" id="navbarNotificationContent"
               aria-labelledby="navbarDropdownMenuLink" style="width: 250px;">
            <a gtm-id="Notifications" class="dropdown-item text-wrap" data-notification-date="01/03/2022 12:30"
               href="https://gameofcodes.art/css.html" target="_blank" rel="nofollow">
      <p class="small text-uppercase mb-2">1/3/2022</p>
      <p class="mb-0">CSS libraries visualized as a fantasy map. Add your own ideas to this open world.</p>
    </a>
<a gtm-id="Notifications" class="dropdown-item text-wrap" data-notification-date="11/16/2021 10:00"
   href="https://mdbootstrap.com/docs/standard/getting-started/changelog/" target="_blank" rel="nofollow">
      <p class="small text-uppercase mb-2">11/16/2021</p>
      <p class="mb-0">MDB 5 Standard v.3.10.0 release! Check the changelog for the latest updates</p>
    </a>
          </div>
        </li>

        <li class="nav-item me-3 me-lg-0 dropdown">
          <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="new-mdb-language-switch" role="button"
             data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="united kingdom flag m-0"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="new-mdb-language-switch">
            <li>
              <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider"></li>

<li>
        <a class="dropdown-item language-select-option" href="/cn/docs/standard/forms/select/" data-lang="cn"><i
                class="china flag"></i>中文</a>
      </li>
          </ul>
        </li>

        <li class="nav-item d-none d-lg-inline-block">
          <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
            <i class="fab fa-github"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-mdb-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <img src="https://0.gravatar.com/avatar/37e2e2258d5f5f6159a9e8c08e82b79e?s=32&amp;d=mm&amp;r=g&amp;s=24"
             class="avatar avatar-24 photo rounded-circle">
      </a>
      <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="userDropdown" data-dropdown-in="fadeIn"
           data-dropdown-out="fadeOut" data-mdb-popper="none"   data-popper-placement="null">
        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
               <hr class="m-0">
                  <li>   <a class="dropdown-item" href="{{route('profile')}}">My profile</a></li>
                 <li>     <a class="dropdown-item" href="#">Settings</a></li>
     <hr class="m-0">
               <li>    <a class="dropdown-item" href="{{url('/')}}">Logout</a></li>


      </ul>
    </li>

      </ul></span>

        </div>
    </nav>
    <!-- Navbar -->
</header>
