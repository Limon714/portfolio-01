<?php

namespace App\Livewire;

use App\Models\About as ModelsAbout;
use Illuminate\Http\Request;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $data = ModelsAbout::get();
        return view('livewire.about',[
            'data'=>$data
           ]);
    }
    

    public function about(Request $request){
        if($request->add_to_update == "Add"){
            $home = request()->validate([
                'image'=>'required'
            ]);
            $home = new ModelsAbout;
        }else{
            $home = ModelsAbout::find($request->id);
        }
      
        
        $home->subheading = $request->subheading;
        $home->heading = $request->heading;
        $home->paragraph = $request->paragraph;

        if(!empty($request->file('image'))){

            if(!empty($home->image) && file_exists('about/images/' . $home->image))
            {
            unlink('about/images/' . $home->image);
            }

            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('about/images',$filename);
            $home->image =$filename;
        }


        $home->save();
        return redirect()->back()->with('status','Information Sucessfully Saved');
    
    }
}
