

            <form method="POST" action="/user/shop/add" class="mt-10 hidden">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="user_id"
                    >
                        Name
                    </label>
                   

                    <input class="border border-gray-400 p-2 w-full"
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
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="post_id"
                    >
                        Name
                    </label>
                   

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="post_id"
                           id="post_id"
                           value="{{ $post->id }}"
                           placeholder="{{ $post->id }}"
                           required
                    >
                  
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="price"
                    >
                        Name
                    </label>
                   

                    <input class="border border-gray-400 p-2 w-full"
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
                    {{$slot}}
             
               
                </div>
            </form>
   
