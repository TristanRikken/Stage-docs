<!DOCTYPE html>
<html>
  <head>
    <title>{{$ title }}My Awesome Site{{/ title }}</title>
    {{$ stylesheets }}
      <link rel="stylesheet" href="/assets/css/default.css">
    {{/ stylesheets }}
  </head>
  <body>
    <header>
      {{$ header }}
        <h1>Welcome to My Awesome Site</h1>
      {{/ header }}
    </header>
    <div id="content">
      {{$ content }}
        <p>Hello, World!</p>
      {{/ content }}
    </div>
    {{$ scripts }}
      <script src="/assets/js/default.js"></script>
    {{/ scripts }}
  </body>
</html>