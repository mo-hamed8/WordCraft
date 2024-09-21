<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MO | Tailoring</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    


    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
     </button>
     
     <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="{{route("word.create")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <path d="M12 0c-1.1 0-2 .9-2 2v5h1V2c0-.6.4-1 1-1s1 .4 1 1v5h1V2c0-1.1-.9-2-2-2zm6.5 7.1c-1.4-1.5-3.2-2.4-5.2-2.6V5H12v-.5c-2 .2-3.8 1.1-5.2 2.6-1.6 1.7-2.5 3.9-2.5 6.2s.9 4.5 2.5 6.2c1.5 1.6 3.5 2.5 5.6 2.5 2 0 4-.9 5.5-2.5 1.6-1.7 2.5-3.9 2.5-6.2s-.9-4.5-2.5-6.2zM12 22c-1.8 0-3.5-.7-4.7-2.1-1.2-1.3-1.8-3.1-1.8-5 0-3.8 2.8-7 6.5-7.9V19c1.3.2 2.5.5 3.8 1.1-1.1.8-2.5 1.3-3.8 1.3zm0-6V9.5c2.3.8 4 3.2 4 6s-1.7 5.2-4 6v-5.5z"/>
                   </svg>
                    <span class="ms-3">Add Words</span>
                 </a>
              </li>
              <li>
                 <a href="{{route("learnNewWord")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <path d="M12 0c-1.1 0-2 .9-2 2v5h1V2c0-.6.4-1 1-1s1 .4 1 1v5h1V2c0-1.1-.9-2-2-2zm6.5 7.1c-1.4-1.5-3.2-2.4-5.2-2.6V5H12v-.5c-2 .2-3.8 1.1-5.2 2.6-1.6 1.7-2.5 3.9-2.5 6.2s.9 4.5 2.5 6.2c1.5 1.6 3.5 2.5 5.6 2.5 2 0 4-.9 5.5-2.5 1.6-1.7 2.5-3.9 2.5-6.2s-.9-4.5-2.5-6.2zM12 22c-1.8 0-3.5-.7-4.7-2.1-1.2-1.3-1.8-3.1-1.8-5 0-3.8 2.8-7 6.5-7.9V19c1.3.2 2.5.5 3.8 1.1-1.1.8-2.5 1.3-3.8 1.3zm0-6V9.5c2.3.8 4 3.2 4 6s-1.7 5.2-4 6v-5.5z"/>
                   </svg>
                    <span class="ms-3">Study New Words</span>
                 </a>
              </li>
              <li>
                 <a href="{{route("learn.index")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <path d="M12 0c-1.1 0-2 .9-2 2v5h1V2c0-.6.4-1 1-1s1 .4 1 1v5h1V2c0-1.1-.9-2-2-2zm6.5 7.1c-1.4-1.5-3.2-2.4-5.2-2.6V5H12v-.5c-2 .2-3.8 1.1-5.2 2.6-1.6 1.7-2.5 3.9-2.5 6.2s.9 4.5 2.5 6.2c1.5 1.6 3.5 2.5 5.6 2.5 2 0 4-.9 5.5-2.5 1.6-1.7 2.5-3.9 2.5-6.2s-.9-4.5-2.5-6.2zM12 22c-1.8 0-3.5-.7-4.7-2.1-1.2-1.3-1.8-3.1-1.8-5 0-3.8 2.8-7 6.5-7.9V19c1.3.2 2.5.5 3.8 1.1-1.1.8-2.5 1.3-3.8 1.3zm0-6V9.5c2.3.8 4 3.2 4 6s-1.7 5.2-4 6v-5.5z"/>
                   </svg>
                    <span class="ms-3">Study My Words</span>
                 </a>
              </li>
                  
              

              {{--  --}}
             
              {{--  --}}
              @if (Route::has("login"))
                  @guest
                     <li>
                        <a href="{{route('login')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                           </svg>
                           <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                        </a>
                     </li>
                  @endguest
                  
              @endif
              @if (Route::has("register"))
                  @guest
                     <li>
                        <a href="{{route('register')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                           </svg>
                           <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                        </a>
                     </li>
                  @endguest
                  
              @endif

              @if (Route::has("logout"))
                  @auth
                  <li>
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                      @csrf
                     
                      <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                         </svg>
                         <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
                      </button>
                     </form>
                  <li>
                  @endauth
              @endif
           </ul>
        </div>
     </aside>
     
     <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
           {{$slot}}
        </div>
     </div>
 
</body>
</html>