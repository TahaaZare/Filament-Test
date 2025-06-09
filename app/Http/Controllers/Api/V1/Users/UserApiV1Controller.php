<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Users\Collections\UserV1Collection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserApiV1Controller extends Controller
{
    public function users()
    {
        $data = User::all();
        return new UserV1Collection($data);
    }
}
