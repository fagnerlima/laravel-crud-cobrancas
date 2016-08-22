@extends('layout')

@section('title')
    {{isset($title) && !empty($title) ? ($title . ' |') : ''}} Cobranças
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h1 class="panel-title pull-left">Cadastro de Título</h1>
            <a href="{{url('titulos')}}" class="pull-right txt-dec-none">
                <span class="glyphicon glyphicon-backward"></span> Voltar
            </a>
        </div>

        <div class="panel-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif

            <form method="post" action="{{url('titulos')}}" class="form-horizontal">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-4">
                        <input type="text" id="descricao" name="descricao" class="form-control uppercase"
                               autofocus="autofocus" value="{{old('descricao')}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="data_vencimento" class="col-sm-2 control-label">Data de vencimento</label>
                    <div class="col-sm-2">
                        <input type="date" id="data_vencimento" name="data_vencimento" class="form-control date-picker"
                                value="{{old('data_vencimento')}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="valor" class="col-sm-2 control-label">Valor</label>
                    <div class="col-sm-2">
                        <input type="text" id="valor" name="valor" class="form-control currency"
                                value="{{old('valor')}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-2">
                        <select id="status" name="status" class="form-control">
                            <option value=""></option>
                            <option value="PENDENTE" {{old('status') == 'PENDENTE' ? 'selected="selected"' : ''}}>PENDENTE</option>
                            <option value="RECEBIDO" {{old('status') == 'RECEBIDO' ? 'selected="selected"' : ''}}>RECEBIDO</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-2">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection