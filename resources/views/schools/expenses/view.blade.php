@extends('schools.dashboard')

@section('content')
    <div class="col-md-6">
      <a class="btn btn-success btn-lg pull-right" href="/schooladmin/expenses/add">Add Expense</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Expenditure Name</th>
                <th>Expenditure Amount</th>
                <th>Expenditure Date</th>
                <th>Deregister</th>
              </tr>
            </thead>
            <tbody>
              @foreach($expenses as $expense)
                <tr>
                  <td>{{$expense->id}}</td>
                  <td>{{$expense->expense_name}}</td>
                  <td>{{$expense->amount}}</td>
                  <td>{{$expense->expense_date}}</td>
                  <td>
                    <form class="delete" action="/schooladmin/{{ $expense->id }}" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
