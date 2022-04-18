<?php include 'header.php'; ?>

<div id="home" class="content">
 
  <div class="slideshow" style="padding-top:22px;">
    <div class="poster">
      <img src="shop.jpeg" style="width:100%">
    </div>
    <div class="poster">
      <img src="discount.jpeg" style="width:100%">
    </div>
    <div class="poster">
      <img src="comingSoon.jpeg" style="width:100%">
    </div>
  </div>
  
  <br>

  <div style="text-align:center; position:relative; top-20px;">
    <span class="dash"></span> 
    <span class="dash"></span> 
    <span class="dash"></span> 
  </div>

  <div class="accessoriesImg" style="float:left; margin-left:8%;">
    <a href="#buy" onclick="openPage('buy')">
      <img src="appleAccess.jpeg" alt="appleAccessories" class="slideImg">
      <div class="slideOver">
        <div class="text">Shop Apple Accessories</div>
      </div>
    </a>
  </div>

  <div class="accessoriesImg" style="float:right; margin-right:8%;">
    <a href="#buy" onclick="openPage('buy')">
      <img src="motoAccess.jpeg" alt="motoAccessories" class="slideImg">
      <div class="slideOver">
        <div class="text">Shop Motorola Accessories</div>
      </div>
    </a>
  </div>


</div>



<div id="iPhone13" class="content" style="padding: 125px 0px 5px 0px;">
  <button onclick="openPage('buy')" id="buyButton" title="Buy">BUY NOW</button>
  <div class="bg1">
    <div class="caption"><span class="animateTop">iPhone13</span></div>
  </div>

  <div class="response" style="color:#000033; background-color:#cce6ff; padding:15px 50px 0px 50px; font-size:25px;">
    <h1 style="text-align:center; text-decoration: underline;">Click on the image below</h1>
    <iframe src="practice.htm" frameBorder="0" name="iPhone" height="525px" width="100%"></iframe>
  </div>

  <div class="bg2">
    <div class="caption" style="top:0%">WATER RESISTANT</div>
  </div>
  
  <div class="response" style="color:#000033; background-color:#73A5C6; padding:15px 50px 60px 50px;">
    <h1 style="text-align:center; text-decoration: underline;">Accessibility Features</h1>
    <h2 style="font-weight:bold;">Features include:</h2>
    <div>
	<ul>
	  <li>RTT and Textphone support</li>
	  <li>Siri and Dictation</li>
	  <li>Type to Siri</li>
	  <li>Switch Control</li>
	  <li>Voice Control</li>
	  <li>VoiceOver</li>
	  <li>Zoom</li>
	  <li>Magnifier</li>
	  <li>Closed Captions</li>
	  <li>AssistiveTouch</li>
	  <li>Spoken Content</li>
	  <li>Back Tap</li>
	</ul>
    </div>
  </div>

  <div class="bg3">
    <div class="caption" style="font-size:85px; background-color:#000033AA">Ceramic Shield, tougher than any smartphone glass, Durable flat-edge design</div>
  </div>

  <div class="response" style="color:darkBlue; background-color:#73A5C6; padding:15px 50px 25px 50px; font-size:50px;">
    <h1 style="text-align:center; font-weight: bold;">iOS 15</h1>
  </div>

  <div class="bg4">
    <div class="caption" style="font-size:25px;background-color:#00003390;padding-right:100px;text-align:right;">
	<img src="chip.png" style="float:left;width:250px;height:250px;padding-left:50px;">
	<p>A15 Bionic chip</p>
	<p>New 6‑core CPU with 2 performance and 4 efficiency cores</p>
	<p>New 4‑core GPU</p>
	<p>New 16‑core Neural Engine</p>
    </div>
  </div>
  
  <h1 style="color:#000033; text-align:center; font-size:50px;">In the box</h1>
  <img src="box.png" style="height:500px;">

</div>



<div id="moto" class="content" style="padding-top: 125px; padding-bottom:250px">
  <button onclick="openPage('buy')" id="buyButton" title="Buy">BUY NOW</button>
  <div class="moto1">
    <div class="caption"><span class="animateTop">Motorola E20</span></div>
  </div>

  <h1 style="text-align:center; text-decoration: underline;">Click on the image below</h1>
  <iframe src="moto.htm" frameBorder="0" name="iPhone" height="525px" width="100%"></iframe>

