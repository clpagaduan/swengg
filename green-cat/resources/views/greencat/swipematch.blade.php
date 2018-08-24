<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    body{
        background-color:#313234;
    }
    .match-swipe-box{
        min-height:800px;
        width:550px;
        background-color:#fdfdfd;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        padding:4px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
    
    .match-swipe-secondary-box{
        height:80%;
        width:98%;
        margin-left: auto;
        margin-right: auto;
        border-radius:10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
    
    .match-swipe-photo{
        background-image: url({{ URL::asset('images/jet.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
        height:80%;
        width:100%;
        margin-bottom:0;
        margin-left: auto;
        margin-right: auto;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
        background-color:yellow;
    }

    .match-swipe-description{
        height:20%;
        width:100%;
        background-color:white;
        margin-left: auto;
        margin-right: auto;
    }
    
    .match-swipe-top-box{
        height:70px;
        width:98%;
        background-color:white;
        margin-left: auto;
        margin-right: auto;
    }
    
    .match-swipe-bottom-box{
        height:60px;
        width:98%;
        margin-left: auto;
        margin-right: auto;
    }

    #copyright{
        margin-left: auto;
        margin-right: auto;
        text-align:center;
        color:white;
        font-family: 'Varela Round', sans-serif;
        margin-top:10px;
    }
    
</style>
    
</head>

    
<body>
    
<!--GREEN-CAT SWIPE MADE BY: JOHN EDEL B. TAMANI-->
<div class="match-swipe-box">
    <div class="row match-swipe-top-box">
        <div class="row" style="height:70%; width:100%; margin:auto;">
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <a href="profile"><img style="float:left;" src="{{ URL::asset('images/account.png')}}" alt="Image Not Found" width=20% height=60%/></a>
            </div>
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <img style="display: block; margin-left:auto; margin-right:auto;" src="{{ URL::asset('images/greencat.png')}}" alt="Image Not Found" width=50% height=80%/>
            </div>
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <a href="message"><img style="float:right;" src="{{ URL::asset('images/conversation.png')}}" alt="Image Not Found" width=20% height=60%/></a>
            </div>
        </div>
    </div>
    <div class="match-swipe-secondary-box">
        <div class="row match-swipe-photo">
            <div class="col-lg-6" style="padding-left:0; padding-right:0; margin:auto;">
                <img id="swipe_left" style="float:left; margin:auto; z-index:10;" src="{{ URL::asset('images/left.png')}}" alt="Image Not Found" width=15% height=10%/>
            </div>
            <div class="col-lg-6" style="padding-left:0; padding-right:0; margin:auto;">
                <img id="swipe_right" style="float:right; margin:auto; z-index:10;" src="{{ URL::asset('images/right.png')}}" alt="Image Not Found" width=15% height=10%/>
            </div>
        </div>
        <div class="match-swipe-description">
            <div class="row" style="width:100% height:100%; margin-left:auto; margin-right:auto;">
                <div class="col-lg-12" style="font-family: 'Varela Round', sans-serif; font-size:30px; font-weight:700;">
                    <h6 id="name">Jet Tamani, 19</h6>
                </div> 
            </div>
            <div class="row" style="width:100% height:100%; margin-left:auto; margin-right:auto; font-family: 'Varela Round', sans-serif; margin-bottom:5px; color:#6c6c6c;">
                <div class="col-lg-12">
                    <h6 id="occupation">Student at De La Salle University - Manila</h6>
                    <br>
                    <h6 id="location">Manila, Philippines</h6>
                </div> 
            </div>

            <div class="row" style="width:100% height:100%; margin-left:auto; margin-right:auto; font-family: 'Varela Round', sans-serif;">
                <div class="col-lg-12">
                    About Me:
                    <br>
                    <h6 id="description">Hello World</h6>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="match-swipe-bottom-box">
        <div class="row" style="height:50px; width:100%; margin:auto; background-color:#FFEB3B;">
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <img id="back" style="display: block; margin-left:auto; margin-right:auto;" src="{{ URL::asset('images/back.png')}}" alt="Image Not Found" width=20% height=60%/>
            </div>
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <a href="profile"><img id="home" style="display: block; margin-left:auto; margin-right:auto;" src="{{ URL::asset('images/home.png')}}" alt="Image Not Found" width=20% height=60%/></a>
            </div>
            <div class="col-lg-4" style="padding-left:0; padding-right:0; margin:auto;">
                <img id="like" style="display: block; margin-left:auto; margin-right:auto;" src="{{ URL::asset('images/like.png')}}" alt="Image Not Found" width=20% height=60%/>
            </div>
        </div>
    </div>
</div>
<div id="copyright">
    Copyright © Green Cat 2018. All Rights Reserved.
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var previous;
    $(document).on('click','#swipe_right',function(e){
        previous = $('.match-swipe-photo').css('background-image');
        $('.match-swipe-photo').css('background-image','url({{ URL::asset('images/cl.jpg')}})');
    });

    $(document).on('click','#swipe_left',function(e){
        var verify = confirm('Do you want to back?');
        alert(previous);
        if(verify==true){
            $('.match-swipe-photo').css('background-image',previous);
        }
        return false;
    });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>