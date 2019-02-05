<aside class="aside">
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <ul class="nav menu">
                <li class="nav-heading ">
                    <span>MAIN NAVIGATION</span>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" title="Dashboard">
                        <em class="material-icons">dashboard</em>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#jahitan" title="Jahitan" data-toggle="collapse" class="menu-toggle">
                        <em class="material-icons">store</em>
                        <span>Jahitan</span>
                    </a>
                    <ul id="jahitan" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Jahitan</li>
                        <li>
                            <a href="{{ route('tailor.create') }}" title="Jahitan">
                                <span>Add Jahitan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tailor.index') }}" title="Jahitan">
                                <span>Data Jahitan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pakaian" title="Jahitan" data-toggle="collapse" class="menu-toggle">
                        <em class="material-icons">accessibility</em>
                        <span>Pakaian</span>
                    </a>
                    <ul id="pakaian" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pakaian</li>
                        <li>
                            <a href="{{ route('pakaian.index') }}" title="Pakaian">
                                <span>List Pakaian</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#customer" title="Jahitan" data-toggle="collapse" class="menu-toggle">
                        <em class="material-icons">perm_identity</em>
                        <span>Customer</span>
                    </a>
                    <ul id="customer" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Customer</li>
                        <li>
                            <a href="{{ route('customer.create') }}" title="Customer">
                                <span>Add Customer</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.index') }}" title="Customer">
                                <span>Data Customer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Setting">
                        <em class="material-icons">print</em>
                        <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="#" title="Setting">
                        <em class="material-icons">settings</em>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>