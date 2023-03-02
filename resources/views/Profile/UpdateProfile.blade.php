<x-master title="Update">
    <form action="" method="POST">

        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name"
            >

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">

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
            <textarea placeholder="Somthing About You ..." class="form-control" name="bio" rows="3"></textarea>

        </div>
        <div class="D-grid my-3">
            <input type="submit" class="btn btn-primary btn-block" value="save"/>
        </div>
    </form>
</x-master>
