<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ExpenseManager;
use App\Models\Project;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ExpenseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function __invoke(
        Request $request,
        Project $project
    ) {
        $expenses = QueryBuilder::for(ExpenseManager::class)
            ->allowedFilters([
                'project_id',
                'date',
                'status',
            ])
            ->where('project_id', $project->id)
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('projects.expenses')
            ->with([
                'expenses' => $expenses,
                'project' => $project,
            ]);
    }
}
