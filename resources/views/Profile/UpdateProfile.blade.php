<x-master title="Update">
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
    <form action="{{ route('Profile.Update',$profil["id"]) }}" method="POST" enctype="multipart/form-data">
        @method("PUT") {{-- specifie la modification --}}
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name"
                value="{{ old("name",$profil['name'] )}}">
         {{-- test when the is  enter somthing wrong in the form and referch the page we will return the old value that his inser --}}
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email"
                value="{{old("email" ,$profil['email']) }}"">

        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">

        </div>
        <div class="form-group">
            <label>Confirme Mot de passe</label>
            <input type="password" class="form-control" name="password_confirmation"
                placeholder="confirme your password">

        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Somthing About You ..." class="form-control" name="bio" rows="3">{{ old("bio", $profil['bio']) }}</textarea>

        </div>
        <div class="form-group">
            <label>photo</label>
           <input type="file"  class="form-control" name="image" id="">
           
        </div>
        <div class="D-grid my-3">
            <input type="submit" class="btn btn-primary btn-block" value="save" />
        </div>
    </form>
</x-master>
