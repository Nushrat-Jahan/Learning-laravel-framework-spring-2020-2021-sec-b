<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "alamin";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);

        // return view('home.index')
        //         ->with('name', 'alamin')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        if($req->session()->has('username')){
            //return view('home.index', compact('id', 'name'));
            return view('home.index');
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }

    public function show($id){
        $user = User::find($id);
        //print_r($user[0]['name']);
        return view('home.details')->with('user', $user);
    }
    public function create(){
        return view('home.create');
    }

    public function store(UserRequest $req){

        //insert into DB or model...
        //echo $req->username;
        /*
        $userlist = $this->getUserlist();

        $newUser = ['id'=>4, 'name'=>$req['username'], 'email'=> $req['email'], 'password'=>$req['password']];

        array_push($userlist,$newUser);

        return view('home.list')->with('list', $userlist);
        */

        //return view('home.list')->with('list', $userlist);



        //VALIDATION
        /*Type 3
        $this->validate($req,[
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->vaidate();
        */

        /*Type 2
        $req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6',
        ])->vaidate();
        */

        /*TYpe 1
        $validation = Validator::make($req->all(),[
            'username' => 'required|max:5',
            'password' => 'required|min:6',
        ]);

        if($validation->fails()){
            //return redirect()->route('home.create')->with('errors',$validation->errors());
            return Back()->with('errors',$validation->errors())->withInput();
        }*/
        if($req-> hasFile('myfile')){
            $file = $req->file('myfile');
            /*
            echo $file->getClientOriginalName()."<br>";
            echo $file->getClientOriginalExtension()."<br>";
            echo $file->getSize()."<br>";
            */
            //$file->move('upload',$file->getClientOriginalName());

            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

            $user = new User();
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->name         = $req->name;
            $user->dept         = $req->dept;
            $user->type         = $req->type;
            $user->cgpa         = $req->cgpa;
            $user->profile_img = $filename;
            $user->save();
            return redirect()->route('home.userlist');

            //return redirect('/home/userlist');
        }

    }

    public function edit($id){

        $user = User::find($id);
        return view('home.edit')->with('user',$user);

        /*
         $userlist= $this->getUserlist();
         $user = [];
        foreach($userlist as $u){
            if($u['id'] == $id ){
                $user = $u;
                break;
            }
        }
        return view('home.edit')->with('user', $user);
        */

        //$user =  ['id'=>2, 'username'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'];

    }


    public function update($id, Request $req){

        //$user = ['id'=> $id, 'name'=> $req->name, 'email'->$req->email, 'password'=>$req->password];
        //updating DB or model
       /* $count = 0;
        $userlist = $this->getUserlist();
        foreach($userlist as $u){
            if($u['id'] == $id ){
                break;
            }
            $count+=1;
        }

        $userlist[$count]['name'] = $req['username'];
        $userlist[$count]['password'] = $req['password'];
        $userlist[$count]['email'] = $req['email'];

        return view('home.list')->with('list', $userlist);*/

        $user = User::find($id);
        $user->username = $req->username;
        $user->name = $req->name;
        $user->password = $req->password;
        $user->dept = $req->dept;
        $user->type = $req->type;
        $user->save();

        return redirect('/home/userlist');
    }

    public function delete($id, Request $req){

        //updating DB or model
        $user = User::find($id);
        return view('home.delete')->with('user', $user);
        //return view('home.delete')->with('id', $id);
    }

    public function destroy($id, Request $req){

        //updating DB or model
        /*
        $count = 0;
        $userlist = $this->getUserlist();
        foreach($userlist as $u){
            if($u['id'] == $id ){
                break;
            }
            $count+=1;
        }
        unset($userlist[$count]);

        return view('home.list')->with('list', $userlist);
        */
        if(User::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }
    }

    public function userlist(){
        // db model userlist
        $userlist = User::all();
        //$userlist = $this->getUserlist();

        return view('home.list')->with('list', $userlist);
    }

    /*
    public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}
