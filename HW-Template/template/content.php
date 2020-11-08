<!-- Page Content -->
<div class="container">
    <?
    $path = $_GET['type_page'] ?: 'news_content';
    include_once $path.'.php';
    ?>
</div>
<!-- /.container -->