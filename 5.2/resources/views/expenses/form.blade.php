<div class="form-group">

    {!! Form::label('item_name', 'Item name:' ) !!}
    {!! Form::text('item_name', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::open() !!}
    {!! Form::label('price', 'Item price:' ) !!}
    {!! Form::text('price', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::open() !!}
    {!! Form::label('item_description', 'Item description:' ) !!}
    {!! Form::textarea('item_description', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">

    {!! Form::label('purchased_at', 'Purchased on:' ) !!}
    {!! Form::input('date', 'purchased_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit ("$submitButtonText", ['class' => 'btn btn-primary form-control']) !!}

</div>