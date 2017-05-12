<?php namespace App\Http\Controllers;



use App\Models\PMUsers;

class PMUsersController extends BaseAPIController {

    /**
     * Display a listing of the resource.
     * GET /pmusers
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration ['list'] = PMUsers::get()->toArray();
        return view('admin.adminList', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmusers/admincreate
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmusers
     *
     * @return Response
     */
    public function adminStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /pmusers/{id}
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
     * GET /pmusers/{id}/adminedit
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
     * PUT /pmusers/{id}
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
     * DELETE /pmusers/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        //
    }

}