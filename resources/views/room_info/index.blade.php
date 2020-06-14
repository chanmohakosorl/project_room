@extends('layout.admin')

@section('content')
     <div class="containter m-5">
       <h2 class="text-center text-bold text-info p-2">Room Information <hr></h2>
     <a href="{{url('create-room-info')}}" class="btn btn-primary btn-md">Add new</a>
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
            <td class="text-center">
              <a href="{{url('{id}/edit-room-info')}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
              <a href=""><i class="far fa-trash-alt fa-lg text-danger"></i></a>
            </td>
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