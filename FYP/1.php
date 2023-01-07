<?php include("dataconnect.php"); 
session_start();


?>
<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="12.css">
    <style>
        body {
          background-color: lightblue;
        }
        </style>
<div class="wrapper">
    <div class="container">
        
            <h1>
                <i class="far fa-credit-card"></i> Payment Information
            </h1>
            <div class="col-lg-7">
                <form action="paymentcode.php" method="POST">	
          
                    <label class="label">CARD NUMBER</label>
                       <div  class="input-group">
                           <input type="tel" name="card" id="card" class="card_input" maxlength="19" minlength="19" placeholder="xxxx xxxx xxxx xxxx"  autocomplete="off" required/>
                       </div>
                   
                   <script>
                           document.querySelector('#card').addEventListener('keydown', (e) => {
                           e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
                       })
                       /* Jquery */
                       $('#card').keyup(function() {
                         $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
                       });
                   </script>
                   
                    <label class="label">CARD OWNER</label>
                           <div class="input-group">
                               <input type="text" name="fname" class="card_input" placeholder="CHUA WEI HONG" pattern="[a-z A-Z]{1,30}" title="Character only" autocomplete="off" required>
                           </div>       
                           
                    <label class="label">EXPIRATION DATE</label>
                       <div class="input-group">
                           <input type="month" class="input3" name="exp" min="2022-01" placeholder="MM / YY" required/>
                       </div>
                   <div class="cv">	 
                       <label class="label">CVV CODE</label>
                           <div class="input-group">
                               <input type="tel" name="cv" class="input1" placeholder="xxx" minlength="3" maxlength="3" autocomplete="off" pattern="[0-9]{1,3}" title="Three Number CVV Code" required/>
                           </div>                  
                   </div>
                   
                   <input type="submit" name="btn1" class="submit_btn" value="SUBMIT PAYMENT">
                </form>
            <div class="btns">
                <button>Purchase</button>
                <button>Back to cart</button>
            </div>
        </form>
    </div>
</div>
</html>