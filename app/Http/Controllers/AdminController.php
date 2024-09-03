<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        $data = Item::orderBy('created_at', 'DESC')->cursorPaginate(20);
        return view('admin.shortView', ['items' => $data]);
    }

    public function longView($id){
        $data = Item::find($id);
        return view('admin.longView', ['item' => $data]);
    }
    public function editView($id){
        $data = Item::find($id);
        return view('admin.edit', ['data' => $data]);
    }

    public function input(){
        return view('admin.index');
    }

    public function seoPage(){
        return view('admin.home');
    }
    public function store(Request $request){
        $check = [
            'photo' => 'required|mimes:jpg,jpeg,png|max:300',
            'name' => 'required',
            'item' => 'required',
            'title' => 'required',
            'componentDescription' => 'required',
            'positiveDescription' => 'required',
            'negativeDescription' => 'required',
            'keyword' => 'required',
            'alt' => 'required',
            'mTitle' => 'required',
            'Description' => 'required',
        ];

        $valid = Validator::make($request->all(), $check);
        if($valid->fails()){
            return redirect()->route('inputPage')->withInput()->withErrors($valid->errors());
        }

        $data = new Item();
        if($request->photo != ''){
            $image = $request->photo;
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' . $ext;
            $data->Image = $imageName;
            $image->move(public_path('Uploaded_Photo'), $imageName); 
        }
        $data->Name = $request->name;
        $data->Category = $request->item;
        $data->Title = $request->title;
        $descriptionLines = explode("\n", $request->componentDescription);
        $data->componentDescription = implode('||', $descriptionLines);
        $data->positiveDescription = $request->positiveDescription;
        $data->negativeDescription = $request->negativeDescription;
        $data->alt = $request->alt;
        $data->save();
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required',
            'alt' => 'required',
            'item' => 'required',
            'title' => 'required|string|max:255',
            'componentDescription' => 'required|string',
            'positiveDescription' => 'required|string',
            'negativeDescription' => 'required|string',
        ]);

        $item = Item::find($id);
        if (!$item) {
            return redirect()->route('editPage', ['id' => $id])->with('error', 'Item not found.');
        }

        if($request->photo != ''){
            File::delete(public_path('Uploaded_Photo/'. $item->Image));
            $image = $request->photo;
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' . $ext;
            $item->Image = $imageName;
            $image->move(public_path('Uploaded_Photo'), $imageName); 
        }
        $item->Name = $request->name;
        $item->Category = $request->item;
        $item->Title = $request->title;
        $descriptionLines = explode("\n", $request->componentDescription);
        $item->componentDescription = implode('||', $descriptionLines);
        $item->positiveDescription = $request->positiveDescription;
        $item->negativeDescription = $request->negativeDescription;
        $item->alt = $request->alt;
        $item->save();
    }
    public function deleted($id){
        $data = Item::where('id', $id)->first();
        $data->delete();
        return back()->withSuccess('deleted', 'Product Deleted');
    }

    public function search(Request $request){
        $search = $request->search;
        $items = Item::where('Name', 'LIKE','%'.$search.'%')->orWhere('Title', 'LIKE','%'.$search.'%')->cursorPaginate(20);
        return view('admin.shortView', compact('items'));
    }
}
