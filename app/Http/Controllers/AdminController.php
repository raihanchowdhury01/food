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
        $data->keyword = $request->keyword;
        $data->save();
    }

    public function update($id, Request $request){
        $data = Item::findOrFail($id);
        $check = [
            'photo' => 'required|mimes:jpg,jpeg,png|max:300',
            'name' => 'required',
            'item' => 'required',
            'title' => 'required',
            'componentDescription' => 'required',
            'positiveDescription' => 'required',
            'negativeDescription' => 'required',
            'keyword' => 'required',
        ];

        $valid = Validator::make($request->all(), $check);
        if($valid->fails()){
            return redirect()->route('editPage')->withInput()->withErrors($valid->errors());
        }

        if($request->photo != ''){
            File::delete(public_path('Uploaded_Photo/'. $data->Image));
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
        $data->Keyword = $request->keyword;
        $data->save();
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
