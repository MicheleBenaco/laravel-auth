<header>
    <div class="container-lg my_header">
        <section class="left_header">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                </li>
            </ul>
        </section>
        <section class="right_header">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
        </div>
        </li>
    @endguest
    </ul>
    </section>
    </div>
</header>
