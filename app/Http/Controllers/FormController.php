<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'pasien' => 'required|min:4|max:20',
           'dokter' => 'required',
           'condition' => 'required|max:255',
           'temperature' => 'required|numeric|min:35|max:45.5',
           'image' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048'
        ]);
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        $request->image_name = $imageName;
        $request->msg = 'success';
 		
        return view('proses',['data' => $request]);
    }
}