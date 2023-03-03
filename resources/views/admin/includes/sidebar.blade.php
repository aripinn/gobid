<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin')) ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-heading">Master Data</li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/members')) ? '' : 'collapsed' }}" href="{{ route('dashboard-users') }}">
        <i class="bi bi-people"></i>
        <span>Members</span>
      </a>
    </li>
    @can('Admin')
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/staffs')) ? '' : 'collapsed' }}" href="{{ route('dashboard-staff') }}">
        {{-- <i class="bi bi-person-vcard"></i> --}}
        <i class="bi bi-person-gear"></i>
        <span>Staffs</span>
      </a>
    </li>
    @endcan
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/items', 'admin/items/*')) ? '' : 'collapsed' }}" href="{{ route('items.index') }}">
        <i class="bi bi-box-seam"></i>
        <span>Items</span>
      </a>
    </li>

    
    <li class="nav-heading">Auctions</li>
    @can('Staff')
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/auctions', 'admin/auctions/*')) ? '' : 'collapsed' }}" href="#">
        <i class="bi bi-menu-button-wide"></i>
        <span>Auctions</span>
      </a>
    </li>
    @endcan
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/auctions', 'admin/report/*')) ? '' : 'collapsed' }}" href="#">
        <i class="bi bi-printer"></i>
        <span>Auction Report</span>
      </a>
    </li>

    <li class="nav-heading">Log</li>
    <li class="nav-item">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link collapsed border-0 bg-transparent">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </button>
      </form>
    </li>

  </ul>
</aside><!-- End Sidebar-->
