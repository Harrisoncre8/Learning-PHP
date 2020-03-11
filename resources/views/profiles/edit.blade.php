@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Edit Profile</h2>
                </div>

                <div class="form-group row">
                    <!-- Input for users to type in title for profile -->               
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title"
                        value="{{ old('title') }}" 
                        required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <!-- Input for users to type in Description for profile -->               
                    <label for="Description" class="col-md-4 col-form-label">Description</label>
                    <input id="Description" 
                        type="text" 
                        class="form-control @error('Description') is-invalid @enderror" 
                        name="Description"
                        value="{{ old('Description') }}" 
                        required autocomplete="Description" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <!-- Input for users to type in title for profile -->               
                    <label for="url" class="col-md-4 col-form-label">URL</label>
                    <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url"
                        value="{{ old('url') }}" 
                        required autocomplete="url" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Input for users to upload image -->
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <!-- Button for users to upload image to profile -->
                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
