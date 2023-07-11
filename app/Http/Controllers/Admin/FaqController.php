<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class FaqController extends Controller
{
    

    // create
    public function create(){

        return view('admin.faq.create');

    }

    //index
    public function index(){
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }


    public function store(Request $request){

        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('faq.index');

    }


    // edit
    public function edit($id){
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));

    }


    // update
    public function update(Request $request){

       $id = $request->id;

        Faq::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('faq.index');

    }

    // delete
    public function delete($id){

        Faq::findOrFail($id)->delete();

        return back();

    }


}
