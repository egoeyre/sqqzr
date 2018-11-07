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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    

    <div>
        <h3>一 选择题</h3>
        <ol>
            @foreach ($choices as $choice)
            <li>
                <p>{{ $choice->answer  }}</p>
            </li>
            @endforeach
        </ol> 
    </div>

    <div>
        <h3>二 填空题</h3>
        <ol>
            @foreach ($blanks as $blank)
            <li>
                <p>{{ $blank->answer  }}</p>
            </li>
            @endforeach
        </ol> 
    </div>

    <div>
        <h3>三 问答题</h3>
        <ol>
            @foreach ($questions as $question)
            <li>
                <p>{{ $question->answer  }}</p>
            </li>

            @endforeach
        </ol> 
    </div>

</body>
</html>