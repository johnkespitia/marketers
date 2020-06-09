<?php

namespace App\Http\Controllers;
use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return Group::all();
    }
 
    public function show(Group $group)
    {
        return $group;
    }

    public function store(Request $request)
    {
        $group =  Group::create($request->all());
        return response()->json($group, 201);
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        return response()->json($group, 200);
    }

    public function delete(Request $request, Group $group)
    {
        $group->delete();
        return response()->json(null, 204);
    }
}
