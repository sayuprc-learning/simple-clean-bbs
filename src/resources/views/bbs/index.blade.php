<form action="/bbs/create" method="POST">
    @csrf
    掲示板名: <input type="text" name="name"><br>
    <input type="submit" value="作成">
</form>

@foreach ($viewModel as $bbs)
    <a href="/bbs/{{ $bbs->bbs_id }}">{{ $bbs->name }}</a><br>
@endforeach