</div>






<div id="buy" class="content" style="padding-top:155px">

  <div class="buyContainer" style="float:left;">
    <div class="phone">
      <img data-image="13" src="13andMini.png" alt="iPhone13" style="width:100%">
    </div>
    <div class="descript">
      <div class="description">
        <h1>iPhone 13</h1>
      </div>
      <div class="choose">
        <button active>1Phone 13</button>
        <button onclick="changePrice()">iPhone 13 Mini</button>
      </div>
      <div class="price">
        <span id="price">£779</span>
        <a class="cart">Add to cart</a>
      </div>
    </div>
  </div>

  <div class="buyContainer" style="float:right;">
    <div class="phone">
      <img data-image="moto" src="moto.png" alt="motoE" style="width:100%">
    </div>
    <div class="descript">
      <div class="description">
        <h1>MotorolaE</h1>
      </div>
      <div class="price" style="margin-top:150px;">
        <span id="price">£79.99</span>
        <a class="cart">Add to cart</a>
      </div>
    </div>
  </div>

  <div class="product" style="float:left;margin-left:20%;">
    <div class="card">
        <div class="image">
            <img src="airpods.png" style="padding-top:55px;" alt="airpods">
            <button class="cartBtn">Add to cart</button>
        </div>
        <div class="info">
            <h2 class="name">Apple Airpods</h2>
            <span class="accessPrice">£159</span>
        </div>
    </div>
  </div>

  <div class="product" style="float:right;margin-right:0%;">
    <div class="card">
        <div class="image">
            <img src="motopods.png" style="padding-top:55px;" alt="motorola pods">
            <button class="cartBtn">Add to cart</button>
        </div>
        <div class="info">
            <h2 class="name">Motorola VereBuds</h2>
            <span class="accessPrice">£29.99</span>
        </div>
    </div>
  </div>
</div>

<div id="contact" class="content" style="padding-top:150px;">
<center>
  <form action="#" class="contact-form">
	  <h1>Contact Us!</h1>
	  <input type="text" placeholder="Name" required/>
  	<i class="fa fa-at form-icon"> </i> <input type="text" placeholder="Email (optional)" />
  	<i class="fa fa-phone form-icon"></i> <input type="text" placeholder="Phone (optional)" />
  	<i class="fa fa-paper-plane form-icon"></i> <input type="text" placeholder="Subject" required/>
  	<i class="fa fa-envelope form-icon"></i> <textarea placeholder="Message" rows="3"></textarea>
  	<button>Submit</button>
  </form>
</center>
</div>

<div id="SLA" class="content" style="padding-top:250px;">
  <center><a href="tans.htm"><img src="sla.png" style="width:70%;text-align:center;" alt="SLA"></a></center>
</div>


<div id="about" class="content" style="padding-top:180px;">
  <h1 style="text-align:center;color:darkBlue;">Our Team</h1>

  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Saba Khan</h2>
        <p style="color: #33ACFF;">Website Creator</p>
        <p>Built the front end of this website and connected it to the back end.</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Nadine Abaka-Wood</h2>
        <p style="color: #33ACFF;">Database Creator</p>
        <p>Created the database using SQLite3 and made the ER diagram</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>
  
  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Vamika Anand</h2>
        <p style="color: #33ACFF;">Legal</p>
        <p>Created the database using SQLite3 and made the ER diagram</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>
  
  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Jiya Maggo</h2>
        <p style="color: #33ACFF;">Report</p>
        <p>Wrote the terms and conditions for the website as well as the SLA</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>
  
  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Fatima Rashid</h2>
        <p style="color: #33ACFF;">Report</p>
        <p>Completion of the report and making sure everyone contributed and wire framing</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>  
  
  <div class="about">
    <div class="shadow">
      <div class="aboutcon">
        <h2>Zain Jamal</h2>
        <p style="color: #33ACFF;">Research and Web Help</p>
        <p>Researched information about the products for the website and wire framing</p>
        <p style="font-weight:bold;">Contribution: 100%</p>
      </div>
    </div>
  </div>  
</div>






<?php include 'footer.php'; ?>