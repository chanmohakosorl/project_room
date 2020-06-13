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
                    <form action="">
                        <div class="form-group">
                            <label for="">Room No</label>
                            <input type="text" class="form-control" placeholder="Room No">
                        </div>
                        <div class="form-group">
                            <label for="">Floor</label>
                            <input type="text" class="form-control" placeholder="Floor">
                        </div>
                        <div class="form-group">
                            <label for="">Rent Fee</label>
                            <input type="text" class="form-control" placeholder="Room No">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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