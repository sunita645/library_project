<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        
        if(Auth::id()){
            $user_type = Auth()->user()->usertype;

            if($user_type == 'admin'){

                return view('admin.index');
            }

            else if($user_type == 'user'){

                return view('home.index');
            }
        }

        else{
            return redirect()->back();
        }
    }

    public function category_page(){

        $data = category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data = new Category;

        $data->cat_title = $request->category;

        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function cat_delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','category deleted successsfully');
    }

    public function edit_category($id){
        $data = category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){

        $data = Category::find($id);
        $data->cat_title=$request->cat_name;
        $data->save();
        return redirect('/category_page')->with('message', 'Category Updated Successfully');
    }
}
