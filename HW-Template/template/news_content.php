<?php

if ($_GET['news_id']) {
    include_once 'news/detail.php';;
} else {
    include_once 'news/list.php';
}