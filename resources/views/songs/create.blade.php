@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a song</div>






                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        
                        </ul>    
                    </div>                    
                @endif




                <div class="card-body">
                    <form method="POST" action="{{ url('songs/addToDB')}} ">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Song name</label>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="creator" class="col-md-4 col-form-label text-md-right">Song creator</label>
                            <div class="col-md-6">
                                <input id="creator" name="creator" type="text" class="form-control" autofocus>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">Song genre</label>
                            <div class="col-md-6"> 
                                <select class="form-select" name="genre" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    @foreach ($genres as $genre)
                                    <option id="genre" type="text" class="form-control" value="{{ $genre->id}} " autofocus>{{ $genre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="length" class="col-md-4 col-form-label text-md-right">Song duration</label>
                            <div class="col-md-6">
                                <input id="length" name="length" type="text" class="form-control" autofocus>
                        

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">CREATE</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection