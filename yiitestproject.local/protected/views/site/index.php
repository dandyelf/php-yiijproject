<?php
/* @var $this SiteController */

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
