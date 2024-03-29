<x-master title='Profile'>

    <h1>Profile</h1>
    <div class="row my-5">
        {{-- make the loop on the component  --}}
        @foreach ($profiles as $Profile)
            {{-- $profiles is comming from the controller containe all users that we have in dbs --}}
            <x-card-users :Profile='$Profile' />{{--  les list des profile par card repete le composent plusieurs fois  --}}
        @endforeach
    </div>

    <ul class="pagination justify-content-center">
        {{ $profiles->links() }}
    </ul>

</x-master>
