@props(['article', 'featured' => false])

<div class="article-card {{ $featured ? 'article-featured' : '' }}">
    <div class="article-image-container">
        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" class="article-image" loading="lazy"
            width="600" height="400">
        <div class="article-category">{{ $article['category'] }}</div>
        @if ($featured)
            <a href="#" class="read-more">Read More</a>
        @endif
    </div>

    <div class="article-content">
        <h3 class="article-title">{{ $article['title'] }}</h3>
        <p class="article-description">{{ $article['description'] }}</p>

        <div class="article-author">
            <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}"
                class="author-avatar" loading="lazy" width="60" height="60">
            <div class="author-info">
                <span class="author-name">By {{ $article['author']['name'] }}</span>
                <span class="article-date">{{ $article['author']['date'] }}</span>
            </div>
        </div>
    </div>
</div>
