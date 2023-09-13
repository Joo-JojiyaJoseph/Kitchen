<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{


    public function freshMigrate()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
        return 'Migration complete!';
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $c_password = $request->c_password;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer' . session()->get('token.access_token')
        ])->post('http://test.webfolks.in/api/Apilogin', [
            'email' =>  $email,
            'password' => $password,
            'c_password' => $c_password,
        ]);

        $result = json_decode((string)$response->getBody(), true);

        if ($result['status'] == true) {
            Session::put('token', $result['token']);
            Session::put('role', $result['role']);

            if ($result['role'] == "ADMIN") {
                return redirect()->route('admin.home');
            } elseif ($result['role'] == "KITCHEN") {
                return redirect()->route('kitchen.home');
            } else {
                return redirect()->route('pos.home');
            }
        } else {
            return redirect()->route('login')->with('error', $result);
        }

    }

    public function adminhome()
    {
        return view('admin.home');
    }

    public function logout(Request $request)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer' . session()->get('token.access_token')
        ])->post('http://test.webfolks.in/api/Apilogout', [

        ]);
        dd(json_decode((string)$response->getBody(), true));

    }

    public function adminingredient()
    {
        $response = Http::withHeaders([
            'Authorization' => Session::get('token'),
        ])->get('http://test.webfolks.in/api/ViewIngredient');

    if ($response->successful()) {
        $data = $response->json();
        $ingredients=$data['data'];
        return view('admin.ingredient',compact('ingredients'));
    } else {
        abort($response->status(), 'Failed to retrieve data from API');
    }
    }

    public function admin_add_ingredient(Request $request)
    {
        $ingredient_name = $request->ingredient_name;
        $ingredient_quantity = $request->ingredient_quantity;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer' . session()->get('token.access_token')
        ])->post('http://test.webfolks.in/api/AddIngredient', [
            'ingredient_name'=>$ingredient_name,
            'ingredient_quantity'=>100,
        ]);
        $result = json_decode((string)$response->getBody(), true);
        dd($result );
        return view('admin.ingredient');

    }
}
