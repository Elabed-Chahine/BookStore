{{-- @extends("layout")
@section('content') --}}

<x-layout>



    @include( "_post-header")

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count() > 0)


            <x-post-featured :post="$posts[0]" />
            <x-post-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <h1 class=" w-6x1 py-5 px-8 bg-blue-600 text-yellow-500 text-center ">NO Books available</h1>

        @endif


</x-layout>
{{-- <div class="lg:grid lg:grid-cols-3">
        <x-post-card />
        <x-post-card />
        <x-post-card />
        
        
    </div>
</main>
</x-layout>

           
   {{--@foreach ($posts as $post) 
           
         
        
    <article>
        <h1><a href="post/{{$post->path}}">   {{ $post->title}} </a></h1>
        
        by the Author  <a href="authors/{{$post->author->username}}"> <b>{{ $post->author->name }}</b> in the category</a>   <a href="categories/{{$post->category->name}}"> <b>{{ $post->category->name }}</b> </a> <br>
        
                     {{$post->excerpt}} 

    </article>
    
        
    @endforeach
   
@endsection*/ --}}
