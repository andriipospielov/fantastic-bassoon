@extends('app')

@section('content')

    <h1>{{$expense->item_name}}
        <a href="{{action('ExpensesController@edit', [$expense->id])}}">(edit)</a>

        <a href="{{action('ExpensesController@index')}}">(back to list)</a>
    </h1>

    <br/>
    Price: {{$expense->price}}
    <br>
    Purchased on: {{$expense->purchased_at}}
    <hr>
    Description:

    {{$expense->item_description}}

@stop