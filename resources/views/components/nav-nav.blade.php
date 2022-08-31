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
              <a href="#" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Profile </a>
              <a href="#" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Jobs</a>
              <a href="/listings" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Manage Listings </a>
              <a href="#" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Received Applications</a>
              <a href="/logout" class="ml-4 px-3 py-2 rounded-md text-md leading-5 font-medium text-white font-semibold hover:bg-red-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout</a>
            
            </div>
          </div>
        </div>