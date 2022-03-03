<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>

        <div class="nav">
            <nav>
              <ul>
                @foreach ($menuitem as $formato)
                <li>
                    <a href="#">
                        {{ $formato['text'] }}
                    </a>
                </li>
                @endforeach
              </ul>
            </nav>
        </div>
    </div>
</header>

<style>
header .container{
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  height: 120px;
  margin: 0 auto;
}

.logo img{
  width: 80px;
}

header nav{
  font-size: 0.8em;
}

header nav li a{
    display: inline-block;
    margin: 0px 20px;
    padding: 47px 0;
}

header nav li a.active , header nav li a:hover{
    box-shadow: 0px 6px #558bff;
    color: #558bff;
}

header nav ul{
    list-style: none;
    display: flex;
}
</style>