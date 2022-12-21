<?php function header_site()
{ ?>
    <style>
        a {
            text-decoration: none; /* Отменяем подчеркивание у ссылки */
        }
    </style>
    <a href="/"><img src="Img/logo.png"></a>
    <div class="ww" style="display:flex;align-items: center;">

    <?php if (empty($_SESSION['logged'])) { ?>
    <h6 class="Sign Entrance" id="Button_Reg" style="display:block">
        <span>Зарегистрироваться</span>
    </h6>
    <h5 class="button Entrance" id="Button_Enter">
        <span>Войти</span>
    </h5>
    </div>

    </div>
<?php } else { ?>

    <form method='POST' style="display:flex;align-items: center;" action="/exit">
        <p style="margin-right: 33px;">Здравствуй, <?= $_SESSION['name'] ?></p>
        <button type="submit" style="font-size: 18px;margin-bottom: 0px;" name = 'but_exit' value = 'exit'>
        <span>Выход</span>
        </button>

    </form>
    </div>

<?php }
} ?>