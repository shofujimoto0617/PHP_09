

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    

    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-header">User info</div>
                                <img src="{{ (!empty($book->user['profile_photo_path']))? $book->user->profile_photo_url:url('upload/no_image.jpg') }}">
                                <div class="card-body">
                                    <h5 class="card-title">Name : {{ $book->user['name'] }}</h5>
                                    <p class="card-text">Introduction : {{ $book->user['introduction'] }}</p>
                                    @if (Auth::user() == $book->user)
                                        <a href="{{ route('profile.show') }}" class="btn btn-primary">Edit Profile</a>
                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">New Book</div>
                                <div class="card-body">
                                    <form action="{{ route('book.create') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="examoleInputTitle">Title</label>
                                            <input type="text" name="title" class="form-control" id="title">

                                            <label for="examoleInputBody">Body</label>
                                            <input type="text" name="body" class="form-control" id="body">

                                            <button type="submit" class="btn btn-primary">Create</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-8">
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
                                        @if (Auth::user() == $book->user)
                                            <td><a href="{{ route('book.edit',$book['id']) }}" class="btn btn-success">Edit</a></td>
                                            <td><a href="{{ route('book.delete',$book['id']) }}" class="btn btn-danger">Destroy</a></td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
    </div>
</x-app-layout>