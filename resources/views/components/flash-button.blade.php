
@if(session()->has('success'))
<div 
x-data ="{show: true}"
    x-init="setTimeout(()=> show=false, 4000)"
    x-transition:enter.duration.5000ms
    x-transition:leave.duration.4000ms
    x-show="show"
class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm hover:bg-blue-600 ">
 <p > {{session()->get('success')}}</p> {{-- alternative same thing but easier session('success') --}}
</div>
@endif