@extends('layouts.common')
@section('content')

<div class="wrapper">

  <div class="formbody1">
    <p class="form_title">新規登録</p>
    <form action="get" class="user_form">
      <label for="first_name" class="label user_label">姓</label >
      <input type="text" id="first_name" class="input user_input">
      <label for="last_name" class="label user_label">名</label>
      <input type="text" id="last_name" class="input user_input">
      <label for="school_name" class="label user_label">学校名</label>
      <input type="text" id="school_name" class="input user_input">
      <label for="room_name" class="label user_label">クラス</label>
      <input type="text" id="room_name" class="input user_input">
      <label for="password" class="label user_label">パスワード</label>
      <input type="text" id="password" class="input user_input">
      <label for="password_confirmation" class="label user_label">パスワード（確認）</label>
      <input type="text" id="password_confirmation" class="input user_input">
      <input type="submit" class="btn submit_btn" value="登録する">
    </form>
    <a href="#" class="btn link_btn">アカウントをお持ちの方はこちらへ</a>
  </div>

</div>

@endsection