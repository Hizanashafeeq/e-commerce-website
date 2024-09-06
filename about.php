<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABOUT</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>ABOUT US</h3>
   <p><a href="home.php">HOME</a> <span> / ABOUT</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="about 4.jpg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOOSE US?</h3>
         <p> Organic Dairy Product, we are passionate about providing high-quality organic dairy products that are not only delicious but also promote health and well-being. We believe in the power of nature and its ability to provide us with nutritious and wholesome food options.

            Our commitment to organic farming practices sets us apart. We work closely with farmers who share our values and prioritize the well-being of their animals and the environment. Our cows are raised in spacious, pasture-based systems where they can graze on fresh grass and enjoy a natural and stress-free life. They are never given hormones or antibiotics, ensuring that our dairy products are pure and free from any harmful substances.

            We take great care in the production process to preserve the natural goodness of our dairy products. Our milk is gently pasteurized to retain its nutritional value and taste, and we avoid using any artificial additives or preservatives. The result is a range of dairy products that are rich in flavor, creamy in texture, and full of essential nutrients.
            From our creamy organic yogurts to our delectable cheeses and wholesome butter, every product we create is a testament to our commitment to quality. We believe that when you choose Organic Dairy Product, you are not only making a healthy choice for yourself and your family but also supporting sustainable agriculture and the well-being of our planet.

            We are dedicated to transparency and believe in building trust with our customers. Our labeling provides clear and accurate information about the organic certifications we hold, as well as details about the sourcing and production methods we employ. We want you to feel confident in your choice to choose Organic Dairy Product as your go-to brand for organic dairy products.

            We are grateful for the opportunity to provide you with nutritious and delicious organic dairy products. Your support enables us to continue our mission of promoting a healthier and more sustainable food system. Thank you for choosing Organic Dairy Product.

            Together, let's nourish our bodies, support organic farming, and take a step towards a brighter and healthier future.</p>
         <a href="menu.html" class="btn">OUR PRODUCTS</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">SIMPLE STEPS</h1>

   <div class="box-container">

      <div class="box">
         <img src="step-1.png" alt="">
         <h3>CHOOSE ORDER</h3>
         <p>"Discover the exceptional taste and nutritional benefits of our thoughtfully curated dairy selection, sourced from trusted farms to deliver the purest indulgence.</p>
      </div>

      <div class="box">
         <img src="step-2.png" alt="">
         <h3>FAST DELIVERY</h3>
         <p>"Experience the convenience of our lightning-fast 30-minute delivery service, bringing your desired products right to your doorstep without delay."</p>
      </div>

      <div class="box">
         <img src="about3.jpg" alt="">
         <h3>ENJOY PRODUCT</h3>
         <p>"Experience pure bliss with every bite of our delectable dairy products, carefully curated to bring you the ultimate enjoyment and satisfaction."</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">CUSTOMERS REVIEW'S</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="review1.jpg" alt="">
            <p>"I absolutely love the organic yogurt from Organic Dairy Product! The texture is incredibly creamy, and the taste is rich and flavorful. I appreciate knowing that the yogurt is made from organic ingredients and that no artificial additives are used. It's the perfect balance of sweetness and tanginess. Highly recommend!"
  </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>ANANYA MEHTA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="review2.jpg" alt="">
            <p>"I recently tried the organic cheese from Organic Dairy Product, and I was blown away by the quality. The cheese has a fantastic flavor that is both creamy and slightly sharp. I love knowing that the cows are pasture-raised and that no hormones or antibiotics are used. The cheese melts beautifully and is perfect for a cheese platter or a grilled cheese sandwich. Definitely worth every penny!"
</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>NEHA DESAI</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="review3m.jpg" alt="">
            <p>"I have been using the organic butter from Organic Dairy Product for a while now, and I can't imagine going back to any other brand. The butter is incredibly smooth and has a rich, buttery taste that elevates any dish I use it in. It spreads like a dream and adds a delicious richness to baked goods. Plus, knowing that it comes from cows raised on organic pastures gives me peace of mind. Highly recommend this butter!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>RAJEEV</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="review4m.jpg" alt="">
            <p>"I've been drinking the organic milk from Organic Dairy Product for a few months now, and it's by far the best milk I've ever had. The taste is clean and fresh, and it's evident that the milk comes from happy and healthy cows. I appreciate that it's pasteurized gently to retain its nutrients and flavor. Whether I'm enjoying a glass of cold milk or using it in my morning coffee, I can taste the difference. Highly satisfied with this organic milk!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>ARUN RAVI</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="review5m.jpg" alt="">
            <p>As a health-conscious individual, I highly recommend Organic Dairy Products. Their organic yogurt is my absolute favorite. It is smooth, velvety, and has the perfect balance of sweetness. I appreciate that it is made from high-quality organic ingredients, without any artificial additives. I also enjoy their organic milk, which has a pure and refreshing taste. Organic Dairy Products has truly raised the bar for dairy products."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>RAJESH KUMAR</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="review6.jpg" alt="">
            <p>"Organic Dairy Products has become my go-to brand for all my dairy needs. Their organic butter is simply outstanding. It has a rich, creamy texture that spreads like a dream on toast. I also enjoy their selection of organic cheeses, which are full of flavor and have a delightful, natural tang. It's great to support a brand that values organic and sustainable practices."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>SNEHA PAUL</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>