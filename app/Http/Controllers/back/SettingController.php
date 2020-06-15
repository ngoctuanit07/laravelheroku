<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting\Setting;
use App\Http\Requests\Setting\StoreSetting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $settings = Setting::orderBy('created_at', 'DESC')->paginate(15);

        return view("back.page.setting.index", compact('settings'))
        ->with('i', ($request->input('page', 1) - 1) * 15)->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $setting = Setting::find($id);
        return view('back.page.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSetting $request, $id)
    {
        //
        $setting = Setting::find($id);
        $setting->name = $request->input('name');
        $setting->address = $request->input('address');
        $setting->address = $request->input('address');
        $setting->address = $request->input('address');
        $setting->keyword = $request->input('keyword');
        $setting->meta_title = $request->input('meta_title');
        $setting->meta_keyword = $request->input('meta_keyword');
        $setting->meta_description = $request->input('meta_description');
        $setting->save();
        return redirect()->route('setting.index')
        ->with('success', 'Setting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}