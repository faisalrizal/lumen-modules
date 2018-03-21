<?php

namespace DummyNamespace\Http\Controllers\Api;

use Illuminate\Http\Request;

use DummyRootNamespaceHttp\Requests;
use DummyRootNamespaceHttp\Controllers\Controller;
use DummyNamespace\Repositories\DummyClassRepository;
use DummyNamespace\Transformers\DummyClassTransformer;
use Dingo\Api\Routing\Helpers;

class DummyClassController extends Controller
{
    use Helpers;

    private $DummySlugRepository;

    private $DummySlugTransformer;

    public function __construct(DummyClassRepository $DummySlugRepository, DummyClassTransformer $DummySlugTransformer)
    {
        $this->DummySlugRepository = $DummySlugRepository;
        $this->DummySlugTransformer = $DummySlugTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function all()
    {
        $DummySlug = $this->DummySlugRepository->all();

        $DummySlug = $this->response->collection($DummySlug, $this->DummySlugTransformer, ['key' => 'DummySlug']);

        return $DummySlug;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function get($id)
    {
        $DummySlug = $this->DummySlugRepository->find($id);

        $DummySlug = $this->response->item($DummySlug, $this->DummySlugTransformer, ['key' => 'DummySlug']);

        return $DummySlug;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Dingo\Api\Http\Response
     */
    public function add(Request $request)
    {
        $DummySlug = $this->DummySlugRepository->create($request->all());

        return $this->response->created(url('DummySlug/'.$DummySlug->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function put($id, Request $request)
    {
        $DummySlug = $this->DummySlugRepository->update($id, $request->all());

        return $this->response->accepted(url('DummySlug/'.$DummySlug->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function del($id)
    {
        $DummySlug = $this->DummySlugRepository->delete($id);

        return $this->response->noContent();
    }
}
