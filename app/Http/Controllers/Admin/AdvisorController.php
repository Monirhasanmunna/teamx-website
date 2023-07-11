<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisor;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class AdvisorController extends Controller
{
    

    // create
    public function create(){

        return view('admin.advisor.create');

    }

    //index
    public function index(){
        $advisors = Advisor::all();
        return view('admin.advisor.index', compact('advisors'));
    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'advisor'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(240,250)->save('uploads/advisor/'.$imageName);
            $saveUrl = 'uploads/advisor/'.$imageName;

            Advisor::create([
                'name' => $request->name,
                'title' => $request->title,
                'fb_link' => $request->fb_link,
                'youtube_link' => $request->youtube_link,
                'linkdin_link' => $request->linkdin_link,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('advisor.index');

    }


    // edit
    public function edit($id){
        $advisor = Advisor::findOrFail($id);
        return view('admin.advisor.edit', compact('advisor'));

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
            $imageName = 'advisor'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(240,250)->save('uploads/advisor/'.$imageName);
            $saveUrl = 'uploads/advisor/'.$imageName;

            Advisor::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'fb_link' => $request->fb_link,
                'youtube_link' => $request->youtube_link,
                'linkdin_link' => $request->linkdin_link,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            Advisor::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'fb_link' => $request->fb_link,
                'youtube_link' => $request->youtube_link,
                'linkdin_link' => $request->linkdin_link,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('advisor.index');

    }

    // delete
    public function delete($id){

        $showData = Advisor::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        Advisor::findOrFail($id)->delete();

        return back();

    }



}
