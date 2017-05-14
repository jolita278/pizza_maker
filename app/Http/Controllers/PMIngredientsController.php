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
        $configuration ['list'] = PMIngredients::orderBy('updated_at', 'desc')->get()->toArray();
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
        $configuration ['routeList'] = 'app.admin.ingredients.index';
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
        return view('admin.adminPizzaPartsCreate');
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
        $config = $this->getRoutesData();

        if ($name == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Ingridiento pavadinimas" !'];
            return view('admin.adminPizzaPartsCreate', $config);
        } elseif ($calories == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Kalorijos"!'];
            return view('admin.adminPizzaPartsCreate', $config);
        }
        PMIngredients::create(
            [
                'name' => $data['name'],
                'calories' => $data['calories'],
            ]
        );
        $config['success_message'] = ['id' => 'Įrašas sėkmingai įrašytas į DB! ', 'message' => 'Sukurtas naujas ingridientas -  ' . $data['name']];
        return view('admin.adminPizzaPartsCreate', $config);
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

        return view('admin.adminPizzaPartsEdit', $config);

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
        $record = PMIngredients::find($id);
        $data = request()->all($id);
        $calories = $data['calories'];
        $name = $data['name'];
        $config = $this->getRoutesData();
        $config['item'] = PMIngredients::find($id);
        $config['item']->pluck('id')->toArray();

        if ($name == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Ingridiento pavadinimas" !'];
           return view('admin.adminPizzaPartsEdit', $config);
        } elseif ($calories == null) {
           $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Kalorijos"!'];
            return view('admin.adminPizzaPartsEdit', $config);
        }
        $record->update($data);
       $config['success_message'] = ['id' => 'Įrašas sėkmingai atnaujintas! ', 'message' => 'Atnaujintas įrašas -  ' . $data['name']];
       return view('admin.adminPizzaPartsEdit', $config);
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