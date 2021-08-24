<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ["name" => "Admin"],
            ["name" => "Editor"],
            ["name" => "Author"],
            ["name" => "Contributor"],
            ["name" => "Subscribers"]
        ];

        Role::insert($roles);
        return "Roles are create successfully";
    }

    public function addUser()
    {
        $user = new User();
        $user->name = "cc";
        $user->email = "cc@cc";
        $user->password = encrypt('cccccccc');
        $user->save();

        $roleids = [2,3,4];
        $user->roles()->attach($roleids);
        return "Record has been created successfully";
    }
}
