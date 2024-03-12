@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Brand Management</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Brand List Table</h3>
                </div>

                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    @if($brands->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">Sl NO.</th>
                                    <th class="border-bottom-0">Brand Name</th>
                                    <th class="border-bottom-0">Brand Description</th>
                                    <th class="border-bottom-0">Brand Image</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>{{ Str::limit($brand->description, 20) }}</td>
                                        <td><img src="{{ asset( $brand->image )}}" alt="{{ $brand->name }}" width="100"></td>
                                        <td>
                                            <a href="" class="btn btn-info">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('brand.delete', ['id' => $brand->id])}}" onclick="return confirm('Are you sure you want to delete this Brand?')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="dimmer active">
                            <div class="spinner1-lg">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                        </div>

                        <h2 class="text-center">Brand data not found or created</h2>
                        <div class="text-center">
                            <a href="{{route('brand.add')}}" class="btn btn-radius btn-primary mt-3">Return Add Brand</a>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


@endsection
