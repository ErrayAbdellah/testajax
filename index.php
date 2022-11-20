<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container mt-5 pt-5" style="max-width: 50%;">
        <input type="text" class="form-control" name="search" id="txt" placeholder="Search">
        <div id="result"></div>
    </div>
    
    <!-- <div class="container mt-5 pt-5" style="max-width: 50%;">
        <form action="search.php" method="post">
        <input type="text" class="form-control" name="search2" id="txt" placeholder="Search">
            <input class="btn btn-info" type="submit" name="sss" value="Search">
        </form>
            <div id="result2"></div>
    </div>
     -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      
      
      $(document).ready(function(){
            $("#txt").keyup(function(){
                var x = $(this).val();

                
                    $.ajax({
                        url:"search.php",
                        method:"post",
                        data:{search:x},
                        dataType:"text",
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });
            });
        });
    </script>
</body>
</html>