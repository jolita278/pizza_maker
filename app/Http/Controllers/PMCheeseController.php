<?php namespace App\Http\Controllers;



use App\Models\PMCheese;

class PMCheeseController extends BaseAPIController {

    /**
     * Display a listing of the resource.
     * GET /pmcheese
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration = $this->getRoutesData();
        $configuration ['list']=PMCheese::orderBy('updated_at', 'desc')->get()->toArray();
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
        $configuration ['routeList'] = 'app.admin.admin.cheese.index';
        $configuration ['routeShowDelete'] = 'app.admin.cheese.showDelete';
        $configuration ['routeEdit'] = 'app.admin.cheese.edit';
        $configuration ['routeNew'] = 'app.admin.cheese.create';
        return $configuration;
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmcheese/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        return view('admin.adminPizzaPartsCreate', $this->getRoutesData());
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmcheese
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
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Sūrio pavadinimas" !'];
            return view('admin.adminPizzaPartsCreate', $config);
        } elseif ($calories == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Kalorijos"!'];
            return view('admin.adminPizzaPartsCreate', $config);
        }
        PMCheese::create(
            [
                'name' => $data['name'],
                'calories' => $data['calories'],
            ]
        );
        $config['success_message'] = ['id' => 'Įrašas sėkmingai įrašytas į DB! ', 'message' => 'Sukurtas naujas sūris -  ' . $data['name']];
        return view('admin.adminPizzaPartsCreate', $config);
    }

    /**
     * Display the specified resource.
     * GET /pmcheese/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        $configuration = $this->getRoutesData();

        $configuration ['single'] = PMCheese::find($id)->toArray();

        return view('admin.adminSingle', $configuration);
    }
    /**
     * Show the form for editing the specified resource.
     * GET /pmcheese/{id}/adminedit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $config = $this->getRoutesData();

        $config['item'] = PMCheese::find($id);

        $config['item']->pluck('id')->toArray();

        return view('admin.adminPizzaPartsEdit', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /pmcheese/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        $record = PMCheese::find($id);
        $data = request()->all($id);
        $calories = $data['calories'];
        $name = $data['name'];
        $config = $this->getRoutesData();
        $config['item'] = PMCheese::find($id);
        $config['item']->pluck('id')->toArray();

        if ($name == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Sūrio pavadinimas" !'];
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
     * DELETE /pmcheese/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        PMCheese::destroy($id);

        return json_encode(["success" => true, "id" => $id]);
    }
}