<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


class locationcontroller extends Controller
{
   


   

    public function savelocations(Request $requset){
        //dd($requset->all());

        $this->validate($requset,[
            'Lname'=>'required',
            'Ldesc'=>'required',
            'NBH'=>'required',
            'filename'=>'required',
        ]);

        $location = new Location;

        $location->location_name=$requset->Lname;
        $location->location_Description=$requset->Ldesc;
        $location->Nearest_Hotels=$requset->NBH;
        $location->Gallery=$request->filename;

        $location->save();
        //return redirect()->back();

        $data= Location::all();
        return view('Addlocation')->with('Addlocation',$data);


    }

    //public function log(){
     //   return view('login');
    //}

    public function delete($id){
        
        $location=Location::find($id);
        $location->delete();
        return redirect()->back();
    }

    public function update($id){
        $location=Location::find($id);

        return view('updatelocation')->with('updatelocation',$location);
    }


    public function updateslocation(Request $requset){
         
        $id=$request->id;
        $location=$request->Lname;
        $location=$request->Ldesc;
        $location=$request->NBH;
        $location=$request->filename;
        $data=Location::find($id);
        $data->location_name=$location;
        $data->location_Description=$location;
        $data->Nearest_Hotels=$location;
        $data->Gallery=$location;
        $data1=Location::all();
        return view('Addlocation')->with('Addlocation',$data1);


    }
}
