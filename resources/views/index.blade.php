<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>

  <style>
    table {
      background-color: red;
      width: 80%;
      height: 80%;
      margin: auto auto;
    }

    .button {
      text-align: center;
    }
  </style>
</head>

@extends('layouts.layouts')
@section('card')
<table>
  <tr>
    <td>名前 </td>
    <td> {{$name}}</td>
  </tr>
  <tr>
    <td>電話番号 </td>
    <td> {{$tel}}</td>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td> {{$email}}</td>
  </tr>
</table>
<div class=button>
  <form action="" method="get">
    <button class="update-button">修正</button>
  </form>
</div>
@endsection

</html>