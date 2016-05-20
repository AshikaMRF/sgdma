<div class="form-group">
    {!! Form:: label('name','Contact Name') !!}
    {!! Form:: text('name',null,['class' => 'form-control']) !!}

    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>

   <div class="form-group">
    {!! Form:: label('email','Email') !!}
    {!! Form:: text('email',null,['class' => 'form-control']) !!}

    @if ($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('contact_no','Contact No') !!}
    {!! Form:: text('contact_no',null,['class' => 'form-control']) !!}

    @if ($errors->has('contact_no'))
        <span class="help-block">
        {{ $errors->first('contact_no') }}</span>
    @endif
</div>
 