<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    // public function store() // store(Request $request)
    // {
    // 	// return $request->all();
    // 	// return \Request::all();
    // 	return request()->all();
    // }

    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
                'body' => 'required|min:10' ,
                // 'email' => 'email|unique:users,email'
            ]);

        $note = new Note($request->all());
        // $note->user_id = Auth::id();
        $note->user_id = 1;

    	// == 1 ==
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// == 2.1 ==
    	// $note = new Note(['body' => $request->body]);
    	// $card->notes()->save($note);

		// == 2.2 ==
    	// $card->notes()->save(
    	// 	new Note(['body' => $request->body])
    	// );

    	// == 3 ==
		// $card->notes()->create([
		// 	'body' => $request->body
		// ]);

		// == 4 ==
		// Because of the class Node: protected $fillable = ['body'];
		// $card->notes()->create($request->all()); // []

		// == 5 ==
		// What is that work actually trying to accomplish?
		// Add note to the card
		// $card->addNote($note);
		// $card->addNote(
			// new Note($request->all())
		// );

        $card->addNote($note, 1);

    	// return \Redirect::to('/some/new/uri');
    	// return redirect()->to('foo/');
    	// return redirect('foo/');
    	return back();
    }
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        // dd('hit');
        $note->update($request->all());

        return back();
    }
}
