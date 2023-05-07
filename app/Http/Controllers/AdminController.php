<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Turf;
class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
         return view("admin.users",compact("data"));  
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
         return redirect()->back();  
    }

public function deleteturf($id)
{
    $data=turf::find($id);
    $data->delete();
    return redirect()->back();

}


    public function turfsmenu()
    {
        $data=turf::all();
       return view("admin.turfsmenu",compact("data"));
    }


    public function updateview($id)
    {
        $data=turf::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request ,$id)
    {
        $data=turf::find($id);

        $image=$request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('turfimage',$imagename);
         $data->image=$imagename;
         $data->title=$request->title;
         $data->price=$request->price;
         $data->description=$request->description; 
         $data->offer=$request->offer;
         $data->save();
          
          return redirect()->back();

    }

    public function upload(Request $request )
    {
       $data =new turf;

       $image=$request->image;

       $imagename = time() . '.' . $image->getClientOriginalExtension();
       $request->image->move('turfimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description; 
        $data->offer=$request->offer;
        $data->save();
         
         return redirect()->back();
        
    }



}
