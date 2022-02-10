@if(session()->has('success'))
    <div x-data="{show:true}" x-init="setTimeout(() => show = false, 4000)" class="row row-cols-3 fixed-bottom" x-show="show" x-transition.leave.duration.800ms>
        <div class="col-8">
        </div>
        <div class="col-3 text-center mb-3 session-success py-2 rounded-pill">
            <p class="h6 text-white">
                {{session('success')}}
            </p>
        </div>
    </div>
@endif
