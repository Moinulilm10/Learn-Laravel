<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    <a href="{{ route('admin.posts.index') }}">← Back to Posts</a>

</div>