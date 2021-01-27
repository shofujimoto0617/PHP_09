

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    

    <div class="py-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row"><img src="{{ (!empty($user['profile_photo_path']))? $user->profile_photo_url:url('upload/no_image.jpg') }}" style="width: 50px; height: 50px;"></th>
                    <td>{{ $user['name'] }}</td>
                    <td><a href="{{ route('user.show',$user['id']) }}">Show</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>