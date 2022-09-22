<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Book Library</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Elabed chahine <img src="/images/lary-head.svg" alt="Head of chahine"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Book Library collection, so Feel free to roam around and pick your favourite ones
        at reasonable prices!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 ">
        <!--  Category -->


        <div class="relative lg:inline-flex  bg-gray-100 rounded-xl">
           <x-category-dropdown />
    </div>

    {{-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>
            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg> --}}


  
    <!-- Search -->
    <div class="relative flex lg:inline-flex items-center  rounded-xl px-3 py-2">
        <form method="GET" action="/">
            @if(request('category'))

            <input type="hidden" name='category' value="{{ request('category') }}"/>
            
            @endif
           


            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="search" placeholder="Search"  value="{{ request('search') }}">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </button>
              </div>

             





            
            </div>
            </div>
        </form>
    </div>

    </div>
</header>
