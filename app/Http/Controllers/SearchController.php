<?php

namespace App\Http\Controllers;

use App\Models\Trademark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function create()
    {

        $categories = Trademark::select('Category')->get()->toArray();

        $categoryList = [];
        foreach ($categories as $category) {
            $categoryList[] = $category["Category"];
        }

        //pass the list of stored categories
        return view('search', ["list" => array_unique($categoryList)]);

    }


    public function store()
    {

        $proposedName = ucfirst(strtolower(trim(($_POST["trademarkName"]))));
        $chosenCategory = $_POST["category"];

        $query = DB::table('trademarks')
            ->where('TrademarkName', "LIKE", $proposedName)
            ->where('Category', "LIKE", $chosenCategory)
            ->get()->toArray();

        if (count($query) == 0) {
            return view('welcome',["Status"=> "The trademark name you entered does not match any records within the specified category.
            You can register this trademark name with the given category." ]);

        }
        return view('TrademarkInfo', ['info' => json_decode(json_encode($query), true)[0], "name" => $proposedName]);

    }
}
