@extends('layouts.layout')

@section('title')@parent:: {{ $title }}

@endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">



        <form class="mt-5" method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                       value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content"
                          placeholder="Content">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select rubric</option>
                    @foreach($rubrics as $key => $value)
                        <option value="{{ $key }}"

                                @if(old('rubric_id') == $key) selected @endif
                        >{{ $value }}</option>
                    @endforeach

                </select>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </div>
        </form>
    </div>


@endsection
