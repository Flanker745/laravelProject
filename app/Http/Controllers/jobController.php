<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function index()
    {
        $jobs = job::with("staffs")->latest()->paginate(3);
        return view("jobs.index", [
            "jobs" => $jobs
        ]);
    }
    public function create()
    {

        return view("jobs.create");
    }
    public function add()
    {
        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => "required",
        ]);
        job::create([
            "title" => request("title"),
            "salary" => request("salary"),
            "staffs_id" => 1
        ]);
        return redirect("/jobs");
    }
    public function show(job $job)
    {

        return view("jobs.show", [
            "job" => $job
        ]);
    }
    public function updatePage(job $job)
    {
        return view("jobs.update", [
            "job" => $job
        ]);
    }
    public function update(job $job)
    {
        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => "required",
        ]);
        $job->update([
            "title" => request("title"),
            "salary" => request("salary"),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function delete(job $job)
    {
        $job->delete();

        return redirect('/jobs/');
    }
}
