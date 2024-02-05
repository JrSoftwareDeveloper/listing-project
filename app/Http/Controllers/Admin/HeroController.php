<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroUpdateRequest;
use App\Traits\FileUploadTrait;

class HeroController extends Controller
{
    //
    use FileUploadTrait;
    function index()
    {
        $hero = Hero::first();
        $context = [
            'hero' => $hero
        ];
        return view('admin.hero.index', $context);
    }
    public function update(HeroUpdateRequest $request)
    {
        $hero = Hero::first();
        $imagePath = $this->uploadImage($request, 'background', $hero->background);

        Hero::updateOrCreate(
            ['id' => 1],
            [
                'background' => !empty($imagePath) ? $imagePath : $hero->background,
                'title' => $request->title,
                'sub_title' => $request->sub_title
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
