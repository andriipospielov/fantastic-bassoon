@extends ('app')

@section('content')
    <h1>Add a new expense <a href="{{action('ExpensesController@index')}}">(back to list)</a></h1>

    <hr>
    {!! Form::open(['url' => 'expenses']) !!}

    @include('expenses.form', ['submitButtonText' =>'Add expense'])


    {!! Form::close() !!}

    @include('errors.list')
@stop

