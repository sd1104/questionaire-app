@extends('layouts.common')
@section('content')
  <div class="wrapper">

    <div id="top_image">
      <div id="top_icon"></div>
      <p class="top_copy">
        <span class="top_copy_main">学校運営のための</span><br>
        <span class="top_copy_main">アンケートサイト</span><br>
        <span class="top_copy_sub">子どもたちのよりよい成長のために</span>
      </p>
      <div class="top_image_author">
        <a class="author" href="https://pixabay.com/ja/users/qimono-1962238/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3255136">Arek Socha</a>
        による<br>
        <a class="author" href="https://pixabay.com/ja/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3255136">Pixabay</a>
        からの画像
      </div>
    </div>

    <div class="kind_contents">
      <div class="explanation">
        <span class="explain_head">どんなアンケートをするの？</span><br>
        <span class="explain_body">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、
        </span>
      </div>
      <ul class="kind_images">
        <li class="kind_image">
          <p class="kind_head">〇〇アンケート</p>
          <div id="kind_image1"></div>
        </li>
        <li class="kind_image">
          <p class="kind_head">△△アンケート</p>
          <div id="kind_image2"></div>
        </li>
        <li class="kind_image">
          <p class="kind_head">□□アンケート</p>
          <div id="kind_image3"></div>
        </li>
        <li class="kind_image">
          <p class="kind_head">◇◇アンケート</p>
          <div id="kind_image4"></div>
        </li>
      </ul>
    </div>


    <div class="reason_contents"></div>
    <div class="register_way_contens"></div>
    <div class="advantage_contents"></div>
  </div>
@endsection
