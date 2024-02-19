<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Models\Amenity;
use Illuminate\Http\Request;
use App\DataTables\AmenityDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AmenityStoreRequest;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AmenityDataTable $dataTable)
    {
        return $dataTable->render('admin.amenity.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.amenity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmenityStoreRequest $request)
    {
        $amenity = new Amenity();
        $amenity->icon = $request->icon;
        $amenity->name = $request->name;
        $amenity->slug = Str::slug($request->name);
        $amenity->status = $request->status;
        $amenity->save();

        toastr()->success('Amenity created successfully');
        return redirect()->route('admin.amenity.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amenity = Amenity::findOrFail($id);
        return view('admin.amenity.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AmenityStoreRequest $request, string $id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenity->icon = $request->icon;
        $amenity->name = $request->name;
        $amenity->slug = Str::slug($request->name);
        $amenity->status = $request->status;
        $amenity->save();

        toastr()->success('Amenity updated successfully');
        return redirect()->route('admin.amenity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Amenity::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => 'Amenity deleted successfully']);
    }
}
