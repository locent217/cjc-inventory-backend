<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        $item = Item::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price
        ]);

        return $item;
    }

    public function update(Request $request)
    {
        Item::where('id', $request->id)->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price
        ]);

        return Item::find($request->id);
    }
}
