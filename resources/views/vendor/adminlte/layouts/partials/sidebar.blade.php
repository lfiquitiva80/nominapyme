<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i> <span>Inicio</span></a></li>
            <li><a href="/empleados"><span><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</span></a></li>
            <li><a href="{{ route('empleados.index') }}"><i class="fa fa-users" aria-hidden="true"></i> <span>Empleados</span></a></li>
            <li><a href="{{ route('contratos.index') }}"><i class="fa fa-file-text" aria-hidden="true"></i> <span>Contrato</span></a></li>
            <li><a href="{{ route('cargos.index') }}"><i class="fa fa-address-book" aria-hidden="true"></i> <span>Cargos</span></a></li>
            <li><a href="#"><i class="fa fa-id-card" aria-hidden="true"></i><span>Bancos</span></a></li>
            <li><a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> <span>Departamento</span></a></li>
            <li><a href="#"><i class="fa fa-medkit" aria-hidden="true"></i> <span>Eps</span></a></li>
            <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i> <span>Arl</span></a></li>
            <li><a href="#"><i class="fa fa-user-times" aria-hidden="true"></i> <span>Ausencias</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>Novedades</span></a></li>
            <li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Tipos Contratos</span></a></li>
            <li><a href="/logs"><i class="fa fa-cogs" aria-hidden="true"></i><span>Logs del Sistema</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
