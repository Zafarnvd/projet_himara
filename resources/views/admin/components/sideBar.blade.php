<!-- Side bar-->
<div id="sidebar" class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">

        <ul class="flex flex-col mt-10 px-4 text-center">
            {{-- <h2 class=" text-gray-600" >Modiffications</h2> --}}
            
                <a href="{{ route('dashboard') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Home</span>
                </a>
           
            
                <a href="{{ route('admin.article') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Article</span>
                </a>
    
                <a href="{{ route('admin.chambres') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Rooms</span>
                </a>
            
                <a href="{{ route('admin.reservation') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Reservations</span>
                </a>
           
            
                <a href="{{ route('admin.gallery') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gallery</span>
                </a>
           
            
                <a href="{{ route('caroussel') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Caroussel</span>
                </a>
           
            
                <a href="{{ route('admin.contact') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Contact</span>
                </a>
           
            
                <a href="{{ route('mailbox.index') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Mailing</span>
                </a>
           
          
            
                <a href="{{ route('admin.comment') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Comentaires</span>
                </a>
           
{{--             
                <a href="{{ route('admin.logo') }}"
                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Logo</span>
                </a> --}}
           
        </ul>

    </div>
    