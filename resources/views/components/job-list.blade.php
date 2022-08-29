<!-- Container for demo purpose -->
@props(['list'])
<div class="container my-24 px-6 mx-auto">
  <a href="/" class="border-solid border-4 border-gray-300"><img src="https://th.bing.com/th/id/R.1d50d12c2d9486dda5bf54dbafc36af6?rik=ZcDVziJCuEPtgg&pid=ImgRaw&r=0" alt="" class="align-top w-14">
    </a><!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="hidden lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/088.jpg" alt="Trendy Pants and Shoes"
              class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <div class="px-6 py-12 md:px-12">
              <h2 class="text-2xl font-bold mb-4">{{$list->title}}</h2>
              <p class="uppercase text-red-600 font-bold mb-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 mr-2">
                  <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                  <path fill="currentColor"
                    d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z" />
                  </svg>{{$list->company}}
              </p>
              <p class="text-gray-500 mb-6">
                {{$list->description}}
              </p>
              @if (auth()->id()==$list->user_id)
                  
              <a href="/{{$list->id}}/edit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
            <form action="/{{$list->id}}/delete" method="post">
              
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700">Delete</button>
            
            </form>
           

              @else
                 <div></div> 
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
    
  </div>