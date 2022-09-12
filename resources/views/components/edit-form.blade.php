@props(['listing'])
@auth
    

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6 m-6" >
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-2xl font-medium font-bold leading-6 text-gray-900">List A Job</h3>
          <p class="mt-6 text-sm text-black">Please make sure you give detailed information about your jobs by filling the form.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/{{$listing->id}}/edit" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company-name" class="block text-sm font-medium text-gray-700"> Company Name </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                  
                    <input type="text" name="company"  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Microsoft" value="{{$listing->company}}">
                  </div>
                </div>
              </div>
              @error('company')
                  <p class="text-red-500 text-sm">{{$message}}</p>
              @enderror

              <div class="grid grid-cols-3 gap-6">

                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700"> Job Title</label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                   <input type="text" name="title"  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Laravel Developer, LA" value="{{$listing->title}}">
                  </div>
                </div>
              </div>
              @error('title')
              <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
              <div class="grid grid-cols-3 gap-6">

                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700"> E-mail</label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                   <input type="email" name="email"  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="you@example.com" disabled>
                  </div>
                </div>
              </div>
              @error('email')
              <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700"> Website </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
                    <input type="text" name="website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com" value="{{$listing->website}}">
                  </div>
                </div>
              </div>
              @error('website')
              <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
              
              <div>
                <label for="about" class="block text-sm font-medium text-gray-700"> Job Description </label>
                <div class="mt-1">
                  <textarea  name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="  We need an experiend..." aria-valuetext="{{$listing->description}}"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Brief description for your profile</p>
              </div>
              @error('description')
              <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company-name" class="block text-sm font-medium text-gray-700">Location</label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                  
                    <input type="text" name="location"  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="23 Orsborne Rd, Lagos" value="{{$listing->location}}">
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-3 gap-6">

                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700">Tags</label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                   <input type="text" name="tags"  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Node.js, Laravel, HTML" value="{{$listing->tags}}">
                  </div>
                </div>
              </div>
              <div>
                @error('tags')
                <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror
              
              
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
 
        
          </div>
        </form>
      </div>
    </div>
  </div>
  @endauth
  <x-footer/>