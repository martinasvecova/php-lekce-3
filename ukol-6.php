
<form method="POST">
   Meno: <input type="name"name="firstName"><br><!-- vstupní pole -->
   Heslo: <input type="password" name="secret"><br><!-- tlačítko pro odeslání formuláře -->
    <input type="checkbox" name="optIn"> Súhlasím<br>
    <input type="submit">
</form>

<?php
if (!empty($_POST)) {
    var_dump($_POST);
}

