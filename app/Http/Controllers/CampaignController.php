<?php

namespace App\Http\Controllers;
use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return Campaign::all();
    }
 
    public function show(Campaign $campaign)
    {
        return $campaign;
    }

    public function store(Request $request)
    {
        $campaign =  Campaign::create($request->all());
        return response()->json($campaign, 201);
    }

    public function update(Request $request, Campaign $campaign)
    {
        $campaign->update($request->all());
        return response()->json($campaign, 200);
    }

    public function delete(Request $request, Campaign $campaign)
    {
        $campaign->delete();
        return response()->json(null, 204);
    }
}
