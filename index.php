<!doctype html>

<html lang="en">
<head>
  <title>GPS Tracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/tab_icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</head>

<body>
<script src="js/scripts.js"></script>
<div class="landing-page">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col">
        <img src="images/1920_logo.png" alt="GPS Tracking Logo" style="min-height: 100px" class="centerBlock logo">
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="info">
          <h1 class="centerBlock">Coming Soon: Powerful new GPS trackers for small to mid-size fleets.</h1>
          <img class="truck" src="https://www.gpstracking.com/wp-content/uploads/2020/11/truck.png" alt="GPS Tracking Logo" style="max-height: 300px">
          <p class="centerBlock">Please join our list for the latest product launch information.</p>
          <form action="/post2sheet.php" method="post" class="centerBlock">
            <div class="form-group">
              <input type="email" class="form-control centerBlock" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
            <button type="submit" class="centerBlock subscribe" data-toggle="modal" data-target="#subscribeModalCenter">
              Subscribe
            </button>

            <!-- Modal -->
            <div class="modal fade" id="subscribeModalCenter" tabindex="-1" role="dialog" aria-labelledby="subscribeModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title" id="exampleModalLongTitle">
                      <h2 style="display:inline-block;">✔️</h2><h2 class="notify" style="display:inline-block;">&nbsp;Subscribed!</h2>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h5>Thank you for subscribing to our list!</h5>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-7">
        <div class="image">
          <img class="phone_pic" src="images/cropped_phone.png" alt="Cropped Phone Image" style="width: 100%;">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>