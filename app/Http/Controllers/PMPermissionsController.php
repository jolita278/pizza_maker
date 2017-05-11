<?php namespace App\Http\Controllers;



class PMPermissionsController extends BaseAPIController {

    /**
     * Display a listing of the resource.
     * GET /pmcheese
     *
     * @return Response
     */
    public function adminIndex()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmpermissions/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        return view('adminList');
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmpermissions
     *
     * @return Response
     */
    public function adminStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /pmpermissions/{id}
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
     * GET /pmpermissions/{id}/adminedit
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
     * PUT /pmpermissions/{id}
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
     * DELETE /pmpermissions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        //
    }
}