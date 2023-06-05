<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }
    public function show(Project $project)
    {
        return view('admin.posts.show', compact('project'));
    }
}
