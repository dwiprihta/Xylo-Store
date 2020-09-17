<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
          <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('categories')}}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reward.html">Reward</a>
            </li>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="{{url('register')}}"
                tabindex="-1"
                aria-disabled="true"
                >Sign Up</a
              >
            </li>
            <li class="nav-item">
              <a
                href="{{url('login')}}"
                class="btn btn-success nav-link text-white px-4"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>