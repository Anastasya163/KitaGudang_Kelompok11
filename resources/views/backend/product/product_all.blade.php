@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Product All</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">
                            <i class="fas fa-plus-circle"> Add Product </i>
                        </a> <br> <br>
                        <h4 class="card-title">Product All Data </h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Supplier Name</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($product as $key => $item)
                                <tr>
                                    <td> {{ $key+1}} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item['supplier']['name'] ?? 'N/A' }} </td>
                                    <td> {{ $item->quantity ?? 'N/A' }} </td>
                                    <td> {{ $item['unit']['name'] ?? 'N/A' }} </td>
                                    <td> {{ $item['category']['name'] ?? 'N/A' }} </td>
                                    <td> {{ \Carbon\Carbon::parse($item->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i:s') }}</td>                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>

@endsection
