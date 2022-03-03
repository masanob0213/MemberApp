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
    font-size: 16px;
    padding: 10px 0px 10px 10px;
    width: 100%;
  }

  .button {
    /*background-color: #FFFF00;*/
    margin-top: 10px;
    text-align: center;

  }

  button {
    margin: 5px;
    border-radius: 5px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 5px 10px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  button:hover {
    background-color: #1F2937;
    color: white;
  }

  button {
    padding: 10px 60px;
    font-weight: bold;
    font-size: 20px;

  }
</style>

@extends('layouts.layouts')
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
    <button class="update-button">修正</button>
    </form>
    <form action="/user" method="get">
      <button class="update-button">戻る</button>
    </form>
  </div>
</div>
@endsection

</html>