<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="/">
            <img
              src="{{ asset('assets/img/GoBid.svg') }}"
              height="32px"
              alt="GoBId"
              loading="lazy"
              style="margin-top: 2px;"/>
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHamburger" aria-controls="navHamburger" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-2 gap-2" id="navHamburger">
        <ul class="navbar-nav me-auto mb-2 gap-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-medium {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium {{ (request()->is('auctions', 'auction/*')) ? 'active' : '' }}" href="/auctions">Auctions</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link fw-medium {{ (request()->is('mybid')) ? 'active' : '' }}" href="/mybid">My Bid</a>
          </li>
          @endauth
        </ul>
        {{-- right elements --}}
        <div class="d-flex align-items-center gap-3">
          @auth
            {{-- Drop down --}}
            <div class="nav-item dropdown">
              <div class="btn-group">
                <button type="button" class="btn border-0 dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                  <iconify-icon icon="mdi:user" style="color: #000aff;" width="26"></iconify-icon>
                  <strong class="ms-2">{{ Auth::user()->name }}</strong>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  @can('Member')
                  @else
                  <li>
                    <a class="btn border-0 w-100 fw-medium" href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  @endcan
                  <li>
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button class="btn border-0 w-100 text-danger fw-bold" type="submit">Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          @else
            <a href="{{ route('login') }}">
              <button type="button" class="btn btn-primary d-flex align-items-center">
                <span class="me-1 fw-semibold text-white">Login</span>
                <iconify-icon icon="material-symbols:login" style="color: white;" height="24"></iconify-icon>
              </button>
            </a>
          @endauth
      </div>
  
    </div>
  </nav>
        