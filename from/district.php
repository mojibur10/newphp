

<select name="" multiple>
	<?php 

                      $district =["Cox's Bazar","Kishorgonj","Kurigram","Cumilla","Kustia","Khagrachari","Khulna","Ghaibandha","Gazipur","Gopalgonj","Cuwadanga","Joypurhat","Jamalpur","Jhalkathi","Jhenaidah",
                      "Tangail","Thakurgaon","Dhaka","Dinajpur","Naogoan","Capai Nawabgonj","Norail","Norsindi","Natore","Narayangonj","Netrokona","Panchaghar","Patuakhali","Pirojpur","Feni","Barguna","Bagherhat",
                      "Brahmanbariya","Maymansing","Madaripur","Munsiganj","Meherpur","Mowlovibazar","Joshor","Rangpur","Rangamati","Rajbari","Rajshahi","Laxsmipur","Lalmonirhat","Shoriotpur","Satkhira","Sirajgonj","Shylhet","Sunamgonj","Hobigonj"];


                       foreach ($district as $value){
                  
                              echo " <option value='$value'>$value</option>"; 
                          }
                 ?>
</select>

