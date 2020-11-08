<div style="margin: 60px auto; text-align: center;">
    <form action="" method="POST" style="padding-bottom: 20px;">
        <input type="text" name="text">
        <select name="funcName">
            <option value="func1">Задание 1</option>
            <option value="func2">Задание 2</option>
            <option value="func3">Задание 3</option>
            <option value="func4">Задание 4</option>
            <option value="func5">Задание 5</option>
        </select>
        <input type="submit" value="Отправить">
    </form>

    <?php
    include_once 'form/functions.php';
    if ($_POST['funcName']) {
        echo call_user_func($_POST['funcName'], $_POST['text']);
    }
    ?>

</div>
