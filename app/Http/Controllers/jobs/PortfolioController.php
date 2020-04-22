<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $jobs = portfolio::orderBy('created_at', 'DESC')->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' - Portfólio',
            'Alguns cases de sucesso que ajudamos a construir. Nosso portfólio.',
            url(env('APP_URL')),
            asset('front/assets/images/starwars.jpg')
        );
        return view('front.portfolio', [
            'jobs' => $jobs,
            'head' => $head
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($uri)
    {
        $job = portfolio::where('uri', $uri)->first();
        $head = $this->seo->render(
            env('APP_NAME') . ' - Case: '. $job->company,
            $job->title,
            url(env('APP_URL')),
            \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumJobs($job->cover, 1080))
        );
        return view('front.job', [
            'job' => $job,
            'head' => $head
        ]);
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
