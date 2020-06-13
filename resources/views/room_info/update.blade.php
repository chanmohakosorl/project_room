@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card bg-light mt-4">
                <div class="card-header text-center">
                    <h3>Create Room Information</h3>
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                    <form action="{{route('room-infos.update',$room_infos->id)}}" method="POST" class="mt-4">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Room No</label>
                            <input type="text"  name="room_no" class="form-control" placeholder="Room No" value='{{$room_infos->room_no}}' required>
                        </div>
                        <div class="form-group">
                            <label for="">Floor</label>
                            <input type="text" class="form-control" name="floor" placeholder="Floor" value='{{$room_infos->floor}}' required>
                        </div>
                        <div class="form-group">
                            <label for="">Rent Fee</label>
                            <input type="text" name="rent_fee" class="form-control" placeholder="Rent Fee" value='{{$room_infos->rent_fee}}'required>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Available" {{ $room_infos->status == 'Available' ? 'checked' : ''}}>
                                <label class="form-check-label" for="exampleRadios1">
                                Available
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Busy" {{ $room_infos->status == 'Busy' ? 'checked' : ''}}>
                                <label class="form-check-label" for="exampleRadios2">
                                  Busy
                                </label>
                              </div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{url('room-infos')}}"><button type="submit" class="btn btn-secondary">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection