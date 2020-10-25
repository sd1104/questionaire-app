@extends('layouts.common')
@section('content')

<div class="wrapper">

  <table>
    <thead>
      <tr>
        <th>アンケート一覧</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          アンケートⅠ
        </td>
        <td>
          アンケートⅡ
        </td>
        <td>
          アンケートⅢ
        </td>
        <td>
          アンケートⅣ
        </td>
      <tr>
        <td class="q_box">
          <div class="q_cont">
            <div class="q_name">
              <p>アンケート１</p>
              <p>(○月■日〜○月■日)</p>
            </div>
            <div class="q_btn">
              <button class="answer_btn">回答済み</button>
            </div>
          </div>
        </td>
        <td>
          アンケート1<br>

        </td>
        <td>
          アンケート1<br>

        </td>
        <td>
          アンケート1<br>

        </td>
      </tr>
      </tr>
    </tbody>
  </table>

</div>

@endsection