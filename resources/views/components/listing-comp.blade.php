@props(['listing'])
<div class="text-center">
    <h1 class="text-black text-2xl font-bold tracking-tight mb-12 ">Current Job Listings</h1>
</div>
    <div>
        @if(count($listing)>1)
@foreach ($listing as $list)
    

<div class="max-w-lg ">
<div class="border-2 border-gray box-content block border-rounded  p-12 mb-6 flex hover:border-white w-screen shadow-lg shadow-blacks w-full ">
   <a href="/{{$list->id}}"> <h2 class="text-2xl text-black  " >{{$list->title}}</h2></a>
   
   <a href="/{{$list->id}}" class="bg-indigo-800 p-3 rounded-md ml-12 inline-block  text-white relative bottom-0 left-32 ">Apply</a>

</div>
</div>
@endforeach

    
@else
    
 <div class="p-6"><p class="text-red-700">No Listings</p></div>
@endif
    </div>