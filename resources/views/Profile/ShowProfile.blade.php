<x-master title="Mon Profile">
    <h1>Mon Profile</h1>
    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Bio</th>

        </tr>

        <tr>
            <td>{{ $Profiles['id'] }}</td>
            <td>{{ $Profiles['name'] }}</td>
            <td>{{ $Profiles['email'] }}</td>
            <td>{{ Str::limit($Profiles['bio'], 12, '.......') }}</td>
        </tr>

    </table>

</x-master>
