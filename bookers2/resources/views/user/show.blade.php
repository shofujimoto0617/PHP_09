

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="card" style="width: 18rem;">
                <img src="{{ (!empty($user['profile_photo_path']))? $user->profile_photo_url:url('upload/no_image.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $user['name'] }}</h5>
                    <p class="card-text">Introduction : {{ $user['introduction'] }}</p>
                    @if (Auth::user() == $user)
                        <a href="{{ route('profile.show') }}" class="btn btn-primary">Edit Profile</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>