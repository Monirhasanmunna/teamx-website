<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\OthersBanner;
use Intervention\Image\Facades\Image;
use File;

class OthersBannerController extends Controller
{
    

    // index
    public function index(){
        return view('admin.others_banner.index');
    }

    // Update
    public function update(Request $request){


        foreach ($request->types as $type) {

            if ($type === 'about_banner') {

                $this->upload($request->about_banner, 'about_banner');

            }elseif ($type === 'advisor_banner') {

                $this->upload($request->advisor_banner, 'advisor_banner');

            }elseif ($type === 'our_team_banner') {

                $this->upload($request->our_team_banner, 'our_team_banner');

            }elseif ($type === 'gallery_banner') {

                $this->upload($request->gallery_banner, 'gallery_banner');

            }elseif ($type === 'event_banner') {

                $this->upload($request->event_banner, 'event_banner');

            }elseif ($type === 'faq_banner') {

                $this->upload($request->faq_banner, 'faq_banner');

            }elseif ($type === 'contact_banner') {

                $this->upload($request->contact_banner, 'contact_banner');

            } else {
                $business_settings = OthersBanner::where('key', $type)->first();
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
                    $business_settings = new OthersBanner;
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

        return redirect()->route('others_banner');

    }

    public function upload($request, $data)
    {

        if($request !== null){


            $imageName = $data.'.'. $request->getClientOriginalExtension();
            $saveUrl = 'uploads/others_banner/'.$data.'/';

            if (!file_exists($saveUrl)) {
                mkdir($saveUrl, 666, true);
            }
            Image::make($request)->save($saveUrl.$imageName);
            $business_settings = OthersBanner::where('key', $data)->first();
            if($business_settings == null){
                $business_settings = new OthersBanner;
                $business_settings->key = $data;
            }
            $business_settings->value = $saveUrl.$imageName;
            $business_settings->save();
        }
    }
    

}
