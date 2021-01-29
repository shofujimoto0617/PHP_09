

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    

    <div class="py-12" style="padding: 10px;">
        <h3>Book detail</h3>
        <table class="table table-striped">
            
            <tbody>
                <tr>
                    <th>
                        <img src="{{ (!empty($book->user['profile_photo_path']))? $book->user->profile_photo_path_url:url('upload/no_image.jpg') }}" style="width: 50px; height: 50px;">
                        {{ $book->user->name }}
                    </td>
                    <td><a href="{{ route('book.show',$book['id']) }}">{{ $book['title'] }}</a></td>
                    <td>{{ $book['body'] }}</td>
                    <td><a href="{{ route('book.edit',$book['id']) }}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{ route('book.delete',$book['id']) }}" class="btn btn-danger">Destroy</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>