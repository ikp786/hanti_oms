@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Customer List</h4>

                    </div>
                    <a href="{{ route('admin.customers.create') }}" class="btn btn-primary add-list"><i
                            class="las la-plus mr-3"></i>Add Customer</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-table table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                {{--  <th>
                            <div class="checkbox d-inline-block">
                                <input type="checkbox" class="checkbox-input" id="checkbox1">
                                <label for="checkbox1" class="mb-0"></label>
                            </div>
                        </th>  --}}
                                <th>SR NO.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Latitude</th>
                                <th>Longtitude</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            @foreach ($customers as $key => $customer)
                                <tr <td>{{ $key + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->moblie }}</td>
                                    <td>{{ $customer->lat }}</td>
                                    <td>{{ $customer->long }}</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit" href="{{ route('admin.customers.edit',$customer->id) }}"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Delete" href="#"><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection
