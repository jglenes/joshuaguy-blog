<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

<div class="wrap" role="document">
<div class="content row">
<div class="main <?php echo roots_main_class(); ?>" role="main">
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <!-- Sidebar -->
            <?php get_template_part('templates/blog','sidebar');?>
        </div>
        <div class="span9">
            <!-- Main Content Area -->
            <?php get_template_part('templates/blog','content'); ?>
        <?php include roots_template_path(); ?>
        </div>
    </div>
</div> <!-- /.container-fluid -->
</div><!-- /.main -->
</div><!-- /.content -->
</div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
