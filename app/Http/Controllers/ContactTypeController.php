<?php

namespace App\Http\Controllers;
use App\ContactType;
use Illuminate\Http\Request;

class ContactTypeController extends Controller
{
    public function index()
    {
        return ContactTypes::all();
    }
 
    public function show(ContactTypes $contactTypes)
    {
        return $contactTypes;
    }

    public function store(Request $request)
    {
        $contactTypes =  ContactTypes::create($request->all());
        return response()->json($contactTypes, 201);
    }

    public function update(Request $request, ContactTypes $contactTypes)
    {
        $contactTypes->update($request->all());
        return response()->json($contactTypes, 200);
    }

    public function delete(Request $request, ContactTypes $contactTypes)
    {
        $contactTypes->delete();
        return response()->json(null, 204);
    }
}
