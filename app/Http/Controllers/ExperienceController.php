<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;


class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exp = Experience::all();
        return view('project.project', compact('exp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm(Request $request)
    {
        return view('project.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExperienceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperienceRequest $request)
    {

        $request['user_id'] = auth()->user()->id;
        // dd($request['user_id'] = auth()->user()->id);
        // dd($request->companyName);


        $this->validate($request, [
            'title'=>'required',
            'companyName'=>'required',
            'year'=>'required',
            'projectName'=>'required',
            'url'=>'required'

        ]);


        // dd('title');
        $exp                    = new Experience();
        $exp->title             = $request->input('title');
        $exp->companyName       = $request->input('companyName');
        $exp->year              = $request->input('year');
        $exp->projectName       = $request->input('projectName');
        $exp->url               = $request->input('url');
        $exp->save();

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        return response()->json([
            "status"=>"Success",
            "data"=>$experience
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExperienceRequest  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
