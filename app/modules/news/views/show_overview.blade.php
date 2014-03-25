@foreach ($newsCollection as $news)
<article class="news">
    <header>
        <h2>{{{ $news->title }}}</h2>
        <span><time>{{ $news->created_at }}</time> {{ trans('news::written_by') }} {{ link_to('users/'.$news->creator->id.'/'.slug($news->creator->username), $news->creator->username) }} {{ trans('news::in') }} {{{ $news->newscat->title }}}</span>
    </header>
    <div class="content">
        @if ($news->newscat->image)
        <div class="image">
            <img src="{{ asset('uploads/newscats/'.$news->newscat->image) }}" alt="{{{ $news->newscat->title }}}">
        </div>
        @endif
        <div class="intro">
            {{ $news->intro }}
        </div>
    </div>
    {{ $news->countComments() }} {{ trans('app.comments') }} - {{ link_to('news/'.$news->id.'/'.slug($news->title), trans('app.read_more')) }}
</article>
@endforeach