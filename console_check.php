<?php

  echo "������ ���, �⮡� �஢����, ���� � �� ��᮪���:\n";
  $year = trim(fgets(STDIN));

  if (($year == '')||( filter_var($year, FILTER_VALIDATE_INT) === false )){
      	echo "�訡�� �� �室��� ������";                          
      }
      else{echo "��� ".$year. " ���� ��᮪���?\n";          
          if($year%4 == 0){
            echo '��';                                            
          } else   echo  '���';                                

     }

 ?>
