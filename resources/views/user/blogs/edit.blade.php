@extends('admin.layouts.app')

@section('title')
Create Product
@endsection


@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
                <div>
                    <a href="{{ route('products.index') }}"
                        class="btn btn-light rounded font-sm mr-5 text-body hover-up">Back</a>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-3">
                                <h6>1. General info</h6>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Blog title</label>
                                    <input type="text" name="title" value="{{ old('title') ?? $blog->title }}"
                                        placeholder="Type here" class="form-control">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" placeholder="Type here" class="form-control"
                                        rows="4">{{ old('description') ?? $blog->description }}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr class="mb-4 mt-0">
                        <div class="row">
                            <div class="col-md-3">
                                <h6>3. Category</h6>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    @foreach ($blogCategories as $category)
                                    <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                        <input class="form-check-input" {{ $category->id === $blog->blog_category_id
                                        ?
                                        'checked' : '' }} name="blog_category_id"
                                        value="{{ $category->id }}" type="radio">
                                        <span class="form-check-label"> {{ $category->name }} </span>
                                    </label>
                                    @endforeach
                                </div>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr class="mb-4 mt-0">

                        <hr class="mb-4 mt-0">
                        <div class="row">
                            <div class="col-md-3">
                                <h6>4. Media</h6>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Images</label>
                                    <input name="image" class="form-control" type="file">
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> <!-- col.// -->
                        </div> <!-- .row end// -->
                        <div class="text-end">

                            <button type="submit" class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection