<html>  

    <head>

        <br>
        <h2>Addition Only Calculator</h2> 
        
    </head>

    <body>  

        <form method="post">  

            First Number:  
            <input type="number" name="number1" /><br><br>  

            Second Number:  
            <input type="number" name="number2" /><br><br>  

            <input  type="submit" name="submit" value="Calculate Sum">  

        </form>  
    
    <?php  
    
    if(isset($_POST['submit']))  

    {  

        $number1 = $_POST['number1'];  

        $number2 = $_POST['number2'];  

        $sum =  $number1+$number2;     
    
        echo "$number1 + $number2 = ".$sum;   

    }  
    
    ?>  

    </body>  
</html>  