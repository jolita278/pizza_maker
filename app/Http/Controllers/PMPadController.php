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
        $configuration ['list'] = PMPad::get()->toArray();
        return view('admin.adminList', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmpad/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmpad
     *
     * @return Response
     */
    public function adminStore()
    {
        //
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
        return view('adminSingle');
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
        //
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
        //
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
        //
    }
}