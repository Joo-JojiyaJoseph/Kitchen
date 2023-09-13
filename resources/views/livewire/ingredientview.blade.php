<div class="container h-screen md:p-20 flex items-center justify-center mx-auto" x-data="{ tab: 1 }">
    <div class="grid md:grid-cols-[25%,65%] w-full justify-center">
        <div class="flex flex-col divide-y-2 gap-1">
            <a class="bg-dark-blue hover:bg-sky-700 text-2xl font-semibold text-center text-white px-10 py-5"
                :class="{ 'border-2 bg-sky-700  border-dark-blue font-bold': tab === 1 }" href="#"
                @click.prevent="tab = 1">
                INVENTORY
            </a>
            @foreach ($ingredients as $ingredient1)
                <a class="bg-dark-blue text-2xl hover:bg-sky-700 font-semibold text-center text-white px-10 py-5"
                    :class="{ 'border-2 bg-sky-700 border-dark-blue font-bold': tab === 2___ blade_brace____0___ }"
                    href="#" @click.prevent="tab = 2{{ $loop->iteration }}">
                    {{ $ingredient1['ingredient_name'] }}
                </a>
            @endforeach
        </div>

        <div class="bg-light-blue text-dark-blue text-4xl flex h-full   justify-center">
            <div class="items-center justify-center flex">
                <div x-show="tab === 1" class="flex">
                    <div x-data="{ showModal: false }">
                        <button @click="showModal = true"
                            class="bg-green-500 hover:bg-green-700 text-white p-2 px-4 rounded mt-5 w-11/12 text-lg">
                            <span>ADD INGREDIENT</span>
                        </button>
                        <!-- Modal add ingredient -->
                        <div x-show="showModal" style="display:none;">
                            <div x-cloak @click="showModal = false" class="fixed inset-0 bg-black opacity-50"></div>

                            <div x-cloak @click.away="showModal = false"
                                class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-light-blue p-8 rounded shadow-lg">
                                    <h2 class="text-2xl mb-4 text-center font-bold">ADD INGREDIENT</h2>
                                    <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_name" name="ingredient_name"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="flex justify-between gap-5">
                                            <button @click="showModal = false"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ showModaladd: false }">
                        <button @click="showModaladd = true"
                            class="bg-green-500 hover:bg-green-700 text-white p-2 px-4 rounded mt-5 w-11/12 text-lg">
                            REFILL QUANTITY
                        </button>
                        <!-- Add quantity Modal -->
                        <div x-show="showModaladd" style="display:none;">
                            <div x-cloak @click="showModaladd = false" class="fixed inset-0 bg-black opacity-50"></div>

                            <div x-cloak @click.away="showModal = false"
                                class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-light-blue p-8 rounded shadow-lg">
                                    <h2 class="text-2xl mb-4 text-center font-bold">ADD QUANTITY</h2>
                                    <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_name" name="ingredient_name"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="flex justify-between gap-5">
                                            <button @click="showModaladd = false"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ showModaledit: false }">
                        <button @click="showModaledit = true"
                            class="bg-blue-500 hover:bg-blue-700 text-white  p-2 px-4 rounded mt-5 w-11/12 text-lg">
                            EDIT INGREDIENT
                        </button>
                        <!-- Modal -->
                        <div x-show="showModaledit" style="display:none;">
                            <div x-cloak @click="showModaledit = false" class="fixed inset-0 bg-black opacity-50"></div>

                            <div x-cloak @click.away="showModal = false"
                                class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-light-blue p-8 rounded shadow-lg">
                                    <h2 class="text-2xl mb-4 text-center font-bold">EDIT INGREDIENT</h2>
                                    <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_name" name="ingredient_name"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="flex justify-between gap-5">
                                            <button @click="showModaledit = false"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Close</button>
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mt-5 text-base w-2/3">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ showModaldelete: false }">
                        <button @click="showModaldelete = true"
                            class="bg-red-500 hover:bg-red-700 text-white  p-2 px-4 rounded mt-5 w-11/12 text-lg">
                            DELETE INGREDIENT
                        </button>
                        <!-- Modal delete_ingredient -->
                        <div x-show="showModaldelete" style="display:none;">
                            <div x-cloak @click="showModaldelete = false" class="fixed inset-0 bg-black opacity-50">
                            </div>

                            <div x-cloak @click.away="showModal = false"
                                class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-light-blue p-8 rounded shadow-lg">
                                    <h2 class="text-2xl mb-4 text-center font-bold">DELETE INGREDIENT</h2>
                                    <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_name" name="ingredient_name"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" id="ingredient_quantity" name="ingredient_quantity"
                                                class="px-4 py-2 border border-gray-300 rounded w-full"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="flex justify-between gap-5">
                                            <button @click="showModaldelete = false"
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

            @foreach ($ingredients as $ingredient2)
                <div class="space-y-6 w-full" x-show="tab === 2{{ $loop->iteration }}">
                    <div class="overflow-x-auto shadow-md rounded-lg">
                        <table
                            class="text-dark-blue table-auto w-full h-full border-collapse border border-slate-400 ">
                            <thead class="w-full">
                                <tr class="text-base bg-sky-700 text-white">
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Reduction
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Refilled
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Balance
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="text-lg hover:bg-gray-50 text-center">
                                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                                        {{ $ingredient2['ingredient_name'] }}
                                    </th>
                                    <td class="px-6 py-4">
                                    </td>
                                    <td class="px-6 py-4">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $ingredient2['ingredient_quantity'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
