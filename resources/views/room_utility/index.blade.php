@extends('layout.admin')

@section('content')
     <div class="containter m-5">
       <h2 class="text-center">Room Information <hr></h2>
     <a href="{{url('create')}}" class="btn btn-primary btn-md">Add new</a>
      <table class="table table-bordered table-striped mt-3">
        <thead class="bg-secondary">
          <tr>
            <th>Room No</th>
            <th>Floor</th>
            <th>Rent Fee/Month</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>1f</td>
            <td>$80</td>
            <td>Busy</td>
        </tr>
        <tr>
          <td>01</td>
          <td>1f</td>
          <td>$80</td>
          <td>Busy</td>
      </tr>
      <tr>
        <td>01</td>
        <td>1f</td>
        <td>$80</td>
        <td>Busy</td>
    </tr>
    <tr>
      <td>01</td>
      <td>1f</td>
      <td>$80</td>
      <td>Busy</td>
    </tr>
        </tbody>
      </table>
     </div>
@endsection