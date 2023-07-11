<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnyQuestion;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class AnyQuestionController extends Controller
{


    //index
    public function index(){

        $any_questions = AnyQuestion::all();
        return view('frontend.any_question.index', compact('any_questions'));

    }

    // store 
    public function store(Request $request){

        AnyQuestion::create([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('frontend.faq');

    }

    // edit
    public function edit($id){
        $any_question = AnyQuestion::findOrFail($id);
        return view('frontend.any_question.edit', compact('any_question'));

    }


}