<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PMPizzaOrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pmpizzaorder
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmpizzaorder/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmpizzaorder
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmpizzaorder/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    /**
     * Store a newly created resource in storage.
     * POST /pmpizzaorder
     *
     * @return mixed
     */
    public function apiStore()
    {
        return response()->json(['success'=>false,'message'=>'Method not implemented']);
    }

    /**
     * Display the specified resource.
     * GET /pmpizzaorder/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiShow($id)
    {
        return response()->json(['success'=>false,'message'=>'Method not implemented']);
    }

}