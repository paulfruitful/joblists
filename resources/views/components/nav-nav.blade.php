<script src="//unpkg.com/alpinejs" defer></script>
<nav 
class="z-0 relative" 
x-data="{open:false,menu:false, lokasi:false}">
  <div class="relative z-10 bg-black shadow">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex items-center px-2 lg:px-0">
          <a class="flex-shrink-0" href="/">
            <img class="block lg:hidden h-12 w-16" src="https://www.kindpng.com/picc/m/133-1337806_job-vector-seeker-job-logo-magnifying-glass-png.png" alt="Logo">
            <img class="hidden lg:block h-12 w-auto" src="https://www.kindpng.com/picc/m/133-1337806_job-vector-seeker-job-logo-magnifying-glass-png.png" alt="Logo">
          </a>
          <div class="hidden lg:block lg:ml-2">
            <div class="flex">
             <a href="/listings" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Jobs</a>
              <a href="/manage" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Manage Listings </a>
              <a href="/applications" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Received Applications</a>
              <a href="/logout" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout</a>
            
            </div>
          </div>
        </div>
        <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
          <div class="max-w-lg w-full lg:max-w-xs">
            <label for="search" class="sr-only">Search </label>
            <form methode="get" action="/listings" class="relative z-50">
              <button type="submit" id="searchsubmit" class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </button>
              <input type="text" name="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-white text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:text-gray-900 sm:text-sm transition duration-150 ease-in-out" placeholder="Search">
            </form>
          </div>
        </div>
        <div class="flex lg:hidden">
          <button @click="menu=!menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div x-show="menu" class="block md:hidden">
      <div class="px-2 pt-2 pb-3">
     <a href="/listings" class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-red-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"> Jobs</a>
        <a href="/manage" class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-red-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Manage Listings </a>
        <a href="/applications" class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-red-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Received Applications</a>
      
        <a href="/logout" class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-red-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Logout</a>
      </div>
    </div>
  </div>
</nav>