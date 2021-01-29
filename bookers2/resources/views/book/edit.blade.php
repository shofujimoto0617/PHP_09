<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <b>{{ Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Book</div>
                    <div class="card-body">
                        <form action="{{ route('book.update',$book['id']) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="examoleInputTitle">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ $book['title'] }}">

                                <label for="examoleInputBody">Body</label>
                                <input type="text" name="body" class="form-control" id="body" value="{{ $book['body'] }}">

                                <button type="submit" class="btn btn-primary mt-3">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>