@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Management</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Unit management</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Unit List Table</h3>
                </div>

                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>

                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">Sl NO.</th>
                                    <th class="border-bottom-0">Unit Name</th>
                                    <th class="border-bottom-0">Unit Description</th>
                                    <th class="border-bottom-0">Unit Image</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($units as $unit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $unit->name }}</td>
                                        <td>{{ Str::limit($unit->description, 20) }}</td>
                                        <td><img src="{{ asset( $unit->image )}}" alt="{{ $unit->name }}" width="100"></td>
                                        <td>
                                            <a href="" class="btn btn-info">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('unit.delete', ['id' => $unit->id])}}" onclick="return confirm('Are you sure you want to delete this Unit?')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


@endsection
