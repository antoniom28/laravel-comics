@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="jumbo"></div>
        <div class="container-series">
            <div class="main-button">
                <div class="button-div">
                    <a href="#">
                        CURRENT SERIES
                    </a>
                </div>
            </div>

            <ul class="all-series">
               @foreach ($comics as $item)
               <li class="serie">
                    <a href="#">
                        <div class="thumb">
                            <img src="{{ asset($item['thumb']) }}" alt="">
                        </div>
                    </a>
                    <h4> {{$item['title']}} </h4>
                </li>
               @endforeach
            </ul>

            <div class="standard-button">
                <div class="button-div">
                    <a href="#">
                        LOAD MORE
                    </a>
                </div>
            </div>
         </div>
  </div>
@endsection

<style>
main .container{
  background-color: rgb(27, 27, 27);
  min-height: 100px; /* poi da togliere */
  color : white; /**/
}

.jumbo{
  width: 100%;
  height: 300px;
  background-image: url('/images/jumbotron.jpg');
  background-size: cover;
}

/**/

.container-series{
    padding: 30px 0;
    display: flex;
    flex-direction: column;
    position: relative;
}

.container-series .main-button{
    display: inline-block;
    position: absolute;
    left: 4%;
    top: -20px;
  }

  .container-series .standard-button{
    margin-top: 80px;
    align-self: center;
  }

.container-series ul{
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
  width: 90%;
  margin: 0 auto;
}
/*button*/
.container-series .button-div a{
    color: white;
    background-color: #558bff;
    font-weight: bold;
}

/*series*/
.all-series li{
    width: 200px;
}

.all-series li .thumb{
        width: 200px;
        height: 200px;
        overflow: hidden;
        margin: 15px 0;
    }
</style>