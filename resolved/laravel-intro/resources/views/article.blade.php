<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Icons -->
        <script src="https://kit.fontawesome.com/547107f345.js" crossorigin="anonymous"></script>
        <title>{{ $articles->title }}</title>
    </head>
    <body>
        <div class="container">
            <h1 class="border-bottom border-secondary py-2">{{ $articles->title }}</h1>
            <div class="row py-2">
                <div class="col-4">
                    <i class="fas fa-th-list">
                        @foreach ($categories as $column_category)
                            @if ($articles->categories_id === $column_category->id)
                                <a href="/category/{{ $articles->categories_id }}">{{ $column_category->name }}</a>
                            @endif
                        @endforeach
                    </i>
                </div>
                <div class="col-8">
                    <i class="fas fa-tags">
                        @foreach ($articles_tags as $column_article_tag)
                            @if ($articles->id === $column_article_tag->articles_id)
                                @foreach ($tags as $column_tag)
                                    @if ($column_article_tag->tags_id === $column_tag->id)
                                        <a href="/tag/{{ $column_tag->id }}">{{ $column_tag->name }}</a>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </i>
                </div>
            </div>
            @foreach ($images as $column_image)
                @if ($articles->images_id === $column_image->id)
                    <img src="{{ $column_image->path }}" alt="{{ $column_image->name }}" class="w-100" height="400">
                @endif
            @endforeach
            <p class="py-2">{{ $articles->content }}</p>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>