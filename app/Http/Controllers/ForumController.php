<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Course;
use App\Models\Transaction;
use App\Models\Forum;
use App\Models\Question;
use App\Models\Answer;

class ForumController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $flag = $user->role == 'Mentor' ? true : false;
        $courses = $flag ? Course::where('mentor_id', $user->id)->get() : Transaction::where('mentee_id', $user->id)->get();

        if($flag) {
            return view('forum.index', [
                'courses' => $courses
            ]);
        }else {
            return view('forum.mentee', [
                'courses' => $courses
            ]);
        }
    }

    public function showForum($id)
    {
        $url = explode('/', url()->current());
        $course = Course::findOrFail($id);
        $transaction = Transaction::where('mentor_id', Auth::user()->id)->get();
        return view('forum.show', [
            'course' => $course,
            'sessions' => (new SessionController)->getAll(end($url)),
            'transaction' => $transaction,
            'forums' => $course->forum
        ]);
    }

    public function createForum(Request $request)
    {
        $url = explode('/',  url()->previous());
        $course_id = end($url);
        Forum::create([
            'title' => $request->title,
            'course_id' => $course_id,
        ]);
        return redirect()->back();
    }

    public function getThread(Request $request)
    {
        $url = explode('/', url()->current());
        return view('forum.thread', [
            'threads' => Question::where('forum_id',end($url))->get()
        ]);
    }

    public function postThread(Request $request)
    {
        $url = explode('/',url()->previous());
        $forum_id = end($url);
        Question::create([
            'title' => $request->title,
            'content' => $request->content,
            'forum_id' => $forum_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }

    public function postReply(Request $request, $id)
    {
        Answer::create([
            'content' => $request->content,
            'question_id' => $id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }

    public function detailForum($id)
    {
        $url = explode('/', url()->current());
        $course = Course::findOrFail($id);
        $transaction = Transaction::where('course_id', $id);
        return view('forum.detail', [
            'course' => $course,
            'sessions' => (new SessionController)->getAll(end($url)),
            'transaction' => $transaction->get(),
            'hasTransaction' => Auth::user() ? $transaction->where('mentee_id', Auth::user()->id)->first() : null,
            'forums' => Forum::all()
        ]);
    }
}
