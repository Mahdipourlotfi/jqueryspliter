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
        <div class="resizable_left">left</div>
        <div class="resizable_handle">div</div>
        <div class="resizable_right">right</div>
    </div>


    <!-- step 2 -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- step 3 -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="./js/spliter.js"></script>
    <script>
      $( function() {
        counts = [ 0, 0, 0 ];
   
   
   
   
        $( ".resizable_handle" ).draggable({ 
            axis: "x",
            containment: "parent",
        start: function() {
        counts[ 0 ]++;
        
      },
      drag: function() {
        counts[ 1 ]++;
       
      },
      stop: function() {
        counts[ 2 ]++;
        var handler_position =  $(this).position();
        
      console.log( "left: " + handler_position.left + ", top: " + handler_position.right );
      }
        })});
  
                $(".resizable_handle").resizable({backgroundColor:"blue"});
    
    </script>

</body>

</html>