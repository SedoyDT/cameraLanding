<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="/css/template_view_style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    <link rel="icon" href="../../images/camera.svg" type="image/x-icon">
    <script src="/js/scroll.js"></script>

    <title>Подольск установка камер</title>
</head>
<body>
<style>
    @media (max-width:1000px) {
        #menu__toggle {
            opacity: 0;
        }

        #menu__toggle:checked ~ .menu__btn > span {
            transform: rotate(45deg);
        }
        #menu__toggle:checked ~ .menu__btn > span::before {
            top: 0;
            transform: rotate(0);
        }
        #menu__toggle:checked ~ .menu__btn > span::after {
            top: 0;
            transform: rotate(90deg);
        }
        #menu__toggle:checked ~ .menu__box {
            visibility: visible;
            left: 0;
        }

        .menu__btn {
            display: flex;
            align-items: center;
            position: fixed;
            top: 20px;
            left: 20px;

            width: 26px;
            height: 26px;

            cursor: pointer;
            z-index: 1;
        }

        .menu__btn > span,
        .menu__btn > span::before,
        .menu__btn > span::after {
            display: block;
            position: absolute;

            width: 100%;
            height: 2px;

            background-color: #616161;

            transition-duration: .25s;
        }
        .menu__btn > span::before {
            content: '';
            top: -8px;
        }
        .menu__btn > span::after {
            content: '';
            top: 8px;
        }

        .menu__box {
            display: block;
            position: fixed;
            visibility: hidden;
            top: 0;
            left: -100%;

            width: 300px;
            height: 100%;

            margin: 0;
            padding-top: 60px ;
            /*padding: 80px 0px;*/
            /*padding: 1rem 1rem 1rem  1rem;*/


            list-style: none;

            background-color: #ECEFF1;
            box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);

            transition-duration: .25s;
        }


        .menu__item {
            display: block;
            padding: 12px 0px;

            align-items: center;
            justify-content: center;
            color: #333;

            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 600;

            text-decoration: none;

            transition-duration: .25s;
        }
        .menu__item:hover {
            background-color: #CFD8DC;
        }

        .menu__box ul {
            list-style-type:none;
        }
        .menu__box li {
            /*margin-bottom: 5px;*/
            margin-left: -40px;
        }
        .menu__item {
            padding-left: 80px ;
        }
    }

    #menu__toggle {
        opacity: 0;
    }

</style>
<div class="container">
    <header class="header">
    <nav id="menu" >
        <input type="checkbox" id="menu__toggle" >
        <label for="menu__toggle" class="menu__btn">
            <span></span>
        </label>
        <img src="../../images/camera.svg" alt="" id="logo" >
        <ul class="menu__box">
            <li><a class = "menu__item" href="main">Главная</a></li>
            <li><a class = "menu__item" href="article">Галерея</a></li>
            <li><a class = "menu__item" href="">О нас</a></li>
        </ul>
    </nav>

    </header>
    <main id="main">
        <?php include 'application/views/'.$content_view; ?>
    </main>
    <article id="article">
        <p>Стас</p>
    </article>
    <footer id="footer">
        <p>Футер</p>
    </footer>
</div>

</body>

</html>

