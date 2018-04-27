<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Qualifications;
use App\Users;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $qualifications = Qualifications::all();
        $cities = Cities::all();
        $users_joined_table = Users::joinTables();
        $users = Users::groupData($users_joined_table);
        return view('index',compact("users","cities","qualifications"));
    }

    public function ajax(Request $request){
        $parameters = $request->all();
        if(empty($parameters)){
            $users_joined_table = Users::joinTables();
            $users = Users::groupData($users_joined_table);
            return view('users/table', compact("users"));
        }
        $users_id = Users::getUsersIdByRequest($parameters);
        $users_joined_table = Users::joinTables()->whereIn("users.id",$users_id);
        $users = Users::groupData($users_joined_table);
        return view('users/table', compact("users"));
    }
}
