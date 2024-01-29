<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ProfileUpdateRequest;

class ProfileController extends Controller
{
    use FileUploadTrait;
    public function index()
    {
        $user = auth()->user();
        $context = [
            'user' => $user,
        ];
        return view('admin.profile.index', $context);
    }
    public function update(ProfileUpdateRequest $request)
    {
        $avatarPath = $this->uploadImage($request, 'avatar', auth()->user()->avatar);
        $bannerPath = $this->uploadImage($request, 'banner', auth()->user()->banner);

        $user = Auth::user();
        $user->avatar = !empty($avatarPath) ? $avatarPath : auth()->user()->avatar;
        $user->banner = !empty($bannerPath) ? $bannerPath : auth()->user()->banner;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->about = $request->about;
        $user->address = $request->address;
        $user->website = $request->website;
        $user->fb_link = $request->fb_link;
        $user->x_link = $request->x_link;
        $user->in_link = $request->in_link;
        $user->wa_link = $request->wa_link;
        $user->insta_link = $request->insta_link;
        $user->save();
        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }
}
