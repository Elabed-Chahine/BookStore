@props(['posts'])
@if($posts->count() > 0)
    <div class="lg:grid lg:grid-cols-6">
       
       @foreach ($posts->skip(1) as $post)

       <x-post-card 
         :post="$post" 
        
       class=" {{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
       
       />
           
       @endforeach
       
    </div>
    @else
       <h1 class="mt-2 block text-gray-400 text-xs"> NO Books AVAILABE In THIS CATEGORY</h1>
    @endif