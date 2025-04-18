<?php
  include('connect.php');
  include('add_to_cart.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="logo-icon" href="herbal/logo1.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SavvyShopper</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<!-- navbar -->
  <nav class="navbar">
    <div class="logo"><img src="herbal/logo.png" alt="logo" width="190px"></div>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <div class="dropdown">
        <button class="dropbtn">Shop</button>
        <div class="dropdown-content">
          <a href="homecare.php">Home Care</a>
          <a href="babycare.html">Baby Care</a>
          <a href="health.html">Health & Nutrition</a>
          <a href="agriculture.html">Agriculture & Veterinary</a>
          <a href="skincare.html">Skin Care</a>
          <a href="personal.html">Personal Care</a>
          <a href="books.html">Books & Literature</a>
          <a href="food.html">Food Care</a>

        </div>
      </div>
      <li><a href="#about">About</a></li>
      <li><a href="register.html">Join Membership</a></li> <!-- yaha pe dekhte h kya rkhna h -->
      <li><a href="login.html" class="button1">Login/Sign Up</a></li>
      <li><a href="#search"><img src="herbal/search.png" alt="" width="20px"></a></li>
      <li><a href="#cart"><img src="herbal/cart.png" alt="" width="25px"></a><?php echo getCartCount();   ?></li>
    </ul>
  </nav>
  <!-- Header content of the website -->
<div id="header">
    <div class="container">
      <div class="background-container">
        <h1>Discover something new!</h1>
      </div>
        <div class="row">
            <div class="header-col1"><img src="herbal/herbal.png" alt="" style="width:80%"> <br><br><br>
              <a href="shop.html" class="btn button2">Explore Our Products</a> 
            </div>
            <div class="header-col2">
              <h1>Pure <span>Herbal</span> Products</h1>
                <h3>100% Organic</h3>
                <p>Discover a world of wellness with SavvyShopper, your trusted destination for premium herbal products.
                </p>
                <br><br>
                <a href=""><img src="herbal/whatsapp.png" alt="" width="33px"></a>
                <a href=""><img src="herbal/instagram.png" alt="" width="48px"></a>
                <a href=""><img src="herbal/tweet.png" alt="" width="32px"></a>
            </div>
        </div>
    </div>
</div>


<!-- Class for different categories of product -->
<div id="categories">
    <div class="container"> <hr style="margin-left:11%;margin-right:11%;">
      <h2>Categories</h2>
      <p style="text-align: center;">Herbs that heal</p>
    <div class="row">
      <div class="columnc1">
        <div class="card">
          <img src="herbal/tea.png" alt="Avatar" style="width:50%"></a><hr>
          <h4>Health & Nutrition</h4>
          <h5>Let food be thy medicine and medicine be thy food.</h5>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
      </div>   
      <div class="columnc2">
        <div class="card" >
          <img src="herbal/nutrition.png" alt="Avatar" style="width:50%"></a><hr>
          <h4>Skin Care</h4>
          <h5>A canvas reflecting our health, and journey through life.</h5>
        </div>
      </div>
      <div class="columnc3">
        <div class="card">
          <img src="herbal/beauty.png" alt="Avatar" style="width:50%"></a><hr>
          <h4>Agriculture & Veterinary</h4>
          <h5>The land nourishes us, and we in turn must nourish the land.</h5>
        </div>
      </div> 
      <div class="columnc4">
        <div class="card">
          <img src="herbal/health.png" alt="Avatar" style="width:50%"></a><hr>
          <h4>Home Care</h4>
          <h5>Bringing care and comfort to where life unfolds.</h5>
        </div>
      </div> 
    </div>
</div>
    <div class="row">
        <div class="columnc1">
          <div class="card">
            <img src="herbal/lifestyle.png" alt="Avatar" style="width:50%"><hr>
            <h4>Personal Care</h4>
            <h5>Nourishing the soul within, reflecting it without.</h5>
          </div>
        </div>   
        <div class="columnc2">
          <div class="card">
            <img src="herbal/babycare.png" alt="Avatar" style="width:50%"><hr>
            <h4>Baby Care</h4>
            <h5>Nurturing the seed of tomorrow.</h5>
          </div>
        </div>
        <div class="columnc3">
          <div class="card">
            <img src="herbal/books.png" alt="Avatar" style="width:50%"><hr>
            <h4>Books & Literature</h4>
            <h5>Books are the mirrors of the soul.</h5>
          </div>
        </div> 
        <div class="columnc4">
          <div class="card">
            <img src="herbal/wellness.png" alt="Avatar" style="width:50%"><hr>
            <h4>Food Products</h4>
            <h5>Nourishment and delight, a culinary masterpiece.</h5>
          </div>
        </div> 
      </div>
    </div><hr style="margin-left:11%;margin-right:11%;">

<!-- Remedies conent of the business -->
<div id="about">
  <div class="container">
    <h2>Remedies</h2>
    <p align="center">"Every Herb Has a Story—Find Yours Here."</p>
      <div class="row">
          <div class="about-col1">
              <h3>Path to Herbal Wellness, Simplified.</h3>
              <p>At SavvyShopper, we believe in the incredible healing power of nature. <br>Our curated range of herbal 
                  products is crafted to enhance your health, promote wellness, and provide sustainable care for you 
                  and your loved ones. Whether you're looking for 
                  organic skincare, herbal teas, or natural supplements, we've got you covered.
              </p>
              <ul>
                  <li>Best Branding</li>
                  <li>Delivery on Time</li>
                  <li>100% Organic</li>
                  <li>Premium Membership</li>
              </ul><br>
              <br>
          </div>
          <div class="about-col2"><img src="herbal/remedies2.png" alt="" style="width:80%">
          </div>
          <a href="#" class="btn button2">Read More</a>
      </div>
  </div>
</div>

<!-- Product information pannel -->
 <div id="shopping"><hr style="margin-left:11%;margin-right:11%;">
    <h2>Our Best Selling Products</h2>
    <p style="text-align: center;">"Nature's Best, Delivered to Your Doorstep."</p>
    <div class="container">
    <div class="row1">
    <figure class="snip1107"><img src="herbal/blueberry-2350367_1920.jpg" alt="sampl31"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Berry Juice</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
    <figure class="snip1107"><img src="herbal/turmeric.jpg" alt="sample48"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Shri Haldi</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
    <figure class="snip1107"><img src="herbal/massageoil.jpg" alt="sample12"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Massage Oil</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
  </div>
  <div class="row1">
    <figure class="snip1107"><img src="herbal/tulsi-1539181_1920.jpg" alt="sampl31"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Shri Tulsi</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
    <figure class="snip1107"><img src="herbal/capsules-1079838_1920.jpg" alt="sample48"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Aloe Digest</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
    <figure class="snip1107"><img src="herbal/agarbatti.jpg" alt="sample12"/>
      <figcaption>
        <div><span>Buy Now</span></div>
        <div>
          <h4>Nirogya Agarbatti</h4>
        </div><a href="#"></a>
      </figcaption>
    </figure>
  </div>
  <hr style="margin-left:11%;margin-right:11%;">
  </div>
 </div>

 <!-- Blog writing of our website -->
  
 <!-- <div id="blog">
    <div class="container">
      <h2>More to blog</h2>
      <p style="text-align: center;">Latest news & tips</p>
            <div class="row">
              <div class="columnb1">
                <p>Exploring the World of Algorithmic Trading
                  In the heart of the global financial markets, an unseen force constantly shapes the landscape.
                   This force is not a mystical entity, but rather a collection of sophisticated algorithms, tirelessly 
                   scanning markets for opportunities, executing trades in fractions of a second, and constantly adapting to 
                   evolving conditions.
                  </p><br>
                 <a href="#" class="btn button2">More to Blog</a>

              </div>
              <div class="columnb2">
                <p>The "products" of a thriving sector, are the backbone of high-frequency trading (HFT). 
                  They embody the marriage of cutting-edge technology and deep financial expertise, pushing the boundaries of 
                  what's possible in the world of finance. These algorithms act as intermediaries, constantly providing liquidity
                   to the market by quoting both buy and sell prices. 

                </p><br>
                <a href="#" class="btn button2">More to Blog</a>

              </div>
              <div class="columnb3">
                <p>Successful players must continuously innovate, developing new algorithms, adapting to changing
                   market conditions, and staying ahead of the curve. The future of algorithmic trading promises to be even 
                   more dynamic and sophisticated. This ensures smooth and efficient market functioning, to manages risk, generate returns, and capitalize on market volatility.

                </p><br>
                 <a href="#" class="btn button2">More to Blog</a>

              </div>
            </div>
            <br><br><br><br>
            <hr style="margin-left:11%;margin-right:11%;">
        </div>
    </div>
  </div> -->


  <!-- Feature pannel of the website-->
<div id="features">
  <div class="container">
    <h2>Features</h2>
    <p style="text-align: center;">Why use SavvyShopper?</p>
    <div class="row">
      <div class="columnf1">
        <div class="cardf">
          <h4>Clear Brand Messaging</h4><hr>
          <h5>Clearly communicates the brand's values, and unique selling propositions throughout its content.</h5>
        </div>
      </div>
      <div class="columnf2">
        <div class="cardf">
          <h4>User Experience</h4><hr>
          <h5>Provides a consistent user experience across different devices (desktop, mobile, tablet).</h5>
        </div>
      </div>
      <div class="columnf3">
        <div class="cardf">
          <h4>High-Quality Content</h4><hr>
          <h5>Features high-quality, informative, and engaging content that resonates with the target audience.        </h5>
        </div>
      </div>
      <div class="columnf4">
        <div class="cardf">
          <h4>Data Optimization</h4><hr>
          <h5>Regular updates and optimized based on data analysis to improve user experience.
          </h5>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="columnf1">
        <div class="cardf">
          <h4>Focus on User Needs</h4><hr>
          <h5>Designed with the target audience's needs and preferences in mind.</h5>
        </div>
      </div>
      <div class="columnf2">
        <div class="cardf">
          <h4>Content Distribution</h4><hr>
          <h5>Strategically distributed across various channels to reach a wider audience.
          </h5>
        </div>
      </div>
      <div class="columnf3">
        <div class="cardf">
          <h4>Customer centric focus</h4><hr>
          <h5>Website design & content prioritize user needs and preferences.</h5>
        </div>
      </div>
      <div class="columnf4">
        <div class="cardf">
          <h4>Call-To-Actions</h4><hr>
          <h5>Encourages user interaction eg. contact, purchase. Aligns with goals.</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- form for the webiste -->
<div id="contact">
  <hr style="margin-left:11%; margin-right:11%;">
  <h2>Get in Touch Now</h2>

  <div class="row">
      <div class="contact-left">
        <img src="herbal/contact1.png" alt="" width="70%">
      </div>
      <div class="contact-right">
          <form method="post" action="https://formspree.io/f/xwpvzgjw">
              <fieldset>
                <legend>Contact Us</legend>
              <input type="text" name="name" placeholder="Your Name" required><br>
              <input type="email" name="email" placeholder="Your Email" required><br>
              <textarea name="message" rows="4" placeholder="Your Message" required></textarea><br>
              <button type="submit" class="btn3 button3">Send</button><br>
              </fieldset>
          </form><br><br>
      </div>
  </div>
<br><br>
</div>

  <!-- Footer of the website -->
  <footer>
    <div class="footerContainer">
    <div class="row">
      <div class="columnfo1">
    <div class="logo">
      <img src="herbal/logo.png" alt="logo" style="width: 210px;">
      <h5>SavvyShopper is a community of herbal enthusiasts, wellness advocates, and nature lovers. 
        Follow us on social media for tips, recipes, and stories that inspire.
      </h5>
    </div>
  </div>
  <div class="columnfo1">
        <ul>
          <li><h4>Get in touch</h4></li>
          <li><img src="herbal/email.jpg" alt="" style="width: 15px;">&nbsp;SavvyShopper11@gmail.com</li>
          <li><img src="herbal/call-removebg-preview.png" alt="" style="width: 15px;">&nbsp;0123456789</li>
          <li><img src="herbal/instagram-removebg-preview.png" alt="" style="width: 20px;">SavvyShopper_11</li>
        </ul>
    </div>
    <div class="columnfo1">
      <h4><a href="feedback.html" style="color:black;text-decoration: none;">Click here to send a feedback</a></h4>
    </div>
  </div>
</div>
    <div class="footerBottom">
    <p>Copyright &copy 2022; designed by SavvyShopper </p>
    </div>
</footer>
</body>
</html>