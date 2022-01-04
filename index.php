<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>php website</title>
</head>
<body>
    <div class="container">
        welcome to my php website
        <?php
        echo "Hello and this is my first php website"
      
        // Lorem ipsum dolor sit 
        // amet consectetur, adipisicing elit.
        //  Fuga totam nobis non sit repellat iure 
        // maiores, cupiditate rem eum asperiores.
        ?>
        <?php
            echo "<br>";
        ?>
        <?php
        echo "hello again <br/>";
        ?>
        <?php
        $var1=3;
        echo "integer is : $var1 <br/>";
        ?>
        <?php  
$str="hello string";  
$x=200;  
$y=44.6;  
echo "string is: $str <br/>";  
echo "integer is: $x <br/>";  
echo "float is: $y <br/>"; 

?>

 <?php
 // arithmatic operators 
         $a = 42;
         $b = 20;
         $newvar = $b;
         echo " the value of newvar : $b<br/>";
         $c = $a + $b;
         echo "Addtion Operation Result: $c <br/>";
         
         $c = $a - $b;
         echo "Substraction Operation Result: $c <br/>";
         
         $c = $a * $b;
         echo "Multiplication Operation Result: $c <br/>";
         
         $c = $a / $b;
         echo "Division Operation Result: $c <br/>";
         
         $c = $a % $b;
         echo "Modulus Operation Result: $c <br/>";
         
         $c = $a++; 
         echo "Increment Operation Result: $c <br/>";
         
         $c = $a--; 
         echo "Decrement Operation Result: $c <br/>";

      ?>
    </div>
    <?php
    define ('pi',3.14);
    //assignment operators
      $x = 10;
      $y = 5;
      $x += 1;
      echo "new value of x is : $x <br/>";
        $y -= 1;
        echo "new value of y is : $y <br/>";
       
        //comparison operators
        echo "the value of 1 ==4 is";
        echo var_dump(1==4);
        echo"<br/>";
        echo "the value of 1 >=4 is";
        echo var_dump(1>=4);
        echo"<br/>";
        echo "the value of 1 !=4 is";
        echo var_dump(1!=4);
        echo"<br/>";
        echo "the value of 1 <=4 is";
        echo var_dump(1<=4);
        echo"<br/>";

        //increament operators, decreament operators
        echo $x++;
        echo $x;
        echo "<br/>";
        echo ++$x;
        echo $x--;
        echo --$x;
        echo "<br/>";

        //logical operators

        $year =2016;
        if(($year % 400 == 0)&&($year %100 != 0))
        {
            echo"$year is a leap year";
        }else
        {
            echo"$year is not a leap year <br/>";
        }

        // data types 
        // string
        // Integer
        // float
        // boolean
        // array 
        // object

        $variable ="this is a string";
        echo var_dump($variable);
        $variable = 45;
        echo var_dump($variable);
        $variable = 45.67;
        echo var_dump($variable);
        $variable = true;
        echo var_dump($variable);
        echo "<br/>";

        echo pi;

       ?>

</body>
</html>