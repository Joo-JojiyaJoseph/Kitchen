<x-app-layout>
    <section>
        <div class="container h-screen md:p-20 flex items-center justify-center mx-auto">
            <div class="grid md:grid-cols-[25%,65%] w-full justify-center">
                <div class="bg-dark-blue  flex flex-col divide-y-2">
                    <a href="{{route('admin.home')}}" class="text-2xl font-semibold text-center text-white p-10">
                        HOME
                    </a>
                    <a class="text-2xl font-semibold text-center text-white p-10">
                        ORDER HISTORY
                    </a>
                    <a href="{{route('admin.ingredient')}}" class="text-2xl font-semibold text-center text-white p-10">
                        INVENTORY
                    </a>
                    <a class="text-2xl font-semibold text-center text-white p-10">
                        USERS
                    </a>
                </div>
                <div class="bg-light-blue text-dark-blue text-4xl flex items-center justify-center h-full">
                    <p class="bg-light-gray p-10 justify-center text-center font-bold w-80"> ADMIN </p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
