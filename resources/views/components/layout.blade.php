<!doctype html>


<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
    @auth
    <div class="bottom-6 right-6 fixed">
        <a href="/user/shop/{{auth()->id()}}" class="hover:pointer"><svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        
          </svg>
        </a>
        </div>
    @endauth
   
    <section class=" px-3 pt-0 pb-5 mt-5">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="flex">
                @auth
                    
                
                @if (auth()->user()->username == "elabed")
                    
                
                    
               
                <button aria-label="Open Menu" id="openMenu" class=" hidden md:flex" >
                    <svg
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      class="w-8 h-8"
                    >
                      <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                  </button>
                
                  <x-menu-dropdown class="hidden" id="dropdown" />
                  @endif
                  @endauth


                <a href="/" class="mt-1 ml-4">
                    <img src="/images/logo.png" class="items-left"alt=" Logo" width="165" height="16">
                    
                </a>
            </div>

            <div class=" md:mt-0 flex items-center">
                @auth
                
                   <p class="text-xs font-bold uppercase ">Welcome, {{auth()->user()->username}}</p> <a href="/logout" class="text-xs font-semibold uppercase ml-6 text-blue-500 align-flex">logout</a>
                @else
                
                <a href="/register" class="text-xs font-bold uppercase ">register</a> <a href="/login" class="text-xs font-semibold uppercase ml-6 text-blue-500">login</a>
                @endauth
                @auth
                    
                
                @if (auth()->user()->username == "elabed")
                    

                <a href="/admin/posts/create" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 flex md:hidden ">
                   ADD BOOK
                </a>
                <a href="/admin/posts" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 flex md:hidden ">
                    Dashboard
                 </a>
                 @endif
                 @endauth
            </div>
        </nav>

               {{$slot}}
        <footer id="bottom" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest books</h5>
            

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
   <x-flash-button />
   <script language="javascript">
       const openMenu = document.querySelector('#openMenu');
       const closeMenu = document.querySelector('#closeMenu');
       const dropdown = document.querySelector('#dropdown')

       openMenu.addEventListener('click', ()=>{
           if(dropdown.classList.contains('hidden')){
               dropdown.classList.remove('hidden');
           }else{
               dropdown.classList.add('hidden');
           }
       });
       closeMenu.addEventListener('click', ()=>{
           if(dropdown.classList.contains('hidden')){
               dropdown.classList.remove('hidden');
           }else{
               dropdown.classList.add('hidden');
           }
       });


   </script>
</body>
 