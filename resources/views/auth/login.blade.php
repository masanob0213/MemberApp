<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    .data {
        /*background-color: red;*/
        width: 80%;
        padding-top: 20px;
        margin: 20px auto;
    }

    .data-title {
        margin-top: 10px;
        margin-bottom: 60px;
        font-size: 25px;
    }

    table {
        /*background-color: blue;*/
        width: 100%;
        height: 200px;
    }

    td {
        border-bottom: solid 2px #1F2937;
    }

    .contents-text {
        margin: 0px;
        padding: 20px;
        width: 50%;
        text-align: center;
        font-weight: bold;
    }

    .forgot-password {
        text-align: center;
    }

    a {
        color: #1F2937;
        margin-top: 20px;
        text-decoration: none;
        font-weight: bold;
    }

    .contents-input {
        font-size: 18px;
        padding: 10px 0px 10px 10px;
        width: 80%;
        display: block;
        margin: 10px 0;
    }

    .button {
        margin: 10px 10px;
        text-align: center;
    }

    button {
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

    button:hover {
        background-color: #1F2937;
        color: white;
    }

    .register-button {
        margin-top: 10px;
    }
</style>

@extends('layouts.layouts')
@section('logout')
<div>
    <h1 class=title>Connect inc.</h1>
</div>
@endsection
@section('card')
<div class=data>
    <h1 class=data-title>ログイン</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <table>
                <tr>
                    <!-- Email Address -->
                    <td class=contents-text>
                        メールアドレス
                    </td>
                    <td>
                        <input class=contents-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </td>
                </tr>
                <tr>
                    <!-- Password -->
                    <td class=contents-text>
                        パスワード
                    </td>
                    <td>
                        <input class=contents-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <a href="{{ route('password.request') }}">
                            {{ __('パスワードお忘れの方はこちら') }}
                        </a>

                    </td>
                </tr>
            </table>
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class=button>
            <button>
                ログイン
            </button>
            <div class="register-button">
                <a href="register">
                    会員登録はこちら
                </a>
            </div>
        </div>
    </form>
</div>
@endsection
</div>

</html>