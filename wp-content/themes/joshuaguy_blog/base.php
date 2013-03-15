<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

<div class="wrap" role="document">
    <div class="content row">
        <div class="main" role="main">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span9 offset3">
                        <?php get_template_part('templates/navheader'); ?>
                    </div> <!-- /.span9 offset3 -->
                </div> <!-- /.row-fluid -->
        </div> <!-- /.container-fluid -->
        <div class="container-fluid">
                <div class="row-fluid">
                    <header class="span3 sidebar hidden-phone">
                        <!-- Sidebar -->
                        <?php get_template_part('templates/sidebar');?>
                    </header>
                    <div class="span9">
                        <!-- Main Content Area -->
                        <?php get_template_part('templates/blog','content'); ?>
                        <?php // include roots_template_path(); ?>
                    </div>
                </div>
            </div> <!-- /.container-fluid -->
        </div><!-- /.main -->
    </div><!-- /.content -->
</div><!-- /.wrap -->

  <?php // get_template_part('templates/footer'); ?>

</body>
</html>
