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
    height: 60px;
  }

  .title {
    color: white;
    font-weight: bold;
    display: inline-block;
    margin-left: 30px;
    width: 70%;
  }

  .logout-form {
    display: inline-block;
  }

  .card {
    background-color: white;
    height: 600px;
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
      @yield('logout')
    </div>
    <div class="card">
      @yield('card')
    </div>
    <p class=hooter>Connect inc.</p>
  </div>
</body>

</html>