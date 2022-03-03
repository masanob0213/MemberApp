<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  body {
    margin: 0px;
    background-color: #1F2937;
  }

  .all {
    margin: 0px 0px;
    /*background-color: red;*/
  }

  .header {
    /*background-color: greenyellow;*/
    position: relative;
    height: 60px;
  }

  .title {
    color: white;
    font-weight: bold;
    display: inline-block;
    position: absolute;
    margin-left: 30px;
  }

  .link {
    /*background-color: blue;*/
    display: inline-block;
    position: absolute;
    right: 0;
    margin-top: 20px;
  }

  .card {
    background-color: white;
    height: 450px;
    margin-top: 0px;
    padding-bottom: 30px;
  }

  .hooter {
    text-align: center;
    margin-top: 5px;
    color: white;
  }
</style>

<body>
  <div class="all">
    <div class=header>
      <h1 class="title">Connect inc.</h1>
    </div>
    <div class="card">
      @yield('card')
    </div>
    <p class=hooter>Connect inc.</p>
  </div>
</body>

</html>