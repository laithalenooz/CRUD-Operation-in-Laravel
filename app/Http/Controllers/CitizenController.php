<?php

namespace App\Http\Controllers;

use App\citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        $citizens = citizen::all();
        return view('citizen.index', compact('citizens'));
    }

    public function validation($request)
    {
        $request->validate([
            'name'     => 'required',
            'gender'   => 'required',
            'city'     => 'required',
            'nid'      => 'required',
            'mobile'   => 'required',
            'address'  => 'required',
        ]);
    }

    public function store(Request $request)
    {
        $this->validation($request);
        citizen::create($request->all());
        return redirect('/');
    }

    public function show($id)
    {
        $citizen = citizen::where('citizen_id', $id)->get()->first();
        return view('citizen.edit', [
            "citizen" => $citizen
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validation($request);
        citizen::where('citizen_id', $id)->update([
            "name"
            => $request->name,
            "gender"  => $request->gender,
            "city"    => $request->city,
            'nid'     => $request->nid,
            'mobile'  => $request->mobile,
            'address' => $request->address,

        ]);
        return redirect('/');
    }


    public function destroy($id)
    {
        citizen::where('citizen_id', $id)->delete();
        return redirect('/');
    }

    public function clear()
    {
        citizen::truncate();
        return view('citizen.index');
    }
}
