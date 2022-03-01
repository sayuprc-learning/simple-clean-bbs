{{ $viewModel->name }}<br>

@foreach ($viewModel->comments as $comment)
    {{ $comment->posted_at }}: {{ $comment->content }}<br>
@endforeach

<form action="/bbs/add" method="POST">
    @csrf
    <textarea name="content"></textarea>
    <input type="hidden" name="bbs_id" value="{{ $viewModel->bbs_id }}">
    <input type="submit" value="コメント">
</form>