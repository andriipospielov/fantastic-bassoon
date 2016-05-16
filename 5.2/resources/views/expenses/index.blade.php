@extends('app')

@section('content')
    @foreach($expenses  as  $expense)

    @endforeach

    <h1>List of Expenses:</h1>
    <a href="{{action('ExpensesController@create')}}">add a new one</a>
    <h3>total cost: {{$sum}}</h3>
    <hr/>
    @foreach($expenses  as  $expense)
        <article>
            <h2>
                <a href="{{action('ExpensesController@show', [$expense->id])}}">{{$expense->item_name}}</a>
            </h2>
            <div class="body"> <b>Price: {{$expense->price}}</b></div>
            <div class="body">{{$expense->item_description}}</div>

        </article>
    @endforeach
@stop