<div class="form-group">
    {!! Form:: label('customer_name','Customer Name') !!}
    {!! Form:: text('customer_name',null,['class' => 'form-control']) !!}

    @if($errors->has('customer_name'))
        <span class="help-block">{{ $errors->first('customer_name') }}</span>
    @endif
</div>

   <div class="form-group">
    {!! Form:: label('company_name','Company Name') !!}
    {!! Form:: text('company_name',null,['class' => 'form-control']) !!}

    @if ($errors->has('company_name'))
        <span class="help-block">{{ $errors->first('company_name') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('company_address','Company Address') !!}
    {!! Form:: text('company_address',null,['class' => 'form-control']) !!}

    @if ($errors->has('company_address'))
        <span class="help-block">{{ $errors->first('company_address') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('br_no','Business Reg.No') !!}
    {!! Form:: text('br_no',null,['class' => 'form-control']) !!}

    @if ($errors->has('br_no'))
        <span class="help-block">{{ $errors->first('br_no') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form:: label('company_website','Company Website') !!}
    {!! Form:: text('company_website',null,['class' => 'form-control']) !!}

    @if ($errors->has('company_website'))
        <span class="help-block">{{ $errors->first('company_website') }}</span>
    @endif
</div>