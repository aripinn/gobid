<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      {{-- Logo --}}
      <div class="sidebar-brand">
        <a href="/dashboard"><img src="{{ asset('assets/img/GoBid.svg') }}" alt="GoBid" style="height: 50%"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"><img src="{{ asset('assets/img/GoBid.svg') }}" alt="GoBid" style="width: 75%; max-height:50%"></a>
      </div>

      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="active">
          <a href="#" class="nav-link"><i class="fas fa-chart-bar"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Master Data</li>
        <li><a class="nav-link" href="#"><i class="fas fa-user-alt"></i><span>Member</span></a></li>
        @can('admin')
        <li><a class="nav-link" href="#"><i class="fas fa-id-badge"></i><span>Staff</span></a></li>
        @endcan
        <li><a class="nav-link" href="#"><i class="fas fa-table"></i><span>Item</span></a></li>

        <li class="menu-header">Report</li>
        <li><a href="#" class="nav-link"><i class="fas fa-print"></i><span>Auction Report</span></a></li>

        {{-- <li class="dropdown">
            <a class="nav-link has-dropdown" href="blank.html"><i class="fas fa-id-badge"></i><span>Staff</span></a>
            <ul class="dropdown-menu">
                <li><a href="" class="nav-link">Show staff</a></li>
                <li><a href="" class="nav-link">Add staff</a></li>
            </ul>
        </li> --}}
    </aside>
  </div>