<?php 
$pageConfig = [
    'title'=>'Главная страница',
    'cssFiles'=>[
        '/css/style.css'
    ],
    'jsFiles'=>[
        '/js/script.js'
    ],
];
include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
<h1>Новые поступления весны</h1>
<p>Бывает же!</p>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>
