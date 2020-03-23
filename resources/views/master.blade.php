<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>bbs-@yield('title')</title>
  <link rel="stylesheet" href="css/layout.css"/>
  @yield('stylesheet')
</head>
<body>
  <header><h1>掲示板</h1></header>
  
  <main>
    @yield('content')
  </main>

  <footer>
  　<div>利用規約</div>
  </footer>

</body>
</html>