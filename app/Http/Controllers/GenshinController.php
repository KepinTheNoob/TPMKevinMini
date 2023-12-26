<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genshin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GenshinController extends Controller
{
    function createChar() {
        $categories = Category::all();
        return view('createChar', compact('categories'));
    }

    function createChar1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Element' => ['required'],
            'Region' => ['required'],
            'Image' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);
        
        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Genshin::create([
            'Name' => $request->Name,
            'Element' => $request->Element,
            'Region' => $request->Region,
            'Image' => $filename,
            'CategoryId' =>$request->CategoryId
        ]);

        return redirect('/read-char');
    }

    function readChar() {
        $genshin = Genshin::paginate(5);
        return view('readChar', compact('genshin'));
    }

    function editChar($id) {
        $genshin = Genshin::find($id);
        return view('editChar', compact('genshin'));
    }

    function updateChar(Request $request, $id) {
        $request->validate([
            'Name' => ['required'],
            'Element' => ['required'],
            'Region' => ['required'],
            'Image' => ['required', 'image']
        ]);
        
        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Genshin::find($id)->update([
            'Name' => $request->Name,
            'Element' => $request->Element,
            'Region' => $request->Region,
            'Image' => $filename
        ]);

        return redirect('/read-char');
    }

    function deleteChar($id) {
        $genshinImage = Genshin::find($id)->Image;
        Genshin::destroy($id);
        Storage::delete('/public'.'/'.$genshinImage);
        return redirect('/read-char');
    }
}
