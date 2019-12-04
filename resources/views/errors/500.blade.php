<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>页面错误</title>
</head>
<script src="{{ asset('/vendor/laravel-admin-ext/errorPage/js/jquery-3.3.1.min.js')}}" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/vendor/laravel-admin-ext/errorPage/css/error.css')}}" />


<body>
    <div class="error">
        <div class="graphic">
            <img src="{{asset('/vendor/laravel-admin-ext/errorPage/images/404.png')}}" alt="404">
        </div>
        <div class="planet">
            <div class="dog-wrapper">
                <div class="dog" style="background-position: 0px 0px;"></div>
                <div class="dog-bubble" style="opacity: 0; bottom: 0px;">
                    <p>
                            页面火星去了！
                    </p>
                </div>
            </div>
            <img class="earth" src="{{asset('/vendor/laravel-admin-ext/errorPage/images/planet.png')}}" alt="planet">
        </div>
    </div>
</body>

<script>
    function dogRun() {

        var dog = $(".dog");

        var timer2 = setTimeout(function () {

            if (dog.css("background-position") == "0px 0px")
                dog.css({ "background-position": "-80px -2px" });
            else
                dog.css({ "background-position": "0px 0px" });

            dogRun();

        }, 130);

    }

    function dogTalk() {

        var timer = setTimeout(function () {

            $(".dog-bubble").animate({ "opacity": '1', "bottom": '10px' }, 400);

            setTimeout(function () {
                $(".dog-bubble").animate({ "opacity": '0', "bottom": '0px' }, 400);
                dogTalk();

            }, 5000);

        }, 2000);

    }
    dogRun()
    dogTalk()
</script>

</html>