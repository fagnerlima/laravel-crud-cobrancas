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
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <p>{{Session::get('success')}}</p>
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
                            <td class="text-right">{{$titulo->valor}}</td>
                            <td class="text-center">
                                <span class="label {{$titulo->status == 'RECEBIDO' ? 'label-success' : 'label-danger'}} label-success">
                                    {{$titulo->status}}
                                </span>
                            </td>
                            <td class="text-center">
                                @if($titulo->status == 'PENDENTE')
                                    <a href="#" class="btn btn-link btn-xs" title="Receber">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>
                                @endif
                                <a href="{{route('titulos.edit', ['id' => $titulo->id])}}" class="btn btn-link btn-xs" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="#" class="btn btn-link btn-xs" title="Excluir">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
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
@endsection