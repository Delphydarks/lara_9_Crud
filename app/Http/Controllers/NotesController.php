<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_note;

class NotesController extends Controller
{
   
    public function index()
    {
        $data=User_note::get();
        // return $data;
        // instead of returning the data in the array or objrct format?? we would return a view that calls the function
        return view('user-note',compact('data'));
    }

    public function addNote()
    {
        return view('add-note');
    }
    public function saveNote(Request $request)
    {
        // validation Function
        $request ->validate([
            'uuid'=>'required',
            'note'=>'required',
        ]);
        // dd($request->all());
       $uuid= $request->uuid;
       $note= $request->note;

        // creating a model for the data we want to save
       $nt=new User_note();
       $nt->uuid=$uuid;
       $nt->note=$note;
       $nt->save();

       return redirect()->back()->with('success', "Note Added Successfuly");
    }

    public function editNote($id)
    {
        $data = User_note::where('id','=',$id)->first();
        // pass the data in db to the edit page
        return view('edit-note',compact('data'));
    }
    public function updateNote(Request $request)
    {
        $request->validate([
            'uuid'=>'required',
            'note'=>'required',
        ]);
        $id=$request->id;
        $uuid=$request->uuid;
        $note=$request->note;


        User_note::where('id','=',$id)->update([
            'uuid'=>$uuid,
            'note'=>$note,
        ]);
        return redirect()->back()->with('success','Note Updated Successfully');
    }

    public function deleteNote($id)
    {
        User_note::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Note Deleted Successfully');
    }
}
