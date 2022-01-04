<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my php wesite</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width : 80%;
        background-color : grey;
        margin : auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1> Lets Learn About PHP</h1>
        <p1>Your party status is here :</p1><br/>
        <?php
        //ifelse statement
        $age =25;
        if($age>18){
            echo "you can go to the party";
        }else{
            echo"sit home"; 
        }
        echo "<br/>";

        //array
        $language = array("php","c++","java","html");
        echo $language[1];
        echo"<br/>";

        //loops 
        //while
        $a = 0;
        while($a<=10){
            echo "<br/> the valiue of a is :";
            echo $a;
            $a++;
        }
            //iterating array in php using while loop

        $a = 0;
        while($a<count ($language)){
            echo "<br/> the value of language is :";
            echo $language [$a];
            $a++;
        }
        $a = 20;
        do{
            echo "<br/> the value of a is :";
            echo $a;
            $a++;
        }while($a<10);

        // for loop
    
        for($a=0; $a<5; $a++){
            echo "<br/> the value  of a from the for loop is : ";
            echo $a;
        }
        //foreach loop
        foreach($language as $value){
            echo "<br/> the value from foreach loop is :";
            echo $value;
        }
    
        //function
         
        function print5(){
            echo "five";
        }
        print5();
        print5();
        print5();

        function print_no($number){
        echo "<br/> your number is :";
        echo $number;
        }
        print_no(35);

        // string
        $str = "this is string";
        echo $str. "<br/>";
        $lenn = strlen($str);
        echo "The length of the string is ". $lenn ."Thank you <br/>";
        echo "The number of words in this string is ". str_word_count($str)."Thank you <br/>";
        echo "The reverse string is ".strrev($str)."Thank you <br/>";
        
        ?>
    </div>
</body>
</html>