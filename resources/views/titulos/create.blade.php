@extends ('layout')

@section ('title')
    {{ isset($title) && !empty($title) ? ($title . ' |') : '' }} Cobranças
@endsection

@section ('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h1 class="panel-title pull-left">Cadastro de Título</h1>
            <a href="{{ url('titulos') }}" class="pull-right txt-dec-none">
                <span class="glyphicon glyphicon-backward"></span> Voltar
            </a>
        </div>

        <div class="panel-body">
            @include ('titulos._alert-danger')

            {!! Form::open(['method' => 'post', 'route' => 'titulos.store', 'class' => 'form-horizontal']) !!}
                @include ('titulos._form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection