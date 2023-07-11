<?php

namespace App\Http\Controllers\Admin\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\WhatYouWillGet;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class HomePageController extends Controller
{
    // create
    public function index(){
        $home_pages = Home::all();
        return view('admin.home_page.index', compact('home_pages'));
    }

    // Create and Update
    public function updateHome(Request $request)
    {
       // return $request->all();
        foreach ($request->types as $type) {

            if ($type === 'banner_img') {

                $this->upload($request->banner_img, 'banner_img');

            }elseif ($type === 'what_you_will_get_img') {

                $this->upload($request->what_you_will_get_img, 'what_you_will_get_img');

            }elseif ($type === 'six_desktop_img') {

                $this->upload($request->six_desktop_img, 'six_desktop_img');

            }elseif ($type === 'six_mobile_img') {

                $this->upload($request->six_mobile_img, 'six_mobile_img');

            }elseif ($type === 'road_map_img') {

                $this->upload($request->road_map_img, 'road_map_img');

            }  else {
                $business_settings = Home::where('key', $type)->first();
                if($business_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                       // $business_settings->status = json_encode($request['status']);
                    }
                    else {
                       // return $request['status'];
                        $business_settings->value = $request[$type];
                        if($type == 'countdown'){
                            $business_settings->status = $request['status'] ? true : false ;
                        }
                    }
                    $business_settings->save();
                }
                else{
                    $business_settings = new Home;
                    $business_settings->key = $type;
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
            }

        }

        return redirect()->route('home_page');

    }

    public function upload($request, $data)
    {

        if($request !== null){


            $imageName = $data.'.'. $request->getClientOriginalExtension();
            $saveUrl = 'uploads/home_pages/'.$data.'/';

            if (!file_exists($saveUrl)) {
                mkdir($saveUrl, 666, true);
            }
            Image::make($request)->save($saveUrl.$imageName);
            $business_settings = Home::where('key', $data)->first();
            if($business_settings == null){
                $business_settings = new Home;
                $business_settings->key = $data;
            }
            $business_settings->value = $saveUrl.$imageName;
            $business_settings->save();
        }
    }


    // whatYouGetCreate

    // create
    public function whatYouGetCreate(){

        return view('admin.home_page.what_you_get.create');

    }

    //index
    public function whatYouGetIndex(){
        $what_you_gets = WhatYouWillGet::all();
        return view('admin.home_page.what_you_get.index', compact('what_you_gets'));

    }


    public function whatYouGetStore(Request $request){

        WhatYouWillGet::create([
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('what_you_get.index');

    }


    // edit
    public function whatYouGetEdit($id){
        $what_you_get = WhatYouWillGet::findOrFail($id);
        return view('admin.home_page.what_you_get.edit', compact('what_you_get'));

    }


    // update
    public function whatYouGetUpdate(Request $request){

       $id = $request->id;

        WhatYouWillGet::findOrFail($id)->update([
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('what_you_get.index');

    }

    // delete
    public function whatYouGetDelete($id){

        WhatYouWillGet::findOrFail($id)->delete();

        return back();

    }



}
