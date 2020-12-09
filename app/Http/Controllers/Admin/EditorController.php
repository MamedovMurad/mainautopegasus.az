<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{
    public function create(Request $request){
        $editor=new User;
        $editor->editor_email=$request->editor_email;
        $editor->editor_password=bcrypt($request->editor_password);
        $editor->editor_isAdmin=0;
        $editor->save();
    }
    public function read(){
if(Auth::user()->isAdmin==1){
    return view('back.editor.editor');
}
else{
    return redirect()->route('signin');
}


    }
}
