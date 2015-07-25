<?php

namespace SysProjectManagement\Http\Controllers;

use Illuminate\Http\Request;

use SysProjectManagement\Client;
use SysProjectManagement\Http\Requests;
use SysProjectManagement\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $client;

    public function __construct(Client $client){

        $this->client = $client;

    }

    public function index()
    {
        $clients = $this->client->all();

        return $clients;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $clients = $this->client->create($request->all());
        //dd($clients);
        return $clients;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = $this->client->find($id);

        return $client;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->client->find($id)->update($request->all());

       // return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->client->find($id)->delete();

        //return $client;
    }
}
