<?php include('include/inc_header-home.php'); ?>
<?php include('include/inc_navigation.php'); ?>
<?php
@include_once('fsession.php');
$cusid=$_SESSION['cus_id'];
$vehicleid=$_GET['vid'];
$startdate=$_GET['date'];
$duration=$_GET['days'];
include_once('class/fclassvehiclerental.php');
$vehiclebook=new fvehicle();
include_once('class/fclassbooking.php');
$booking=new fBooking();
$booking->confirmbooking_customerdetail($cusid);
if(isset($_POST["action"]))
{
if($_POST["action"] == "Pay")
{
extract($_POST);

  $booking->final_vehiclebooking($cusid,$vehicleid,$vcost,$startdate,$duration);
}
}
 ?>
 <div class="container-fluid" style="background:#F6F5F5;">

   <div class="row">
     <div class="" style="padding:50px;">
       <?php
       $customervar=$booking->confirmbooking_customerdetail($cusid);
       foreach($customervar as $key => $customervalue)
       {
          $vehiclevar=$booking->confirmbooking_vehicledetail($vehicleid);
          foreach($vehiclevar as $key => $vehiclevalue)

          {
            $vendorid=$vehiclevalue['id'];
            $vehicleid=$vehiclevalue['vid'];
            $vehiclename=$vehiclevalue['vtitle'];
            $url=$_SERVER['REQUEST_URI'];
            $custid=$customervalue['cid'];

            // echo $vehicleid;
            // echo $vehiclename;
            $vendorvar=$booking->confirmbooking_vendordetail($vendorid);
            foreach($vendorvar as $key => $vendorvalue )
            {

           ?>
           <div class="row justify-content-md-center">
           <div class="customerdetail col-md-7 card " >
             <form action=" " method="POST" value="vehiclebooking" >
               <input type="hidden" name="customerid" value="<?php echo $customervalue['cid']?>">
               <input type="hidden" name="vehicleid" value="<?php echo $vehiclevalue['vid']; ?>">

                  <input type="hidden" name="vcost" value="<?php echo $vehiclevalue['vcost']; ?>">
                     <input type="hidden" name="duration" value="<?php echo $duration; ?>">
                <input type="hidden" name="startdate" value="<?php echo $startdate; ?>">


                   <div class="row card-body">
                     <h4 class="card-title">Guest Detail</h4>
                   <div class="row">
                 <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $customervalue['cfirst_name']; ?>"  disabled>
                       </div>
                 </div>

                 <div class="col-sm-6">
                      <div class="form-group">

                        <label class='control-label'>Last Name</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $customervalue['clast_name'];?>" disabled>
                       </div>
                 </div>
                 <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $customervalue['ccontact'];?>" disabled>
                       </div>
                 </div>
                 <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $customervalue['caddress'];?>" disabled>
                       </div>
                 </div>
                 <div class="col-sm-12">
                      <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $customervalue['cemail'];?>" disabled>
                       </div>
                 </div>
                 <div class="col-sm-12">
                      <div class="form-group">
                        <span style="font-size:12px;color:#666666;">By confirming to complete this booking I acknowledge that I have read and accept the Rules & Restrictions.</span>
                        <input type="hidden" name="action" value="Pay">

                        <input type="submit" class="btn btn-lg col-md-12 btn-success" value="Pay Later">
                        <a href="#" class="btn btn-lg col-md-12 mt-3" style="background:#4C276D;color:white;" id="payment-button"> Pay With Khalti</a>
                       </div>
                 </div>
               </form>
               </div>
               <script>
                       var config = {
                           // replace the publicKey with yours
                           "publicKey": "test_public_key_8bc8a8161bca499190f1bbdd5ccca7fb",
                           "productIdentity": "<?php echo $vehicleid; ?>",
                           "productName": "<?php echo $vehiclename; ?>",

                           "productUrl": "<?php echo "http://localhost".$url;?>",
                           "eventHandler": {
                               onSuccess (payload) {
                                   // hit merchant api for initiating verfication
                                   console.log(payload);
                               },
                               onError (error) {
                                   console.log(error);
                               },
                               onClose () {
                                   console.log('widget is closing');
                               }
                           }
                       };

                       var checkout = new KhaltiCheckout(config);
                       var btn = document.getElementById("payment-button");
                       btn.onclick = function () {
                           checkout.show({amount: 1000});
                       }
                   </script>

                 </div>

               </div>



           <div class="col-md-4 bookedroomdetail card  ">
             <div class="card-body">
           <div class="row ">
               <h4 class="card-title">Booking Details(<span style="color:#666666;"> for <?php echo $vehiclevalue['vtitle']?></span> )</h4>
             </div>

         <div class="row">
           <img src="<?php echo $vehiclevalue['vimg1'] ?>" style="height:70px;width:70px;border-radius:100%;" >
           <div class="ml-4">
           <span style="font-size:20px;text-transform:capitalize;"><?php echo $vendorvalue['company_name']; ?></span><br>
           <span style="text-transform:capitalize;"><?php echo $vendorvalue['address']; ?></span><br>
           <span style="text-transform:uppercase;font-size:13px;"><?php echo $vendorvalue['contact']; ?></span>

         </div>
       </div><hr>
         <div class="">
        Booking for :  <span style="color:#666666;"><?php echo $startdate;?></span> for <?php echo $duration?> days<br>
        Vehicle type: <span style="color:#666666;text-transform:capitalize;"><?php echo $vehiclevalue['vtype'];?></span> <br>

         </div>
         <hr>
         <div class="">
             <h5>Payment Details of <span style="color:#666666;"><?php echo $vehiclevalue['vtitle']?></span> for <span style="color:#666666;"><?php echo $duration?> days</h5></span>

             <span style="color:#666666;">Rs <?php echo $vehiclevalue['vcost']?> X <?php echo $duration;?> = Rs.
             <?php $calculate=$vehiclevalue['vcost']*$duration;
             echo $calculate;?><br></span>
             <span style="font-size:20px;">Total Payable Amount :</span><span style="color:#666666;">Rs. <span style="color:red;font-size:30px;">Rs. <?php echo $calculate; ?></span>
         </div>
         </div>
           </div>
           <!-- <div class="card col-md-7">
             *Free Cancellation till 24 Hours prior to check-in date
           </div> -->

       </div>
     </div>
       <?php
     }
}
 }
     ?>
   </div>

 </div>

 </div>
