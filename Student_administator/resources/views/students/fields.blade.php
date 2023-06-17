<!-- Firsname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firsname', 'Firsname:') !!}
    {!! Form::text('firsname', null, ['class' => 'form-control', 'minlength' => 4]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control', 'required', 'minlength' => 4]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required', 'minlength' => 8]) !!}
</div>