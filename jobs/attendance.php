<!DOCTYPE html>
<html>
    <head>
      <title>Bettamint  - Open atendance in app.</title>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
      <link rel="icon" type="image/png" href="logo.png"/>
      <script>
    
    function open_app(){
            window.location="bettamint://attendance";
    }
    function open_playstore() {
        window.location='https://play.google.com/store/apps/details?id=com.bettamint';
    }
    setTimeout(function(){
        open_app();
    },1000);
</script>
<style>
    body {
    background: #516e29;
    font-family: 'Titillium Web', sans-serif;
    font-size: 26px;
}
.loading {
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    width: 300px;
    color: #FFF;
    margin: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
.loading span {
    position: absolute;
    height: 10px;
    width: 150px;
    top: 99%;
    overflow: hidden;
}
.loading span > i {
    position: absolute;
    height: 4px;
    width: 4px;
    border-radius: 50%;
    -webkit-animation: wait 4s infinite;
    -moz-animation: wait 4s infinite;
    -o-animation: wait 4s infinite;
    animation: wait 4s infinite;
}
.loading span > i:nth-of-type(1) {
    left: -28px;
    background: yellow;
}
.loading span > i:nth-of-type(2) {
    left: -21px;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    background: lightgreen;
}

@-webkit-keyframes wait {
    0%   { left: -7px  }
    30%  { left: 52px  }
    60%  { left: 22px  }
    100% { left: 100px }
}
@-moz-keyframes wait {
    0%   { left: -7px  }
    30%  { left: 52px  }
    60%  { left: 22px  }
    100% { left: 100px }
}
@-o-keyframes wait {
    0%   { left: -7px  }
    30%  { left: 52px  }
    60%  { left: 22px  }
    100% { left: 100px }
}
@keyframes wait {
    0%   { left: -7px  }
    30%  { left: 52px  }
    60%  { left: 22px  }
    100% { left: 100px }
}
</style>
    </head>
    <body>
        <div class="loading">
            <img src="logo.png"  height=100 width=100 />
            <p>Please wait... <br> Opening Attendance in Bettamint App</p>
            <span><i></i><i></i></span>
        </div>
    </body>
</html>