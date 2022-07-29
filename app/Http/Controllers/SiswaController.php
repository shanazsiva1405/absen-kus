<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\models\siswa;
use Validator;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $user = siswa::paginate(4);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $user = siswa::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('siswa.index', compact('user'));
    }//end method

    public function create()
    {
        return view('siswa.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama'=>'required|max:100',
            'email'=>'required|email|max:255|unique:users',
            // 'password'=>'required|min:8',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('siswa.create')->withInput()->withErrors($validasi);
        }

        // $data['password'] = bcrypt($data['password']);
        siswa::create($data);
        return redirect()->route('siswa.index');
    }//end method

    public function destroy($id)
    {
        $data = siswa::find($id);
        $data->delete();
        return redirect()->route('siswa.index');  
    }//end method

    
    public function show($id)
    {
        $user = siswa::findOrFail($id);
        return view('siswa.show',compact('user'));
    }

    public function edit($id)
    {
        $user = siswa::findOrFail($id);
        return view('siswa.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, $id)
    {
    $user = siswa::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
     'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users,email,'.$id,
           
           
        ]);
        if($validasi->fails())
        {
            return redirect()->route('siswa.create',[$id])->withErrors($validasi);
        }

      
       $user->update($data);

       return redirect()->route('siswa.index');
    }
   

    
}
