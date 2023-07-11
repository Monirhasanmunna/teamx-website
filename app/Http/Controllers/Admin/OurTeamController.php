<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class OurTeamController extends Controller
{
    

    // create
    public function create(){

        return view('admin.our_team.create');

    }

    //index
    public function index(){
        $our_teams = OurTeam::all();
        return view('admin.our_team.index', compact('our_teams'));
    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'our_team'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(250,250)->save('uploads/our_team/'.$imageName);
            $saveUrl = 'uploads/our_team/'.$imageName;

            OurTeam::create([
                'name' => $request->name,
                'title' => $request->title,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('our_team.index');

    }


    // edit
    public function edit($id){
        $our_team = OurTeam::findOrFail($id);
        return view('admin.our_team.edit', compact('our_team'));

    }


    // update
    public function update(Request $request){

        $id = $request->id;

        if($request->hasFile('photo')){

            if($request->old_photo != ''){
                $del_olg_photo = $request->old_photo;
                unlink($del_olg_photo);
            }


            $image = $request->file('photo');
            $imageName = 'our_team'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(250,250)->save('uploads/our_team/'.$imageName);
            $saveUrl = 'uploads/our_team/'.$imageName;

            OurTeam::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            OurTeam::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('our_team.index');

    }

    // delete
    public function delete($id){

        $showData = OurTeam::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        OurTeam::findOrFail($id)->delete();

        return back();

    }


}
