<?php
include("header.php");
?>
<div class="container flex-column-center">
    <form action="/authorizationDB.php" method="post" id="form_auth">
        <div class="input-group"><label for="phone">Введите номер телефона</label><input type="text" required name="phone"></div>
        <div class="input-group"><label for="password"></label>Введите пароль<input type="password" required name="password"></div>
        <div class="input-group"><input type="submit" value="Войти"></div>
        <a href="/registration.php" style="margin-left: 210px;">Регистрация</a>
    </form>
    <div>
        <script>
            let confirm_pass = document.getElementById("password_conf");
            let pass = document.getElementById("password");
            let form = document.getElementById("form_auth");

            form.addEventListener("submit", function(event){
                if(confirm_pass.value !== pass.value){
                    event.preventDefault();
                    document.getElementById("error_pass").innerText = "Пароли не совпадают!";
                }
            })
        </script>
    </div>
</div>