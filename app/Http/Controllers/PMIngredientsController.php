<?php namespace App\Http\Controllers;


use App\Models\PMIngredients;

class PMIngredientsController extends BaseAPIController {


    public function adminIndex()
    {
        $configuration ['list']=PMIngredients::get()->toArray();
        $configuration ['routeShow']='app.admin.ingredients.single';
        $configuration ['routeEdit']='app.admin.ingredients.edit';
        return view('admin.adminList', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmingredients/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmingredients
     *
     * @return Response
     */
    public function adminStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /pmingredients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        return view('admin.adminSingle');
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmingredients/{id}/adminedit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        return view('admin.adminSingle');
    }

    /**
     * Update the specified resource in storage.
     * PUT /pmingredients/{id}
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
     * DELETE /pmingredients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {

    }
}