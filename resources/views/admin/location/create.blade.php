@php
    $scripts = ['admin/assets/js/page/create-category-page.js'];
@endphp
<x-admin-layout :scripts="$scripts" :active="'category'">
    {{-- <x-admin-layout :active="'category'"> --}}
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.locations.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Location</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.locations.index') }}">Location</a></div>
                <div class="breadcrumb-item active">Create</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Location</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.locations.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="">Show at Home <span class="text-danger">*</span></label>
                                    <select name="show_at_home" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
