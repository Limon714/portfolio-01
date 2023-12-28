<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $data = Home::get();
        return view ('front.home',[
            'data'=>$data
           ]);
    }

    public function Homepost(Request $request){
        if($request->add_to_update == "Add"){
            $home = new Home;
        }else{
            $home = Home::find($request->id);
        }
      
        $home->subheading = $request->subheading;
        $home->heading = $request->heading;
        $home->save();
        return redirect()->back()->with('status','Information Sucessfully Saved');
    }


}
