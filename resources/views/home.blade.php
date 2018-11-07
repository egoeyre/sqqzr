@extends('layouts.app')

@section('title', '试卷生成器说明')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 paper-list">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3>试卷生成器说明</h3>
            </div>

            <div class="panel-body">
                
                <h4>使用方法</h4>
                <img src="http://sqqzr.test/uploads/new.png">
                <p>1.点击右上角新建，选择“生成试卷”。</p>
                <br>
                <img width="480"  src="http://sqqzr.test/uploads/make.png">
                <p>2.“生成试卷”页面，根据提示填写选项。然后点击“生成试卷”。</p>
                <br><br>
                <img width="480"  src="http://sqqzr.test/uploads/page.png">
                <p>3.在该页面下，直接点击“试卷下载”，会在浏览器中预览，想要保存，右键点击“试卷下载”，选择 链接另存为...</p>
                <br><br>
                <img width="480"  src="http://sqqzr.test/uploads/paper.png">
                <p>4.资质认定基础部分有表头，专业部分没有表头。<p>
                <br><br>

                <h4>其他说明</h4>
                <p>添加选择题、填空题和问答题和生成试卷大同小异，就不再累述了。</p>
                <p>该试卷生成器可以自动生成pdf格式的授权签字人考试试卷，题型包括选择题、填空题和问答题。</p>
                <p>但是目前题库题量较小，希望各位老师在下载试卷的同时能添加题库。</p>
                <p>现阶段只能生成机动车类试卷，如果其他专业有需要，以后会添加分类功能。</p>
                <p>如果大家有好的建议，可以反馈给我，我叫艾子豪，我的电话也是我的微信 189 5381 1123 。</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 sidebar">
        @include('papers._sidebar')
    </div>
    
</div>


@endsection