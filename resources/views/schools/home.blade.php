@extends('schools.dashboard')

@section('content')
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3></h3>

        <p>Vocational Training Centers</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="/county/schools/view" class="small-box-footer">Add More <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$students->count()}}</h3>

        <p>Stundents</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="/schooladmin/students/view" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$tutors->count()}}</h3>

        <p>Tutors</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="/schooladmin/teacher/view" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{$expenses}}</h3>

        <p>Vocational Training Centers</p>
      </div>
      <div class="icon">
        <i class="ion ion-cash"></i>
      </div>
      <a href="/schooladmin/expenses/view" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
<hr>
<div class="row">
  <div class="col-md-4">
    {!! $expe->render() !!}
  </div>
  <div class="col-md-4">
    {!! $chart->render() !!}
  </div>

</div>
@endsection
