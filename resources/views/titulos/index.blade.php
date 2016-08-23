@extends('layout')

@section('title')
    {{isset($title) && !empty($title) ? ($title . ' |') : ''}} Cobranças
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h1 class="panel-title pull-left">Títulos</h1>
            <a href="{{url('titulos/create')}}" class="pull-right txt-dec-none">
                <span class="glyphicon glyphicon-plus"></span> Novo título
            </a>
        </div>

        <div class="panel-body">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <p>{{Session::get('alert-success')}}</p>
                </div>
            @endif

            @if(Session::has('alert-warning'))
                <div class="alert alert-warning">
                    <p>{{Session::get('alert-warning')}}</p>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="col-md-1 text-center">#</th>
                        <th class="col-md-3">Descrição</th>
                        <th class="col-md-2 text-center">Data de Vencimento</th>
                        <th class="col-md-2 text-right">Valor</th>
                        <th class="col-md-2 text-center">Status</th>
                        <th class="col-md-1"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($titulos as $titulo)
                        <tr>
                            <td class="text-center">{{$titulo->id}}</td>
                            <td>{{$titulo->descricao}}</td>
                            <td class="text-center">{{$titulo->data_vencimento}}</td>
                            <td class="text-right">R$ {{$titulo->valor}}</td>
                            <td class="text-center" data-status="{{$titulo->id}}">
                                <span class="label {{$titulo->status == 'RECEBIDO' ? 'label-success' : 'label-danger'}} label-success">
                                    {{$titulo->status}}
                                </span>
                            </td>
                            <td class="text-center">
                                <!-- Editar -->
                                <a href="{{route('titulos.edit', $titulo->id)}}" class="btn btn-link btn-xs" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <!-- Excluir -->
                                <a href="#" class="btn btn-link btn-xs" title="Excluir" data-toggle="modal" data-target="#modalExcluirTitulo" data-id="{{$titulo->id}}" data-descricao="{{$titulo->descricao}}">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                                @if($titulo->status == 'PENDENTE')
                                    <!-- Receber -->
                                    <a href="{{route('titulos.receive', $titulo->id)}}" class="btn btn-link btn-xs receber-titulo" title="Receber" data-id="{{$titulo->id}}" data-token="{{csrf_token()}}">
                                        <span class="glyphicon glyphicon-check"></span>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Nenhum registro encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal de exclusão de título -->
    <div class="modal fade" id="modalExcluirTitulo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            {!! Form::open(['method' => 'delete', 'data-baseurl' => route('titulos.destroy', null)]) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Confirmação de exclusão</h4>
                    </div> <!--/.modal-header -->
                    <div class="modal-body">
                        <span>Tem certeza que deseja excluir o título?</span>
                    </div> <!--/.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div> <!--/.modal-content -->
            {!! Form::close() !!}
        </div> <!--/.modal-dialog -->
    </div> <!--/.modal -->
@endsection