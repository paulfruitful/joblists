@props(['listing'])
<div class="text-center">
    <h1 class="text-black text-2xl">Current Job Listings</h1>
</div>
    <div>
        @if(count($listing)>1)
@foreach ($listing as $list)
    

<div class="max-w-lg p-6">
<div class="border-2 border-black block p-6">
   <a href="/{{$list->id}}"> <h2 class="text-2xl text-black" >{{$list->title}}</h2></a>
</div>
</div>
@endforeach
@endif
    </div>