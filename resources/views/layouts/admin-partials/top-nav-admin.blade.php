<header class="main-header">

    <!-- Logo -->

    <a href="/home" class="logo">

        <!-- mini logo for sidebar mini 50x50 pixels -->

        <span class="logo-mini"><b>A</b>DS</span>

        <!-- logo for regular state and mobile devices -->

        <span class="logo-lg"><b>Admin</b> DASH</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

        <!-- Sidebar toggle button-->

        <a href="#"
           class="sidebar-toggle"
           data-toggle="offcanvas"
           role="button">

            <span class="sr-only">Toggle navigation</span>

        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

               
                <!-- Notifications: style can be found in dropdown.less -->

                <li class="dropdown notifications-menu">

                    <a href="#"
                       class="dropdown-toggle"
                       data-toggle="dropdown">

                        <i class="fa fa-bell-o"></i>

                        <span class="label label-success">10</span>

                    </a>

                    <ul class="dropdown-menu">

                        <li class="header">You have 10 notifications</li>

                        <li>

                            <!-- inner menu: contains the actual data -->

                            <ul class="menu">

                                <li>

                                    <a href="#">

                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today

                                    </a>

                                </li>

                                <li>

                                    <a href="#">

                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may
                                        not fit into the page and may cause design problems
                                    </a>

                                </li>

                                <li>

                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>

                                </li>

                                <li>

                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>

                                </li>

                                <li>

                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="footer"><a href="#">View all</a></li>

                    </ul>

                </li>

                @include('layouts.common-partials.user-panel')

                <!-- Control Sidebar Toggle Button -->

                <li>

                    <a href="#"
                       data-toggle="control-sidebar">

                        <i class="fa fa-gears"></i>

                    </a>

                </li>

            </ul>

        </div>

    </nav>

</header>