<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::user()->isAdmin()) {{ __('Welcome to Admin Dashboard') }}
        </h2>
        @else {{ __('Welcome to User Dashboard') }} @endif
    </x-slot>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    @include('includes/style')
    
    <div class="container">
        <br />
        <form method="POST" action="{{ url('/user/addphoto') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image"  />
            <br>
            <br>
            <button type="submit" class="btn btn-outline-secondary" style="">Add</button>
        </form>
        <br />
        <br />
        <div class="col-sm-8">
            <div class="card" style="width: 18rem;"></div>
        </div>
        <div class="row">
            @foreach($photos as $photo)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;" style="line-break: strict;">
                    <img class="card-img-top" src="{{asset('images/'.$photo->profile_photo_path)}}"  alt="Card image cap" width="200" height="200"  alt="Card image cap" />
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @if(Session::has('success'))
    <script>
        swal("Great Job","{{Session::get('success')}}","success",{
            button:"ok",
        })
    </script>
    @endif
    @if(Session::has('errors'))
    <script>
        swal("Oops","{{Session::get('errors')}}","error",{
            button:"ok",
        })
    </script>
    @endif
</x-app-layout>

