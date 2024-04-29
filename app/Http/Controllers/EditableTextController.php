<?php

namespace App\Http\Controllers;

use App\Models\EditableText;
use Illuminate\Http\Request;

class EditableTextController extends Controller
{
    public function index()
    {
        $editableTexts = EditableText::all();
        return view('home', compact('editableTexts'));
    }

    public function update(Request $request)
    {
        $editableText = EditableText::findOrFail($request->id);
        $editableText->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return response()->json(['success' => true]);
    }

    public function delete(Request $request)
{
    $editableText = EditableText::findOrFail($request->id);
    $editableText->delete();
    return response()->json(['success' => true]);
}

public function store(Request $request)
{
    $newRecord = new EditableText;
    $newRecord->title = 'New Title';
    $newRecord->content = 'New Content';
    $newRecord->save();

    return response()->json(['success' => true]);
}

    
}