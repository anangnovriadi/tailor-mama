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
            <!-- START Left navbar-->
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
                <li>
                    <a href="#" data-search-open="">
                        <em class="material-icons">search</em>
                    </a>
                </li>
                <li class="visible-lg">
                    <a href="#" data-toggle-fullscreen="">
                        <em class="material-icons">fullscreen</em>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="badge badge-success">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">done</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">Just Now</p>
                                            <h4> Privacy settings changed</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-indigo">
                                                <i class="material-icons">add</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">2 mins</p>
                                            <h4> Mike has added you as friend</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-blue">
                                                <i class="material-icons">alarm</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">20 mins</p>
                                            <h4> New item added</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">thumb_up</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">2 hrs</p>
                                            <h4> Ketty like your photo</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">3 days</p>
                                            <h4> Server 10 is not working Properly</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <div class="icon-circle bg-grey">
                                                <i class="material-icons">settings</i>
                                            </div>
                                        </div>
                                        <div class="media-body menu-note">
                                            <p class="pull-right">5 days</p>
                                            <h4> Restart your system</h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">mail</i>
                        <span class="badge badge-danger">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            You have
                            <span class="font-bold">7 New</span> Messages
                        </li>
                        <li class="body">
                            <ul class="menu media-list">
                                <li class="media unread">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/nine.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>Just Now</small></p>
                                            <h4 class="media-heading body-text">Lisa Headon</h4>
                                            <p class="font-12">Cras justo odio, dapibus ac facilisis in.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/2.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>2 hour ago</small></p>
                                            <h4 class="media-heading body-text">Lucy Doe</h4>
                                            <p class="font-12">Duis mollis, est non commodo luctus, nisi erat</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/five.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>12 hour ago</small></p>
                                            <h4 class="media-heading body-text">Jhon Doe</h4>
                                            <p class="font-12">Aenean lacinia bibendum nulla sed consectetur. </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/1.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>2 days ago</small></p>
                                            <h4 class="media-heading body-text">Daniel Richard</h4>
                                            <p class="font-12">Donec id elit non mi porta gravida at eget metus. </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/seven.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>3 days ago</small></p>
                                            <h4 class="media-heading body-text">Kelly Brook</h4>
                                            <p class="font-12">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media unread">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/three.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>4 days ago</small></p>
                                            <h4 class="media-heading body-text">Olivia Wild</h4>
                                            <p class="font-12">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" width="32" src="./assets/images/mail/two.jpg" alt="user" />
                                        </div>
                                        <div class="media-body">
                                            <p class="pull-right"><small>2 weeks ago</small></p>
                                            <h4 class="media-heading body-text">Andrew Smith</h4>
                                            <p class="font-12">Nulla vitae elit libero, a pharetra augue.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Messages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="material-icons">more_vert</em>
                    </a>
                </li>
            </ul>
        </div>
        <form role="search" action="#" class="navbar-form" />
            <div class="form-group has-feedback">
                <input type="text" placeholder="Type and search ..." class="form-control" />
                <em data-search-dismiss="" class="form-control-feedback material-icons">close</em>
            </div>
            <button type="submit" class="hidden btn btn-info">Submit</button>
        </form>
    </nav>
</header>