<script>
    window.pull_functions = [];
</script>
<nav class="navbar navbar-default navbar-fixed navbar-transparent bootsnav">
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="attr-nav">
            <ul>
                <li>
                    <button style="margin-top: 10px;"   id='connectWalletButton' class="btn nav-btn btn-orange">Авторизоваться</button>
                </li>
            </ul>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
                <div class='naver' style='width: 30px; height: 30px'>
                    <hr>
                    <hr>
                    <hr>
                </div>
                <style>
                    .naver{
                        padding: 0;
                        margin: 0;
                        margin-top: 5px;
                    }
                    .naver hr{
                        transition: .3s ease-in-out;
                        width: 100%;
                        margin-top: 0;
                        margin-bottom: 5px;
                    }
                    
                    .naver:hover > hr{
                        margin-bottom: 9px;
                    }
                </style>
            </button>
            <a class="navbar-brand" href="/"><img src="assets/img/crypto.png" class="logo" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="" data-out="">
                <li><a href="/">Главная</a></li>
                <li><a href="coinmarket">Список валют</a></li>
                <li><a href="tests">Обучение</a></li>
                <li class="dropdown">
            </ul>
        </div>
    </div>
</nav>