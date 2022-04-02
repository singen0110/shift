{"filter":false,"title":"create.blade.php","tooltip":"/blog/resources/views/posts/create.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                   <h2 class='title'>","    <a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","    </head>","    <body>","        <h1>Blog Name</h1>","        <form action=\"/posts\" method=\"POST\">","            @csrf","            <div class=\"title\">","                <h2>Title</h2>","                <input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\"/>","            </div>","            <div class=\"body\">","                <h2>Body</h2>","                <textarea name=\"post[body]\" placeholder=\"今日も1日お疲れさまでした。\"></textarea>","            </div>","            <input type=\"submit\" value=\"保存\"/>","        </form>","        <div class=\"back\">[<a href=\"/\">back</a>]</div>","    </body>","</html>"]}],[{"start":{"row":7,"column":26},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":8,"column":0},"end":{"row":8,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":44},"action":"insert","lines":["[<a href='/posts/create'>create</a>]"],"id":4}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":44},"action":"remove","lines":[" [<a href='/posts/create'>create</a>]"],"id":5},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":[" "]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":[" "]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":[" "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["    "]},{"start":{"row":7,"column":26},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":7},"end":{"row":22,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1646584092319,"hash":"56acfdbeea79be2e4810ff93d9d050d05caf6126"}