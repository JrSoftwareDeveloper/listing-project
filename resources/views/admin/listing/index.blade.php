@php

    $htmlString = (string) $dataTable->scripts(attributes: ['type' => 'module']);

@endphp
<x-admin-layout :active="'listing'" :rawScripts="$htmlString">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Listing</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Listing</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Listings</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.listing.create') }}" class="btn btn-primary"><i
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
