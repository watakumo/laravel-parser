@extends('layout')

@section('content')
    <style>
        .upper {
            margin-top: 40px;
        }
    </style>
    <div class="card upper">
        <div class="card-header">
        <h1>新規登録</h1>
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
            <form method="post" action="{{ route('jobs.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="title">タイトル:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="language">開発言語:</label>
                    <input type="text" class="form-control" name="language"/>
                </div>
                <div class="form-group">
                    <label for="team-number">人数:</label>
                    <input type="text" class="form-control" name="number"/>
                </div>
                <div class="form-group">
                    <label for="description">詳細:</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">登録</button>
            </form>
        </div>
    </div>
@endsection