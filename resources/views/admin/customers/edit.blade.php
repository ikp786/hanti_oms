@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @include('admin.inc.validation_message')
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Customer</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        {!! Form::model($customer, ['method' => 'PATCH','route' => ['admin.customers.update', $customer->id],'files' => true]) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name*') !!}
                                    {!! Form::text('name', $customer->name, ['class' => ' form-control', 'placeholder' => 'Enter Name']) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('mobile', 'Mobile*') !!}
                                    {!! Form::text('mobile', $customer->mobile, ['class' => ' form-control', 'placeholder' => 'Enter Mobile Number']) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lat', 'Latitude*') !!}
                                    {!! Form::text('lat', $customer->lat, ['class' => ' form-control', 'placeholder' => 'Enter Latitude']) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('long', 'Longtitude*') !!}
                                    {!! Form::text('long', $customer->long, ['class' => ' form-control', 'placeholder' => 'Enter Longtitude']) !!}
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
