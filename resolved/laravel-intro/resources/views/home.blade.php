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
        <title>Home</title>
    </head>
    <body>
        <div class="container">
            <h1 class="py-2">List of Articles</h1>
            <div class="row">
                @foreach ($list_articles as $column)
                    <div class="col-12 py-2">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                @foreach ($images as $column_image)
                                    @if ($column->images_id === $column_image->id)
                                        <img src="{{ $column_image->path }}" alt="{{ $column_image->name }}" class="w-100">
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-lg-9 col-12">
                                <h2 class="border-bottom border-secondary">
                                    <a href="/article/{{ $column->id }}">{{ $column->title }}</a>
                                </h2>
                                <div class="row py-2">
                                    <div class="col-4">
                                        <i class="fas fa-th-list">
                                            @foreach ($categories as $column_category)
                                                @if ($column->categories_id === $column_category->id)
                                                    <a href="/category/{{ $column->categories_id }}">{{ $column_category->name }}</a>
                                                @endif
                                            @endforeach
                                        </i>
                                    </div>
                                    <div class="col-8">
                                        <i class="fas fa-tags">
                                            @foreach ($articles_tags as $column_article_tag)
                                                @if ($column->id === $column_article_tag->articles_id)
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
                                <h5 class="py-2">{{ $column->short_description }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>