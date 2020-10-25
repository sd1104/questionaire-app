@extends('layouts.common')
@section('content')

<div class="wrapper">

  <div class="formbody1">
    <p class="form_title">ログイン</p>
    <form action="get" class="user_form">
      <div class="question_box">
        <div class="question">
          <p>問○</p>
          <p>
            サンプルです。サンプルです。サンプルです。
            サンプルです。サンプルです。サンプルです。
            サンプルです。サンプルです。サンプルです。
            サンプルです。サンプルです。サンプルです。
          </p>
        </div>
        <div class="answer">
          <input type="checkbox">
          <div class="select">
            選択肢
          </div>
          <input type="checkbox">
          <div class="select">
            選択肢
          </div>
          <input type="checkbox">
          <div class="select">
            選択肢
          </div>
          <input type="checkbox">
          <div class="select">
            選択肢
          </div>
        </div>

        <div class="action">
          <input type="submit" class="btn submit_btn" value="確認画面へ">
        </div>
      </div>
    </form>
  </div>

</div>

@endsection