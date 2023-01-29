<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>weStock | Início</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
  <!-- Default CSS -->
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/skin-blue.min.css') }}">
</head>

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <a class="logo">
                <span class="logo-mini"><b>Stock</b></span>
                <span class="logo-lg"><b>WE</b>Stock</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user" aria-hidden="false"></i>
                                Admin
                                <span class="hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu">                  
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Main Header - End -->

        <!-- Main Sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">Módulos</li>
                    <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i> <span>Marcas</span></a></li>
                    <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> <span>Categorias</span></a></li>
                    <li><a href="#"><i class="fa fa-cubes" aria-hidden="false"></i> <span>Produtos</span></a></li>
                    <li><a href="#"><i class="fa fa-users" aria-hidden="false"></i> <span>Fornecedores</span></a></li>
                    <li><a href="#"><i class="fa fa-building" aria-hidden="false"></i> <span>Estoques</span></a></li>
                    <li><a href="{{ route('entrada-estoque-listar') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>Entradas de Estoque</span></a></li>
                    <li><a href="#"><i class="fa fa-arrow-down" aria-hidden="true"></i> <span>Saídas de Estoque</span></a></li>
                </ul>
            </section>
        </aside>
        <!-- Main Header - End -->

        @yield('conteudo')
    </div>
    <!-- Wrapper - End -->

    <script src="{{ asset('admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
</body>
</html>