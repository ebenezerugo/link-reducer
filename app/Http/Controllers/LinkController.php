<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use QrCode;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('links'));
    }

    public function indexApi()
    {
        return Link::orderBy('created_at', 'desc')->get();
    }

    public function qrCode() {
        return QrCode::size(500)->backgroundColor(239,243,198)->generate('W3Adda Laravel Tutorial');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'description'=>'',
            'link'=>'required'
        ]);

        $generatedCode = Link::generateQrCode($request->get('link'));

        // $link = new Link([
        //     'name' => $request->get('name'),
        //     'description' => $request->get('description'),
        //     'link' => $request->get('link'),
        //     'qrCode' => $generatedCode['qrCode']
        // ]);
        // $link->save();
        Link::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'qrCode' => $generatedCode['qrCode']
        ]);

        return redirect('/')->with('success', 'Link saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return redirect('/')->with('success', 'Update feature coming soon!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect('/')->with('success', 'Link deleted!');
    }
}
