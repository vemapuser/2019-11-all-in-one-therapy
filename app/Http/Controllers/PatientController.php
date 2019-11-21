<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
        return view('patients', [
            'patients' => Patient::all()
        ]);
    }

    public function edit($id) {
        return view('patient', [
            'patient' => Patient::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        $patient = Patient::findOrFail($id);
        $patient->svnr = $request->input('svnr');
        $patient->firstname = $request->input('firstname');
        $patient->lastname = $request->input('lastname');
        $patient->email = $request->input('email');
        $patient->address = $request->input('address');
        $patient->plz = $request->input('plz');
        $patient->city = $request->input('city');
        $patient->country = $request->input('country');
        $patient->save();
        return redirect("/patients");
    }

    public function create() {
        return view('patient');
    }

    public function store(Request $request) {
        $patient = new Patient();
        $patient->svnr = $request->input('svnr');
        $patient->firstname = $request->input('firstname');
        $patient->lastname = $request->input('lastname');
        $patient->email = $request->input('email');
        $patient->address = $request->input('address');
        $patient->plz = $request->input('plz');
        $patient->city = $request->input('city');
        $patient->country = $request->input('country');
        $patient->save();
        return redirect("/patients");
    }
}
