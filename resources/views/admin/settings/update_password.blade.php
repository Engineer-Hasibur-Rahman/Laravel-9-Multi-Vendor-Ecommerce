@extends('admin.layout.layout')
@section('content')
    <div class="page-heading">
        <div class="page-title mx-4">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Password Change</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Password Change</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    
        <!-- section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                             <form class="form" action="{{ url('admin/updatepassword') }}" method="POST">
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
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label">Admin Password</label>
                                                <input type="email" id="name" name="email" class="form-control" placeholder="email"  value="{{ $update_password['email'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Current Password</label>
                                                <input class="form-control"  id="current_password"
                                                type="password" name="current_password"  placeholder="Enter Current Password">
                                                <span id="check_password"> </span>
                                            </div>
                                        </div>                                                           
    
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                            <label class="col-form-label pt-0" for="image">Admin New Password</label>
                                            <input class="form-control" id="new_password" type="password" name="new_password" 
                                            placeholder="Enter New Password">
                                        </div>  
                                    </div>  
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                            <label class="col-form-label pt-0" for="image">Confirm New Password</label>
                                            <input class="form-control" id="confirm_password" type="password" 
                                            name="confirm_password" placeholder="Enter Confirm Password">
                                        </div>                                        
                                    </div>
                          
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    </div>    
@endsection
