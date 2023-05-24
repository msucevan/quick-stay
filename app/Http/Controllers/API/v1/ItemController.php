<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Resources\v1\ItemResource;
use App\Models\Item;


class ItemController extends Controller
{
    public function index()
    {
        return ItemResource::collection(Item::all());
    }

    public function show(Item $item)
    {
        return ItemResource::make($item);
    }

    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->validated());

        return ItemResource::make($item);
    }
}