<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
           text-align: center;
           font-size: 50px;
           font-family:cursive

        }
        .pay{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
           font-size: 40px;
           font-family:cursive


        }
       
        
        .body{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .UPI{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
           font-size: 40px;
           font-family:cursive;
           box-sizing: 50px;


        }
      
        
        
    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Website</title>
</head>
<body>

  <!-- Your donation link and QR code -->
  <h1> DONATE US & SUPPORT OUR SHELTER</h1>
  <!-- <p>Scan the QR code or click the link below to make a donation:</p> -->
  
  
  <!-- <a href="your_payment_link_here" target="_blank">Donate Now</a> -->

 <div class="pay">
  <img src="https://api.qrserver.com/v1/create-qr-code/?data=your_payment_link_here" alt="Donation QR Code">
  <p>Scan the QR code or click the link below to make a donation:</p>
</div>
<div class="UPI">
       <button onclick="showDonationForm() ">DONATE USING UPI ID </button>

      <script>
    function showDonationForm() {
      var upiId = prompt("Please enter your UPI ID:");
      var phoneNumber = prompt("Please enter your phone number:");

      // You can perform additional validation on UPI ID and phone number if needed

      if (upiId !== null && phoneNumber !== null) {
        alert('Thank you for your support!\nUPI ID: ' + upiId + '\nPhone Number: ' + phoneNumber);
      } else {
        alert('Donation canceled.');
      }
    }
  </script>
  </div>


</body>
</html>