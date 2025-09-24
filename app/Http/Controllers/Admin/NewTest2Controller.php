<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NewTest2DataTable;
use App\Http\Requests;
use App\Helpers\FileHelper;
use App\Http\Requests\NewTest2CreateRequest;
use App\Http\Requests\NewTest2UpdateRequest;
use App\Models\NewTest2;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;

class NewTest2Controller extends AppBaseController
{

    public function index(NewTest2DataTable $newTest2DataTable)
    {
        $this->authorize('NewTest2-view');
        $newTest2s = NewTest2::all();
        return $newTest2DataTable->render('admin.new_test2s.index', compact('newTest2s'));
    }


    public function create()
    {
        $this->authorize('NewTest2-create');
        return view('admin.new_test2s.create');
    }


    public function store(NewTest2CreateRequest $request)
    {
        $this->authorize('NewTest2-create');
        $newTest2 = NewTest2::create($request->validated());

        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.newTest2s.index'));
    }


    public function show($id)
    {
        $this->authorize('NewTest2-view');
        $newTest2 = NewTest2::findOrFail($id);
        return view('admin.new_test2s.show')->with('newTest2', $newTest2);
    }


    public function edit($id)
    {
        $this->authorize('NewTest2-update');
        $newTest2 = NewTest2::findOrFail($id);
        return view('admin.new_test2s.edit')->with('newTest2', $newTest2);
    }


    public function update($id, NewTest2UpdateRequest $request)
    {
        $this->authorize('NewTest2-update');
        $newTest2 = NewTest2::findOrFail($id);
        $imageName = FileHelper::uploadImage($request, $newTest2, ['image', 'imageHeight' => 300, 'imageWidth' => 300]);
        $status = $request->status ?? 0;
        $newTest2->fill(array_merge($request->validated(), ['image' => $imageName, 'status' => $status]))->save();

        notify()->success(__("Successfully Updated"), __("Success"));
        return back();
    }


    public function destroy($id)
    {
        $this->authorize('NewTest2-delete');
        $newTest2 = NewTest2::findOrFail($id);
        FileHelper::deleteImage($newTest2);
        $newTest2->delete();

        notify()->success(__("Successfully Deleted"), __("Success"));
        return redirect(route('admin.newTest2s.index'));
    }
}
