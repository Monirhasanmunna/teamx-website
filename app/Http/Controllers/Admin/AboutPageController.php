<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\AboutKeyObjective;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class AboutPageController extends Controller
{


    // create
    public function index(){
        return view('admin.about_us_page.index');
    }

    // Create and Update
    public function updateHome(Request $request){


        foreach ($request->types as $type) {

            if ($type === 'know_about_img') {

                $this->upload($request->know_about_img, 'know_about_img');

            }elseif ($type === 'mission_img') {

                $this->upload($request->mission_img, 'mission_img');

            }elseif ($type === 'vission_img') {

                $this->upload($request->vission_img, 'vission_img');

            }else {
                $business_settings = AboutUs::where('key', $type)->first();
                if($business_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
                else{
                    $business_settings = new AboutUs;
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

        return redirect()->route('about_page');

    }

    public function upload($request, $data)
    {

        if($request !== null){


            $imageName = $data.'.'. $request->getClientOriginalExtension();
            $saveUrl = 'uploads/About_us_pages/'.$data.'/';

            if (!file_exists($saveUrl)) {
                mkdir($saveUrl, 666, true);
            }
            Image::make($request)->save($saveUrl.$imageName);
            $business_settings = AboutUs::where('key', $data)->first();
            if($business_settings == null){
                $business_settings = new AboutUs;
                $business_settings->key = $data;
            }
            $business_settings->value = $saveUrl.$imageName;
            $business_settings->save();
        }
    }



    // Key Objective Part
    
    // create
    public function keyObjectiveCreate(){

        return view('admin.about_us_page.key_objective.create');

    }

    //index
    public function keyObjectiveIndex(){
        $key_objectives = AboutKeyObjective::all();
        return view('admin.about_us_page.key_objective.index', compact('key_objectives'));

    }


    public function keyObjectiveStore(Request $request){

        AboutKeyObjective::create([
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('key_objective.index');

    }


    // edit
    public function keyObjectiveEdit($id){
        $key_objective = AboutKeyObjective::findOrFail($id);
        return view('admin.about_us_page.key_objective.edit', compact('key_objective'));

    }


    // update
    public function keyObjectiveUpdate(Request $request){

       $id = $request->id;

        AboutKeyObjective::findOrFail($id)->update([
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('key_objective.index');

    }

    // delete
    public function keyObjectiveDelete($id){

        AboutKeyObjective::findOrFail($id)->delete();

        return back();

    }



}
