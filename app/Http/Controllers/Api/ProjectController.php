<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projectApi(){
        return response() -> json([
            'name' => 'prova'
        ]);
    }
    public function projectIndex(){
        $projects = Project :: with('type') -> paginate(5);
   
        return response() -> json([
           'projects' => $projects
        ]);
   }
}
