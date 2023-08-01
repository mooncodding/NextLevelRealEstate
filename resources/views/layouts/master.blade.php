@if(Auth::user()->hasRole('Super Admin') || Auth::user()->hasRole('Agent') || Auth::user()->hasRole('SEO'))
@include('adminWrapper')
@else
@include('webWrapper')
@endif