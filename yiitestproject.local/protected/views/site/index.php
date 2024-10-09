<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/addpage.js', CClientScript::POS_END);
// $this->pageTitle=Yii::app()->name;
$this->pageTitle="Hero blog";
?>

<!-- <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1> -->
<h1>Welcome to <i><?php echo $this->pageTitle; ?></i></h1>

<img src="images/sitelogo.jpg" alt="nice">

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
<li>View file: <code><?php echo __FILE__; ?></code></li>
<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
<p>Gii lounch <a href="http://localhost/index.php?r=gii">Gii</a>.</p>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<body>

    <h1>Добро пожаловать на мою страницу!</h1>
    <button id="myButton">Нажми на меня!</button>

    <script>
        document.getElementById('myButton').addEventListener('click', function() {
            alert('Привет! Спасибо, что нажали на кнопку!');
        });
    </script>

</body>