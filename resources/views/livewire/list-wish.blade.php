<div class="comment-container">
    @foreach ($wish as $item)
    <div class="comment">
        <div class="user">{{ $item->name }}</div>
        <div class="comment-text">{{ $item->comment }}</div>
    </div>
    @endforeach
</div>
