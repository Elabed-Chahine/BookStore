<x-layout>

   
    <div class="  dark:bg-gray-900 bg-opacity-90 mr-20 " id="chec-div">
        <div class="w-full  z-10 right-0 h-full  transform translate-x-0 transition " id="checkout">
            <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
                <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800   lg:h-screen h-auto" id="scroll">
                    <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer" onclick="checkoutHandler(false)">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1.svg" alt="previous"/>
                         <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1dark.svg" alt="previous"/>
                        <a href="/"class="text-sm pl-2 leading-none dark:hover:text-gray-200">Back</a>
                    </div>
                    <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">Bag</p>
                    
                    @foreach ($paniers as $panier )
                        
                            
                      
                    <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                        <div class="md:w-4/12 2xl:w-1/4 w-full">
                            <img src="{{ asset('storage/' . $panier->product->thumbnail) }}" alt="" class="h-full object-center object-cover md:block hidden" width="100">
                            <img src="{{ asset('storage/' . $panier->product->thumbnail) }}" alt="" class="md:hidden w-full h-full object-center object-cover" width="100">
                        </div>
                        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                           
                            <div class="flex items-center justify-between w-full">
                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">{{$panier->product->title}}</p>
                               
                            </div>
                            <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">{{$panier->product->exerpt}}</p>
                            <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Date debut Location {{$panier->product->created_at->format('Y-m-d')}}</p>
                            <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Duree courante {{$panier->created_at->diffForHumans()}}</p> </p>
                            <div class="flex items-center justify-between pt-5">
                                
                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">{{$panier->price}}$</p>
                            </div>
                        </div>
                    </div>




                    
                    @endforeach









                </div>
                <div class="lg:w-96 md:w-8/12  bg-gray-100 dark:bg-gray-900 ">
                    <div class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                        <div>
                            <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>
                            <div class="flex items-center justify-between pt-16">
                                <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>
                                <p class="text-base leading-none text-gray-800 dark:text-white">{{$paniers->sum('price')}}</p>
                            </div>
                            <div class="flex items-center justify-between pt-5">
                                <p class="text-base leading-none text-gray-800 dark:text-white">Shipping</p>
                                <p class="text-base leading-none text-gray-800 dark:text-white">$30</p>
                            </div>
                            <div class="flex items-center justify-between pt-5">
                                <p class="text-base leading-none text-gray-800 dark:text-white">Tax du retard</p>
                                <p class="text-base leading-none text-gray-800 dark:text-white">$35</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                                <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                                <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">${{$paniers->sum('price')+65}}</p>
                            </div>
                            <button class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
    

</x-layout>