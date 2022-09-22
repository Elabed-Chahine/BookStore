<x-layout>

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">


            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">

                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </p>

                        <div class="flex items-center lg:justify-center text-sm mt-4">
                            <img src="/images/lary-avatar.svg" alt="Lary avatar">
                            <div class="ml-3 text-left">
                                <a href="/?author={{ $post->author->username }}">
                                    <h5 class="font-bold"> {{ $post->author->name }}</h5>
                                </a>
                                <h6>Writer at our library</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                            d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current"
                                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>

                                Back to Posts
                            </a>

                            <x-post-category :category="$post->category" />
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            {{ $post->title }}
                        </h1>

                        <div class="space-y-4 lg:text-lg leading-loose">
                            <p>{{ $post->body }}</p>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae
                                vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                aut
                                fugit.</p>
                             
                        </div>
                      
                            
                       
































                        
                  
                        <form method="POST" action="/user/shop/add" class="mt-10 ">
                            @csrf
            
                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 hidden"
                                       for="user_id"
                                >
                                    Name
                                </label>
                               
            
                                <input class="border border-gray-400 p-2 w-full hidden"
                                       type="text"
                                       name="user_id"
                                       id="user_id"
                                       value="{{ auth()->id() }}"
                                       required
                                       placeholder="{{ auth()->id() }}"
                                >
                                @error('user_id')
                                <? echo "erreur ajout client" ?>
                                @enderror
                            </div>
            
            
            
            
                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 hidden"
                                       for="post_id"
                                >
                                    Name
                                </label>
                               
            
                                <input class="border border-gray-400 p-2 w-full hidden"
                                       type="text"
                                       name="post_id"
                                       id="post_id"
                                       value="{{ $post->id }}"
                                       placeholder="{{ $post->id }}"
                                       required
                                >
                              
                            </div>
                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 hidden"
                                       for="price"
                                >
                                    Name
                                </label>
                               
            
                                <input class="border border-gray-400 p-2 w-full hidden"
                                       type="text"
                                       name="price"
                                       id="price"
                                       value="{{ $post->Price }}"
                                       placeholder="{{ $post->Price}}"
                                       required
                                >
                                @error('price')
                                <? echo "erreur ajout produit" ?>
                                @enderror
                            </div>
                                
                         @auth
                         <button class="mt-8 ml-10 border border-gray-800 py-1 px-8 bg-black hover:bg-gray-700 w-100 rounded-2xl text-white " type="submit">Louer livre</button>


                         @else
                         <a href="/register"class="mt-8 ml-10 border border-gray-800 py-1 px-8 bg-black hover:bg-gray-700 w-100 rounded-2xl text-white " type="submit">Louer livre</a>
                         @endauth

                                
                            </div>
                        </form>


                        
                  






































                        <hr class="w-full mt-5 black bg-black py-0.5">
                       
                    </div>
                   
                       
                   
                    <section class="col-span-12 col-start-2 mt-10 space-y-6 mt-6">
                        @auth
                        <form Method="POST" action="/posts/{{$post->path}}/comment" class=" border border-gray-200 p-6 rounded-xl space-x-4">
                            @csrf


                            <header class="flex items-center">
                                <img src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" alt="" width="50" height="50"
                                    class="rounded-full mr-5">
                                want to leave a comment ?
                            </header>
                            <div><textarea name="body" id="body" cols="30" rows="5" placeholder="type your review about this book"
                                    class=" mt-2 border border-gray-300 w-full"></textarea>
                                    @error('body')
                                        <span class="text-red-600 size-sm">*{{$message}}</span>
                                    @enderror
                            </div>

                            <button class="mt-2 py-1 px-8 bg-blue-500 hover:bg-blue-600 rounded-2xl text-white " type="submit">POST</button>
                        </form>
                        @else
                        <b>
                        <a href="/register" class="hover:underline text-bold"> Register</a> or <a href="/login" class="hover:underline text-bold">Login </a> to leave a comment</b>

                        @endauth


                        @foreach ($post->comments as $comment)
                            <x-post-comment :comment="$comment" />
                        @endforeach



                    </section>
                </article>
            </main>


        </section>


    </body>


    <x-flash-button />


</x-layout>








{{-- @extends('layout')

@section('content')
    

    <article>
             <h1>     {{$post->title;}} </h1>
              by the Author  <a href="authors/{{$post->author->username}}"> <b>{{ $post->author->name }}</b> in the category</a>   <a href="categories/{{$post->category->name}}"> <b>{{ $post->category->name }}</b> </a> <br>
        {!!$post->body;!!} 
     </article>
     <br>
     <a href="/" class="adresspost">go back</a>
@endsection --}}
