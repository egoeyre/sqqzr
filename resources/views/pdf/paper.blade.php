<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pdf</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
    @if ($paper->category_id == 1)
    <h3 class="text-center">授权签字人考试试卷</h3>
    <table class="table table-bordered">
        <tr><td>姓名</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>身份证号</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
        <tr><td colspan="2">工作单位</td><td colspan="2">{{ $paper->title }}</td></tr>
        <tr><td colspan="2">申请签字领域</td><td colspan="2"><label>
              <input type="checkbox"> 环检&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox"> 安检&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox"> 综检 
          </label></td></tr>
        <tr><td colspan="2">与签字领域有关的最高学历</td><td colspan="2">_______年___月毕业于_____________________(学校)__________________专业</td></tr>
        <tr><td colspan="2">相关资格</td><td colspan="2">
          <label>
              <input type="checkbox"> 工程师&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox"> 高级工程师&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox"> 技师 
          </label>
        </td></tr>
    </table>
    @endif
    <div class="text-center">
      <h4>{{ $categoryhanzi }}部分</h4>
      (共  {{ $paper->choice_amount * $paper->choice_score + $paper->blank_amount * $paper->blank_score + $paper->question_amount * $paper->question_score }} 分)
    </div>
    

    <div>
        <p><b>一 选择题</b>(共 {{ $paper->choice_amount }} 题，每题 {{ $paper->choice_score }} 分)</p>
        <ol>
            @foreach ($choices as $choice)
            <li>
                
                <p>{{ $choice->title  }}</p>
                 <ol type="A">
                    <li><p>{{ $choice->optiona }}</p></li>
                    <li><p>{{ $choice->optionb }}</p></li>
                    <li><p>{{ $choice->optionc }}</p></li>
                    <li><p>{{ $choice->optiond }}</p></li>
                </ol>
            </li>
            @endforeach
        </ol> 
    </div>

    <div>
        <p><b>二 填空题</b>(共 {{ $paper->blank_amount }} 空，每空 {{ $paper->blank_score }} 分)</p>
        <ol>
            @foreach ($blanks as $blank)
            <li>
                <p>{{ $blank->title  }}</p>
            </li>
            @endforeach
        </ol> 
    </div>

    <div>
        <p><b>三 问答题</b>(共 {{ $paper->question_amount }} 题，每题 {{ $paper->question_score }} 分)</p>
        <ol>
            @foreach ($questions as $question)
            <li>
                <p>{{ $question->title  }}</p>
                <br><br><br><br><br><br><br><br><br><br><br>
            </li>

            @endforeach
        </ol> 
    </div>

</body>
</html>