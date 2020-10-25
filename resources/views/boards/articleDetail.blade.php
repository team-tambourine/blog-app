<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>articleDetail</title>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/articleDetail.css" />
    </head>
    <body>
        @include('header')
        <div class="container">
            <div class="userNameContainer">
                <a href='user/{{ $article->user->id }}'><img class="listItemImage" src="" /></a>
                <div class="userName">{{ $article->user->name }}</div>
                <div class="updatedTime">{{ $article->updated_at }}に更新</div>
            </div>
            <main>
                <h2 class="listItemTitle">{{ $article->title}}</h2>
                <div class="textBody">
                    {{ $article->message }}
                </div>
                
                <a href="{{ route('delete',$article->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"> 削除 </a>
                  <form id="delete-form" action="{{ route('delete',$article->id) }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                
                
            </main>
            <div class="border"></div>
            <div class="userNameContainer">
                <a href='user/{{ $article->user->id }}'><img class="listItemImage" src="" /></a>
                <p class="userName">{{ $article->user->name }}</p>
                <p class="updatedTime">{{ $article->updated_at }}に更新</p>
            </div>
        </div>
    </body>
</html>
