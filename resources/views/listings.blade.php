@extends('layouts.boiler')
@section('content')
<div>
    <x-listing-comp :listing="$list"/>
    <div class="p-6">
        {!!$list->links()!!}
    </div>
</div>
<x-footer/> 
@endsection