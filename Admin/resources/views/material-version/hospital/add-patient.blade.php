@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
        
@stop

@section('content')
        <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Add Patient @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card dr-pro-pic">
                                <div class="card-body">
                                    <form method="post" class="card-box">
                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{ URL::asset('assets/images/users/patient-pro.png')}}"/>                                        
                                    </form>
                                    <form class="form-horizontal form-material mb-0">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="First Name" class="form-control" name="First_Name" id="First_Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Last Name" class="form-control" name="Last_Name" id="Last_Name">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <input type="text" placeholder="Admit Date" class="form-control" name="Admit_Date" id="Admit_Date">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" placeholder="Department" class="form-control" name="Department" id="Department">
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>                                                
                                            <div class="col-md-3">
                                                <input type="text" placeholder="Age" class="form-control" name="Age" id="Age">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Email" class="form-control" name="Email" id="Email">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" placeholder="Phone No" class="form-control" name="Phone_No" id="Phone_No">
                                            </div>   
                                            <div class="col-md-2">
                                                <input type="text" placeholder="ID0000" class="form-control" name="ID" id="ID">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" placeholder="Addvance Fees" class="form-control" name="Addvance_Fees" id="Addvance_Fees">
                                            </div>                                              
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Doctor Name" class="form-control" name="Doctor_Name" id="Doctor_Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Ward No" class="form-control" name="Ward_No" id="Ward_No">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="5" placeholder="Address..." class="form-control"></textarea>
                                            <button class="btn btn-danger btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Cancel</button>
                                            <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Save</button>                                                
                                        </div>
                                    </form>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->

@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/dropify/js/dropify.min.js')}}"></script>
                <script>
            $('.dropify').dropify();
        </script>

@stop