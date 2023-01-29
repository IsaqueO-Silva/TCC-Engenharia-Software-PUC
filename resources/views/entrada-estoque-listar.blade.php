@extends('base')

@section('conteudo')
    <!-- Main Section -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <h1>
                Entradas de Estoque
            </h1>
            <ol class="breadcrumb">
                <li><a href="/principal" class="text-blue"> Home</a></li>
                <li class="active"><a href="#">Entradas de Estoque</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <a href="/entrada-estoque-cadastrar" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                </div>
                <div class="col-md-12">
                    <br>
                    <div class="box">
                        <div class="table-responsive">
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <thead class="bg-default-blue">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Produto</th>
                                            <th>Fornecedor</th>
                                            <th>Quantidade</th>
                                            <th>Data e hora</th>
                                            <th>Estoque</th>
                                            <th style="width: 240px">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resultados as $resultado)
                                            <tr>
                                                <td>{{ $resultado->id_entrada_estoque }}</td>
                                                <td>{{ $resultado->produto }}</td>
                                                <td>{{ $resultado->fornecedor }}</td>
                                                <td>{{ $resultado->quantidade }}</td>
                                                <td>{{ \Carbon\Carbon::parse($resultado->data_entrada_estoque)->format('d/m/Y H:i') }}</td>
                                                <td>{{ $resultado->estoque }}</td>
                                                <td>
                                                    <a href="/entrada-estoque-alterar" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Alterar</a>
                                                    <a href="{{ route('entrada-estoque-excluir', array('id_entrada_estoque' => $resultado->id_entrada_estoque)) }}" onclick="return confirm('Confirmar a exclusão do registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main Section - End -->
@endsection