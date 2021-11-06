<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller {
    public function index() {
        $items = ListItem::where('is_complete', 0)->get();
        return view('todos.index', ['items' => $items]);
    }

    public function saveTodo(Request $request) {
        $new_item = new ListItem;
        $new_item->name = $request->item;
        $new_item->is_complete = 0;
        $new_item->save();

        return redirect('/');
    }

    public function mark(Request $request, $id) {
        $item = ListItem::find($id);
        $item->is_complete = 1;
        $item->save();

        return redirect('/');
    }
}
