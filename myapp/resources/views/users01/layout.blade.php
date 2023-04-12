<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <title>Document</title>
    <style>
        .page{
    width: 1200px;
    max-width: 100%;
}
.header{
    text-align: center;
}
.header__logo-img{
    background-size: 100px auto;
    width: 142px;
    height: 33px;
}
.seation__center{
    width: 700px;
    margin: auto;
}

.seation__main{

}

.seation__container{
    width: 350px;
    margin: 0 auto;
}
.seation__container-inner{
    padding: 14px 18px;
    border: 1px solid ;
    border-color:rgb(211, 211, 211) ;
    border-radius: 1px;
}
.seation__container-heading{
    font-size: 28px;
    font-weight: 400;
    line-height: 1.2;
}

.seation__container-auth-form{

}

.seation__container-form-group{

}

.seation__container-form-label{
    display: block;
    font-size: 13px;
    display: block;
    padding-left: 2px;
    padding-bottom: 2px;
    font-weight: 700;
    margin-top: 8px;
}

.seation__container-form-input{
    animation-name: onAutoFillChanged;
    width: 100%;
    margin-right: 0;
    border: 1px solid #a6a6a6;
    border-top-color: #949494;
    border-radius: 3px;
    box-shadow: 0 1px 0 rgb(255 255 255 / 50%), 0 1px 0 rgb(0 0 0 / 7%) inset;
    outline: 0;
    background-color: #fff;
    height: 31px;
    padding: 3px 7px;
    line-height: normal;
    max-width: 300px;
}
.btn{
    cursor: pointer;
    width: 100%;
    left: 0;
    top: 0;
    border: none;
    background-image: linear-gradient(0deg, rgb(246,218,148), rgb(242,201,99));
    height: 33px;
    border: 1px solid #333;
    border-radius: 3px;
}
.seation__container-auth-button-share {
	display: flex;
	justify-content: space-between
}

    </style>
</head>
<body>

    <div class="page">
        <div class="seation">
            <div class="seation__center">
                <div class="seation__main">
                    <div class="seation__container">
                        <div class="seation__container-inner">
                           @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
