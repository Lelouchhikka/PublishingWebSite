<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        $aboutUs = AboutUs::all()->firstOrFail();

        return view('aboutUs.index',compact('aboutUs'));
    }


    public function show(AboutUs $aboutUs)
    {
        return view('aboutUs.show', compact('aboutUs'));
    }


    public function edit( $aboutUs)
    {
        $aboutUs=AboutUs::all()->where('id',$aboutUs)->firstOrFail();
        return view('aboutUs.edit', compact('aboutUs'));
    }


    public function update(Request $request, AboutUs $aboutUs): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'description' ,
            'contacts' ,
        ]);
       AboutUs::all()->firstOrFail('id',1)->update($request->all());
        return redirect()->route('aboutUs.index');
    }


}
