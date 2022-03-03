<footer>
    <div class="footer-container">
        <div class="buy-menu">
            <ul>
                @foreach ($buyItems as $item)
                <li>
                    <img src="{{ asset($item['image'] ) }}" alt="">
                    <span> {{ $item['text'] }} </span>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="container-bg">
          <div class="footer-container-bg">

            <div class="container-sub-links">
              <ul>
                  <li><a href="#"><h2>DC COMICS</h2></a></li>
                  <li><a href="#">characters</a></li>
                  <li><a href="#">comics</a></li>
                  <li><a href="#">movies</a></li>
                  <li><a href="#">tv</a></li>
                  <li><a href="#">games</a></li>
                  <li><a href="#">videos</a></li>
                  <li><a href="#">news</a></li>
              </ul>
              <ul>
                  <li><a href="#"><h2>SHOP</h2></a></li>
                  <li><a href="#">shop DC</a></li>
                  <li><a href="#">shop DC Collebtibles</a></li>
              </ul>
              <ul>
                  <li><a href="#"><h2>DC</h2></a></li>
                  <li><a href="#">Term of use</a></li>
                  <li><a href="#">Privacy policy(New)</a></li>
                  <li><a href="#">Ad Choices</a></li>
                  <li><a href="#">Advertising</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Subscriptions</a></li>
                  <li><a href="#">Talent Workshop</a></li>
                  <li><a href="#">CPSC Certificates</a></li>
                  <li><a href="#">Ratings</a></li>
                  <li><a href="#">Shop Help</a></li>
                  <li><a href="#">Contact us</a></li>
              </ul>
              <ul>
                  <li><a href="#"><h2>SITES</h2></a></li>
                  <li><a href="#">DC</a></li>
                  <li><a href="#">MAD Magazine</a></li>
                  <li><a href="#">DC Kids</a></li>
                  <li><a href="#">DC Universe</a></li>
                  <li><a href="#">DC Power Visa</a></li>
              </ul>
            </div>
  
            <div class="container-big-logo">
              <div class="logo"></div>
          </div>
          </div>
        </div>

        <div class="footer-bottom">
        <div class="standard-button">
            <a href="#">SIGN-UP NOW!</a>
        </div>

          <footerSocial />
        </div>
    </div>
  </footer>

  <style>
      .buy-menu{
    background-color: #558bff;
}
    .buy-menu ul {
       display: flex;
      justify-content: space-evenly;
      padding: 20px 50px;
     }

     .buy-menu ul li{
      display: flex;
      align-items: center;
      list-style: none;
      color: white;
      font-size: 0.9em;

      
    }

    .buy-menu ul li span{
        margin-left: 15px;
      }

      .buy-menu img{
  width: 50px;
  max-height: 55px;
}


.container-bg{
  background-image: url('/images/footer-bg.jpg');
}

.container-bg .footer-container-bg{
  display: flex;
  justify-content: space-around;
}


/* sub-links */
.container-sub-links{
      width: 450px;
    height: 340px;
    margin: 20px 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.container-sub-links a{
    color: rgb(145, 145, 145);
}

.container-sub-links ul{
  list-style: none;
  line-height: 1.5;
}
.container-sub-links ul li h2{
    color:white;
    margin: 10px 0;
  }

  .container-big-logo .logo{
        min-width: 580px;
        height: 100%;
        background-image: url('/images/dc-logo-bg.png');
        background-size: auto;
        background-position: center center;
        background-repeat: no-repeat;
    } 

    /*footer-bottom*/
    .footer-bottom{
  padding: 40px 0;
  background-color: rgb(70, 70, 70);
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.footer-bottom .standard-button a{
    color:white;
    padding: 10px 10px;
    border: 2px solid #558bff;
}
  </style>