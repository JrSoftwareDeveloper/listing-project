    <div id="breadcrumb_part">
        <div class="bread_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center text-white">
                        <h4>{{ $title }}</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item active" aria-current="page"> sign in </li> --}}
                                @if (!empty($breadcrumbArray))
                                    @foreach ($breadcrumbArray as $name => $url)
                                        <li class="breadcrumb-item">
                                            <a href="{{ $url }}">{{ $name }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
