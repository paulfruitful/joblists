@props(['listing'])
<div class="text-center">
    <h1 class="text-black text-2xl font-bold tracking-tight mb-12 mt-4 ">Current Job Listings</h1>
</div>
    <div class="min-w-sm items-center">
        @if(count($listing)>0)
@foreach ($listing as $list)
    

<div class="max-w-sm relative">
    <a href="/{{$list->id}}">
<div class="border-2 relative border-gray box-content block border-rounded overflow-hidden p-12 mb-4 flex hover:border-gray-900 w-screen shadow-lg shadow-blacks  ">
   <a href="/{{$list->id}}"> <h2 class="text-2xl text-black  " >{{$list->title}}</h2></a>
  
</div></a>
</div>
@endforeach

    
@else
    
 <div class="p-6 items-center"><p class="text-red-700">No Jobs Available</p></div>
@endif
    </div>

   