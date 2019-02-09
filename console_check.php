<?php
//mb_convert_encoding($str, 'cp866', 'chcp 1251');

  echo "Введите год, чтобы проверить, является ли он високосным:\n";
  $year = trim(fgets(STDIN));

  if(($year == '')||(!is_numeric($year))){
      	echo "Ошибка во входных данных";
      }
      else{echo "Год ".$year. " является високосным?\n";
        if($year%4 == 0){
          echo 'ДА';
        } else   echo  'НЕТ';

     }





 ?>
