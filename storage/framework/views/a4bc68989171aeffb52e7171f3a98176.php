<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <img src="https://icon-library.com/images/pos-system-icon/pos-system-icon-0.jpg" alt=""">
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
        <li class="nav-item dropdown language-dropdown">
          <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="d-inline-flex mr-0 mr-md-3">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-us"></i>
              </div>
            </div>
            <span class="profile-text font-weight-medium d-none d-md-block">English</span>
          </a>
          <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-us"></i>
              </div>English
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-fr"></i>
              </div>French
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-ae"></i>
              </div>Arabic
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-ru"></i>
              </div>Russian
            </a>
          </div>
        </li>
      </ul>
      <form class="ms-5 ml-auto search-form d-none d-md-block">
        <div class="form-group ms-5">
            <i data-bs-toggle="modal" data-bs-target="#modalSearch" class="bi bi-search search_icon text-center"></i>
        </div>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?php echo e(asset('back-end/assets/images/faces/face10.jpg')); ?>" alt="image" class="img-sm profile-pic">
              </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?php echo e(asset('back-end/assets/images/faces/face12.jpg')); ?>" alt="image" class="img-sm profile-pic">
              </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="<?php echo e(asset('back-end/assets/images/faces/face1.jpg')); ?>" alt="image" class="img-sm profile-pic">
              </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-email-outline"></i>
            <span class="count bg-success">1</span>
          </a>
          
        </li>
        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            
            <img style="width:50px; border-radius: 50%" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t39.30808-1/486377014_1122566026291681_9090884325755138289_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=106&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeG4qYfhJ0p8KPrJcHb2gM7lSuGtYRGrWhRK4a1hEataFAMLw1WBfGggAu1U3N6WWpRt8KKohUaqVKE2PL3ftoir&_nc_ohc=Tq1Bj_f5IP0Q7kNvwHoxqHG&_nc_oc=AdlSUHJl4PnO6bwsho7FFXg4hvjr8PxWZzTbMz0J-prbststTUHm5Kkhex01gtnJVnw&_nc_zt=24&_nc_ht=scontent.fpnh20-1.fna&_nc_gid=T9_0xWyFRBQrdEHMOQfKOQ&oh=00_AfE7QivOFSaVJrRNpvtG1TnRqUshfJaaMBtit29RR9S3Rg&oe=67FA9588" alt="">
            <h3 class="text-Dark font-weight-semibold mb-0 mt-3"><?php echo e(Auth::user()?->name ?? ''); ?></h3>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img style="width:50px" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t39.30808-1/486377014_1122566026291681_9090884325755138289_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=106&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeG4qYfhJ0p8KPrJcHb2gM7lSuGtYRGrWhRK4a1hEataFAMLw1WBfGggAu1U3N6WWpRt8KKohUaqVKE2PL3ftoir&_nc_ohc=Tq1Bj_f5IP0Q7kNvwHoxqHG&_nc_oc=AdlSUHJl4PnO6bwsho7FFXg4hvjr8PxWZzTbMz0J-prbststTUHm5Kkhex01gtnJVnw&_nc_zt=24&_nc_ht=scontent.fpnh20-1.fna&_nc_gid=T9_0xWyFRBQrdEHMOQfKOQ&oh=00_AfE7QivOFSaVJrRNpvtG1TnRqUshfJaaMBtit29RR9S3Rg&oe=67FA9588" alt="">
              <p style="text-transform: uppercase" class="mb-1 mt-3 font-weight-semibold"><?php echo e(Auth::user()?->name ?? ''); ?></p>
              <p class="font-weight-light text-muted mb-0"><?php echo e(Auth::user()?->email ?? ''); ?></p>
            </div>
           <center> <a class="dropdown-item" href="<?php echo e(route('auth.logout')); ?>">Logout<i class="dropdown-item-icon ti-power-off"></i></a></center>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav><?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/back-end/components/navbar.blade.php ENDPATH**/ ?>