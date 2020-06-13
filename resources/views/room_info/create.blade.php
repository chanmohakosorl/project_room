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
                    <form action="{{route('room-infos.store')}}" method="POST" class="mt-4">
                        @csrf
                        <div class="form-group">
                            <label for="">Room No</label>
                            <input type="text"  name="room_no" class="form-control" placeholder="Room No">
                        </div>
                        <div class="form-group">
                            <label for="">Floor</label>
                            <input type="text" class="form-control" name="floor" placeholder="Floor">
                        </div>
                        <div class="form-group">
                            <label for="">Rent Fee</label>
                            <input type="text" name="rent_fee" class="form-control" placeholder="Rent Fee">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Available" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Avaliable
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Busy">
                                <label class="form-check-label" for="exampleRadios2">
                                  Busy
                                </label>
                              </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection