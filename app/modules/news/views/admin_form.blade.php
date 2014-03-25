{{-- Form Template generated by SmartFormGenerator --}}

{{ Form::errors($errors) }}

@if (isset($entity))
{{ Form::model($entity, ['route' => ['admin.news.update', $entity->id], 'method' => 'PUT']) }}
@else
{{ Form::open(['url' => 'admin/news']) }}
@endif
    {{ Form::smartText('title', trans('app.title')) }}
    {{ Form::smartSelectRelation('newscat', 'News '.trans('app.category'), $modelName) }}
    {{ Form::smartSelectRelation('creator', trans('app.author'), $modelName) }}
    
    {{ Form::smartTextarea('intro', trans('news.intro')) }}
    {{ Form::smartTextarea('text', trans('app.text')) }}

    {{ Form::smartCheckbox('published', trans('app.published')) }}
    {{ Form::smartCheckbox('internal', trans('app.internal')) }}
    {{ Form::smartCheckbox('allow_comments', trans('app.enable_comments')) }}

    {{ Form::actions() }}
{{ Form::close() }}