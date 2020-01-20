@extends('admin.layouts.main')

@section('title', 'Create category')

@section('content')
    <div class="row">
        <div class="col-xl-6 offset-xl-3">

            <form method="post" action="{{ route('admin.category.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Title[min:3-symbols]" class="form-control">
                    @if($errors->has('title'))
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
@endsection
