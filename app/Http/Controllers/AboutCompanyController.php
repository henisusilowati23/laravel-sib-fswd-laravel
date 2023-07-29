<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutCompany::with('users')->get();
        return view('about-company.index', [
            'abouts' => $abouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about-company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        AboutCompany::create($validatedData);
        return redirect()
            ->route('about-company.index');
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
        $item = AboutCompany::findOrFail($id);

        return view('about-company.edit', [
            'item' => $item,
        ]);
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
        $validatedData = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        $item = AboutCompany::findOrFail($id);

        $item->update($validatedData);
        return redirect()
            ->route('about-company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AboutCompany::findOrFail($id);
        $item->delete();

        return redirect()
            ->route('about-company.index');
    }
}
