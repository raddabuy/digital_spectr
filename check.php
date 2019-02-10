<?php
  $text=$message = "";

  if(isset($_POST['check'])){             //Проверка нажатия кнопки
      $valid = true;
      $year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING)); //Фильтруем входные данные

  if (($year == '')||( filter_var($year, FILTER_VALIDATE_INT) === false )) //Введено пустое поле или не целое  число 
    {  $valid=false;
      $message = "Ошибка во входных данных";
    }
        if($valid){                                                     //Если данные корректные, то проверяем на високосность
          $valid=false;
          $text = "Год ".$year. " является високосным?";
            if ($year%4 == 0) {
              $message = 'ДА';
            }
            else{
              $message = 'НЕТ';
            }
      }
  }

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Високосный год</title>

</head>
<body>
  <div class="col-md-5 mb-5">
  <h3>
    Является ли год високосным?
  </h3>

  <form action="check.php" method="post">
          <label for="year">Год</label>
          <input type="text" name="year" id="year" class="form-control">

        <input type="submit" name="check" class="btn btn-success mt-3" value="Проверить">
        <div>
          <?=$text;?> <br>
          <?=$message;?>
        </div>
  </form>

</div>

</body>
</html>
