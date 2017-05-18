<?php namespace App\Http\Controllers;


use App\Models\PMCheese;
use App\Models\PMIngredients;
use App\Models\PMPad;
use App\Models\PMPizzaOrder;

class PMPizzaOrderController extends BaseAPIController {

    /**
     * Display a listing of the resource.
     * GET /pmpizzaorder
     *
     * @return Response
     */
    public function index()
    {
        $data = [];
        $data ['routeShow'] = 'app.user.pizzaOrders.show';
        $data['pizzaOrders'] = $this->apiIndex()->toArray();
        return view('front-end.userList', $data);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /pmpizzaorder/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data['pad'] = PMPad::pluck('name', 'id')->toArray();
        $data['cheese'] = PMCheese::pluck('name', 'id')->toArray();
        $data['ingredients'] = PMIngredients::pluck('name', 'id')->toArray();


        return view('front-end.userPizzaOrderCreate', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmpizzaorder
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        $record = PMPizzaOrder::create(array(
            'pad_id' => $data['base'],
            'cheese_id' => $data['cheese'],
            'description' => $data['description'],
            'user_id' => auth()->user()->id,
        ));
        $record['pad'] = PMPad::pluck('name', 'id')->toArray();
        $record['cheese'] = PMCheese::pluck('name', 'id')->toArray();
        $record['ingredients'] = PMIngredients::pluck('name', 'id')->toArray();

        $record->ingredientsConnectionData()->sync($data['ingredients']);

        return view('front-end.userPizzaOrderCreate', $record->toArray());
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
        $data['pizzaOrder'] = $this->apiShow($id)->toArray();
        return view('front-end.userSingle', $data);
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
    /**
     * Display a listing of the resource.
     * GET /pmpizzaorder
     *
     * @return Response
     */
    public function apiIndex()
    {
        return PMPizzaOrder::with(['padData', 'cheeseData', 'pizzaIngredientsConnectionData'])->get();
    }
    /**
     * Display the specified resource.
     * GET /pmpizzaorder/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function apiShow($id)
    {
        return PMPizzaOrder::with(['padData', 'cheeseData', 'pizzaIngredientsConnectionData'])->find($id);
    }
}