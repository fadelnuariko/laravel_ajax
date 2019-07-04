<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
class DataController extends Controller
{

    public function index(){
        $data['list'] = Data::All();
   
        return view('content.list_data',$data);
    }

    public function SimpanData(Request $request){
        
        $new_user = new Data;
        $new_user->nama = $request->get('nama');
        $new_user->umur = $request->get('umur');
        $new_user->save();

        return response()->json([
            'status'=>'OK',
            'data' => $new_user
        ]);

    }

    public function EditData(Request $request){
        
        $new_user = Data::find($request->get('id'));
        
        $new_user->nama = $request->get('nama');
        $new_user->umur = $request->get('umur');
        $new_user->save();

        return response()->json([
            'status'=>'OK',
            'data' => $new_user
        ]);

    }

    public function edit($id)
    {   
        $where = array('id' => $id);
        $data  = Data::where($where)->first();
 
        return response()->json([
            'status'=>'OK',
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        $data = Data::where('id',$id)->delete();
        
        return response()->json([
            'status'=>'OK',
            'data' => $data
        ]);
    }
}
