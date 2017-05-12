@extends('county.dashboard')

@section('content')
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$schools->count()}}</h3>

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
      <a href="/countyadmin/students/view" class="small-box-footer">Add More <i class="fa fa-arrow-circle-right"></i></a>
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
      <a href="/countyadmin/tutors/view" class="small-box-footer">Add More <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$expenses}}</h3>

        <p>Total VTC Expenditure</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="/countyadmin/expenses/viewall" class="small-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
<hr>
<div class="row">
  <div class="col-md-4">
    {!! $expe->render() !!}
  </div>
  <div class="col-md-4">
    {!! $enrollment->render() !!}
  </div>

  <div class="col-md-4">
    {!! $courses->render() !!}
  </div>

</div>
@endsection
