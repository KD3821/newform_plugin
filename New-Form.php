<?php

/*
 * Plugin Name: New-Form
 * Author:      Denis
 */
 
function add_new_form() {

ob_start();
?>
<form action="?page_id=69" method="post" name="reg" onsubmit="return ConfirmReg()"> <!--action="" прописать свой url-->
        <H3 id="formhead">Форма регистрации</H3>
        
        <p><input type="text" name="user_name" id="user_name" placeholder="Имя"></p>
        <p><input type="text" name="user_email" id="user_email" placeholder="Email"></p>
        <p><input type="password" name="user_pass" id="user_pass" placeholder="Пароль"></p>
        <p><input type="password" name="user_pass2" id="user_pass2" placeholder="Пароль еще раз"></p>
        <button type="submit" name="submit" class="btn btn-success">Зарегистрироваться</button>
        </form>
<?php
return ob_get_clean();

}


add_shortcode('new_form', 'add_new_form');

function new_form_css() {
	echo "
	<style type='text/css'>
	#formhead {
		color: green;
	}
    .my_button {
        font-size: 22px;
    }
	</style>
	";
}

add_action( 'wp_head', 'new_form_css' );


function enter_new_form() {

    ob_start();
    ?>
    <form action="?page_id=57" method="post" name="auth"> <!--action="" прописать свой url-->
        <H3 id="newformhead">Вход в ЛК</H3>

        <p><input type="text" name="user_email" id="user_email" placeholder="Email"></p>
        <p><input type="password" name="user_pass" id="user_pass" placeholder="Пароль"></p>
        <p><input type="file" name="user_img" id="user_img" placeholder="Аватар"></p>
        <button type="submit" name="submit" class="new_button">Войти</button>
    </form>
    <?php
    return ob_get_clean();
    
}

add_shortcode('s_new_form', 'enter_new_form');

function enter_new_form_css() {
	echo "
	<style type='text/css'>
	#newformhead {
		color: yellow;
	}
    .new_button {
        font-size: 18px;
    }
	</style>
	";
}

add_action( 'wp_head', 'enter_new_form_css' )

?>