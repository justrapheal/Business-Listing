<?php

namespace App\Http\Controllers;
use App\Listing;
use App\Mail\ReportFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Searchable\Search;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::paginate()->random(3);
        return view('Listing',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::to('augustinerapheal@yahoo.com')->send( new ReportFormMail($data));
        return view('/message')->with('message','succefully sent a mail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Listing::class, 'name')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
