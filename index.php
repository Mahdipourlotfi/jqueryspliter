<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>my spliter</title>

    <!-- step 4 - include you jquery ui theme -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/vader/jquery-ui.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>

    <div class="wrap">
        <div class="resizable resizable1"></div>
        <div class="resizable resizable2"></div>
    </div>


    <!-- step 2 -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- step 3 -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="./js/spliter.js"></script>
    <script>
    
                $(".resizable1").resizable(true);
    
    </script>

</body>

</html>