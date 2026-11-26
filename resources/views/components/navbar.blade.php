<nav class="navbar">

    <a href="{{ url('/') }}" class="brand">
        Training Institute
    </a>

    <div>
        @auth

            <a href="{{ route('courses.index') }}"
               class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
                Courses
            </a>

            <a href="{{ route('students.index') }}"
               class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
                Students
            </a>

            <form action="{{ route('logout') }}" method="POST" class="inline-form">
                @csrf

                <button type="submit" class="btn">
                    Log Out
                </button>
            </form>

        @endauth

        @guest

            <a href="{{ route('register') }}"
               class="{{ request()->routeIs('register') ? 'active' : '' }}">
                Register
            </a>

            <a href="{{ route('login') }}"
               class="{{ request()->routeIs('login') ? 'active' : '' }}">
                Login
            </a>

        @endguest
    </div>

</nav>
