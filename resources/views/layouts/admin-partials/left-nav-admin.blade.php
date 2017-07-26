<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Gravatar::get(Auth::user()->email)  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Opciones</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>                
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-object-group"></i>
                    <span> Estudio</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Clientes</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Solicitud</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Orden de Trabajo</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Trabajos de Campos</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Trabajos de Laboratorio</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Bitacoras</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Bitacora de Laboratorio</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Bitacora de Campo</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="/widgets-examples">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/charts-js"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="/morris"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="/flot"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="/inline-charts"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/ui-general"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="/icons"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="/buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="/sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="/timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="/modals"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/forms"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="/forms-advanced"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="/editors"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/tables-simple"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="/tables-data"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="/calendar">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>
            <li>
                <a href="/mailbox">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Page Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/invoice"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="/profile-example"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="/login-example"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="/register-example"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="/lockscreen"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="/404-example"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="/500-example"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="/blank-page"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="/pace-page"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="/documentation"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>