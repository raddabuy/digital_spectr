<?php
//mb_convert_encoding($str, 'cp866', 'chcp 1251');

  echo "������ ���, �⮡� �஢����, ���� �� �� ��᮪���:\n";
  $year = trim(fgets(STDIN));

  if(($year == '')||(!is_numeric($year))){
      	echo "�訡�� �� �室��� ������";
      }
      else{echo "��� ".$year. " ���� ��᮪���?\n";
        if($year%4 == 0){
          echo '��';
        } else   echo  '���';

     }





 ?>
