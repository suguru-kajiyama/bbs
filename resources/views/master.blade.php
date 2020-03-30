<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>bbs-@yield('title')</title>
  <link rel="stylesheet"href="css/bootstrap.css">
  <link rel="stylesheet" href="css/layout.css"/>
  @yield('stylesheet')
</head>
<body>
  <div class="container">
  <header><h1>掲示板</h1></header>
  <div class="row">
  <main class="col-sm-12 col-mid-8">
    @yield('content')
  </main>
  </div>
  <footer>
  　<div>利用規約</div>
  </footer>
  </div>
<script src="js/jquery-3.4.1.js" ></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>