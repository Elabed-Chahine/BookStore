<x-dropdown>
    <x-slot name="trigger">
        <button 
        class=" py-2 pl-3 pr-9 text-sm font-semibold  w-full lg:w-32 text-left flex lg:inline-flex">
        {{ isset($currentcategory) ? $currentcategory->name : 'categories' }}
        <svg class="transform -rotate-90  pointer-events-none absolute  " style="right:12px;" width="22"
            height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222"
                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </button>
    </x-slot>
        <x-css-dropmenu href="/" :active="isset($currentcategory)? false: true ">All </x-css-dropmenu>
        @foreach ($categories as $category)
        <x-css-dropmenu href="/?category={{$category->name}}&{{ http_build_query(request()->except('category','page'))}}" :active="(request()->category== $category->name)" > {{ $category->name }} 
        </x-css-dropmenu>
           {{-- {{ isset($currentcategory) && $currentcategory->id == $category->id ? 'bg-blue-500 text-white' : '' }}"> --}}
        @endforeach
</div>

</x-dropdown>