@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POST EDIT:</div>

                <div class="card-body">

                    <formn action="{{ route('post.update', $post -> id) }}" method="post">
                        @csrf
                        @method('POST')
                        
                        <div class="form-group">
                            <label for="">TITLE:</label>
                            <input type="text" name="title" value="{{ $post -> title }}">

                            <br>

                            <label for="">DESCRIPTION:</label>
                            <input type="text" name="description" value="{{ $post -> description }}">

                            <br>

                            <label for="">LIKE:</label>
                            <input type="number" name="like" value="{{ $post -> like }}">

                            <br>

                            <label for="">DISLIKE:</label>
                            <input type="number" name="dislike" value="{{ $post -> dislike }}">

                            <br>

                            <label for="">TAG:</label>
                            <input type="text" name="tag" value="{{ $post -> tag }}">

                        </div>

                        <button type="submit" class="btn btn-primary">INVIA</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
