@php
    $scripts = ['admin/assets/js/page/features-post-create.js', 'admin/assets/js/page/admin-profile.js'];
@endphp
<x-admin-layout :scripts="$scripts">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Create New Post</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Avatar</label>
                                            <div class="col-sm-12 col-md-7">
                                                <div id="avatar-preview" data-src="{{ asset($user->avatar) }}"
                                                    class="image-preview avatar-preview">
                                                    <label for="image-upload" id="avatar-label">Choose File</label>
                                                    <input type="file" name="avatar" id="avatar-upload" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner</label>
                                            <div class="col-sm-12 col-md-7">
                                                <div id="banner-preview" data-src="{{ asset($user->banner) }}"
                                                    class="image-preview banner-preview">
                                                    <label for="banner-upload" id="banner-label">Choose File</label>
                                                    <input type="file" name="banner" id="banner-upload" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $user->name }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $user->email }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ $user->phone }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $user->address }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="about">About <span class="text-danger">*</span></label>
                                            <textarea name="about" class="form-control" required>{{ $user->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="text" class="form-control" value="{{ $user->website }}"
                                                name="website" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fb_link">Facebook</label>
                                            <input type="text" class="form-control" value="{{ $user->fb_link }}"
                                                name="fb_link" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="x_link">Twitter</label>
                                            <input type="text" class="form-control" value="{{ $user->x_link }}"
                                                name="x_link" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="in_link">Linkedin</label>
                                            <input type="text" class="form-control" value="{{ $user->in_link }}"
                                                name="in_link" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wa_link">Whatsapp</label>
                                            <input type="text" class="form-control" value="{{ $user->wa_link }}"
                                                name="wa_link" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="insta_link">Instagram</label>
                                            <input type="text" class="form-control"
                                                value="{{ $user->insta_link }}" name="insta_link" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-0">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Password</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile-password.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wa_link">Password</label>
                                            <input type="password" class="form-control" name="password" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="insta_link">Confirm Password</label>
                                            <input type="password" class="form-control"
                                                name="password_confirmation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-0">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
