<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        // dd($users);
       return view('dashboard.users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => ['required', 'regex:/^(079|078|077)\d{7}$/'],
            'address' => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);
        
        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->mobile = $request->input('mobile');
        $users->address = $request->input('address');
        $users->password = Hash::make ($request->input('password'));

        $users->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $users = User::findOrFail($id);
        // dd($users);

        return view('dashboard.users.edit', compact('users'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users , $id)
  {
    // $request->validate([
    //     'name' => 'required',
    //     'email' => 'required|email|unique:users,email',
    //     'mobile' => ['required', 'regex:/^(079|078|077)\d{7}$/'],
    //     'address' => 'required',
    //     'password' => [
    //         'required',
    //         'min:8',
    //         'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
    //     ]
    // ]);
        $users = User::findOrFail($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make ($request->input('password'));
        $users->mobile = $request->input('mobile');
        $users->address = $request->input('address');
        
        $users->save();

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
        //     $admins->image = $imageName;
        //     // $storedPath = $uploadedFile->store('public/photo');
        //     $admins->save();

        // }
        

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User deleted successfully.');
    }
}
