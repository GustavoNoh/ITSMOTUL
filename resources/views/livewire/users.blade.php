<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1 class="font-bold text-2xl">Usuarios del sistema</h1>
    <p>{{$mensaje}}</p>
    <input type="text" name="mensaje" wire:model='mensaje'>
    <div class="flex gap-4">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><button wire:click="show({{$user->id}})">Detalles</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
        <div>
            <h2 class="font-bold text-xl">Detalles del usuario</h2>
            @isset($detallesUser)
            <ul>
                <li>Nombre: {{$detallesUser->name}} <button wire:click="update({{$detallesUser->id}})"> VD </button></li>
                <li>Nombre: {{$detallesUser->email}}</li>
                <li>Confirmado desde: {{$detallesUser->email_verified_at}}</li>
            </ul>
            @endisset
        </div>
    </div>
</div>