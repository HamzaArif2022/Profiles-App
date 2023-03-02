@if (session()->has('danger'))
    <x-alert type="danger">
      <span class="font-weight-bold">{{ session()->get('danger') }}</span> 
    </x-alert>
@endif
