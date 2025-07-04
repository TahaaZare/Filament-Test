<?php

namespace App\Http\Resources\Api\V1\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserV1Resource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'username' => $this->username,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ];
    }
}
