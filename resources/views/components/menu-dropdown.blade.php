


                <div  {{ $attributes(["class"=>"flex flex-no-wrap fixed left-0 top-0 h-full"])}}>
                    <!-- Sidebar starts -->
                    <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
                    <div style="min-height: 716px" class="w-64 absolute sm:relative bg-gray-800 shadow md:h-full  flex-col justify-between hidden sm:flex">
                        <div class="px-8">
                            <div class="h-16 w-full flex items-center">
                                <button aria-label="Open Menu" id="closeMenu" >
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
                                  <a href="/" class="mt-1 ml-4">
                                    <img src="/images/logo1.png" alt=" Logo" width="165" height="16">
                                    
                                </a>
                            </div>
                            <ul class="mt-12">
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                        </svg>
                                        <span class="text-sm ml-2">Accueil</span>
                                    </a>
                                   
                                </li>
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/admin/posts" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                        </svg>
                                        <span class="text-sm ml-2">Dashboard</span>
                                    </a>
                                   
                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/admin/posts/create" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white active:bg-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                        </svg>
                                        <span class="text-sm ml-2">Add a new BOOk</span>
                                    </a>
                                    
                                </li>
                               
                                    </a>
                                   
                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/logout" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                            <polyline points="4 12 12 16 20 12" />
                                            <polyline points="4 16 12 20 20 16" />
                                        </svg>
                                        <span class="text-sm ml-2">Logout</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="flex justify-center mt-48 mb-4 w-full">
                                <div class="relative">
                                    <div class="text-gray-300 absolute ml-4 inset-0 m-auto w-4 h-4">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg2.svg" alt="Search">
                                    </div>
                                    <input class="bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-100 rounded w-full text-sm text-gray-300 placeholder-gray-400 bg-gray-100 pl-10 py-2" type="text" placeholder="Search" />
                                </div>
                            </div>
                        </div>
                        <div class="px-8 border-t border-gray-700">
                            <ul class="w-full flex items-center justify-between bg-gray-800">
                                <li class="cursor-pointer text-white pt-5 pb-3">
                                    <button aria-label="show notifications" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg3.svg" alt="notifications">
                                    </button>
                                </li>
                                <li class="cursor-pointer text-white pt-5 pb-3">
                                    <button aria-label="open chats" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300 active">
                                     <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg4.svg" alt="chat">
                                    </button>
                                </li>
                                <li class="cursor-pointer text-white pt-5 pb-3">
                                    <button aria-label="open settings" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg5.svg" alt="settings">
                                    </button>
                                </li>
                                <li class="cursor-pointer text-white pt-5 pb-3">
                                    <button aria-label="open logs" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg6.svg" alt="drawer">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-64 z-40 absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
                       
                       
                              
                                
                            </ul>
                          
                        </div>
                        
                    </div>
                    <!-- Sidebar ends -->
                    <!-- Remove class [ h-64 ] when adding a card block -->
                   
                </div>
                
                
            