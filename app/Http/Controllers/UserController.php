<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function upload(Request $request){
        // dd($request->file('image'));
        // dd($request->image);
        echo "here";
        die;
        if($request->hasFile('image')){
            print_r($_FILES);
            die;
            $filename=$request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            print_r( $request->image);
            User::find(1)->update(['avatar'=>$filename]);
        }
        return redirect()->back();
    }
    public function index()
    {
        // Raw SQL Queries
        // DB::insert('insert into users (name,email,password) values (?, ?,?)', ['Marc','marc1@vismaad.com','iammarc']);
        // DB::update('update users set id = 100 where id=1');
        // DB::delete('delete from users where id=100');
        // $users = DB::select('select * from users');

        // Using Eloquent
        // 
        // Create
        // $user =  new User();
        // $user->name='Hargun';
        // $user->email='hargun@vismaad.com';
        // $user->password=bcrypt('password');
        // $user->save();
        // Better Create
        // $data=[
        //     'name'=>'elon',
        //     'email'=>'elon@vismaad.com',
        //     'password'=>bcrypt('password'),
        // ];
        // User::create($data);
        // 
        // Fetch
        // $user=User::all();
        // dd($user);
        // return $user;
        // 
        // Update
        // User::where('id',102)->update(['id'=>0]);
        // 
        // Delete
        // User::where('id',101)->delete();
        $user=User::all();
        return $user;
    }
}
