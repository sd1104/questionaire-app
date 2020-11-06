@extends('layouts.app')
@section('content')

<div class="wrapper">

  <div class="formbody1">
    <p class="form_title">ログイン</p>
    <form action="get" class="user_form">
      <label for="email" class="label user_label">メールアドレス</label>
      <input type="email" id="email" class="input user_input">
      <label for="password" class="label user_label">パスワード</label>
      <input type="password" id="password" class="input user_input">
      <label for="password_confirmation" class="label user_label">パスワード（確認）</label>
      <input type="password" id="password_confirmation" class="input user_input">
      <input type="submit" class="btn submit_btn" value="サインイン">
    </form>
    <a href="#" class="btn link_btn">アカウントをお持ちでない方</a>
  </div>

</div>

@endsection