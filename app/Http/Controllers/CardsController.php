<?php

namespace App\Http\Controllers;

//use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
    	//$cards = DB::table('cards')->get();
    	$cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    public function show(Card $card) //show($id)
    {
        // //$card = Card::find($id);

        // return $card->notes;
        // return $card->notes[0]->user; // n + 1 problem

        // $card = Card:all();
        // $card = Card::with('notes')->get(); // 'notes' is from Card.php 'public function notes()'
        // $card = Card::with('notes')->find(1);
        // $card = Card::with('notes.user')->find(1);

        // already have $card
        $card->load('notes.user');

        //return $card;
        return view('cards.show', compact('card'));
    }
}
