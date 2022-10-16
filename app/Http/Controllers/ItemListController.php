<?php

namespace App\Http\Controllers;

use App\Models\ItemList;
use Illuminate\Http\Request;

class ItemListController extends Controller
{
    public function __invoke() {
        $allLists = ItemList::all();

        return view('list.index', ['listas' => $allLists]);
    }

    public function add() {
        return view('list.add');
    }

    public function store(Request $request) {
        $list = new ItemList();
        $list->title = $request->title;

        $list->save();

        return redirect('/lists');
    }
}
