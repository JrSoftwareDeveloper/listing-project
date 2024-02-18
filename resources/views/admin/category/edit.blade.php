@php
    $scripts = ['admin/assets/js/page/edit-category-page.js'];
@endphp
<x-admin-layout :scripts="$scripts" :active="'category'">
    {{-- <x-admin-layout :active="'category'"> --}}
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Category</a></div>
                <div class="breadcrumb-item active">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Icon Image <span class="text-danger">*</span></label>
                                            <div id="image-preview" class="image-preview icon-image"
                                                data-src="{{ asset($category->image_icon) }}">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="image_icon" id="image-upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Background Image <span
                                                    class="text-danger">*</span></label>
                                            <div id="image-preview-2" class="image-preview background-image"
                                                data-src="{{ asset($category->background_image) }}">
                                                <label for="image-upload-2" id="image-label-2">Choose File</label>
                                                <input type="file" name="background_image" id="image-upload-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $category->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Show at Home <span class="text-danger">*</span></label>
                                    <select name="show_at_home" class="form-control">
                                        <option value="0" @selected($category->show_at_home === 0)>No
                                        </option>
                                        <option value="1" @selected($category->show_at_home === 1)>Yes
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1" @selected($category->status === 1)>Active
                                        </option>
                                        <option value="0" @selected($category->status === 0)>Inactive
                                        </option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
