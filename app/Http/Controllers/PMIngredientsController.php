<?php namespace App\Http\Controllers;


use App\Models\PMIngredients;

class PMIngredientsController extends BaseAPIController
{
    /**
     * Display a listing of the resource.
     * GET /pmingredients
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration = $this->getRoutesData();
        $configuration ['list'] = PMIngredients::get()->toArray();
        return view('admin.adminList', $configuration);
    }
    /**
     * Get routes data
     *
     * @return array
     */
    public function getRoutesData()
    {
        $configuration = [];
        $configuration ['routeShowDelete'] = 'app.admin.ingredients.showDelete';
        $configuration ['routeEdit'] = 'app.admin.ingredients.edit';
        $configuration ['routeNew'] = 'app.admin.ingredients.create';
        return $configuration;
    }
    /**
     * Show the form for creating a new resource.
     * GET /pmingredients/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        return view('admin.adminIngredientsCreate');
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmingredients
     *
     * @return Response
     */
    public function adminStore()
    {
        $data = request()->all();

        $calories = $data['calories'];

        $name = $data['name'];

        if ($name == null) {

            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Ingridiento pavadinimas" !'];

            return view('admin.adminIngredientsCreate', $config);

        } elseif ($calories == null) {

            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Kalorijos"!'];

            return view('admin.adminIngredientsCreate', $config);

        }

        PMIngredients::create(
            [
                'name' => $data['name'],
                'calories' => $data['calories'],
            ]
        );

        $config['success_message'] = ['id' => 'Įrašas sėkmingai įrašytas į DB! ', 'message' => 'Sukurtas naujas ingridientas -  ' . $data['name']];

        return view('admin.adminIngredientsCreate', $config);
    }

    /**
     * Display the specified resource.
     * GET /pmingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminShow($id)
    {
        $configuration = $this->getRoutesData();

        $configuration ['single'] = PMIngredients::find($id)->toArray();

        return view('admin.adminSingle', $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmingredients/{id}/adminedit
     *
     * @param  int $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $config = $this->getRoutesData();

        $config['item'] = PMIngredients::find($id);

        $config['item']->pluck('id')->toArray();

        return view('admin.adminIngredientsEdit', $config);

    }

    /**
     * Update the specified resource in storage.
     * PUT /pmingredients/{id}
     *
     * @param  int $id
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
     * @param  int $id
     * @return mixed
     */
    public function adminDestroy($id)
    {
        PMIngredients::destroy($id);

        return json_encode(["success" => true, "id" => $id]);
          //TODO:: refresh VIEW
    }
}