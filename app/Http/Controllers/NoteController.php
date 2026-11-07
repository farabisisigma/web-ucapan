<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store (Request $request){
        $slug = Str::random(8);
        Note::create([
            'slug'=> $slug,
            'message'=>$request->message,
            'sender_name'=>$request->sender_name,
            'is_anonymous'=>$request->has('is_anonymous')
        ]);
        return redirect()->route('notes.show', ['slug'=>$slug]);
    }
    public function create() {
        return view('notes.create');
    }
    public function show(string $slug){
        $note=Note::Where('slug', $slug)->firstOrFail();
        return view('notes.show', ['note'=>$note]);
    }

    }