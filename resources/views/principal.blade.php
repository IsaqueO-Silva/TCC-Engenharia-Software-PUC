@extends('base')

@section('conteudo')
    <!-- Main Section -->
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Marcas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tags"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Categorias</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list-ul"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Produtos</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Fornecedores</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Estoques</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <a href="{{ route('entrada-estoque-listar') }}">
                        <div class="small-box bg-default-blue">
                            
                            <div class="inner">
                                <h3>1</h3>
                                <p>Entradas de Estoque</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-arrow-up"></i>
                            </div>
                        
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-default-blue">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Saídas de Estoque</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main Section - End -->
@endsection