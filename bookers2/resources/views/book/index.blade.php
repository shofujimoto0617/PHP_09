

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    

    <div class="py-12" style="padding: 10px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Opinion</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <th>
                        <img src="{{ (!empty($book->user['profile_photo_path']))? $book->user->profile_photo_path_url:url('upload/no_image.jpg') }}" style="width: 50px; height: 50px;">
                        {{ $book->user->name }}
                    </td>
                    <td><a href="{{ route('book.show',$book['id']) }}">{{ $book['title'] }}</a></td>
                    <td>{{ $book['body'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>