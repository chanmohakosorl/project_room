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
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Avaliable
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  Busy
                                </label>
                              </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn btn-primary btn-md">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection