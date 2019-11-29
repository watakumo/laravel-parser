@extends('layout');

@section('content');

<style>
    .upper {
        margin-top: 40px;
    }
</style>
<div class="card upper">
    <div class="card-header upper">
        <h1>ジョブ一覧</h1>
    </div>
    <div class="card-body">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        <br>
    @endif
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>タイトル</td>
                <td>言語</td>
                <td>人数</td>
                <td>詳細</td>
                <td colspan="2">アクション</td>
            </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ number_format($job->number,2) }}</td>
                <td>{{ $job->language }}</td>
                <td>{{ $job->description }}</td>
                <td><a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary">修正</a></td>
                <td>
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary">新規登録</a>
</div>
@endsection