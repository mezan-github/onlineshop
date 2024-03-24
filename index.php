<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapon Traders</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>


    <!-- ================== Nav ==================== -->

    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Check Product</a>
              </li>
              
            </ul>
             
          </div>
        </div>
      </nav>

      <!-- =================== Check ===================== -->
      <section class="check">
        <h1>আপনার প্রোডাক্টটি অরিজিনাল কিনা চেক করুন</h1>
      <p>আপনার হাতে থাকা প্রোডাক্টটির পিছনে দেয়া<br>
        ৬ ডিজিটের সিকিউরিটি কোডটি এখানে লিখুন।</p>
        <!-- ============= -->
        <form name="myForm" style="margin: 10px;" onsubmit=" return valid()">
          <input type="number" name="num" class="numb"><br><br>
          <input type="submit" value="Submit" class="submit">
       </form>
       <!-- <div id="demo"></div> -->
        <!-- ============= -->

        <p id="demo">বিঃ দ্রঃ কোডটি শুধু মাত্র একবারই ব্যবহার করতে পারবেন,<br>
          কোডটি পূর্বে ব্যবহৃত হয়ে গেলে তা মেয়াদ উত্তীর্ণ দেখাবে।
           
        </p>
        <img src="./images/logo.png" alt="">
      </section>

       
   

    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
