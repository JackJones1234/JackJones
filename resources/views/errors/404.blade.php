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
    }
    .shrek{
        animation: 8s infinite rotate;
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
    <div class="shrek"><img src="../../../images/shrek.png" alt="shrek"></div>
</body>
</html>
