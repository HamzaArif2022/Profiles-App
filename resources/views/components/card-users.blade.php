@props(['Profile'])
<div class="col-sm-3">

    <div class="card my-2">
        <img src="{{ asset('storage/' . $Profile['image']) }}" class="card-img-top" alt="Your Image">
        <div class="card-body">
            <h5 class="card-title">{{ $Profile['name'] }}</h5>
            <p class="card-text">{{ Str::limit($Profile['bio'], 12, '.......') }}</p>

            <a href="/ShowDetails/{{ $Profile['id'] }}" class="stretched-link"></a> {{-- stretched link pour make card cllickabel --}}
            {{-- redirect the user to the show page with id as parameter --}}

        </div>
        <div class="card-foot bg-light  " style="display: flex" px-3 py-3 style="z-index: 5;">
            {{-- supprission --}}
            <form action="{{ route('destroy', $Profile['id']) }}" method="POST">
                @csrf
                @method('DELETE') {{-- pour specifie la supprission --}}
                <button type="submit" class="btn  btn-danger my-2 mx-2 ">delete</button>
            </form>
            {{-- modification --}}
            <form action="{{ route('viewUpdate', $Profile['id']) }}" style="z-index: 5;" method="get" ">
                @csrf
                <button class="btn btn-primary  my-2 mx-2" type="submit">Update</button>

            </form>
        </div>
        

        
    </div>
</div>
