@extends('master.layout')

@section('content')
    <!-- Check if it's a new or existing reflection -->
    @isset($reflection)
        <!-- Edit Form for Existing Reflection -->
        <form action="{{ route('reflections.update', $reflection->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="content">Content:</label><br>
                <textarea name="content" id="content" cols="30" rows="10">{{ $reflection->content }}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>
    @else
        <!-- Create Form for New Reflection -->
        <form action="{{ route('reflections.store') }}" method="POST">
            @csrf
            <div>
                <label for="content">Content:</label><br>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    @endisset
@endsection
