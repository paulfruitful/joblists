@extends('layouts.boiler')
@section('content')
<div class="p-6">
    <x-listing-comp :listing="$list"/>
    <div class="p-2">
        {!!$list->links()!!}
    </div>
</div>
<x-footer/> 
@endsection