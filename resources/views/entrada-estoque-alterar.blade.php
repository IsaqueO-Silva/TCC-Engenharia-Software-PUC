@extends('base')

@section('conteudo')
    <!-- Main Section -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <h1>
                Entradas de Estoque - Alterar
            </h1>
            <ol class="breadcrumb">
                <li><a href="/principal" class="text-blue"> Home</a></li>
                <li><a href="/entrada-estoque-listar" class="text-blue">Entradas de Estoque</a></li>
                <li class="active"><a href="#">Entradas de Estoque - Alterar</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <form role="form" action="{{ route('entrada-estoque-alterar-2', ['id'=>$id]) }}" method="post">

                            {{ csrf_field() }}
                            
                          <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label for="produto">Produto</label>
                                        <input type="text" class="form-control" id="produto" name="produto" value="{{ $produto }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label for="estoque">Estoque</label>
                                    <input type="text" class="form-control" id="estoque" name="estoque" value="{{ $estoque }}" disabled>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                  <div class="form-group">
                                    <label for="quantidade">Quantidade <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{ $quantidade }}" required>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                  <div class="form-group">
                                      <label for="data">Data / Hora</label>
                                      <input type="text" class="form-control" id="datahora" name="datahora" value="{{ $data_entrada_estoque }}" disabled>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label for="observacoes">Observações</label>
                                        <textarea type="text" class="form-control" id="observacoes" name="observacoes">{{ $observacoes }}</textarea>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main Section - End -->
@endsection