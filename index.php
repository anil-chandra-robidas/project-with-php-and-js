<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project PHP/JS- Team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="main-wrapper">
    <div class="container">
      <h4>PROJECT PHP AND JS FOR FRONTEND TEAM</h4>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="buyersubmitform" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="buyername">Buyer Name <span>*</span></label>
            <input type="text" class="form-control" name="buyername" placeholder="Enter Buyer Name" id="buyername" />
            <span id="nameerror" class="text-warn"></span>
          </div>

          <div class="form-group">
            <label for="buyeremail">Buyer email <span>*</span></label>
            <input type="email" class="form-control" name="buyeremail" placeholder="Enter Buyer Email" id="buyeremail" />
            <span id="emailerror" class="text-warn"></span>
          </div>

          <div class="form-group">
            <label for="buyercity">City <span>*</span></label>
            <input type="text" class="form-control" name="buyercity" placeholder="Enter City" id="buyercity" />
            <span id="cityerror" class="text-warn"></span>
          </div>

          <div class="form-group">
            <label for="buyerphone">Phone <span>*</span></label>
            <input type="number" class="form-control" name="buyerphone" placeholder="Enter Phone" id="buyerphone" />
          </div>

          <div class="form-group">
            <label for="buyeramount">Amount  <span>*</span></label>
            <input type="number" class="form-control" name="buyeramount" placeholder="Enter Amount" id="buyeramount" />
          </div> 

          <div class="form-group">
            <label for="buyerreceiptid">Receipt Id  <span>*</span></label>
            <input type="text" class="form-control" name="buyerreceiptid" placeholder="Enter Receipt Id" id="buyerreceiptid" />
          </div>

        </div>
        <div class="col-md-6">
          

          <div class="form-group">
            <label for="buyenote">Note <span>*</span></label>
            <textarea class="form-control" name="buyenote" rows="5" id="buyenote"></textarea>
          </div>

          <div class="checkbox-wrapper">
            <p> Has a coupon code?</p>
             <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="yes">Yes
            </label>
          </div>

          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="no">No
            </label>
          </div>
          </div>

          <div class="coupon" style="display: ">
            <div class="form-group">
            <label for="buyercoupon">Coupon </label>
            <input type="text" class="form-control hidden" name="buyercoupon" placeholder="Enter Coupon" id="buyercoupon">
          </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button> 

        </div>
        
      </div>
       
    </form>     
  </div>
  </div>


  
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
