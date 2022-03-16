<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    public function getAll($url)
    {
        return Management::where('course_id', $url)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string|min:5|max:500',
            'resources' => 'required',
            'meeting_link' => 'required|string|min:5|max:500',
            'schedule' => 'required|date_format:Y-m-d|before_or_equal:to',
            'time' => 'required'
        ]);

        $files = $request->file('resources');
        $fullFileName = $files->getClientOriginalName();
        $fileName = pathinfo($fullFileName)['filename'];
        $extension = $files->getClientOriginalExtension();
        $resources = $fileName . "-" . Str::random(10) . "-" . date('YmdHis') . "." . $extension;
        $files->storeAs('public/resources/courses', $resources);
        $url = explode('/', url()->previous());

        Management::create([
            'title' => $request->title,
            'description' => $request->description,
            'resources' => $resources,
            'meeting_link' => $request->meeting_link,
            'schedule' => $request->schedule,
            'time' => $request->time,
            'course_id' => end($url)
        ]);

        return redirect()->back()->with('success_message', 'You have successfully created a meeting');
    }

    public function delete($id)
    {
        $management = Management::findOrFail($id);
        if (Storage::exists('public/resources/courses/' . $management->resources)) {
            Storage::delete('public/resources/courses/' . $management->resources);
        }
        $management->delete();

        return redirect()->back()->with('success_message', 'You have successfully deleted the course');
    }
}
