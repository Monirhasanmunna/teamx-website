<?php

namespace App\Http\Controllers\Admin\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyAn;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class WhyAnController extends Controller
{
    

    // create
    public function create(){

        return view('admin.home_page.why_an.create');

    }

    //index
    public function index(){
        $why_ans = WhyAn::all();
        return view('admin.home_page.why_an.index', compact('why_ans'));

    }


    public function store(Request $request){

        WhyAn::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('why_an.index');

    }


    // edit
    public function edit($id){
        $why_an = WhyAn::findOrFail($id);
        return view('admin.home_page.why_an.edit', compact('why_an'));

    }


    // update
    public function update(Request $request){

       $id = $request->id;

        WhyAn::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('why_an.index');

    }

    // delete
    public function delete($id){

        WhyAn::findOrFail($id)->delete();

        return back();

    }


}
