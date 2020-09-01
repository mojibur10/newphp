<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>


    <div class="container">
      <div class="hader">
        <h1 class="text-center">Application form</h1><hr>
      </div>
      <div class="dbfrom">
        <form action="db.php" method="post"  enctype="multipart/form-data" class="was-validated" >
          
              
              <div class="row">
                <div class="col-md-6">
                  <div  class="form-group">
                     <label for="name">Applicant's Name:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="name" placeholder="Applicant's Name:" name="aName" required>
                   </div>
                   <div  class="form-group">
                     <label for="fname">Father's Name :<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="fname" placeholder="Father's Name" name="fName" required>
                   </div>
                   <div  class="form-group">
                     <label for="mname">Mother's Name:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="mname" placeholder="Mother's Name" name="mName" required>
                   </div>

                  <label for="dob">Date of Birth:<span>*</span></label>
                      <input type="date" id="myDate" name="bDay" min="1980-01-01" max="2005-01-01">

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
                     <select name="nid" required><option>Bangladeshi</option></select>
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
                  <input type="checkbox" name="sameAdress" value="same adress">If same as Present Address.>
                      
                     <div  class="form-group">
                       <label for="Village">Village:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Village" placeholder="Village:" name="Village2" required>
                     </div>
                     <label for="District">District:<span>*</span></label>

            <select name="district2" multiple>
              <?php 

                      $district =["Cox's Bazar","Kishorgonj","Kurigram","Cumilla","Kustia","Khagrachari","Khulna","Ghaibandha","Gazipur","Gopalgonj","Cuwadanga","Joypurhat","Jamalpur","Jhalkathi","Jhenaidah",
                      "Tangail","Thakurgaon","Dhaka","Dinajpur","Naogoan","Capai Nawabgonj","Norail","Norsindi","Natore","Narayangonj","Netrokona","Panchaghar","Patuakhali","Pirojpur","Feni","Barguna","Bagherhat",
                      "Brahmanbariya","Maymansing","Madaripur","Munsiganj","Meherpur","Mowlovibazar","Joshor","Rangpur","Rangamati","Rajbari","Rajshahi","Laxsmipur","Lalmonirhat","Shoriotpur","Satkhira","Sirajgonj","Shylhet","Sunamgonj","Hobigonj"];


                       foreach ($district as $value){
                  
                              echo " <option value='$value'>$value</option>"; 
                          }
                 ?>
           </select>






                     <div  class="form-group">
                       <label for="name">Upazilla:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="Upazilla" placeholder="Upazilla:" name="Upazilla2" required>
                     </div>
                     <div  class="form-group">
                       <label for="postN">Post Office:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postN" placeholder="Post Office:" name="postN2" required>
                     </div>
                     <div  class="form-group">
                       <label for="postC">Post Code:<span>*</span></label>
                       <input type="text" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Post Code:" name="postC2" required>
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
                       <input type="number" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Roll Namber:" name="Roll" required>
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
                  <select name="passYear" required="">
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
                      <select name="exam2"  id="exam1">
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
                   <select name="institute2"  id="institute1">
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
                       <input type="number" class="pr-lg-5 pl-md-5 " id="postC" placeholder="Roll Namber:" name="hscRoll" required>
                </div>
                <div  class="form-group">
                       <label for="Result">Result:<span>*</span></label>
                       <select name="hscResult"  id="result1" >
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
                       <select name="hscSubject"  id="subject1">
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
                  <select name="hscPassYear">
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
     
     <!-- Start Graduation/Equvalent Level -->

     <div class="row">
     <legend><h3>Graduation/Equvalent Level</h3> </legend>
       <div class="col-md-8">
            <div class="form-group">
                       <label for="Roll">Examination:<span>*</span></label>
                       <select name="exam3" id="exam3" >
                        <option value="0" selected="selected">Select One</option>
                        <option value="1">B.Sc(Engineering/Architecture)</option>
                        <option value="2">B.Sc(Agricultural Science)</option>
                        <option value="3">M.B.B.S./B.D.S</option>
                        <option value="4">Honors</option>
                        <option value="5">Pass Course</option>
                        <option value="6">Fazil</option>
                        <option value="8">Graduation Equivalent</option>
                    </select>
             </div>
             <div class="form-group">
                       <label for="Roll">Subject/Degree:<span>*</span></label>
                       <input type="tex" name="subDegree" placeholder="Subject/Degree:" >
                       
             </div>
             <div class="from-group">
                  <label for="Sub">University/Institute:<span>*</span></label>
     <select name="institute3" class="textfield06a" id="institute3" onchange="Show_UniTextBox(this.id,'other_institute3');">
      <option value="0" selected="selected">Select One</option>
			<option value="111">Bangabandhu Sheikh Mujib Medical University</option>
			<option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
			<option value="113">Bangladesh Agricultural University,Mymensingh</option>
			<option value="114">Bangladesh Open University</option>
			<option value="115">Bangladesh University of Engineering &amp; Technology</option>
			<option value="116">Bangladesh University of Professionals</option>
      <option value="117">Chittagong University of Engineering &amp; Technology</option>
      <option value="118">Chittagong Veterinary and Animal Sciences University</option>
			<option value="119">Comilla University</option>
			<option value="120">Dhaka University</option>
			<option value="121">Dhaka University of Engineering &amp; Technology</option>
			<option value="122">Hajee Mohammad Danesh Science &amp; Technology University</option>
			<option value="123">Islamic University, Kushtia </option>
			<option value="124">Jagannath University</option>
			<option value="125">Jahangirnagar University</option>
			<option value="126">Jatiya Kabi Kazi Nazrul Islam University</option>
			<option value="127">Jessore Science &amp; Technology University</option>
			<option value="128">Khulna University</option>
			<option value="129">Khulna University of Engineering and Technology</option>
			<option value="130">Mawlana Bhashani Science &amp; Technology University</option>
			<option value="131">National University</option>
			<option value="132">Noakhali Science &amp; Technology University</option>
			<option value="133">Pabna University of Science and Technology</option>
			<option value="134">Patuakhali Science And Technology University</option>
			<option value="135">Rajshahi University</option>
			<option value="136">Rajshahi University of Engineering &amp; Technology</option>
			<option value="137">Rangpur University</option>
			<option value="138">Shahjalal University of Science &amp; Technology</option>
			<option value="139">Sher-e-Bangla Agricultural University</option>
			<option value="140">Sylhet Agricultural University</option>
			<option value="141">University of Chittagong</option>
			<option value="222">Ahsanullah University of Science and Technology</option>
			<option value="223">America Bangladesh University</option>
			<option value="224">American International University Bangladesh</option>
			<option value="225">ASA University Bangladesh</option>
			<option value="226">Asian University of Bangladesh</option>
			<option value="227">Atish Dipankar University of Science &amp; Technology</option>
			<option value="228">Bangladesh Islami University</option>
			<option value="229">Bangladesh University</option>
			<option value="230">Bangladesh University of Business &amp; Technology (BUBT)</option>
			<option value="231">BGC Trust University Bangladesh, Chittagong</option>
			<option value="232">BRAC University</option>
			<option value="233">Central Women's University</option>
			<option value="234">City University</option>
			<option value="235">Daffodil International University</option>
			<option value="236">Darul Ihsan University</option>
			<option value="237">Dhaka International University</option>
			<option value="238">East Delta University , Chittagong</option>
			<option value="239">East West University</option>
			<option value="240">Eastern University</option>
			<option value="241">Gono Bishwabidyalay</option>
			<option value="242">Green University of Bangladesh</option>
			<option value="243">IBAIS University</option>
			<option value="244">Independent University, Bangladesh</option>
			<option value="245">International Islamic University, Chittagong</option>
			<option value="246">International University of Business Agriculture &amp; Technology</option>
			<option value="247">Leading University, Sylhet</option>
			<option value="248">Manarat International University</option>
			<option value="249">Metropolitan University, Sylhet</option>
			<option value="250">North South University</option>
			<option value="251">Northern University Bangladesh</option>
			<option value="252">Premier University, Chittagong</option>
			<option value="253">Presidency University</option>
			<option value="254">Prime University</option>
			<option value="255">Primeasia University</option>
			<option value="256">Queens University</option>
			<option value="257">Royal University of Dhaka</option>
			<option value="258">Shanto Mariam University of Creative Technology</option>
			<option value="259">Southeast University</option>
			<option value="260">Southern University of Bangladesh , Chittagong</option>
			<option value="261">Stamford University, Bangladesh</option>
			<option value="262">State University Of Bangladesh</option>
			<option value="263">Sylhet International University, Sylhet</option>
			<option value="264">The Millenium University</option>
			<option value="265">The Peoples University of Bangladesh</option>
      <option value="266">The University of Asia Pacific</option>
			<option value="267">United International University</option>
			<option value="268">University of Development Alternative</option>
			<option value="269">University of Information Technology &amp; Sciences</option>
			<option value="270">University of Liberal Arts Bangladesh</option>
      <option value="271">University of Science &amp; Technology, Chittagong</option>
      <option value="272">University of South Asia</option>
			<option value="273">Uttara University</option>
			<option value="274">Victoria University of Bangladesh</option>
			<option value="275">World University of Bangladesh</option>
			<option value="333">Asian University for Women</option>
			<option value="334">Islamic University of Technology</option>
			<option value="335">South Asian University</option>
			<option value="401">Dhaka Medical College</option>
			<option value="402">Sir Salimullah Medical College</option>
			<option value="403">Mymensingh Medical College</option>
			<option value="404">Chittagong Medical College</option>
			<option value="405">Rajshahi Medical College</option>
			<option value="406">MAG Osmani Medical College</option>
			<option value="407">Sher-E-Bangla Medical College</option>
			<option value="408">Rangpur Medical College</option>
			<option value="409">Comilla Medical College</option>
			<option value="410">Khulna Medical College</option>
			<option value="411">Shaheed Ziaur Rahman Medical College</option>
			<option value="412">Dinajpur Medical College</option>
			<option value="413">Faridpur Medical College</option>
			<option value="414">Shaheed Suhrawardy Medical College</option>
			<option value="415">Pabna Medical College</option>
			<option value="416">Noakhali Medical College</option>
			<option value="417">Cox's Bazar Medical College</option>
			<option value="418">Jessore Medical College</option>
			<option value="419">Shaheed Nazrul Islam Medical College</option>
			<option value="420">Kushtia Medical College</option>
			<option value="421">Satkhira Medical College</option>
			<option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option>
			<option value="501">Feni Medical College,Feni</option>
			<option value="502">Gono Bishwabidyalay, Savar, Dhaka</option>
			<option value="503">Ad-din Womens Medical College, Dhaka</option>
			<option value="504">Anwer Khan Modern Medical College, Dhaka</option>
			<option value="505">Bangladesh Medical College</option>
			<option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option>
			<option value="507">BGC Trust Medical College, Chittagong</option>
			<option value="508">Central Medical College, Comilla</option>
			<option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option>
			<option value="510">Community Based Medical College (cbmc), Mymensingh</option>
			<option value="511">Community Medical College, Dhaka</option>
			<option value="512">Delta Medical College, Dhaka</option>
			<option value="513">Dhaka National Medical College</option>
			<option value="514">Durra Samad Rahman Red Crescent Women?s Medical College, Sylhet</option>
			<option value="515">Eastern Medical College, Comilla</option>
			<option value="516">Enam Medical College, Savar, Dhaka</option>
			<option value="517">Sylhet Women`s Medical College, Sylhet</option>
			<option value="518">Green Life Medical College,Dhaka</option>
			<option value="519">Holy Family Red Crescent Medical College, Dhaka</option>
			<option value="520">Ibrahim Medical College, Dhaka</option>
			<option value="521">Ibn Sina Medical College, Dhaka</option>
			<option value="522">International Medical College, Gazipur</option>
			<option value="523">Islami Bank Medical College, Rajshahi</option>
			<option value="524">Jahurul Islam Medical College, Kishoregonj</option>
			<option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option>
			<option value="526">Khawja Yunus Ali Medical College, Sirajganj</option>
			<option value="527">Kumudini Medical College, Tangail</option>
			<option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option>
			<option value="529">Maulana Bhasani Medical College</option>
			<option value="530">Medical College for Women and Hospital, Dhaka</option>
			<option value="531">Nightingale Medical College, Dhaka</option>
			<option value="532">North Bengal Medical College, Sirajganj</option>
			<option value="533">North East Medical College, Sylhet</option>
			<option value="534">Northern International Medical College, Dhaka</option>
			<option value="535">Northern Private Medical College, Rangpur</option>
			<option value="536">Popular Medical College &amp; Hospital, Dhaka</option>
			<option value="537">Prime Medical College, Rangpur</option>
			<option value="538">Rangpur Community Hospital Medical College</option>
			<option value="539">Sahabuddin Medical College and Hospital</option>
			<option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option>
			<option value="541">Shahabuddin Medical College, Dhaka</option>
			<option value="542">Z. H. Sikder Women`s Medical College</option>
			<option value="543">Southern Medical College, Chittagong</option>
			<option value="544">Tairunnessa Memorial Medical College, Gazipur</option>
			<option value="545">TMSS Medical College,Bogra</option>
			<option value="546">University Of Science and Technology Chittagong. IAMS</option>
			<option value="547">Uttara Adhunik Medical College,Dhaka</option>
			<option value="548">Military Institute of Science and Technology (MIST)</option>
			<option value="999">Others</option>
                      </select>
                </div>


       </div>
       <div class="col-md-4">
       <div class="form-group">
                       <label for="Roll">Examination:<span>*</span></label>
                       <select name="result3"  id="result3" >
                          	<option value="0" selected="selected">Select One</option>
                          	<option value="1">1st Class</option>
                            <option value="2">2nd Class</option>
                            <option value="3">3rd Class</option>
                            <option value="4">CGPA(out of 4)</option>
                            <option value="5">CGPA(out of 5)</option>
                            <option value="6">Pass</option>

                        </select>
             </div>
             <div class="from-group">
                  <label for="Sub">Passing Year:<span>*</span></label>
                  <select name="passYear3">
                      <?php 
                          for($i=1905; $i<=date('Y'); $i++)
                          {
                            echo " <option value='$i'>$i</option>";   
                          }
                      ?>
                   </select>
                </div>
                <div class="from-group">
                  <label for="Sub">Course Duration:<span>*</span></label>
                  <select name="duration3" class="textfield07" id="duration3">
                      <option value="0" selected="selected">Select One</option>
                      <option value="02">02 Years</option>
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>

                    </select>
                </div>

       </div>
     </div>
     <!-- End Graduation/Equvalent Level -->
         <!-- start Masters/Equvalent Level -->
     <div class="row">
     <legend><h3>Masters/Equvalent Level</h3> </legend>
       <div class="col-md-8">
            <div class="form-group">
                       <label for="Roll">Examination:<span>*</span></label>
                       <select name="exam4" id="exam4" >
                        <option value="0" selected="selected">Select One</option>
                        <option value="1">B.Sc(Engineering/Architecture)</option>
                        <option value="2">B.Sc(Agricultural Science)</option>
                        <option value="3">M.B.B.S./B.D.S</option>
                        <option value="4">Honors</option>
                        <option value="5">Pass Course</option>
                        <option value="6">Fazil</option>
                        <option value="8">Graduation Equivalent</option>
                    </select>
             </div>
             <div class="form-group">
                       <label for="Roll">Subject/Degree:<span>*</span></label>
                       <input type="tex" name="subDegree4" placeholder="Subject/Degree:" >
                       
             </div>
             <div class="from-group">
                  <label for="Sub">University/Institute:<span>*</span></label>
     <select name="institute4" class="textfield06a" id="institute4" onchange="Show_UniTextBox(this.id,'other_institute3');">
      <option value="0" selected="selected">Select One</option>
			<option value="111">Bangabandhu Sheikh Mujib Medical University</option>
			<option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
			<option value="113">Bangladesh Agricultural University,Mymensingh</option>
			<option value="114">Bangladesh Open University</option>
			<option value="115">Bangladesh University of Engineering &amp; Technology</option>
			<option value="116">Bangladesh University of Professionals</option>
      <option value="117">Chittagong University of Engineering &amp; Technology</option>
      <option value="118">Chittagong Veterinary and Animal Sciences University</option>
			<option value="119">Comilla University</option>
			<option value="120">Dhaka University</option>
			<option value="121">Dhaka University of Engineering &amp; Technology</option>
			<option value="122">Hajee Mohammad Danesh Science &amp; Technology University</option>
			<option value="123">Islamic University, Kushtia </option>
			<option value="124">Jagannath University</option>
			<option value="125">Jahangirnagar University</option>
			<option value="126">Jatiya Kabi Kazi Nazrul Islam University</option>
			<option value="127">Jessore Science &amp; Technology University</option>
			<option value="128">Khulna University</option>
			<option value="129">Khulna University of Engineering and Technology</option>
			<option value="130">Mawlana Bhashani Science &amp; Technology University</option>
			<option value="131">National University</option>
			<option value="132">Noakhali Science &amp; Technology University</option>
			<option value="133">Pabna University of Science and Technology</option>
			<option value="134">Patuakhali Science And Technology University</option>
			<option value="135">Rajshahi University</option>
			<option value="136">Rajshahi University of Engineering &amp; Technology</option>
			<option value="137">Rangpur University</option>
			<option value="138">Shahjalal University of Science &amp; Technology</option>
			<option value="139">Sher-e-Bangla Agricultural University</option>
			<option value="140">Sylhet Agricultural University</option>
			<option value="141">University of Chittagong</option>
			<option value="222">Ahsanullah University of Science and Technology</option>
			<option value="223">America Bangladesh University</option>
			<option value="224">American International University Bangladesh</option>
			<option value="225">ASA University Bangladesh</option>
			<option value="226">Asian University of Bangladesh</option>
			<option value="227">Atish Dipankar University of Science &amp; Technology</option>
			<option value="228">Bangladesh Islami University</option>
			<option value="229">Bangladesh University</option>
			<option value="230">Bangladesh University of Business &amp; Technology (BUBT)</option>
			<option value="231">BGC Trust University Bangladesh, Chittagong</option>
			<option value="232">BRAC University</option>
			<option value="233">Central Women's University</option>
			<option value="234">City University</option>
			<option value="235">Daffodil International University</option>
			<option value="236">Darul Ihsan University</option>
			<option value="237">Dhaka International University</option>
			<option value="238">East Delta University , Chittagong</option>
			<option value="239">East West University</option>
			<option value="240">Eastern University</option>
			<option value="241">Gono Bishwabidyalay</option>
			<option value="242">Green University of Bangladesh</option>
			<option value="243">IBAIS University</option>
			<option value="244">Independent University, Bangladesh</option>
			<option value="245">International Islamic University, Chittagong</option>
			<option value="246">International University of Business Agriculture &amp; Technology</option>
			<option value="247">Leading University, Sylhet</option>
			<option value="248">Manarat International University</option>
			<option value="249">Metropolitan University, Sylhet</option>
			<option value="250">North South University</option>
			<option value="251">Northern University Bangladesh</option>
			<option value="252">Premier University, Chittagong</option>
			<option value="253">Presidency University</option>
			<option value="254">Prime University</option>
			<option value="255">Primeasia University</option>
			<option value="256">Queens University</option>
			<option value="257">Royal University of Dhaka</option>
			<option value="258">Shanto Mariam University of Creative Technology</option>
			<option value="259">Southeast University</option>
			<option value="260">Southern University of Bangladesh , Chittagong</option>
			<option value="261">Stamford University, Bangladesh</option>
			<option value="262">State University Of Bangladesh</option>
			<option value="263">Sylhet International University, Sylhet</option>
			<option value="264">The Millenium University</option>
			<option value="265">The Peoples University of Bangladesh</option>
      <option value="266">The University of Asia Pacific</option>
			<option value="267">United International University</option>
			<option value="268">University of Development Alternative</option>
			<option value="269">University of Information Technology &amp; Sciences</option>
			<option value="270">University of Liberal Arts Bangladesh</option>
      <option value="271">University of Science &amp; Technology, Chittagong</option>
      <option value="272">University of South Asia</option>
			<option value="273">Uttara University</option>
			<option value="274">Victoria University of Bangladesh</option>
			<option value="275">World University of Bangladesh</option>
			<option value="333">Asian University for Women</option>
			<option value="334">Islamic University of Technology</option>
			<option value="335">South Asian University</option>
			<option value="401">Dhaka Medical College</option>
			<option value="402">Sir Salimullah Medical College</option>
			<option value="403">Mymensingh Medical College</option>
			<option value="404">Chittagong Medical College</option>
			<option value="405">Rajshahi Medical College</option>
			<option value="406">MAG Osmani Medical College</option>
			<option value="407">Sher-E-Bangla Medical College</option>
			<option value="408">Rangpur Medical College</option>
			<option value="409">Comilla Medical College</option>
			<option value="410">Khulna Medical College</option>
			<option value="411">Shaheed Ziaur Rahman Medical College</option>
			<option value="412">Dinajpur Medical College</option>
			<option value="413">Faridpur Medical College</option>
			<option value="414">Shaheed Suhrawardy Medical College</option>
			<option value="415">Pabna Medical College</option>
			<option value="416">Noakhali Medical College</option>
			<option value="417">Cox's Bazar Medical College</option>
			<option value="418">Jessore Medical College</option>
			<option value="419">Shaheed Nazrul Islam Medical College</option>
			<option value="420">Kushtia Medical College</option>
			<option value="421">Satkhira Medical College</option>
			<option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option>
			<option value="501">Feni Medical College,Feni</option>
			<option value="502">Gono Bishwabidyalay, Savar, Dhaka</option>
			<option value="503">Ad-din Womens Medical College, Dhaka</option>
			<option value="504">Anwer Khan Modern Medical College, Dhaka</option>
			<option value="505">Bangladesh Medical College</option>
			<option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option>
			<option value="507">BGC Trust Medical College, Chittagong</option>
			<option value="508">Central Medical College, Comilla</option>
			<option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option>
			<option value="510">Community Based Medical College (cbmc), Mymensingh</option>
			<option value="511">Community Medical College, Dhaka</option>
			<option value="512">Delta Medical College, Dhaka</option>
			<option value="513">Dhaka National Medical College</option>
			<option value="514">Durra Samad Rahman Red Crescent Women?s Medical College, Sylhet</option>
			<option value="515">Eastern Medical College, Comilla</option>
			<option value="516">Enam Medical College, Savar, Dhaka</option>
			<option value="517">Sylhet Women`s Medical College, Sylhet</option>
			<option value="518">Green Life Medical College,Dhaka</option>
			<option value="519">Holy Family Red Crescent Medical College, Dhaka</option>
			<option value="520">Ibrahim Medical College, Dhaka</option>
			<option value="521">Ibn Sina Medical College, Dhaka</option>
			<option value="522">International Medical College, Gazipur</option>
			<option value="523">Islami Bank Medical College, Rajshahi</option>
			<option value="524">Jahurul Islam Medical College, Kishoregonj</option>
			<option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option>
			<option value="526">Khawja Yunus Ali Medical College, Sirajganj</option>
			<option value="527">Kumudini Medical College, Tangail</option>
			<option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option>
			<option value="529">Maulana Bhasani Medical College</option>
			<option value="530">Medical College for Women and Hospital, Dhaka</option>
			<option value="531">Nightingale Medical College, Dhaka</option>
			<option value="532">North Bengal Medical College, Sirajganj</option>
			<option value="533">North East Medical College, Sylhet</option>
			<option value="534">Northern International Medical College, Dhaka</option>
			<option value="535">Northern Private Medical College, Rangpur</option>
			<option value="536">Popular Medical College &amp; Hospital, Dhaka</option>
			<option value="537">Prime Medical College, Rangpur</option>
			<option value="538">Rangpur Community Hospital Medical College</option>
			<option value="539">Sahabuddin Medical College and Hospital</option>
			<option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option>
			<option value="541">Shahabuddin Medical College, Dhaka</option>
			<option value="542">Z. H. Sikder Women`s Medical College</option>
			<option value="543">Southern Medical College, Chittagong</option>
			<option value="544">Tairunnessa Memorial Medical College, Gazipur</option>
			<option value="545">TMSS Medical College,Bogra</option>
			<option value="546">University Of Science and Technology Chittagong. IAMS</option>
			<option value="547">Uttara Adhunik Medical College,Dhaka</option>
			<option value="548">Military Institute of Science and Technology (MIST)</option>
			<option value="999">Others</option>
                      </select>
                </div>


       </div>
       <div class="col-md-4">
       <div class="form-group">
                       <label for="Roll">Examination:<span>*</span></label>
                       <select name="result4"  id="result4" >
                          	<option value="0" selected="selected">Select One</option>
                          	<option value="1">1st Class</option>
                            <option value="2">2nd Class</option>
                            <option value="3">3rd Class</option>
                            <option value="4">CGPA(out of 4)</option>
                            <option value="5">CGPA(out of 5)</option>
                            <option value="6">Pass</option>

                        </select>
             </div>
             <div class="from-group">
                  <label for="Sub">Passing Year:<span>*</span></label>
                  <select name="passYear4">
                      <?php 
                          for($i=1905; $i<=date('Y'); $i++)
                          {
                            echo " <option value='$i'>$i</option>";   
                          }
                      ?>
                   </select>
                </div>
                <div class="from-group">
                  <label for="Sub">Course Duration:<span>*</span></label>
                  <select name="duration4" class="textfield07" id="duration4">
                      <option value="0" selected="selected">Select One</option>
                      <option value="02">02 Years</option>
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>

                    </select>
                </div>

       </div>
     </div>
     <div class="row">
       <div class="col-md-6">
       <div  class="form-group">
                     <label for="email">Email if any:<span>*</span></label>
                     <input type="text" class="pr-lg-5 pl-md-5 " id="email" placeholder="Email if any:" name="email" required>
          </div>

         <label>Upload Photo:<input type="file" name="pImg" value=""></label>
         <label>Upload Signature:<input type="file" name="SImg" value=""></label>
       </div>
       <div class="col-md-6">
         
          <div  class="form-group">
                     <label for="moName">Contact Mobile:<span>*</span></label>
                     <input type="number" class="pr-lg-5 pl-md-5 " id="moName" placeholder="Contact Mobile:" name="moName" required>
          </div>
          <div  class="form-group">
                     <label for="reMoName">Re-type Mobile:<span>*</span></label>
                     <input type="namber" class="pr-lg-5 pl-md-5 " id="moName" placeholder="Re-type Mobile:" name="reMoName" required>
          </div>
       </div>
     </div>
     <div class="footer">
     <input type="checkbox" name="info_yes" id="info_yes" >
            The above information is correct and I would like to go to the next step.
            <input type="submit" name="button" id="button" value="Submit" >
            
            <input type="Reset" name="button" id="button" value="Reset" ></td>
            
            <h5>For any inconvenience, please email to a  <a href="www.facebook.com/mojibur10555">mojibur10555@gmail.com</a></h5>
            
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