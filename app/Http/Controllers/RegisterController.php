<?php

namespace App\Http\Controllers;


use App\Models\Trademark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('registerTrademark');

    }


    public function store()
    {

        $proposedName= ucfirst(strtolower(trim($_POST["trademarkName"])));
        $chosenCategory = ucfirst(strtolower(trim($_POST["category"])));

        //check if the same trademark name with the same category already exists
        $query = DB::table('trademarks')
            ->where('TrademarkName', "LIKE", $proposedName)
            ->where('Category', "LIKE", $chosenCategory)
            ->get();

        if(count($query) != 0){
            return view('welcome', ["Status"=> "Trademark name was not registered because the same trademark
            name within the same category already exists. \nPlease try another trademark name." ]);
        }


        $survey_response = new Trademark;

        $survey_response->TrademarkName = $proposedName;
        $survey_response->OwnerName = auth()->user()->name;
        $survey_response->OwnerEmail = auth()->user()->email;
        $survey_response->RegistrationDate = date("Y-m-d");
        $survey_response->ExpirationDate = $_POST["expiration"];
        $survey_response->Category = $chosenCategory;
        $survey_response->OwnerInformation = $_POST["ownerInfo"];
        $survey_response->OtherInformation = $_POST["trademarkInfo"];

        $survey_response->save();


         return view('welcome',["Status"=> "Trademark name was registered successfully!" ]);
    }
}
