<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin')) ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/users')) ? '' : 'collapsed' }}" href="{{ route('dashboard-users') }}">
        <i class="bi bi-people"></i>
        <span>Members</span>
      </a>
    </li><!-- End Pengguna Nav -->

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/staffs')) ? '' : 'collapsed' }}" href="{{ route('dashboard-staff') }}">
        <i class="bi bi-person-vcard"></i>
        <span>Staffs</span>
      </a>
    </li><!-- End Petugas Nav -->

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/admins')) ? '' : 'collapsed' }}" href="{{ route('dashboard-admin') }}">
        <i class="bi bi-person-gear"></i>
        <span>Admins</span>
      </a>
    </li><!-- End Admin Nav -->

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/items', 'admin/items/*')) ? '' : 'collapsed' }}" href="{{ route('items.index') }}">
        <i class="bi bi-menu-button-wide"></i>
        <span>Items</span>
      </a>
    </li><!-- End Produk Nav -->

    <li class="nav-heading">Log</li>

    <li class="nav-item">
      <a class="nav-link collapsed">
        <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="border-0 bg-transparent">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </button>
        </form>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->
