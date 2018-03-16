<?php

namespace DummyNamespace\Http\Controllers\Web;

use Illuminate\Http\Request;

use DummyRootNamespaceHttp\Requests;
use DummyRootNamespaceHttp\Controllers\Controller;
use DummyNamespace\Repositories\DummyClassRepository;

class DummyClassController extends Controller
{
    private $DummySlugRepository;

    public function __construct(DummyClassRepository $DummySlugRepository)
    {
        $this->DummySlugRepository = $DummySlugRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $DummySlug = $this->DummySlugRepository->all();

        return view("DummySlug::index", compact("DummySlug"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("DummySlug::create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $DummySlug = $this->DummySlugRepository->create($request->all());

        return redirect()->route("DummySlug.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $DummySlug = $this->DummySlugRepository->get($id);
    
        return view("DummySlug::show", compact("DummySlug"));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $DummySlug = $this->DummySlugRepository->get($id);
    
        return view("DummySlug::update", compact("DummySlug"));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $DummySlug = $this->DummySlugRepository->update($id, $request->all());

        return redirect()->route("DummySlug.edit", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $DummySlug = $this->DummySlugRepository->delete($id);

        return redirect()->route("DummySlug.index");
    }
}
