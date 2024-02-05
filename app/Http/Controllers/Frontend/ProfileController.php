<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\ProfileUpdateRequest;

class ProfileController extends Controller
{
    //
    use FileUploadTrait;
    public function index()
    {
        $user = auth()->user();
        $context = [
            'user' => $user,
        ];
        return view('users.profile-dashboard', $context);
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

        toastr()->success('Profile updated successfully');
        return redirect()->back();
    }

    function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:5', 'confirmed']
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->success('Password Updated Successfully!');

        return redirect()->back();
    }
}
