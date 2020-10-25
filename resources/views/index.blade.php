@extends('layouts.common')
@section('content')

<div class="wrapper">

  <table>
    <thead>
      <tr>
        <th>
          <div class="q_thead">
            アンケート一覧
          </div>
        </th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>
          <div class="q_td">
            アンケートⅠ
          </div>
        </td>
        <td>
          <div class="q_td">
            アンケートⅡ
          </div>
        </td>
        <td>
          <div class="q_td">
            アンケートⅢ
          </div>
        </td>
        <td>
          <div class="q_td">
            アンケートⅣ
          </div>
        </td>
      </tr>

      <tr>
        <td class="q_wrap">
          <div class="q_box">
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート１</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート１</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート１</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
          </div>
        </td>

        <td>
          <div class="q_box">
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート2</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
          </div>
        </td>

        <td>
          <div class="q_box">
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート3</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
          </div>
        </td>

        <td>
          <div class="q_box">
            <div class="q_cont">
              <div class="q_name">
                <p>アンケート4</p>
                <p>(○月■日〜○月■日)</p>
              </div>
              <div class="q_btn">
                <button class="answer_btn">回答済み</button>
              </div>
            </div>
          </div>
        </td>

      </tr>

    </tbody>
  </table>

</div>

@endsection