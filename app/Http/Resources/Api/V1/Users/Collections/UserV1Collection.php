<?php

namespace App\Http\Resources\Api\V1\Users\Collections;

use App\Http\Resources\Api\V1\Users\UserV1Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\AbstractPaginator;

class UserV1Collection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        $isPaginated = $this->resource instanceof AbstractPaginator;

        return [
            'users' => UserV1Resource::collection($this->collection),
            'meta' => $isPaginated ? [
                'current_page' => $this->currentPage(),
                'last_page' => $this->lastPage(),
                'per_page' => $this->perPage(),
                'total' => $this->total(),
            ] : [
                'current_page' => 1,
                'last_page' => 1,
                'per_page' => 10,
                'total' => User::count(),
            ],
            'links' => $isPaginated ? [
                'first' => $this->url(1),
                'last' => $this->url($this->lastPage()),
                'prev' => $this->previousPageUrl(),
                'next' => $this->nextPageUrl(),
            ] : [
                'first' => $request->fullUrlWithQuery(['page' => 1]),
                'last' => $request->fullUrlWithQuery(['page' => 1]),
                'prev' => null,
                'next' => null,
            ],
        ];
    }
}
