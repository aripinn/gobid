<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="/">
            <img
              src="{{ asset('assets/img/Logo_Animal_Auction.png') }}"
              height="20"
              alt=""
              loading="lazy"
              style="margin-top: 2px;"/>
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-2 gap-2" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 gap-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/auctions">Auctions</a>
          </li>
        </ul>
        {{-- right elements --}}
        <div class="d-flex align-items-center gap-3">
          @auth
            {{-- Drop down --}}
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-sm-flex my-3 align-items-sm-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}"
                      class="rounded-circle"
                      height="22"
                      alt="Black and White Portrait of a Man"
                      loading="lazy"
                      />
                      <strong class="ms-2">{{ Auth::user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                          <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Logout</button>
                          </form>
                        </li>
                    </ul>
                </div>
                {{-- Mybid Button --}}
                <a href="/mybid" class="mybid_button btn btn-warning text-bg-warning btn-block text-warning  fw-bold">
                    <img src="{{ asset('assets/icons/feather_E88D13/coin-stack.svg') }}"><span class="ms-2">My Bid</span>
                </a>
          @else
            <a href="{{ route('login') }}" class="btn btn-success"><img src="{{ asset('assets/icons/feather_FFFFFF/log-in.svg') }}"><span class="ms-1">Login</span></a>
          @endauth
      </div>
  
    </div>
  </nav>
        