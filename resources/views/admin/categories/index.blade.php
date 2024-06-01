@extends('admin.layouts.app')

@section('title')
Categories
@endsection

@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Categories</h2>
            <p>Add, edit or delete a category</p>
        </div>
        <div>
            <input type="text" placeholder="Search Categories" class="form-control bg-white">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form
                        action="{{ !isset($category) ? route('categories.store') : route('categories.update', $category->id)}}"
                        method="POST">
                        @csrf
                        @isset($category)
                        @method('PUT')
                        @endisset
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Name</label>
                            <input type="text" placeholder="Type here" name="name" class="form-control"
                                id="product_name" value="{{ old('name') ?? $category->name ?? ''}}" />
                        </div>
                        <div class="mb-4">
                            <label for="product_slug" class="form-label">Slug</label>
                            <input type="text" placeholder="Type here" name="slug" class="form-control"
                                id="product_slug" value="{{ old('slug') ?? $category->slug ?? '' }}" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <textarea placeholder="Type here" name="desc"
                                class="form-control">{{ old('desc') ?? $category->desc ?? '' }}</textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">
                                @isset($category)
                                Update category
                                @endisset
                                @empty($category)
                                Create category
                                @endempty

                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" />
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Order</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" />
                                        </div>
                                    </td>
                                    <td>{{ $category->id }}</td>
                                    <td><b>{{ $category->name }}</b></td>
                                    <td>{{ $category->desc }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->id }}</td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown"
                                                class="btn btn-light rounded btn-sm font-sm"> <i
                                                    class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('categories.edit', $category->id) }}">Edit
                                                    info</a>
                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="dropdown-item text-danger"
                                                        value="Delete" />
                                                </form>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- .col// -->
            </div> <!-- .row // -->
        </div> <!-- card body .// -->
    </div> <!-- card .// -->
</section> <!-- content-main end// -->
@endsection