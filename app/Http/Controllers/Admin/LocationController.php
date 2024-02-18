<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\LocationDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LocationStoreRequest;
use App\Http\Requests\Admin\LocationUpdateRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LocationDataTable $dataTable)
    {
        return $dataTable->render('admin.location.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationStoreRequest $request)
    {
        $location = new Location();
        $location->name = $request->name;
        $location->slug = Str::slug($request->name);
        $location->show_at_home = $request->show_at_home;
        $location->active = $request->status;
        $location->save();

        toastr()->success('Location created successfully');
        return redirect()->route('admin.locations.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::findorFail($id);
        $context = [
            'location' => $location
        ];
        return view('admin.location.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationUpdateRequest $request, string $id)
    {
        $location = Location::findorFail($id);
        $location->name = $request->name;
        $location->slug = Str::slug($request->name);
        $location->show_at_home = $request->show_at_home;
        $location->active = $request->status;
        $location->save();

        toastr()->success('Location updated successfully');
        return redirect()->route('admin.locations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Location::findorFail($id)->delete();
        return response(['status' => 'success', 'message' => 'Location Deleted']);
    }
}
