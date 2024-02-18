<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use App\DataTables\CategoryDataTable;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;

class CategoryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $iconPath = $this->uploadImage($request, 'image_icon');
        $backgroundPath = $this->uploadImage($request, 'background_image');

        $category = new Category();
        $category->name = $request->name;
        $category->image_icon = $iconPath;
        $category->background_image = $backgroundPath;
        $category->slug = Str::slug($request->name);
        $category->show_at_home = $request->show_at_home;
        $category->status = $request->status;
        $category->save();

        toastr()->success('Created Successfully');
        return to_route('admin.categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $context = [
            'category' => $category,
        ];
        return view('admin.category.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        $iconPath = $this->uploadImage($request, 'image_icon', $category->image_icon);
        $backgroundPath = $this->uploadImage($request, 'background_image', $category->background_image);

        $category->name = $request->name;
        $category->image_icon = $iconPath;
        $category->background_image = $backgroundPath;
        $category->slug = Str::slug($request->name);
        $category->show_at_home = $request->show_at_home;
        $category->status = $request->status;
        $category->save();

        toastr()->success('Update Successfully');
        return to_route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $this->deleteImage($category->image_icon);
        $this->deleteImage($category->background_image);
        $category->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
