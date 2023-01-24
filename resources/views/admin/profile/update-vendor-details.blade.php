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
                            @if($slug == 'personal')
                            <h5>Update Personal Details</h5>
                            @elseif($slug == 'business') 
                            <h5>Update Business Details</h5>
                            @elseif($slug == 'bank')
                            <h5>Update Bank Details</h5>
                            @endif
                            
                            </div>
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

                                  @if($slug == 'personal')
                                  <form class="theme-form" action="{{ url('admin/update-vendor-details/personal') }}" method="POST" enctype="multipart/form-data" >
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
                                        <label class="col-form-label pt-0" for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="email">Email address</label>
                                        <input class="form-control" id="email" type="email" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="mobile">Mobile</label>
                                        <input class="form-control" id="mobile" type="text" name="mobile" value="{{ Auth::guard('admin')->user()->mobile }}" mixlenth="11" minlenth="11">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="image">image</label>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>


                                    <div class="card-footer">
                                        <button class="btn btn-success-gradien" type="submit" >Update</button>
                                    </div>
                                </form>

                                  @elseif($slug == 'business')    
                                  <form class="theme-form" action="{{ url('admin/update-vendor-details') }}" method="POST" enctype="multipart/form-data" >
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
                                        <label class="col-form-label pt-0" for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="email">Email address</label>
                                        <input class="form-control" id="email" type="email" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="mobile">Mobile</label>
                                        <input class="form-control" id="mobile" type="text" name="mobile" value="{{ Auth::guard('admin')->user()->mobile }}" mixlenth="11" minlenth="11">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="image">image</label>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>


                                    <div class="card-footer">
                                        <button class="btn btn-success-gradien" type="submit" >Update</button>
                                    </div>
                                </form>
                                  @elseif($slug == 'bank')   
                                  <form class="theme-form" action="{{ url('admin/update-vendor-details') }}" method="POST" enctype="multipart/form-data" >
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
                                        <label class="col-form-label pt-0" for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="email">Email address</label>
                                        <input class="form-control" id="email" type="email" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="mobile">Mobile</label>
                                        <input class="form-control" id="mobile" type="text" name="mobile" value="{{ Auth::guard('admin')->user()->mobile }}" mixlenth="11" minlenth="11">
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="image">image</label>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>


                                    <div class="card-footer">
                                        <button class="btn btn-success-gradien" type="submit" >Update</button>
                                    </div>
                                </form> 
                                  @endif    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
