<header class="topnavbar-wrapper">
    <nav role="navigation" class="navbar topnavbar">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">
                <div class="brand-logo">
                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="Admin Logo" class="img-responsive" />
                </div>
                <div class="brand-logo-collapsed">
                    <img src="{{ asset('admin/assets/images/logo-single.png') }}" alt="Admin Logo" class="img-responsive" />
                </div>
            </a>
        </div>
        <div class="nav-wrapper">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="material-icons">menu</em>
                    </a>
                    <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                        <em class="material-icons">menu</em>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="visible-lg">
                    <a href="#" data-toggle-fullscreen="">
                        <em class="material-icons">fullscreen</em>
                    </a>
                </li>
                <li>
                    <a style="padding-top:23px; padding-bottom:23px;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>