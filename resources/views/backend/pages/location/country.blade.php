@extends('admin.layout.layout')
@section('style')
<style>   
</style>
@endsection
@section('content')
   <!--Dashboard Section Start -->
   <div class="page-heading">
    <div class="page-title px-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Countries</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Countries</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="right-content">
                    <a href="{{ route('admin.city.add')}}"
                       data-bs-toggle="modal"
                       data-bs-target="#addCountry"
                       class="btn btn-success">{{__('Add Country')}}</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table sortable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>                  
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="countryDataAppend">
                        @foreach($countries as $data)
                        <tr data-id="{{ $data->id }}">
                            <td>{{$data->id}}</td>
                            <td class="update-name">{{$data->name}}</td>
                            <td>
                                    @if($data->status==1)
                                    <span class="btn btn-success btn-sm">Active</span>
                                    @else
                                    <span class="btn btn-danger">Inactive</span>
                                    @endif
                            </td>
                            {{-- <td> {{date('d-m-Y', strtotime($data->created_at))}} </td> --}}
                            <td>
                                <a href="#" class="btn btn-primary country_edit_btn" title="Edit"
                                   data-bs-toggle="modal"
                                   data-bs-target="#editCountry"                                                                  
                                   data-name="{{ $data->name }}"                                                                  
                                   >
                                 <i class="bi bi-pencil"></i> </a>
                                <a href="#"  class="btn btn-danger delete" title="Delete"
                                 data-bs-toggle="modal"
                                 data-bs-target="#deleteCountry"     
                                > <i class="bi bi-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- Tables end -->
</div>

   <!--Add Country Modal -->
   <div class="modal fade text-left" id="addCountry" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel33" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel33">Add Country </h4>
                   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i>  </button>
               </div>

               <!-- add message show -->
               <div id="addMessageShow" class="mx-3 mt-1"></div>

               <form id="countryFormData">
                   <div class="modal-body">
                       <label>Country Name: </label>
                       <div class="form-group">
                           <input type="text" name="name" id="name" placeholder="Type Country Name" class="form-control">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Close</span>
                       </button>
                       <button type="submit" class="btn btn-success ml-1">
                           <i class="bx bx-check d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Save</span>
                       </button>
                   </div>
               </form>

           </div>
       </div>
   </div>
   
   <!--Edit Country Modal -->
   <div class="modal fade text-left" id="editCountry" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel33" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel33">Edit Country </h4>
                   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i>  </button>
               </div>

               <!-- add message show -->
               <div id="addMessageShow" class="mx-3 mt-1"></div>

               <form id="editCountryFormData">   
                   <div class="modal-body">
                       <label>Country Name: </label>
                       <div class="form-group">
                           <input type="text" name="name" id="name" placeholder="Type Country Name" class="form-control">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                         <i class="bx bx-x d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Close</span>
                       </button>
                       <button type="submit" class="btn btn-success ml-1">
                           <i class="bx bx-check d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Update</span>
                       </button>
                   </div>
               </form>

           </div>
       </div>
   </div>   
   
   <!--Delete Country Modal -->
   <div class="modal fade text-left" id="deleteCountry" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel33" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel33">Delete Country </h4>
                   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i>  </button>
               </div>
            
               <form id="deleteCountryForm">  
                   <div class="modal-body">   
                         <div id="addMessageShow" class="mx-3 mt-1"></div>
                           <h5 class="text-danger remove_message" > Aye you sure to delete this? </h5>
                   </div>

                   <div class="modal-footer">                       
                       <button type="submit" class="btn btn-danger ml-1">
                           <i class="bx bx-check d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Yes Delete?</span>
                       </button>
                       <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">No</span>
                      </button>
                   </div>
               </form>

           </div>
       </div>
   </div>

