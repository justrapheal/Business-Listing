<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    public function index()
    {
        //$listing = Listing::orderedBy('created_at','desc')->get();

                    //or

        $listing = Listing::latest()->get();
        return view('listings',compact('listing'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required'
        ]);
            $listing = new Listing();
            $listing->name = request('name');
            $listing->email = request('email');
            $listing->website = request('website');
            $listing->phone = request('phone');
            $listing->address = request('address');
            $listing->bio = request('bio');
            $listing->user_id = auth()->user()->id;
            $listing->save();
            return redirect('/dashboard')->with('ok','Listing  Added');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $listing = Listing::findOrFail($id);
        return view('showlisting',compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);
        return view('editlisting',compact('listing'));
// you could also use
        // return view('editlisting')->with('listing',$listing);
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

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required'
        ]);
            $listing =  Listing::find($id);
            $listing->name = request('name');
            $listing->email = request('email');
            $listing->website = request('website');
            $listing->phone = request('phone');
            $listing->address = request('address');
            $listing->bio = request('bio');
            $listing->user_id = auth()->user()->id;
            $listing->save();
            return redirect('/dashboard')->with('ok','Listing  Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();
        return redirect('/dashboard')->with('ok','Listing  Deleted');

    }
}
