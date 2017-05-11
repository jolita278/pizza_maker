<?php namespace App\Http\Controllers;


class PMPizzaOrderController extends BaseAPIController {


	/**
	 * Show the form for creating a new resource.
	 * GET /pmpizzaorder/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('userSingle');
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
        return view('userSingle');
	}

    /**
     * Display a listing of the resource.
     * GET /pmpizzaorder
     *
     * @return Response
     */
    public function adminIndex()
    {
        return view('adminList');
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmpizzaorder/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmpizzaorder
     *
     * @return Response
     */
    public function adminStore()
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
    public function adminShow($id)
    {
        return view('adminSingle');
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmpizzaorder/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
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
    public function adminUpdate($id)
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
    public function adminDestroy($id)
    {
        //
    }
}