<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>(BMI)</title>
  </head>
  <body>
<div class="container">

   <h1> Body Mass Index (BMI)</h1>

   <div class="row">


   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="col-md-6 ">
            <form action=""  method="post" >

                <label for="uname">Username:</label>
                <input type="tex" name="username" placeholder="Enter Your Name">

                <h5>Enter Your Body Infrmation</h5>

                <div class="row">
                  
                        <div class="col-md-4">
                          <label>Feet:</label>
                          <input type="number" name="feet" placeholder="feet">
                          <span class="text-danger"><?php echo $nameErr??"" ?></span>
                        </div>

                        <div class="col-md-4">
                          <label>Inches:</label>
                              <input type="number" name="inches" placeholder="inches">
                        </div>

                        <div class="col-md-4">
                          <label>Weight:</label>
                              <input type="number" name="weight" placeholder="KG">
                        </div>
                        <input class="mt-3" type="submit" value="submit" name="submit">
                       

                </div>
            </form>
        </div>
                          
      <div class="col-md-6">

       <?php


        echo $name."Your BMI iS :  ";
        echo $bmi."<br/>";



        ?>

        </div>
   </div>

  

</div>

  <?php  


     if(isset($_POST['submit'])){

          $name  = $_POST["username"];
          $feet  = $_POST["feet"];
          $inc   = $_POST["inches"];
          $wei   = $_POST["weight"];


       $inby_f  = $inc/12;
       $total_f = $inby_f+$feet;
       $fby_m   = $total_f*0.3048;
       $m_squar = $fby_m^2;
       $bmi     = $wei/$m_squar;

       echo $name."Your BMI iS :  ";
       echo $bmi."<br/>";

         if($feet == null || $name == null || $wei == null)
        {
            echo "The field is required";
        }

       else { 
		          
		            echo $name."Your BMI Category is :  ";    
		        
		            if($bmi < 16)
		            {
		                echo "Severe Thinness";
		            }
		            elseif ($bmi >=16 && $bmi <=17) 
		            {
		                echo "Moderate Thinness	";
		            }
		             elseif ($bmi >17 && $bmi <18.5) 
		            {
		                echo "Mild Thinness";
		            }
		            elseif ($bmi >=18.5 && $bmi <=25) 
		            {
		                echo "Normal";
		            }
		            elseif ($bmi >25 && $bmi <30) 
		            {
		                echo "Overweight";
		            }
		            elseif ($bmi >=30 && $bmi <=35) 
		            {
		                echo "Obese Class I";
		            }
		            elseif ($bmi >35 && $bmi <40) 
		            {
		                echo "Obese Class II";
		            }
		            elseif ($bmi >40) 
		            {
		                echo "Obese Class III";
		            }
		            else 
		            {
		                echo "your Infrmation is rong";
		            }
		        }

     }
      


        

     
  
  ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>