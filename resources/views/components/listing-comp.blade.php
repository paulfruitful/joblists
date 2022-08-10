@props(['listing'])
<div class="text-center">
    <h1 class="text-black text-2xl font-bold tracking-tight mb-12 ">Current Job Listings</h1>
</div>
    <div>
        @if(count($listing)>1)
@foreach ($listing as $list)
    

<div class="max-w-lg ">
<div class="border-2 border-gray box-content block border-rounded p-3 mb-6 flex hover:bg-black hover:border-white w-screen shadow-lg shadow-black-500/40 w-full ">
   <a href="/{{$list->id}}"> <h2 class="text-2xl text-black hover:text-white " >{{$list->title}}</h2></a>
</div>
</div>
@endforeach

    
@else
    
 <div class="p-6"><p class="text-red-700">No Listings</p></div>
@endif
    </div>