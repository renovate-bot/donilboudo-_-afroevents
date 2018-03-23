<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    <div class="form-controls">
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}