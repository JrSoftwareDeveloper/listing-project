@php

    $htmlString = (string) $dataTable->scripts(attributes: ['type' => 'module']);
    // dd($htmlString);

    // $scripts = ['admin/assets/js/page/category-page.js'];
    // // Start output buffering
    // ob_start();

    // // Echo the scripts
    // echo $dataTable->scripts(attributes: ['type' => 'module']);

    // // Get the output and clean the buffer
    // $dataTableScripts = ob_get_clean();

    // // Remove the script tags
    // $dataTableScripts = preg_replace('#<script(.*?)>(.*?)</script>#is', '$2', $dataTableScripts);

    $scripts = ['admin/assets/js/page/category-page.js'];
@endphp
<x-admin-layout :scripts="$scripts" :active="'category'" :rawScripts="$htmlString">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Categories</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary"><i
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
