<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/img/bobcat.png" height="36" alt="EDW Bobcats"> {{ config('app.name', 'Laravel') }}
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'participants') ? 'active' : '' }}" href="/participants">Participants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'items') ? 'active' : '' }}" href="/items">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'donors') ? 'active' : '' }}" href="/donors">Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'winners') ? 'active' : '' }}" href="/winners">Winners</a>
                </li>

                @if(auth()->user()->isAdmin())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin Links
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.emails.confirm') }}">Email Receipts To Users</a>
                            <a class="dropdown-item" href="{{ route('admin.reports.money') }}">$ Reports</a>
                            <a class="dropdown-item" href="{{ route('admin.printout') }}">Office Printout</a>
                        </div>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</nav>
