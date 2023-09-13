<x-app-layout>
    <section>

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
                            :class="{ 'border-2 bg-sky-700 border-dark-blue font-bold': tab === 2{{ $loop->iteration }}}"
                            href="#" @click.prevent="tab = 2{{ $loop->iteration }}">
                            {{ $ingredient1['ingredient_name'] }}
                        </a>
                    @endforeach
                </div>

                <div class="bg-light-blue text-dark-blue text-4xl flex h-full items-center justify-center">
                    <div x-show="tab === 1">
                        <p class="bg-light-gray p-10 justify-center text-center font-bold w-80 items-center"> INVENTORY </p>
                    </div>
                    @foreach ($ingredients as $ingredient2)
                        <div class="space-y-6 w-full" x-show="tab === 2{{ $loop->iteration }}">
                            <div class="overflow-x-auto shadow-md rounded-lg">
                                <table class="text-dark-blue table-auto w-full h-full border-collapse border border-slate-400 ">
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
                                            <th scope="col" class="px-6 py-3">
                                                <span class="Action"></span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="text-lg hover:bg-gray-50 text-center">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium  whitespace-nowrap">

                                            </th>
                                            <td class="px-6 py-4">

                                            </td>
                                            <td class="px-6 py-4">

                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $ingredient2['ingredient_quantity'] }}
                                            </td>
                                            <td class="px-6 py-4 text-right flex flex-col">
                                                <div x-data="{ showModal: false }">
                                                    <button @click="showModal = true" class="rounded relative inline-flex group items-center justify-center px-5 py-1 m-1 cursor-pointer border-b-4 border-l-2 active:dark-blue active:shadow-none shadow-lg bg-gradient-to-tr from-blue-600 to-blue-500 border-blue-700 text-white">
                                                        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-20 group-hover:h-20 opacity-10"></span>
                                                        <span class="relative">ADD</span>
                                                        </button>

                                                    <!-- Modal -->
                                                    <div x-show="showModal" style="display:none;">
                                                        <div x-cloak @click="showModal = false" class="fixed inset-0 bg-black opacity-50"></div>

                                                        <div x-cloak @click.away="showModal = false" class="fixed inset-0 flex items-center justify-center z-50">
                                                            <div class="bg-light-blue p-8 rounded shadow-lg">
                                                                <h2 class="text-2xl mb-4 text-center">Add Quantity</h2>
                                                                <form action="{{ route('admin.add_ingredient') }}" method="POST">
                                                                    @csrf
                                                                    <div class="mb-4">
                                                                        <input type="text" id="ingredient_name" name="ingredient_name" class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Name" required>
                                                                    </div>
                                                                    <div class="mb-4">
                                                                        <input type="text" id="ingredient_quantity" name="ingredient_quantity" class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Quantity" required>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Submit</button>
                                                                    </div>
                                                                </form>

                                                                <div class="text-center">
                                                                <button @click="showModal = false" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-5">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <a href="#_" class="rounded relative inline-flex group items-center justify-center px-1 py-1 m-1 cursor-pointer border-b-4 border-l-2 active:dark-blue active:shadow-none shadow-lg bg-gradient-to-tr from-blue-600 to-blue-500 border-blue-700 text-white">
                                                        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-20 group-hover:h-20 opacity-10"></span>
                                                        <span class="relative">EDIT</span>
                                                        </a>
                                                        <a href="#_" class="rounded relative inline-flex group items-center justify-center px-1 py-1 m-1 cursor-pointer border-b-4 border-l-2 active:dark-blue active:shadow-none shadow-lg bg-gradient-to-tr from-blue-600 to-blue-500 border-blue-700 text-white">
                                                            <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-20 group-hover:h-20 opacity-10"></span>
                                                            <span class="relative">DELETE</span>
                                                            </a>
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

    </section>
</x-app-layout>
