<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\RoomInfo;
class RoomInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_infos= RoomInfo::all();
        return view('room_info.index')->with('room_infos',$room_infos);
        //return view('room_info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RoomInfo::create($request->all());
        return redirect()->route('room-infos.index');
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
        //return view('room_info.update');
        $room_infos= RoomInfo::findOrFail($id);
        return view('room_info.update')->with('room_infos',$room_infos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return view('room_info.update');
        RoomInfo::findOrFail($id)->update($request->all());
        return redirect()->route('room-infos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room_info = RoomInfo::find($id);
        $room_info->delete();
        return redirect()->route('room-infos.index');
    }
}
