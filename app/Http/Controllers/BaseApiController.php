<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BaseApiController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * POST /baseapi
     *
     * @return mixed
     */
    public function apiStore()
    {
        return response()->json(['success'=>false,'message'=>'Method not implemented']);
    }

    /**
     * Display the specified resource.
     * GET /baseapi/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiShow($id)
    {
        return response()->json(['success'=>false,'message'=>'Method not implemented']);
    }


}