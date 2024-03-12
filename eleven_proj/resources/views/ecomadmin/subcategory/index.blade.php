@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Sub Category Add</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub-Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Sub Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-center">Ad Sub Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    @if($categories->count() > 0)
                    <form class="form-horizontal" action="{{route('subCategory.create')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" id="">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" placeholder="Enter your Sub Category Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Sub Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="description" placeholder="Enter Sub Category Description" type="text"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Sub Category Image </label>
                            <div class="col-md-9">
                                <input class="form-control" name="image" placeholder="Enter Sub Category Image" type="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="ckbox">
                                    <input type="checkbox"><span class="text-13">I agree terms and conditions</span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Sub Category</button>
                    </form>
                    @else
                        <div class="dimmer active">
                            <div class="spinner1-lg">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                        </div>

                        <h2 class="text-center">Category data not found</h2>
                        <p class="text-center">Sub-Category Under Category. So, create a category first.</p>

                        <div class="text-center">
                            <a href="{{route('category.add')}}" class="btn btn-radius btn-primary mt-3">Return Add Category</a>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
