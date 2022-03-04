<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<style>
  .date {
    margin: 20px 80px;
    padding-top: 20px;
  }

  .date-title {
    font-size: 25px;
    margin-bottom: 60px;
  }

  .button-logout {
    border-radius: 5px;
    font-weight: bold;
    font-size: 20px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 10px 40px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  .contents {
    width: 100%;
  }

  td {
    border-bottom: solid 2px #1F2937;
    margin-left: 0px;
    font-size: 18px;
  }

  .contents-text {
    margin: 0px;
    padding: 20px;
    width: 50%;
    text-align: center;
    font-weight: bold;
  }

  input {
    font-size: 18px;
    padding: 10px 0px 10px 10px;
    width: 100%;
  }

  .button {
    /*background-color: #FFFF00;*/
    text-align: center;

  }

  .button-hooter {
    border-radius: 5px;
    margin-top: 30px;
    font-weight: bold;
    font-size: 20px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 10px 40px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  button:hover {
    background-color: #1F2937;
    color: white;
  }
</style>

@extends('layouts.layouts')
@section('logout')
<div>
  <h1 class=title>Connect inc.</h1>
  <form class=logout-form action="/logout" method="post">
    @csrf
    <button class=button-logout>ログアウト</button>
  </form>
</div>
@endsection
@section('card')
<div class=date>
  <h1 class=date-title>会員情報変更</h1>
  <div>
    <form action="/user/edit" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$id}}">
      <table class=contents>
        <tr>
          <td class=contents-text>名前 </td>
          <td> <input type="text" name="name" value="{{$name}}"></td>
        </tr>
        <tr>
          <td class=contents-text>電話番号 </td>
          <td> <input type="text" name="tel" value="{{$tel}}"></td>
        </tr>
        <tr>
          <td class=contents-text>メールアドレス</td>
          <td> <input type="text" name="email" value="{{$email}}"></td>
        </tr>
      </table>
  </div>
  <div class=button>
    <button class=button-hooter>変更する</button>
    </form>
    <form action="/user" method="get">
      <button class=button-hooter>戻る</button>
    </form>
  </div>
</div>
@endsection

</html>