<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentationController extends Controller
{
    public function store(Request $request, $id) {
        $documentation = new Documentation();
        $documentation->user_id = Auth::user()->id;
        $documentation->patient_id = $id;
        $documentation->text = $request->input('text');
        $documentation->save();
        return redirect("patient/$id");
    }
}
