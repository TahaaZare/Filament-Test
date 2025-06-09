<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Core\Api\API;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserApiV1Controller extends Controller
{
    public function users()
    {
        $data = User::all();
        return API::success("Get all users", $data);
    }
}
