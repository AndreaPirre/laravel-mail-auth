@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POST CREATE:</div>

                <div class="card-body">

                    <formn action="{{ route('post.store') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="">TITLE:</label>
                            <input type="text" name="title" value="">

                            <br>

                            <label for="">DESCRIPTION:</label>
                            <input type="text" name="description" value="">

                            <br>

                            <label for="">LIKE:</label>
                            <input type="number" name="like" value="0">

                            <br>

                            <label for="">DISLIKE:</label>
                            <input type="number" name="dislike" value="0">

                            <br>

                            <label for="">TAG:</label>
                            <input type="text" name="tag" value="">

                        </div>

                        <button type="submit" class="btn btn-primary">SAVE</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
