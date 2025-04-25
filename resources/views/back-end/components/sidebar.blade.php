<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
          <i class="menu-icon mdi mdi-view-dashboard-outline"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('category.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('brand.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Brand</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('color.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Color</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Product</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.index') }}" style="text-align:right">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>

    </ul>
  </nav>