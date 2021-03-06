<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap3/css/bootstrap.min.css" media="screen, projection" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <?php Yii::app()->bootstrap->register(); ?>

        

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
               
                <div class="row">
                     <div class="container">
                    <div class="col-md-2">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Sricharitha Matrimony" />
                    </div>
                    <div class="col-md-7" id="company-name">
                        <span >
                            Sricharitha Matrimony
                        </span>
                    </div>
                    <div class="col-md-3">
                        <?php 
                        if(Yii::app()->user->isGuest)
                        echo TbHtml::linkButton("Login", array("color"=>  TbHtml::BUTTON_COLOR_WARNING, 'size' => TbHtml::BUTTON_SIZE_LARGE,'id'=>"login-btn",'url'=>array('/site/login'))); 
                        ?>
                    </div>
                </div>
                    </div>
            </div><!-- header -->

            <div id="">

                <?php
                $this->widget('bootstrap.widgets.TbNavbar', array(
                    'brandLabel' => false,
                    'display' => null,
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.TbNav',
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                                //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                            )),
                    )
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
<?php endif ?>

<?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
<?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/base.css" media="screen, projection" />
    </body>
</html>
