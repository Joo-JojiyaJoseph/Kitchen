<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;

use Livewire\Component;

class Posmenu extends Component
{
    public $foods= [];
    public $ingredients= [];

    public $food_name = '';


    public $food_ingredient = '';

    public $f_ingredient_quantity = '';

    public function mount(){
        $response = Http::withHeaders([
            'Authorization' => Session::get('token'),
        ])->get('http://test.webfolks.in/api/ViewIngredient');

        if ($response->successful()) {
            $data = $response->json();
            $this->ingredients = $data['data'];
        }
   }

   public function save()
    {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer' . session()->get('token.access_token')
        ])->post('http://test.webfolks.in/api/AddFood', [
            'food_name'=>$this->food_name,
            'food_ingredient'=>$this->food_ingredient,
            'f_ingredient_quantity'=>$this->f_ingredient_quantity,
        ]);

        $result = json_decode((string)$response->getBody(), true);
        return redirect()->route('pos.menu')->with('status',"Added Sucessfully");
    }

    public function render()
    {
        $response = Http::withHeaders([
            'Authorization' => Session::get('token'),
        ])->get('http://test.webfolks.in/api/ViewFood');

        if ($response->successful()) {
            $data = $response->json();
            $this->foods= $data['data'];
            return view('livewire.posmenu');
        } else {
            abort($response->status(), 'Failed to retrieve data from API');
        }
    }

}
