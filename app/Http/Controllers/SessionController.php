<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SessionController extends Controller
{
    public function getAll($url)
    {
        return Session::where('course_id', $url)->get();
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

        Session::create([
            'title' => $request->title,
            'description' => $request->description,
            'resources' => $resources,
            'meeting_link' => $request->meeting_link,
            'schedule' => $request->schedule,
            'time' => $request->time,
            'course_id' => end($url)
        ]);

        return redirect()->back()->with('success_message', 'Yeyy, Jadwal pertemuan berhasil dibuat');
    }

    public function edit($id, $num)
    {
        $session = Session::findOrFail($id);
        return view('sessions.edit', [
            'num' => $num,
            'session' => $session,
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('resources') == null) {
            $request->validate([
                'title' => 'required|string|min:3|max:100',
                'description' => 'required|string|min:5|max:500',
                'meeting_link' => 'required|string|min:5|max:500',
                'schedule' => 'required|date_format:Y-m-d|before_or_equal:to',
                'time' => 'required'
            ]);
            $session = Session::findOrFail($id);
            $session->update([
                'title' => $request->title,
                'description' => $request->description,
                'meeting_link' => $request->meeting_link,
                'schedule' => $request->schedule,
                'time' => $request->time,
            ]);

            return redirect()->route('showCourse', $session->course_id)->with('success_message', 'Yeyy, Jadwal pertemuan berhasil diubah');
        } else {
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

            $session = Session::findOrFail($id);
            if (Storage::exists('public/resources/courses/' . $session->resources)) {
                Storage::delete('public/resources/courses/' . $session->resources);
            }

            $session->update([
                'title' => $request->title,
                'description' => $request->description,
                'resources' => $resources,
                'meeting_link' => $request->meeting_link,
                'schedule' => $request->schedule,
                'time' => $request->time,
            ]);

            return redirect()->route('showCourse', $session->course_id)->with('success_message', 'Yeyy, Jadwal pertemuan berhasil diubah');
        }
    }

    public function downloadResource($id)
    {
        $session = Session::findOrFail($id);
        if (Storage::exists('public/resources/courses/' . $session->resources)) {
            return Storage::download('public/resources/courses/' . $session->resources);
        } else {
            return redirect()->back()->with('error_message', 'Materi tidak ditemukan');
        }
    }

    public function delete($id)
    {
        $session = Session::findOrFail($id);
        if (Storage::exists('public/resources/courses/' . $session->resources)) {
            Storage::delete('public/resources/courses/' . $session->resources);
        }
        $session->delete();

        return redirect()->back()->with('success_message', 'Yeyy, Jadwal pertemuan berhasil dihapus');
    }
}
