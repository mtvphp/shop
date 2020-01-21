@extends('admin.layouts.main')

@section('title', 'Create category')

@section('content')
    <div class="row">
        <div class="col-xl-6 offset-xl-3">

            @include('admin.partials.errors.success')

            <form method="post" action="{{ route('admin.category.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" placeholder="Title[min:3-symbols]" name="title" class="form-control">
                </div>

                <multiselect-component :categories="{{ $categories }}"></multiselect-component>

                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>

            </form>

        </div>
    </div>
@endsection
