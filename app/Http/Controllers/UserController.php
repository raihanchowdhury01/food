<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(1);
        return view('users.index', ['items' => $data]);
    }

    public function rules(){
        return view('users.privacy');
    }

    public function Garden(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(10);
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
}
