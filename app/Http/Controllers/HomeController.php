<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function Home(){
        $data = Home::get();
        $about = About::get();
        return view ('front.home',[
            'data'=>$data,
            'about'=>$about
           ]);
    }

    public function Homepost(Request $request){
        if($request->add_to_update == "Add"){
            $home = request()->validate([
                'image'=>'required'
            ]);
            $home = new Home;
        }else{
            $home = Home::find($request->id);
        }
      
        $home->subheading = $request->subheading;
        $home->heading = $request->heading;

        if(!empty($request->file('image'))){

            if(!empty($home->image) && file_exists('images/' . $home->image))
            {
            unlink('images/' . $home->image);
            }

            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('images',$filename);
            $home->image =$filename;
        }


        $home->save();
        return redirect()->back()->with('status','Information Sucessfully Saved');
    }



    // About Section

    
    
}
