<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

    @keyframes rotate {
        0% {
            transform:rotateX(0deg) rotateY(0deg) rotateZ(0deg) skewX(0deg) translateX(0px) translateY(0px) scale(1);
        }
        25% {
            transform:rotateX(359deg) rotateY(0deg) rotateZ(0deg) skewX(0deg) translateX(300px) translateY(0px) scale(1);
        }
        50% {
            transform:rotateX(359deg) rotateY(359deg) rotateZ(0deg) skewX(10deg) translateX(0px) translateY(300px) scale(1);
        }
        75% {
            transform:rotateX(0deg) rotateY(359deg) rotateZ(359deg) skewX(0deg) translateX(150px) translateY(150px) scale(1);
        }
        100%{
            transform:rotateX(359deg) rotateY(359deg) rotateZ(359deg) skewX(0deg) translateX(300px) translateY(300px) scale(1);
        }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0) rotateX(0deg);} 
        40% {transform: translateY(-200px) rotateX(130deg);} 
        60% {transform: translateY(-100px) rotateX(270deg);} 
    }

    @-webkit-keyframes colorchange {
        0% {
            color: blue;
        }
        10% {
            color: #8e44ad;
        }
        20% {
            color: #1abc9c;
        }
        30% {
            color: #d35400;
        }
        40% {
            color: blue;
        }
        50% {
            color: #34495e;
        }
        60% {
            color: blue;
        }
        70% {
            color: #2980b9;
        }
        80% {
            color: #f1c40f;
        }
        90% {
            color: #2980b9;
        }
        100% {
            color: pink;
        }
    }

    body {
        background: url('../../../images/swamp.png') no-repeat center;
        background-size: cover;
        height: 100vh;
        overflow: hidden;
    }

    h1 {
        background-color: white;
        font-size: 60px;
        text-align: center;
        animation: 2s infinite colorchange;
    }
    .shrek{
        animation: 6s infinite rotate;
        user-select: none;
        position: relative;
    }

    .shrek button{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-100%, -50%);
        padding: 20px;
        font-size: 40px;
        cursor: pointer;
        animation: 2s infinite bounce;
        animation: 2s infinite colorchange;
        user-select: none;
    }

    .shrek img {
        width: 500px;
        height: 100%;
    }
    </style>
    <title>Page not found</title>
</head>
<body>
    <h1>Get out of my swamp !!!</h1>
    <div class="shrek"><img src="../../../images/shrek.png" alt="shrek">
        <a href="{{url('')}}"><button>Products page</button></a>
    </div>
</body>
</html>
