<?php
$kelas = 4;
switch($kelas){
    case 1:
        echo "Anda kategori Novice Programmer";
    case 2:
        echo "Anda Kategori Advance Beginer Programer";
    case 3:
        echo "Anda kategori Competent Programmer"; 
    case 4:
        echo "Anda kategori Expert Programmer";  
        break; 
   default:
        echo "Input masukan salah";   
    }
?>