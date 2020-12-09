<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AdminDashboard extends Controller
{
    public function index(Request $request){
        $editor=new User;
        $editor->editor_email=$request->editor_email;
        $editor->editor_password=bcrypt($request->editor_password);
        $editor->editor_isAdmin=0;
        $editor->save();
    }
}
