@extends('layout.admin')

@section('content')
     <div class="containter m-5">
       <h2 class="text-center">Room Utility Record<hr></h2>
       <a href="{{url('create-room-utility')}}" class="btn btn-primary btn-md">Add new</a>
      <table class="table table-bordered table-striped mt-3">
        <thead class="bg-secondary">
          <tr>
            <th>Month</th>
            <th>Room No</th>
            <th>Water Old Counter</th>
            <th>Water New Counter</th>
            <th>Electrictcity Old Counter</th>
            <th>Electrictcity New Counter</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jan</td>
            <td>A-01</td>
            <td>3 m3</td>
            <td>10 m3</td>
            <td>2v</td>
            <td>20v</td>
            <td class="text-center">
              <a href="{{url('{id}/edit-room-utility')}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
            </td>
        </tr>
        <tr>
          <td>Jan</td>
            <td>A-01</td>
            <td>3 m3</td>
            <td>10 m3</td>
            <td>2v</td>
            <td>20v</td>
            <td class="text-center">
              <a href="{{url('{id}/edit-room-utility')}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
            </td>
      </tr>
      <tr>
        <td>Jan</td>
            <td>A-01</td>
            <td>3 m3</td>
            <td>10 m3</td>
            <td>2v</td>
            <td>20v</td>
            <td class="text-center">
              <a href="{{url('{id}/edit-room-utility')}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
            </td>
    </tr>
    <tr>
      <td>Jan</td>
            <td>A-01</td>
            <td>3 m3</td>
            <td>10 m3</td>
            <td>2v</td>
            <td>20v</td>
            <td class="text-center">
              <a href="{{url('{id}/edit-room-utility')}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
            </td>
    </tr>
        </tbody>
      </table>
     </div>
@endsection