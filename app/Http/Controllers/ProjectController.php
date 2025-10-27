<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     */
    public function index()
    {
        // If the projects table hasn't been migrated yet, return an empty paginator
        if (! Schema::hasTable('projects')) {
            $empty = [];
            $paginator = new LengthAwarePaginator($empty, 0, 9, 1, [
                'path' => request()->url(),
            ]);

            return view('projects.index', ['projects' => $paginator]);
        }

        $projects = Project::orderByDesc('published_at')->paginate(9);

        return view('projects.index', compact('projects'));
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
