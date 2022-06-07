<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Type_of_item;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{

    function index()
    {
        $type_of_items = Type_of_item::all();
        return Inertia::render('User/UserDashboard', ["type_of_items" => $type_of_items]);
    }
    function list($id)
    {
        $items = Type_of_item::find($id)->items;
        return Inertia::render('User/UserItemsList', ["items" => $items]);
    }
    function add()
    {
        $type_of_items = Type_of_item::all();
        return Inertia::render('User/AddItem', ["type_of_items" => $type_of_items]);
    }
    function addItem(Request $request)
    {


        $item = new Item();
        $item->item_name  = $request->item['name'];
        $item->quantity  = $request->item['quantity'];
        $item->type_of_item_id = $request->item['category_id'];
        $item->save();

        $url = '/user/list/' . $request->item['category_id'];
        return redirect($url);
    }
    function deleteItem($type_of_item, $id)
    {

        Item::where(["id" => $id])->delete();
        return redirect('/user/list/' . $type_of_item);
    }

    function addCategory(){

        return Inertia::render('User/AddCategory');
    }
    function addCategoryPost(Request $request){

        $category = new Type_of_item();
        $category->item_name = $request->category;
        $category->save();
        return redirect('/user');
    }

}
