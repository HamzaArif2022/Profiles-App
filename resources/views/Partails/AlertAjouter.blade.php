@if (session()->has('success')) {{-- the sessions is defind defind in every page the value of session is come from the with function   --}} 
    <x-alert type='success'>{{-- the alert component  --}}

        {{ session('success') }}
    </x-alert>
@endif
