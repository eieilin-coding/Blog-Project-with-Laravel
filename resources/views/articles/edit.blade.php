@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Article</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}" required>
        </div>

        <div>
            <label>Content</label>
            <textarea name="content" rows="6" required>{{ old('content', $article->content) }}</textarea>
        </div>

        <button type="submit">Update Article</button>
    </form>
</div>
@endsection
