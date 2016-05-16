@extends('app')

@section('content')
    <h1>Edit: {!! $expense->title !!}</h1>
    <hr>

    {!! Form::model($expense, ['method' => 'PATCH' , 'action' => ['ExpensesController@update', $expense->id ]]) !!}

    @include('expenses.form', ['submitButtonText' => 'Edit Expense'])
    {!! Form::close() !!}

    {!! Form::open([ 'method'  => 'delete', 'route' => [ 'expenses.destroy', $expense->id ] ]) !!}
    {!! Form::submit ("Delete Item", ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}

    @include('errors.list')


@stop