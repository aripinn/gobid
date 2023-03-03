<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->paginate(25);
        return view('admin.pages.items.index', [
            'title' => 'Items',
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('admin.pages.items.create',[
            'title' => 'Add new item',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'start_price' => 'required|numeric',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/item-img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Item::create($input);

        return redirect()->route('items.index')
                        ->with('success','Items created successfully.');
    }

    public function show(Item $item)
    {
        // return view('admin.pages.items.show', ['item' => $item]);
        return redirect()->route('items.edit', $item);
    }

    public function edit(Item $item)
    {
        return view('admin.pages.items.edit', [
            'title' => 'Edit Item ' . $item->id,
            'item' => $item,
        ]);
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'start_price' => 'required|numeric',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/item-img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $item->update($input);

        return redirect()->route('items.index')
                        ->with('success', 'Item '.$item->id.' has been updated.');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')
                        ->with('success', 'Item '.$item->id.' has been deleted.');
    }
}
