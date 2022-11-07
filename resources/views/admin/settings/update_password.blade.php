@extends('admin.layout.layout')
@section('content')
   <!-- Container-fluid starts-->
   <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Password Update</h5>
                      </div>
                      <div class="card-body">
                        <form class="theme-form" action="{{ url('admin/updatepassword') }}" method="POST">
                            @csrf

                            @if(Session::has('error_message'))
                                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                                    <strong>Error: </strong> {{ Session::get('error_message')}}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close" data-bs-original-title="" title="">
                                    </button>
                                </div>
                            @endif

                            @if(Session::has('success_message'))
                                <div class="alert alert-success light alert-dismissible fade show" role="alert">
                                    <strong>Success: </strong> {{ Session::get('success_message')}}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close" data-bs-original-title="" title="">
                                    </button>
                                </div>
                            @endif

                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="email">Admin Email address</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{ $update_password['email'] }}">
                          </div>

                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="email">Admin Type</label>
                            <input class="form-control" id="email" type="text" name="email" value="{{ $update_password['type'] }}">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="current_password">Current Password <span class="font-danger">**</span></label>
                            <input class="form-control" id="current_password"
                            type="password" name="current_password"  placeholder="Enter Current Password">
                            <span id="check_password"> </span>
                          </div>

                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="new_password">New Password <span class="font-danger">**</span></label>
                            <input class="form-control" id="new_password" type="password" name="new_password" placeholder="Enter New Password">
                          </div>

                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="confirm_password">Confirm Password <span class="font-danger">**</span></label>
                            <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Enter Confirm Password">
                          </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit" >Submit</button>
                            </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
@endsection
