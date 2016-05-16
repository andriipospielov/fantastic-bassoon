<?php

namespace App\Http\Controllers;

use App\Expense;
use  App\Http\Requests;
use Illuminate\Support\Facades\App;


class ExpensesController extends Controller
{
    public function index()
    {

        $expenses = Expense::latest('created_at')->get();
        $sum = 0;
        foreach ($expenses as $expense) {
            $sum += $expense->price;
        }



        return view('expenses.index', compact('expenses'))->with('sum', $sum);
    }


    public function create()
    {
        return view('expenses.create');
    }

    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense::destroy($id);
        return redirect('expenses');


    }


    public function show($id)
    {
        $expense = Expense::findOrFail($id);
        return view('expenses.show', compact('expense'));
    }


    public function store(Requests\ExpensesRequest $request)

    {
//        Expense::create(Request::all());
        $expense = new Expense($request->all());
//        Auth::user()->expenses()->save($expense);
        $request->all();

        Expense::create($request->all());
        return redirect('expenses');

    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);

        return view('expenses.edit', compact('expense'));

    }

    public function update($id, Requests\ExpensesRequest $request)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());
        return redirect('expenses');
    }
}
