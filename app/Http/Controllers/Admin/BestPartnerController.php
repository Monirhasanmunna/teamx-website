<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestPartner;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class BestPartnerController extends Controller
{



    // create
    public function create(){

        return view('admin.best_partner.create');

    }

    //index
    public function index(){

        $best_partners = BestPartner::all();
        return view('admin.best_partner.index', compact('best_partners'));

    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'best_partner'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(180,100)->save('uploads/best_partner/'.$imageName);
            $saveUrl = 'uploads/best_partner/'.$imageName;

            BestPartner::create([
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('bestpartner.index');

    }


    // edit
    public function edit($id){

        $best_partner = BestPartner::findOrFail($id);
        return view('admin.best_partner.edit', compact('best_partner'));

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
            $imageName = 'photo'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(180,100)->save('uploads/best_partner/'.$imageName);
            $saveUrl = 'uploads/best_partner/'.$imageName;

            BestPartner::findOrFail($id)->update([
                'created_at' => Carbon::now(),
                'photo' => $saveUrl,
            ]);
        }

        return redirect()->route('bestpartner.index');

    }

    // delete
    public function delete($id){

        $best_partners = BestPartner::findOrFail($id);

        if($best_partners->photo != null){
            $del_olg_photo = $best_partners->photo;
            unlink($del_olg_photo);
        }

        BestPartner::findOrFail($id)->delete();

        return back();

    }



}
