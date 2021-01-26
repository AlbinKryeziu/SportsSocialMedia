<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::user()->isAdmin()) {{ __('Welcome to Admin Dashboard') }}
        </h2>
        @else {{ __('Welcome to User Dashboard') }} @endif
    </x-slot>
    @include('includes/style')
    
    <div class="container">
        <br />
        <form method="POST" action="{{ url('/user/addphoto') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image" class="form-control" />

            <button type="submit" class="btn btn-outline-secondary">Add</button>
        </form>
        <br />
        <br />
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;"></div>
        </div>
        <div class="row">
            @foreach($photos as $photo)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/'.$photo->profile_photo_path)}}" alt="Card image cap" alt="Card image cap" />
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
