<?php

namespace App\Http\Controllers;

use App\Models\Role;
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
}
