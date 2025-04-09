<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <h1>All Blog Posts</h1>
    <ul>
        @foreach ($posts as $id => $post)
        <li>
            <a href="{{ route('admin.posts.show', ['id' => $id]) }}">
                {{ $post['title'] }}
            </a>
        </li>
        @endforeach
    </ul>

</div>