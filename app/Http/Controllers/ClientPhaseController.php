<?php

namespace App\Http\Controllers;
use App\ClientPhase;
use Illuminate\Http\Request;

class ClientPhaseController extends Controller
{
    public function index()
    {
        return ClientPhase::all();
    }
 
    public function show(ClientPhase $clientPhase)
    {
        return $clientPhase;
    }

    public function store(Request $request)
    {
        $clientPhase =  ClientPhase::create($request->all());
        return response()->json($clientPhase, 201);
    }

    public function update(Request $request, ClientPhase $clientPhase)
    {
        $clientPhase->update($request->all());
        return response()->json($clientPhase, 200);
    }

    public function delete(Request $request, ClientPhase $clientPhase)
    {
        $clientPhase->delete();
        return response()->json(null, 204);
    }
}
