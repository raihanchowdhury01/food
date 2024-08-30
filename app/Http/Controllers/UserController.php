<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(3);
        return view('users.index', ['items' => $data]);
    }

    public function food(){
        return view('users.health');
    }
    public function less(){
        return view('users.diet');
    }
    public function fit(){
        return view('users.fitness');
    }
    public function rules(){
        return view('users.privacy');
    }

    public function Garden(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate();
        return view('users.fruit', ['items' => $data]);
    }

    public function Grains(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(10);
        return view('users.starchy', ['items' => $data]);
    }

    public function Delights(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(10);
        return view('users.dairy', ['items' => $data]);
    }

    public function Proteins(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(10);
        return view('users.protein', ['items' => $data]);
    }

    public function Savory(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(10);
        return view('users.fat', ['items' => $data]);
    }

    public function details($id){
        $data = Item::find($id);
        return view('users.views', ['item' => $data]);
    }

    public function search(Request $request){
        $search = $request->search;
        $items = Item::where('Name', 'LIKE','%'.$search.'%')->orWhere('Title', 'LIKE','%'.$search.'%')->cursorPaginate(20);
        return view('users.index', compact('items'));
    }
}