@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        (function($){
            "use strict";
            $(document).ready(function(){
             
                // add country
                $(document).on('submit', '#countryFormData', function (e) {
                      e.preventDefault();                     

                       // success message show
                       let message = $('#addMessageShow');  

                     // Form Data                    
                      let formData = {
                            name: $('#name').val(),
                            _token: '{{csrf_token()}}'
                          }                    

                      $.ajax({      
                          type: "POST",
                          url: "{{route('admin.country.add')}}",
                          data: formData,    
                          success:function(response) {        
                              if (response) {    
                                // clear error message
                                $(message).html(''); 
                                //success message
                                $(message).append('<div class="alert alert-success"><i class="bi bi-check-circle"></i> Country Created success </div>');                                
                               
                                // success message hide 
                                // $(message).delay(5000).hide('slow'); 

                                // modal reset and hide
                                $('#name').val('');                               
                                // $("#addCountry").modal('hide'); 

                                // country append 
                                $('#countryDataAppend').prepend(`
                                <tr data-id="`+ response.country.id +`">
                                    <td> `+ response.country.id +` </td>
                                    <td> `+ response.country.name +` </td>
                                    <td> <span class="btn btn-success">Active</span></td>                      
                                    <td>                                    
                                        <a href="#" class="btn btn-primary" title="Edit"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editCountry"                                       
                                        data-name=`+ response.country.name +`                                        
                                        ><i class="bi bi-pencil"></i></a>
                                        <a href="#"  class="btn btn-danger delete" title="Delete"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteCountry"> <i class="bi bi-trash"></i> </a>                                   
                                        </td>
                                </tr>  
                                `);      
                              }
                          },
                          error:function(error){                            
                            // valadation message show
                            $(message).html('');                            
                            $(message).append('<div id="errorMessage" class="alert alert-danger"> </div>');   
                            
                            $.each(error.responseJSON.errors, function(index, value){
                            //   console.log(value[0]);
                            $(message).find('#errorMessage').append(`
                               `+ value[0] +`
                            `)

                           })

                          }
                      });
                });

                // edit country
                $(document).on('click', '.country_edit_btn', function () {

                    let id = $(this).closest('tr').data('id')
                    let name = $(this).data('name');
                    let form = $('#editCountry');

                     form.find('#name').val(name);

                    // get country 
                    $.ajax({
                        type:"GET",
                        url: 'country/edit-country/'+id,                       
                        success: function(response){
                          $('.modal').attr('data-id', response.country.id)
                        },
                        error: function(error){
                            console.log(error)
                        }
                    });                  
                });

                // Update country
                $(document).on('submit', '#editCountryFormData', function (e) {
                      e.preventDefault();    
                      let id = $('#editCountry').data('id'); 
                       // success message show
                      let message = $('.modal').find('#addMessageShow');  
                     // Form Data                    
                      let formData = {
                            id: id,
                            name: $('#editCountryFormData').find('#name').val(),
                            _token: '{{csrf_token()}}'
                          }       
                      $.ajax({      
                          type: "POST",
                          url: "{{route('admin.country.update')}}",
                          data: formData,    
                          success:function(response) {                                    
                              if (response) {   
                                // clear error message
                                $(message).html(''); 
                                //success message
                                $(message).append('<div class="alert alert-success"><i class="bi bi-check-circle"></i> Country update successfully </div>');                                
                               
                                // success message hide 
                                // $(message).delay(5000).hide('slow'); 
                                // modal hide                                                        
                                // $("#addCountry").modal('hide');   
                                let countryRow = $('#countryDataAppend').find('tr[data-id="'+id+'"]');                           
                                $(countryRow).find('td.update-name').text(response.country.name);                                   
                              }
                          },
                          error:function(error){                            
                            // valadation message show
                            $(message).html('');                            
                            $(message).append('<div id="errorMessage" class="alert alert-danger"> </div>');   
                            
                            $.each(error.responseJSON.errors, function(index, value){
                              console.log(value[0]);
                            $(message).find('#errorMessage').append(`
                               `+ value[0] +`
                            `)

                           });

                          }
                      });
                });  
                
                // Delete country get id           
                 $(document).on('click', '.delete', function () {                 
                    let country_id = $(this).closest('tr').data('id') 
                    let delete_form = $('#deleteCountryForm');                    
                    $(delete_form).attr('data-id', country_id);
                });
                
                // Delete country request           
                $(document).on('submit', '#deleteCountryForm', function (e) {
                      e.preventDefault();                          
                      let id = $('#deleteCountryForm').data('id'); 
                       // success message show
                      let message = $('.modal').find('#addMessageShow');  

                      console.log(id);
                     // Form Data                    
                      let formData = {                         
                            _token: '{{csrf_token()}}'
                          }   

                      $.ajax({      
                          type: "POST",
                          url: 'country/delete/'+ id,  
                          data: formData,    
                          success:function(response) {                                    
                              if (response) {   
                                // clear error message
                                $(message).html(''); 
                                                          
                                // remove message 
                                $('.remove_message').remove();
                                $('.modal-footer').remove();

                                //delete success message show   
                                $(message).append('<div class="alert alert-success"><i class="bi bi-check-circle"></i> Country Deleted successfully </div>');                                
                               
                                // success message hide  and modal hide 
                                $(message).delay(5000).hide('slow');                                                                   
                                $("#deleteCountry").delay(5000).hide('slow'); 
                                $('.modal-backdrop.show').remove();        
                                // $('#deleteCountry').modal('reset');        

                                let country_delete = $('#countryDataAppend').find('tr[data-id="'+id+'"]');                           
                                $(country_delete).remove();     
                                     
                               
                                                             
                              }
                          },
                          error:function(error){                            
                            // valadation message show    
                          }
                      });
                }); 

              

           });
        })(jQuery);
    </script>

<script>
    $('#table1').load(document.URL +  ' #table1 tr');
</script>
@endsection
