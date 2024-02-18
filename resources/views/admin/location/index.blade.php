@php

    $htmlString = (string) $dataTable->scripts(attributes: ['type' => 'module']);

    $scripts = ['admin/assets/js/page/category-page.js'];
@endphp
<x-admin-layout :scripts="$scripts" :active="'location'" :rawScripts="$htmlString">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Location</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Location</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All locations</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.locations.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> &nbsp;Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
