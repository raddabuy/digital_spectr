<?php

  echo "Введите год, чтобы проверить, является и он високосным:\n";
  $year = trim(fgets(STDIN));

  if (($year == '')||( filter_var($year, FILTER_VALIDATE_INT) === false )){
      	echo "Ошибка во входных данных";                          
      }
      else{echo "Год ".$year. " является високосным?\n";          
          if($year%4 == 0){
            echo 'ДА';                                            
          } else   echo  'НЕТ';                                

     }

 ?>
