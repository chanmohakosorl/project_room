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
                            <input type="text" class="form-control" placeholder="Rent Fee/Month">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Status: </label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Available</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Busy</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn btn-warning btn-md">Cancel</button>
                            <button class="btn btn-primary btn-md">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection