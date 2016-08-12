@extends('layout')

@section('title')
    {{isset($title) && !empty($title) ? ($title . ' |') : ''}} Cobranças
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h1 class="panel-title pull-left">Cobranças</h1>
            <a href="#" class="pull-right">
                <span class="glyphicon glyphicon-plus"></span> Cadastrar cobrança
            </a>
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="col-md-1 text-center">#</th>
                    <th class="col-md-3">Descrição</th>
                    <th class="col-md-2 text-center">Data de Vencimento</th>
                    <th class="col-md-2 text-right">Valor</th>
                    <th class="col-md-2 text-center">Status</th>
                    <th class="col-md-2"></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="text-center">ID</td>
                    <td>Descrição</td>
                    <td class="text-center">Data de Vencimento</td>
                    <td class="text-right">Valor</td>
                    <td class="text-center">
                        <span class="label label-success">Status</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-link btn-xs" title="Receber">
                            <span class="glyphicon glyphicon-ok"></span>
                        </a>
                        <a href="#" class="btn btn-link btn-xs" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="#" class="btn btn-link btn-xs" title="Excluir">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection