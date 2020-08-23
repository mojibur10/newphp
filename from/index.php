<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>


    <div class="container">
      <div class="hader">
        <h1 class="text-center">Application form</h1><hr>
      </div>
      <div class="dbfrom">
        <form action="from.php" method="post"  enctype="multipart/form-data" class="was-validated" >
          
              
              <div class="row">
                <div class="col-md-6">
                  <div  class="form-group">
                     <label for="name">Applicant's Name:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="name" placeholder="Applicant's Name:" name="name" required>
                   </div>
                   <div  class="form-group">
                     <label for="fname">Father's Name :<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="fname" placeholder="Father's Name" name="fname" required>
                   </div>
                   <div  class="form-group">
                     <label for="mname">Mother's Name:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="mname" placeholder="Mother's Name" name="mname" required>
                   </div>

                  <label for="dob">Date of Birth:<span>*</span></label>
                      <input type="date" id="myDate" name="bday" min="1980-01-01" max="2005-01-01">

                      <script>
                      function myFunction() {
                        var x = document.getElementById("myDate").min = "1980-01-01";
                        document.getElementById("demo").innerHTML = "The value of the min attribute was changed from '1980-01-01' to '2004-12-31'.";
                      }
                      </script>


             
               </div>
               <div class="col-md-6">

                <div  class="form-group">
                     <label for="nid">Nationality:<span>*</span></label>
                     <select required><option>Bangladeshi</option></select>
                   </div>
                   <div  class="form-group">
                     <label for="nidN">National Id:<span>*</span></label>
                     <input type="number" class="pr-lg-5 pl-md-5 " id="nidN" placeholder="National Id" name="nidN" required>
                   </div>

                   <label>Marital Status:<span>*</span></label>
                         <label for="Maried">Maried</label>
                             <input type="radio" id="Maried" value="Maried" name="Marital" required>
                         <label for="Unmaried">Unmaried</label>
                             <input type="radio" id="Unmaried" value="Unmaried" name="Marital" required><br>
                 
                      <label>Gender:<span>*</span></label>
                         <label for="male">Male</label>
                             <input type="radio" id="male" value="male" name="gender" required>
                         <label for="female">Female</label>
                             <input type="radio" id="female" value="female" name="gender" required><br>

                    <label>Freedom Fighter Quota:<span>*</span></label>
                         <label for="male">Yes</label>
                             <input type="radio" id="Yes" value="Yes" name="quota" required>
                         <label for="female">No</label>
                             <input type="radio" id="female" value="No" name="quota" required>
                      
               </div>
             </div>
             <!-- Start Present Address -->
              <div class="row">
                <div class="col-md-6">
                  <h4>Present Address:</h4><br>
                      <div  class="form-group">
                       <label for="Care">Care of:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Care" placeholder="Care of:" name="Care" required>
                     </div>
                     <div  class="form-group">
                       <label for="Village">Village:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Village" placeholder="Village:" name="Village" required>
                     </div>
                     <label for="District">District:<span>*</span></label>


                     <?php 

                          include 'district.php';

                      ?>






                     <div  class="form-group">
                       <label for="name">Upazilla:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Upazilla" placeholder="Upazilla:" name="Upazilla" required>
                     </div>
                     <div  class="form-group">
                       <label for="postN">Post Office:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postN" placeholder="Post Office:" name="postN" required>
                     </div>
                     <div  class="form-group">
                       <label for="postC">Post Code:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Post Code:" name="postC" required>
                     </div>
                </div>
                <div class="col-md-6">
                  <h4>Permanent Address:</h4><br>
                  <input type="checkbox" name="same adress" value="same adress">If same as Present Address.>
                      <div  class="form-group">
                       <label for="Care">Care of:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Care" placeholder="Care of:" name="Care" required>
                     </div>
                     <div  class="form-group">
                       <label for="Village">Village:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Village" placeholder="Village:" name="Village" required>
                     </div>
                     <label for="District">District:<span>*</span></label>


                     <?php 

                          include 'district.php';

                      ?>






                     <div  class="form-group">
                       <label for="name">Upazilla:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Upazilla" placeholder="Upazilla:" name="Upazilla" required>
                     </div>
                     <div  class="form-group">
                       <label for="postN">Post Office:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postN" placeholder="Post Office:" name="postN" required>
                     </div>
                     <div  class="form-group">
                       <label for="postC">Post Code:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Post Code:" name="postC" required>
                     </div>
                </div>
             </div>
             <!-- Start Academic Qualification -->
             <h4>Academic Qualification:</h4><br>
      <div class="row">
          <div class="col-md-6">
                 <h5>SSC or Equvalent Level</h5><br>
                 <div class="from-group">
                      <label for="exam1">Examination:<span>*</span></label>
                      <select name="exam1"  id="exam1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">S.S.C</option>
                            <option value="2">Dakhil</option>
                            <option value="3">S.S.C Vocational</option>
                            <option value="4">O Level/Cambridge</option>
                            <option value="5">S.S.C Equivalent</option>
                       </select>
                 </div>
                 <div class="from-group">
                   <label for="Board">Board:<span>*</span></label>
                   <select name="institute1"  id="institute1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Cumilla</option>
                            <option value="3">Rajshahi</option>
                            <option value="4">Jashore</option>
                            <option value="5">Chittagong</option>
                            <option value="6">Barishal</option>
                            <option value="7">Sylhet</option>
                            <option value="8">Dinajpur</option>
                            <option value="9">Madrasah</option>
                            <option value="10">Technical</option>
                            <option value="15">Cambridge International - IGCE</option>
                            <option value="16">Edexcel International</option>
                            <option value="17">Bangladesh Technical Education Board (BTEB)</option>
                            <option value="20">Others</option>
                   </select>
                </div>
                <div  class="form-group">
                       <label for="Roll">Roll Namber:<span>*</span></label>
                       <input type="Roll" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Roll Namber:" name="Roll" required>
                </div>
                <div  class="form-group">
                       <label for="Result">Result:<span>*</span></label>
                       <select name="result1"  id="result1" >
                            <option value="0" selected="selected">Select</option>
                            <option value="1">1st Division</option>
                            <option value="2">2nd Division</option>
                            <option value="3">3rd Division</option>
                            <option value="4">GPA(out of 4)</option>
                            <option value="5">GPA(out of 5)</option>
                       </select>
                </div>
                <div  class="form-group">
                       <label for="Sub">Group/Subject:<span>*</span></label>
                       <select name="subject1"  id="subject1">
                                <option value="0" selected="selected">Select One</option>
                                <option value="1">Science</option>
                                <option value="2">Humanities</option>
                                <option value="3">Business Studies</option>
                                <option value="12">Agriculture Technology</option>
                                <option value="13">Architecture and Interior Design Technology</option>
                                <option value="15">Automobile Technology</option>
                                <option value="16">Civil Technology</option>
                                <option value="20">Computer Science &amp; Technology</option>
                                <option value="21">Chemical Technology</option>
                                <option value="22">Electrical Technology</option>
                                <option value="23">Data Telecommunication and Network Technology</option>
                                <option value="24">Electrical and Electronics Technology</option>
                                <option value="27">Environmental Technology</option>
                                <option value="31">Instrumentation &amp; Process Control Technology</option>
                                <option value="32">Mechanical Technology</option>
                                <option value="34">Mechatronics Technology</option>
                                <option value="36">Power Technology</option>
                                <option value="38">Refregeration &amp; Air Conditioning Technology</option>
                                <option value="41">Telecommunication Technology</option>
                                <option value="42">Electronics Technology</option>
                                <option value="43">Library Science</option>
                                <option value="44">Survey</option>
                                <option value="45">General Mechanics</option>
                                <option value="46">Firm Machinery</option>
                                <option value="47">Textile Technology</option>
                                <option value="99">Others</option>
                </select>
                </div>
                <div class="from-group">
                  <label for="Sub">Passing Year:<span>*</span></label>
                  <select>
                      <?php 
                          for($i=1905; $i<=date('Y'); $i++)
                          {
                            echo " <option value='$i'>$i</option>";   
                          }
                      ?>
                   </select>
                </div>
          </div>
          <!-- stert HSC or Equvalent Level -->
          <div class="col-md-6">
                 <h5>HSC or Equvalent Level</h5><br>
                 <div class="from-group">
                      <label for="exam1">Examination:<span>*</span></label>
                      <select name="exam1"  id="exam1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">S.S.C</option>
                            <option value="2">Dakhil</option>
                            <option value="3">S.S.C Vocational</option>
                            <option value="4">O Level/Cambridge</option>
                            <option value="5">S.S.C Equivalent</option>
                       </select>
                 </div>
                 <div class="from-group">
                   <label for="Board">Board:<span>*</span></label>
                   <select name="institute1"  id="institute1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Cumilla</option>
                            <option value="3">Rajshahi</option>
                            <option value="4">Jashore</option>
                            <option value="5">Chittagong</option>
                            <option value="6">Barishal</option>
                            <option value="7">Sylhet</option>
                            <option value="8">Dinajpur</option>
                            <option value="9">Madrasah</option>
                            <option value="10">Technical</option>
                            <option value="15">Cambridge International - IGCE</option>
                            <option value="16">Edexcel International</option>
                            <option value="17">Bangladesh Technical Education Board (BTEB)</option>
                            <option value="20">Others</option>
                   </select>
                </div>
                <div  class="form-group">
                       <label for="Roll">Roll Namber:<span>*</span></label>
                       <input type="Roll" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Roll Namber:" name="Roll" required>
                </div>
                <div  class="form-group">
                       <label for="Result">Result:<span>*</span></label>
                       <select name="result1"  id="result1" >
                            <option value="0" selected="selected">Select</option>
                            <option value="1">1st Division</option>
                            <option value="2">2nd Division</option>
                            <option value="3">3rd Division</option>
                            <option value="4">GPA(out of 4)</option>
                            <option value="5">GPA(out of 5)</option>
                       </select>
                </div>
                <div  class="form-group">
                       <label for="Sub">Group/Subject:<span>*</span></label>
                       <select name="subject1"  id="subject1">
                                <option value="0" selected="selected">Select One</option>
                                <option value="1">Science</option>
                                <option value="2">Humanities</option>
                                <option value="3">Business Studies</option>
                                <option value="12">Agriculture Technology</option>
                                <option value="13">Architecture and Interior Design Technology</option>
                                <option value="15">Automobile Technology</option>
                                <option value="16">Civil Technology</option>
                                <option value="20">Computer Science &amp; Technology</option>
                                <option value="21">Chemical Technology</option>
                                <option value="22">Electrical Technology</option>
                                <option value="23">Data Telecommunication and Network Technology</option>
                                <option value="24">Electrical and Electronics Technology</option>
                                <option value="27">Environmental Technology</option>
                                <option value="31">Instrumentation &amp; Process Control Technology</option>
                                <option value="32">Mechanical Technology</option>
                                <option value="34">Mechatronics Technology</option>
                                <option value="36">Power Technology</option>
                                <option value="38">Refregeration &amp; Air Conditioning Technology</option>
                                <option value="41">Telecommunication Technology</option>
                                <option value="42">Electronics Technology</option>
                                <option value="43">Library Science</option>
                                <option value="44">Survey</option>
                                <option value="45">General Mechanics</option>
                                <option value="46">Firm Machinery</option>
                                <option value="47">Textile Technology</option>
                                <option value="99">Others</option>
                </select>
                </div>
                <div class="from-group">
                  <label for="Sub">Passing Year:<span>*</span></label>
                  <select>
                      <?php 
                          for($i=1905; $i<=date('Y'); $i++)
                          {
                            echo " <option value='$i'>$i</option>";   
                          }
                      ?>
                   </select>
                </div>
          </div>
     </div>
     <div class="row">
       <div class="col-md-6">

         <label>Upload Photo:<input type="file" name="pImg" value=""></label>
         <label>Upload Signature:<input type="file" name="SImg" value=""></label>
       </div>
       <div class="col-md-6">
         <div  class="form-group">
                     <label for="email">Email if any:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="email" placeholder="Applicant's Name:" name="email" required>
          </div>
          <div  class="form-group">
                     <label for="moName">Contact Mobile:<span>*</span></label>
                     <input type="number" class="pr-lg-5 pl-md-5 " id="moName" placeholder="Applicant's Name:" name="moName" required>
          </div>
          <div  class="form-group">
                     <label for="moName">Re-type Mobile:<span>*</span></label>
                     <input type="namber" class="pr-lg-5 pl-md-5 " id="moName" placeholder="Applicant's Name:" name="moName" required>
          </div>
       </div>
     </div>
        </form>


      </div>
      
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>