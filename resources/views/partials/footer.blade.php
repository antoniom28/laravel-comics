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
              @include('partials.footer_submenu')
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

        <div class="footer-social">
          @include('partials.footer_social')
      </div>
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
  padding: 30px 0;
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