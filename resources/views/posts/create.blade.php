@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Adding functionality to backend for post route-->
    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Add New Post</h2>
                </div>

                <div class="form-group row">
                    <!-- Input for users to type in caption for image -->               
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="caption" 
                        type="text" 
                        class="form-control @error('caption') is-invalid @enderror" 
                        name="caption"
                        value="{{ old('caption') }}" 
                        required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Input for users to upload image -->
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Button for users to upload image to profile -->
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
