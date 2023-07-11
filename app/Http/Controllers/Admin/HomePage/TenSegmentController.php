<?php

namespace App\Http\Controllers\Admin\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenSegment;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class TenSegmentController extends Controller
{


    // create
    public function create(){

        return view('admin.home_page.ten_segment.create');

    }

    //index
    public function index(){
        $ten_segments = TenSegment::all();
        return view('admin.home_page.ten_segment.index', compact('ten_segments'));
    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'ten_segment'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(420,250)->save('uploads/home_pages/ten_segment/'.$imageName);
            $saveUrl = 'uploads/home_pages/ten_segment/'.$imageName;

            TenSegment::create([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('ten_segment.index');

    }


    // edit
    public function edit($id){
        $ten_segment = TenSegment::findOrFail($id);
        return view('admin.home_page.ten_segment.edit', compact('ten_segment'));

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
            $imageName = 'ten_segment'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(420,250)->save('uploads/home_pages/ten_segment/'.$imageName);
            $saveUrl = 'uploads/home_pages/ten_segment/'.$imageName;

            TenSegment::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            TenSegment::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('ten_segment.index');

    }

    // delete
    public function delete($id){

        $showData = TenSegment::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        TenSegment::findOrFail($id)->delete();

        return back();

    }


}
