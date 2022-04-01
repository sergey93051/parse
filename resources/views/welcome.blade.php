<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
  
 
</head>
<body>
    
     <div class="container">
          <h2 class="p-1">Карточка торгов</h2>
          <div class="row mt-3">
               <div class="col-9">
                @foreach ($parsing as $item)
                {!! $item !!}
                @endforeach
               </div>
          </div>
     </div>
     <script>
        $(document).ready(function(){
            console.log($("table"))
              $("table").addClass('table table-striped');
        })
  </script>
</body>
</html>