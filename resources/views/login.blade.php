{{-- <x-guest-layout>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 <script>
     document.querySelector('form').addEventListener('submit', function (e) {
         e.preventDefault();

         const email = document.querySelector('input[name="email"]').value;
         const password = document.querySelector('input[name="password"]').value;

         axios.post('http://localhost:8000/api/login', {
             email: email,
             password: password,
         })
         .then(response => {
             const accessToken = response.data.access_token;
             // Store the access token securely (e.g., in local storage or a cookie)
             // Redirect to the desired page or perform other actions
         })
         .catch(error => {
             // Handle login errors
             console.error(error);
         });
     });
 </script>

 <div class="min-h-screen bg-gray-100 py-12 flex flex-col justify-center">
     <div class="relative">
         <div
             class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-100 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
         </div>
         <div class="relative py-20 px-16 bg-white shadow-lg rounded-3xl">
                   <div>
                     <h1 class="2xl:text-3xl text-2xl font-bold text-center text-blue-900">Login</h1>
                   </div>

                      <form method="POST" action="{{ route('login') }}">
                         @csrf
                          <div class="py-8 text-base text-gray-700 flex flex-col gap-y-5 place-items-center">
                            <input class="rounded w-full border-gray-300 placeholder:text-gray-400 placeholder:text-sm" name="email" type="text"  placeholder="Email" />
                             <input class="rounded w-full border-gray-300 placeholder:text-gray-400 placeholder:text-sm" autocomplete="off"  name="password" type="password"  placeholder="Password" />
                             <input class="rounded w-full border-gray-300 placeholder:text-gray-400 placeholder:text-sm" autocomplete="off"  name="c_password" type="password"  placeholder="Confirm Password" />
                             <button class="animate-bounce bg-blue-500 text-white rounded-md p-2 mt-5  w-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                               </svg>
                               </button>

                     </div>
                 </form>
         </div>
     </div>
 </div>
 </x-guest-layout> --}}
