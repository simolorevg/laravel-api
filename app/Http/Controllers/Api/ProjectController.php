<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['technologies'], ['types'])->get();
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
