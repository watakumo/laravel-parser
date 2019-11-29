@extends('layout')

@section('content')
    <style>
        .upper {
            margin-top: 40px;
        }
    </style>
    <div class="card upper">
        <div class="card-header">
        <h1>編集</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('jobs.update', $job->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="title">タイトル:</label>
                    <input type="text" class="form-control" name="title" value="{{ $job->title }}">
                </div>
                <div class="form-group">
                    <label for="language">開発言語:</label>
                    <input type="text" class="form-control" name="language" value="{{ $job->language }}">
                </div>
                <div class="form-group">
                    <label for="number">人数:</label>
                    <input type="text" class="form-control" name="number" value="{{ $job->number }}">
                </div>
                <div class="form-group">
                    <label for="description">詳細:</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $job->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
    </div>
@endsection