<div class="flex items-center justify-center h-screen">
    <div class="items-center justify-center flex flex-col gap-5">
        <h2 class="font-bold text-dark-blue text-center text-2xl border-2 border-dark-blue px-8 py-3 w-48 mb-10">MENU
        </h2>

        <div class="bg-dark-blue grid md:grid-cols-3 grid-cols-1  w-full p-10">
            @foreach ($foods as $food )
            <div class="">
                <p class="bg-light-blue p-10 m-10 font-bold">{{$food['food_name']}}</p>
            </div>
            @endforeach

        </div>

        <div class="md:flex md:flex-row md:justify-between flex flex-col items-center justify-center w-full">
            <div x-data="{ showModaladdfood: false }">
                <button @click="showModaladdfood = true"
                    class="bg-dark-blue hover:bg-blue-700 text-white p-2 px-8 rounded mt-5 text-lg">
                    <span>Add Item</span>
                </button>
                <!-- Modal add ingredient -->
                <div x-show="showModaladdfood" style="display:none;">
                    <div x-cloak @click="showModaladdfood = false" class="fixed inset-0 bg-black opacity-50"></div>
                    <div x-cloak @click.away="showModaladdfood = false"
                        class="fixed inset-0 flex items-center justify-center z-50">
                        <div class="bg-light-blue p-8 rounded shadow-lg">
                            <h2 class="text-2xl mb-4 text-center font-bold">Add Food</h2>
                            <form  wire:submit="save">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" wire:model="food_name"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Food item"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <select wire:model="food_ingredient">
                                        <option value="0">-- Select Ingredient --</option>
                                        @foreach($ingredients as $ingredient)
                                             <option value="{{ $ingredient['id'] }}">{{ $ingredient['ingredient_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <input type="text"  wire:model="f_ingredient_quantity"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Ingredient Quantity"
                                        required>
                                </div>
                                <div class="flex justify-between gap-5">
                                    <button @click="showModaladdfood = false"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ showModaleditfood: false }">
                <button @click="showModaleditfood = true"
                    class="bg-dark-blue hover:bg-blue-700 text-white p-2 px-8 rounded mt-5 text-lg">
                    <span>Edit Item</span>
                </button>
                <!-- Modal add ingredient -->
                <div x-show="showModaleditfood" style="display:none;">
                    <div x-cloak @click="showModaleditfood = false" class="fixed inset-0 bg-black opacity-50"></div>

                    <div x-cloak @click.away="showModaleditfood = false"
                        class="fixed inset-0 flex items-center justify-center z-50">
                        <div class="bg-light-blue p-8 rounded shadow-lg">
                            <h2 class="text-2xl mb-4 text-center font-bold">Edit Food</h2>
                            <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" id="ingredient_name" name="ingredient_name"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Name"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Quantity"
                                        required>
                                </div>
                                <div class="flex justify-between gap-5">
                                    <button @click="showModaleditfood = false"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ showModaldeletefood: false }">
                <button @click="showModaldeletefood = true"
                    class="bg-dark-blue hover:bg-blue-700 text-white p-2 px-8 rounded mt-5 text-lg">
                    <span>Delete Item</span>
                </button>
                <!-- Modal add ingredient -->
                <div x-show="showModaldeletefood" style="display:none;">
                    <div x-cloak @click="showModaldeletefood = false" class="fixed inset-0 bg-black opacity-50"></div>

                    <div x-cloak @click.away="showModaldeletefood = false"
                        class="fixed inset-0 flex items-center justify-center z-50">
                        <div class="bg-light-blue p-8 rounded shadow-lg">
                            <h2 class="text-2xl mb-4 text-center font-bold">Delete Item </h2>
                            <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" id="ingredient_name" name="ingredient_name"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Name"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                        class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Quantity"
                                        required>
                                </div>
                                <div class="flex justify-between gap-5">
                                    <button @click="showModaldeletefood = false"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
