<!DOCTYPE html>
<html>
<head>
    <title>Полинка</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);


    
        //подсчет количества отрицательных элементов в массиве
        $kolvOfOtric = 0;
        for($i=0; $i<count($myArray); $i++){
            if ($myArray[$i]<0) {
                $kolvOfOtric++;
            }
        }


        //подсчет суммы модулей чисел после минимального элемента
        $min=0;
        for($i=1; $i<count($myArray); $i++){
                if($myArray[$i]<$myArray[$min]){
                    $min=$i;
                }
            }
        
        $sumModuls = 0;
        for($k = $min+1; $k<count($myArray); $k++){
            $sumModuls+=abs($myArray[$k]);
        }


        //замена всех отрицательных элементов их квадратами
        for($l=0; $l<count($myArray); $l++){
            if ($myArray[$l]<0) {
                $myArray[$l]=$myArray[$l]*$myArray[$l];
            }
        }

        //упорядовачивание по возрастанию

        sort($myArray, $SORT_NUMERIC);
        echo "Количество отрицательных элементов массива равна $kolvOfOtric; Сумма модулей чисел после минимального элемента равна $sumModuls; Элементы по возрастанию:</br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>