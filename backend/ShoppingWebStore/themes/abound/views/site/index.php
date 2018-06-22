<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
        $this->widget('ext.slider.slider', array(
            'container'=>'slideshow',
            'width'=>1300, 
            'height'=>100, 
            'timeout'=>25,
            'infos'=>true,
            'constrainImage'=>false,
            'images'=>array('01.jpg','02.jpg','03.jpg','04.jpeg','06.jpg'),
            'alts'=>array(),
            )
        );
?>
</div>
