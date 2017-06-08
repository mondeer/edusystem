<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Expense;
use transcounty\School;
use Sentinel;

class ExpenseCtrl extends Controller
{
    public function index() {
      return view('schools.expenses.add');
    }

    public function addExpense(Request $request) {
      $expense = new Expense();

      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $expense->school_id = $school->id;
      $expense->expense_name = $request->input('expense_name');
      $expense->amount =$request->input('amount');
      $expense->expense_date = $request->input('expense_date');
      $expense->comments = $request->input('comments');
      $expense->photo = $request->input('photo');
      $expense->save();

      return redirect('/schooladmin/expenses/view');
    }

    public function viewExpense() {
      $email = Sentinel::getUser()->email;

      $shule = School::where('email', $email)->get()->first();

      $expenses = Expense::where('school_id', $shule->id)->get();

      // dd($expenses);

      return view('schools.expenses.view')->with('expenses', $expenses);

    }
}
