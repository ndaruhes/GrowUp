<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
            'threads' => Question::where('forum_id',end($url))->get(),
            'title' => Forum::findOrFail(end($url))->title
        ]);
    }

    public function postThread(Request $request)
    {
        $validated = $request->validateWithBag('threadPost', [
            'title' => ['required', 'max:100'],
            'content' => ['required', 'max:500'],
        ]);

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
        // $validated = $request->validateWithBag('threadReply', [
        //     'content' => ['required', 'max:500'],
        // ]);

        $validator = Validator::make($request->all(), [
            'content' => 'required|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator, 'threadReply')
                        ->withInput()
                        ->with('questionNo', $id);
        }

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

    public function deleteThread($id)
    {
        $threadReplies = Question::findOrFail($id)->answer;
        foreach($threadReplies as $thread) {
            $thread->delete();
        }
        Question::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function deleteReply($id)
    {
        Answer::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function editThread(Request $request, $id)
    {
        $validated = $request->validateWithBag('updateThread', [
            'title' => ['required', 'max:100'],
            'content' => ['required', 'max:500'],
        ]);

        Question::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->back();
    }
    public function editReply(Request $request, $id)
    {
        $validated = $request->validateWithBag('updateReply', [
            'content' => ['required', 'max:500'],
        ]);


        Answer::findOrFail($id)->update([
            'content' => $request->content
        ]);

        return redirect()->back();
    }
}
