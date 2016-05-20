<div class="form-group">
    {!! Form:: label('activity_type','Activity Type') !!}
    {!! Form:: text('activity_type',null,['class' => 'form-control']) !!}

    @if($errors->has('activity_type'))
        <span class="help-block">{{ $errors->first('activity_type') }}</span>
    @endif
</div>

   <div class="form-group">
    {!! Form:: label('date','Date') !!}
    {!! Form:: input('date','date',date('Y-m-d'),['class' => 'form-control']) !!}

    @if ($errors->has('date'))
        <span class="help-block">{{ $errors->first('date') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('outcome','Outcome') !!}
    {!! Form:: text('outcome',null,['class' => 'form-control']) !!}

    @if ($errors->has('outcome'))
        <span class="help-block">
        {{ $errors->first('outcome') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('sales_person_name','Sales Person') !!}
    {!! Form:: text('sales_person_name',null,['class' => 'form-control']) !!}

    @if ($errors->has('sales_person_name'))
        <span class="help-block">{{ $errors->first('sales_person_name') }}</span>
    @endif
</div>
 