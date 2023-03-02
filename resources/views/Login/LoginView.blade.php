<x-master title="Login">
    <h1 class="  text-center font-weight-bold">Wellcome back</h1>
    <form action="{{ route('connected') }}" method="POST">
        @csrf
    <div class="form-group">
        @include('Partails.AlertDanger'){{--  appelle decomposant qui gerer les erreur --}}
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old("email")}}" >
    </div>
    <div class="form-group"> 
        <label>Mot de passe</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password">

    </div>
    <div class="d-grid">
        <input type="submit" value="Se Connecter" class="btn btn-primary btn-block">
    </div>
    <div class="text-center">

        <a href="{{route("create.profile")}}" >S'incrire?</a>
    </div>
    </form>
</x-master>