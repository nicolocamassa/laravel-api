<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technology')->paginate(3); /* TODO: aggiungere ->paginate() [BONUS] */

        return response()->json([
            'success' => true,
            'result' => $projects,
        ]);

    }
}
