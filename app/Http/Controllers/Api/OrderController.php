<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Food;
use App\Models\Ingredient;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function vieworder()
    {
        try {
            $order = Order::all();
            return response()->json([
                'status' => true,
                'data' =>  $order,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function addorder(Request $request)
    {
        try {
            //Validated
            $validateorder = Validator::make(
                $request->all(),
                [
                    'name'=> 'required',
                    'phone'=> 'required',
                    'address'=>'required',
                    'food'=> 'required',
                    'quantity'=>'required',
                    'delivery_date'=> 'required',
                    'delivery_time'=> 'required',
                    'order_date'=>'required',
                    'order_time'=>'required',
                ]
            );
            if ($validateorder->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateorder->errors()
                ], 401);
            }

            $customer = Customer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            $order_quantity = rtrim($request->quantity ,',');
            $order_quantitys = explode(',',$order_quantity );
            $order_food = rtrim($request->food ,',');
            $order_foods = explode(',',$order_food );
            $i=0;

            foreach ($order_foods as $order_foodd)
            {
            if ($order_foodd !="")
            {

            $findFood = Food::find($order_foodd);
            $findIngredient=$findFood->food_ingredient;
            $find_f_ingredient_quantity=$findFood->f_ingredient_quantity;
            $f_order_ingredient_quantitys=$order_quantitys[$i]*$find_f_ingredient_quantity;

            $order_Ingredient = Ingredient::find( $findFood->food_ingredient);
            $order_Ingredient_quantity =  $order_Ingredient->ingredient_quantity - $f_order_ingredient_quantitys;

            $order_Ingredient->update([
                'ingredient_quantity' => $order_Ingredient_quantity,
            ]);

            }
            $i++;
            }




            $order = order::create([
                'customer_id' => $customer->id,
                'food_item' => $order_food,
                'quantity' => $order_quantity,
                'delivery_date' => $request->delivery_date,
                'delivery_time' => $request->delivery_time,
                'ordered_date' => $request->order_date,
                'ordered_time' => $request->order_time,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'order ' . $order->order_name . ' Created Successfully',$order_Ingredient_quantity
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    // public function editorder(Request $request, $id)
    // {
    //     try {
    //         //Validated
    //         $validateorder = Validator::make(
    //             $request->all(),
    //             [
    //                 'order_name'=> 'required',
    //                 'order_ingredient'=> 'required',
    //                 'f_ingredient_quantity'=>'required',
    //             ]
    //         );
    //         if ($validateorder->fails()) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'validation error',
    //                 'errors' => $validateorder->errors()
    //             ], 401);
    //         }

    //         $order = order::find($id);
    //         $order->update([
    //             'order_name' => $request->order_name,
    //             'order_ingredient' => $request->order_ingredient,
    //             'f_ingredient_quantity' => $request->f_ingredient_quantity,
    //         ]);

    //         return response()->json([
    //             'status' => true,
    //             'message' => 'Ingredient ' . $order->order_name . ' Updated Successfully',
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $th->getMessage()
    //         ], 500);
    //     }
    // }

    public function deleteorder($id)
    {
        try {
            Order::destroy($id);
            return response()->json([
                'status' => true,
                'message' => 'Deleted Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

}
