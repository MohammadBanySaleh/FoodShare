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
        // $relativeImagePath = null; // Initialize relativeImagePath as null

        // $newImageName = uniqid() . '-' . $request->addedCategoryName . '.' . $request->file('image')->extension();
        // $relativeImagePath = 'assets/images/' . $newImageName;
        // $request->file('image')->move(public_path('assets/images'), $newImageName);

        // Validate and store the new employee record
    // $request->validate([
    //     'name' => 'required',
    //     // 'image' => 'required', // Adjust validation rules as needed,
    //     'email' => 'required',
    //     'mobile' => 'required',
    //     'address' => 'required',
        
    // ]);
    $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->mobile = '0799999';
        // $user->address = 'irbid';
        // $user->is_logged = true;
        $user->password = Hash::make ($request->input('password'));
    // User::create([
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'mobile' => $request->input('mobile'),
    //     'address' => $request->input('address'),
    //     // 'image' => $relativeImagePath,
    // ]);

    $user->save();


    // if ($request->hasFile('image')) {
    //     $image = $request->file('image');
    //     $imageName = time() . '.' . $image->getClientOriginalExtension();
    //     $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
    //        }
    // $fn=time().'.'.$request->photo->getClientOriginalName();
    //     $request->photo->move(public_path('uploads'),$fn);

    // Category::create($validatedData);

    return redirect()->route('users.index');
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
    // dd($request->all());
   
    //   $request->validate([
    //       'name' => 'required',
    //       'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
    //       Add any desired image validation rules
    //       'email' => 'required|email'. $id,
    //       'password' => [
    //           'required',
    //           'min:8',
    //           'regex:/^(?=.[A-Z])(?=.[a-z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%*?&]+$/']]);

        $users = User::findOrFail($id);


        // $admins = new Admin();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make ($request->input('password'));
        
        

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
        //     $admins->image = $imageName;
        //     // $storedPath = $uploadedFile->store('public/photo');
        //     $admins->save();

        // }
        try {
            $users->save();
        } catch (\Exception $e) {
            // Log or dd the exception to see the error message
            dd($e->getMessage());
        }

        // $admins->save();

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
