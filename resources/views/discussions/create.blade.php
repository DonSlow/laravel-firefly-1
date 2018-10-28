@extends('firefly::layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('New Discussion') }}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('firefly.discussion.store', $group) }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">{{ __('Content') }}</label>
                    <textarea name="content" id="content" class="form-control" rows="3">{{ old('content') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection