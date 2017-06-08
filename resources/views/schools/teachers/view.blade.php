@extends('schools.dashboard')

@section('content')
    <div class="col-md-10">
      <a class="btn btn-success btn-lg pull-right" href="/schooladmin/teacher/add">Add Tutor</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Expenditure Date</th>
                <th>Deregister</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tutors as $tutor)
                <tr>
                  <td>{{$tutor->id}}</td>
                  <td>{{$tutor->first_name}}</td>
                  <td>{{$tutor->last_name}}</td>
                  <td>{{$tutor->email}}</td>
                  <td>{{$tutor->national_id}}</td>
                  <td>{{$tutor->gender}}</td>
                  <td>{{$tutor->phone}}</td>
                  <td>{{$tutor->address}}</td>
                  <td>{{$tutor->created_at}}</td>
                  <td>
                    <form class="delete" action="/schooladmin/teacher/{{ $tutor->id }}/delete" method="post">
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
