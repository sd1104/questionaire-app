@extends('layouts.app')
@section('content')

<div class="wrapper">


    <div class="formbody1">

      <p class="form_title">サンプルアンケート 回答確認</p>
      <form action="get" class="user_form">
        <table>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>問</td>
              <td>質問</td>
              <td>回答</td>
            </tr>

            <tr>
              <td>#</td>
              <td>
                サンプルです。サンプルです。サンプルです。
                サンプルです。サンプルです。サンプルです。
                サンプルです。サンプルです。サンプルです。
                サンプルです。サンプルです。サンプルです。
              </td>
              <td>選択肢</td>
            </tr>

          </tbody>
        </table>

        <div class="action">
          <input type="submit" class="btn submit_btn" value="回答する">
        </div>

      </form>
    </div>



</div>

@endsection