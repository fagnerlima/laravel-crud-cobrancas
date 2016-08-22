<div class="form-group">
    {!! Form::label('descricao', 'Descrição:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('descricao', null, [
            'class' => 'form-control uppercase',
            'autofocus' => 'autofocus',
            'required' => 'required'
        ]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('data_vencimento', 'Data de vencimento: ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::date('data_vencimento', null, [
            'class' => 'form-control date-picker',
            'required' => 'required',
            'pattern' => '\d{2}/\d{2}/\d{4}'
        ]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('valor', null, [
            'class' => 'form-control currency',
            'required' => 'required'
        ]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('status', [
            '' => '',
            'PENDENTE' => 'PENDENTE',
            'RECEBIDO' => 'RECEBIDO'
        ], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2 col-sm-offset-2">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>