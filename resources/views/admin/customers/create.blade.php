@extends('admin.layouts.master')
@section('content')
<div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Customer</h4>
                        </div>
                    </div>
                    <div class="card-body">
                   {!! Form::open(['route' => 'admin.customers.store', 'method' => 'post']) !!}
                            <div class="row">                               
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                         {!! Form::label('name', 'Name*') !!}
                                         {!! Form::text('name', '', ['class' => ' form-control', 'placeholder' => 'Enter Name']) !!}                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                         {!! Form::label('mobile', 'Mobile*') !!}
                                         {!! Form::text('mobile', '', ['class' => ' form-control', 'placeholder' => 'Enter Mobile Number']) !!}     
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         {!! Form::label('lat', 'Latitude*') !!}
                                         {!! Form::text('lat', '', ['class' => ' form-control', 'placeholder' => 'Enter Latitude']) !!}     
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         {!! Form::label('long', 'Longtitude*') !!}
                                         {!! Form::text('long', '', ['class' => ' form-control', 'placeholder' => 'Enter Longtitude']) !!}     
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection