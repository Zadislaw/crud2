<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $crud = Profile::all();
    return $crud;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile = new Profile;

         $profile->first_name = $request->fname;
         $profile->last_name = $request->lname;
         $profile->dbo = $request->dbo;
         $profile->gender = $request->gender;
         $profile->email = $request->email;
         $profile->updated_at = $request->updated_at;
         $profile->created_at = $request->created_at;

         $profile->save();

        return "Profile Saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $profiles = Profile::all();
        return view('profile.grid', ['profiles' => $profiles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edits', ['profile' => $profile]);
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
        $profile = Profile::findOrFail($id);
        $profile->update([

            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'dbo' => $request->dbo,
            'gender' => $request->gender,
            'email' => $request->email,
            'updated_at' => $request->updated_at,
            'created_at' => $request->created_at,

        ]);

        return "Profile Updated.";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile=Profile::findOrFail($id);
        $profile->delete();
        return "Profile deleted...";
    }
}
