<?php
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">BE RIGHT BACK</div>
            @if(count($errors)>0)
{{--Danh sach loi--}}
                <div class="alert alert-danger">
                    <strong>Co loi roi</strong>
                    <br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
        </div>
    </div>
</body>
</html>
