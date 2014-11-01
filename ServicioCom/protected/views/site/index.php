<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a la <br><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Este sistema esta realizado para ayudar al Seminario Nuestra Señora del Socorro, para la administración de su Biblioteca.</p>

<p>Por los momentos solo se trabaja con el usuario Administrador para poder ingresar solo teclea:</p>


<h2>Usuario: admin - Pass: 1234</h2>

<div class="logo">

<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/escudo.png')) ?>

</div>
