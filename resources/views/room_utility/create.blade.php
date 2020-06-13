@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card bg-light mt-4">
                <div class="card-header text-center">
                    <h3>Create Room Utility</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Month</label>
                              <input type="text" class="form-control" placeholder="Month">
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Room No</label>
                              <select name="" id="" class="form-control">
                                <option value="">001</option>
                                <option value="">002</option>
                              </select>
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Water Old Counter</label>
                              <input type="text" class="form-control" placeholder="Water Old Counter">
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Water New Counter</label>
                              <input type="text" class="form-control" placeholder="Water New Counter">
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Elictricity Old Counter</label>
                              <input type="text" class="form-control" placeholder="Elictricity Old Counter">
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Elictricity New Counter</label>
                              <input type="text" class="form-control" placeholder="Elictricity New Counter">
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
        <div class="col-md-1"></div>
    </div>
@endsection