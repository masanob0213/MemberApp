<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

@extends('layouts.layouts')

@section('card')
<tr>
  <td>
    <p class=stamp-text>{{$name}}さん、お疲れ様です。</p>
  </td>
  <td>
    <form action="todo/update" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
      <input class="update-text" type=" text" name="content" value="{{$name}}">
  </td>
  <td class="update-botten-table">
    <button class="update-botten">更新</button>
  </td>
  </form>
  <td class="delete-botten-table">
    <form action="todo/delete" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
      <button class="delete-botten">削除</button>
  </td>
  </form>
</tr>
@endsection

</html>