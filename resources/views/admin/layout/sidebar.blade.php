<aside class="aside">
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <ul class="nav menu">
                <li class="nav-heading ">
                    <span>MAIN NAVIGATION</span>
                </li>
                <li>
                    <a href="/" title="Dashboard">
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
                            <a href="" title="Jahitan">
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
                    <a href="#customer" title="Jahitan" data-toggle="collapse" class="menu-toggle">
                        <em class="material-icons">perm_identity</em>
                        <span>Customer</span>
                    </a>
                    <ul id="customer" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Customer</li>
                        <li>
                            <a href="{{ route('customer.index') }}" title="Customer">
                                <span>Data Customer</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.create') }}" title="Customer">
                                <span>Add Customer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#assetment" title="Assets" data-toggle="collapse" class="menu-toggle">
                        <em class="material-icons">assessment</em>
                        <span>Assets</span>
                    </a>
                    <ul id="assetment" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Assets</li>
                        <li>
                            <a href="#" title="Data Asset">
                                <span>Data Asset</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Stok Asset">
                                <span>Stok Asset</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Add Asset">
                                <span>Add Asset</span>
                            </a>
                        </li>
                    </ul>
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