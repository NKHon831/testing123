<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function attachFoodToUser(Request $request)
    {
        $data = $request->all();

        try{
            $foodName = $data['food_name'];
            $food = null;
            
            if(Food::where('name', $foodName)->exists()){
                $food = Food::where('name', $foodName)->first();
            }else{
                $food = Food::create([
                    'name' => $foodName,
                ]);
            }

            if(!Auth::user()->foods()->where('user_food.food_id', $food->id)->exists()){
                Auth::user()->foods()->attach($food->id);
                Log::info("Food is added to the user");
            }

        }catch(Exception $e ){
            Log::error('attachFoodToUser:' . $e->getMessage());
        }

        return redirect()->back();
    }
}
