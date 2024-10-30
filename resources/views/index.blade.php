<div>
    <form action="{{ route('blogs.show')}}" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="заголовок">
        <input type="text" name="psevdo" id="psevdo" placeholder="псевдоним">
        <input type="text" name="text" name="text" placeholder="текст поста">
    <button type="success">Отправить</button>
</form>
</div>
<h1>Посты</h1>
<ul>
    @foreach($blogs as $blog)
    <li>
        <p>{{ $blog->title }}</p>
        <p>{{ $blog->psevdo }}</p>
        <p>{{ $blog->created_at }}</p>
        <a href="{{ url('/blogs/' . $blog->id) }}">Перейти к посту</a>
</li>
    @endforeach
</ul>
{{ $blogs->links() }}