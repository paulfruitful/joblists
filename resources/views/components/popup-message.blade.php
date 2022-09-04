@if(session()->has('Success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-yellow-700 text-white px-48 py-3">
  <p>
    {{session('Success')}}
  </p>
</div>
@endif