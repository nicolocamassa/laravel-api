<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technology')->get();

        return response()->json([
            'success' => true,
            'result' => $projects,
        ]);

    }
}
