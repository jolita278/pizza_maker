<?php namespace App\Http\Controllers;



use App\Models\PMPad;

class PMPadController extends BaseAPIController {

    /**
     * Display a listing of the resource.
     * GET /pmpad
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration = $this->getRoutesData();
        $configuration ['list'] = PMPad::orderBy('updated_at', 'desc')->get()->toArray();
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
        $configuration ['routeList'] = 'app.admin.pad.index';
        $configuration ['routeShowDelete'] = 'app.admin.pad.showDelete';
        $configuration ['routeEdit'] = 'app.admin.pad.edit';
        $configuration ['routeNew'] = 'app.admin.pad.create';
        return $configuration;
    }
    /**
     * Show the form for creating a new resource.
     * GET /pmpad/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        return view('admin.adminPizzaPartsCreate', $this->getRoutesData());
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmpad
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
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Picos pado pavadinimas" !'];
            return view('admin.adminPizzaPartsCreate', $config);
        } elseif ($calories == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Kalorijos"!'];
            return view('admin.adminPizzaPartsCreate', $config);
        }
        PMPad::create(
            [
                'name' => $data['name'],
                'calories' => $data['calories'],
            ]
        );
        $config['success_message'] = ['id' => 'Įrašas sėkmingai įrašytas į DB! ', 'message' => 'Sukurtas naujas picos padas -  ' . $data['name']];
        return view('admin.adminPizzaPartsCreate', $config);
    }

    /**
     * Display the specified resource.
     * GET /pmpad/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        $configuration = $this->getRoutesData();

        $configuration ['single'] = PMPad::find($id)->toArray();

        return view('admin.adminSingle', $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmpad/{id}/adminedit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $config = $this->getRoutesData();

        $config['item'] = PMPad::find($id);

        $config['item']->pluck('id')->toArray();

        return view('admin.adminPizzaPartsEdit', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /pmpad/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        $record = PMPad::find($id);
        $data = request()->all($id);
        $calories = $data['calories'];
        $name = $data['name'];
        $config = $this->getRoutesData();
        $config['item'] = PMPad::find($id);
        $config['item']->pluck('id')->toArray();

        if ($name == null) {
            $config['error'] = ['id' => 'Klaida 00002', 'message' => 'Neužpildytas laukas "Picos pado pavadinimas" !'];
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
     * DELETE /pmpad/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        PMPad::destroy($id);

        return json_encode(["success" => true, "id" => $id]);
    }
}