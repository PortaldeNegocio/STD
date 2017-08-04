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
                {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
            </div>
        </div>
        <!-- search form -->
       {{--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Opciones</li>
            <li class="menu_dashboard">
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
                    <li id="menu_clientes" ><a href="{{ route('cliente.index') }}"><i class="fa fa-circle-o"></i> Clientes</a></li>
                    <li id="menu_solicitud" ><a href="#"><i class="fa fa-circle-o"></i> Solicitud</a></li>
                    <li id="menu_ordenTrabajo" ><a href="#"><i class="fa fa-circle-o"></i> Orden de Trabajo</a></li>
                    <li id="menu_trabajosCampos" ><a href="#"><i class="fa fa-circle-o"></i> Trabajos de Campos</a></li>
                    <li id="menu_trabajosLaboratorio" ><a href="#"><i class="fa fa-circle-o"></i> Trabajos de Laboratorio</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Bitacoras</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_bitacoraLaboratorio" ><a href="#"><i class="fa fa-circle-o"></i> Bitacora de Laboratorio</a></li>
                    <li id="menu_bitacoraLaboratorio" ><a href="#"><i class="fa fa-circle-o"></i> Bitacora de Campo</a></li>
                    
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Contabilidad</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_cuentasCobrar" ><a href="#"><i class="fa fa-circle-o"></i> Cuentas por Cobrar</a></li>
                    <li id="menu_pagos" ><a href="#"><i class="fa fa-circle-o"></i> Pagos</a></li>
                    <li id="menu_facturas" ><a href="#"><i class="fa fa-circle-o"></i> Facturas</a></li>
                    
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Informes</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_informesEstudio" ><a href="#"><i class="fa fa-circle-o"></i> Informes de Estudio</a></li>
                    <li id="menu_informesFinancieros" ><a href="#"><i class="fa fa-circle-o"></i> Informes Financieros</a></li>
                    <li id="menu_informesAdministrativos" ><a href="#"><i class="fa fa-circle-o"></i> Informes Administrativo</a></li>
                    
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Administración</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_usuarios" ><a href="#"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    <li id="menu_roles" ><a href="#"><i class="fa fa-circle-o"></i> Roles</a></li>
                    <li id="menu_perfiles" ><a href="#"><i class="fa fa-circle-o"></i> Perfiles</a></li>
                    
                </ul>
            </li>        
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>