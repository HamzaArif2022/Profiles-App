<x-master title="Mon Profile">
    {{-- pour affiche tout les erreur associate to the validation  --}}
    @if ($errors->any())

        <x-alert type="danger">
            <ul>{{-- pour affiche tout les erreur --}}
                @foreach ($errors->all() as $err)
                    <li>
                        {{ $err }}
                    </li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <div class="container">

        <form action="{{ route('Store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name"
                    value="{{ old('name') }}">
                @error('name')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                @error('password')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Confirme Mot de passe</label>
                <input type="password" class="form-control" name="password_confirmation"
                    placeholder="confirme your password">

            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea placeholder="Somthing About You ..." class="form-control" name="bio" rows="3">{{ old('bio') }}</textarea>
                @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="D-grid my-3">
                <input type="submit" class="btn btn-primary btn-block" value="Ajouter" />
            </div>
        </form>

    </div>

</x-master>
