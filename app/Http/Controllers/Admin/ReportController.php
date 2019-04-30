<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class ReportController extends Controller
{
    public function getTasks(Request $request)
    {
        if ($request->ajax()) {
            $item = Task::select(['title','type']);

            return datatables($item)               
                ->editColumn('type',function ($item) {
                    return getTaskStatus($item->status);
                })
                ->filterColumn('type', function($query, $keyword) {
                    $query->whereIn('type', searchTaskStatus($keyword));
                })                
                ->make(true);
        }

        return view('admin.task_list');        
    }
}