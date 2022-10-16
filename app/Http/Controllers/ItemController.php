<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function listar($id) {
        $l = DB::select("select * from item_lists where id = {$id}");
        $list = json_decode(json_encode($l), true)[0];
        $allItems = DB::select("select * from Items where item_list_id = {$id}");
        return view('item.index', ['allItems' => $allItems, 'list' => $list]);
    }

    public function add($id) {
        return view('item.add', ['id' => $id]);
    }

    public function store(Request $request) {
        $list = new Item();
        $list->name = $request->name;
        $list->item_list_id = $request->id;

        $list->save();

        return redirect("/lists/".$request->id);
    }
}
