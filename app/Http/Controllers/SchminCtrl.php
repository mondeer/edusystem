<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\School;
use transcounty\Student;
use transcounty\Expense;
use transcounty\Teacher;
use Charts;
use Sentinel;

class SchminCtrl extends Controller
{
  public function index() {
    $email = Sentinel::getUser()->email;

    $school = School::where('email', $email)->get()->first();
    $students = Student::where('school_id', $school->id)->get();
    $expenses = Expense::where('school_id', $school->id)->get()->sum('amount');
    $tutors = Teacher::where('school_id', $school->id)->get();

    $chart = Charts::database(Student::all(), 'bar', 'highcharts')
            ->elementLabel("Students")
            ->title('Students Enrollment')
            ->responsive(false)
            ->groupByMonth('2017', true);
   $data = Expense::all();
   $expe = Charts::create('line', 'highcharts')
            ->title('My Annual Budget')
            ->elementLabel('Expenditure')
            ->labels($data->pluck('expense_date'))
            ->values($data->pluck('amount'))
            ->responsive(true);

   //  $chart = Charts::database(School::all(), 'bar', 'highcharts');


    return view('schools.home')->with(array(
      'students' => $students,
      'expenses' => $expenses,
      'tutors' => $tutors,
      'chart' => $chart,
      'expe' => $expe,
       ));
  }
}
