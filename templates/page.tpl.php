<!-- New Edit. -->
<!-- Begin Page -->
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<!-- Begin Header -->
<div id="header">
	<header class="body">
    <?php if (!$is_front || ($is_front && $logged_in)): /* if is not front page or you are logged into the front page */ ?>
        <!-- Begin Logo -->
        <h1 id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" ><img src="<?php print $logo; /* render logo */ ?>" alt="<?php print t('Home'); ?>"/></a></h1>
        <!-- End Logo -->

        <!-- Begin Main Menu -->
        <nav class="main">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); /* render main menu */ ?>
        </nav>
        <!-- End Main Menu -->
    <?php endif; /* end if is not front page or you are logged into the front page */ ?>
    
    <!-- Begin User Login -->
    <?php if ($logged_in) : /* begin if logged in */ ?>
	<p id="user">Hi, <?php print l($user->name,'user/'.$user->uid); ?>!<br><?php print l("logout","user/logout"); /* logout link */ ?></p>
	<?php endif; /* end if logged in */ ?>
    <?php if (!$logged_in) : /* begin if not logged in */ ?>
    <?php print render($page['login_form']); /* render login form */  ?>
    <?php endif; /* end if not logged in */?>
    <!-- End User Login -->
	</header>
</div>
<!-- End Header -->

<!-- Begin Breadcrumb -->
<div id="breadcrumb" >
<?php if (!$is_front && $breadcrumb): ?>
    <?php print $breadcrumb; /* render breadcrumb menu */ ?>
<?php endif; ?>
</div>
<!-- End Breadcrumb -->

<!-- Begin Main -->
<div id="main" >
	<?php if ($is_front || arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login'): /* begin front page or login content */ ?>
    <!-- Begin Spotlight Section -->
    <div class="spotlight">
        <a href="?q=node/4"><img src="sites/all/themes/weblabux/images/img-spotlight-loggingin.png" alt="Welcome to WebLabUX"></a>
    </div>
    <!-- End Spotlight Section -->
    
    <!-- Begin Widgets Section -->
    <div class="widgets">
        
        <!-- Begin Widget One -->
        <article class="widget-item">
            <h2>Generate Variations</h2>
            <p>Improve the design of your online information by remotely testing the effectiveness of an alternate version of your web content and design. <a href="?q=node/13">read more</a></p>
        </article>
        <!-- End Widget One -->
        
        <!-- Begin Widget Two -->
        <article class="widget-item">
            <h2>Understand Your Users</h2>
            <p>Collect data about your users’ navigation behavior, task performance, perceptions, and understanding of your web site in an integrated database. <a href="?q=node/13">read more</a></p>
        </article>
        <!-- End Widget Two -->
        
        <!-- Begin Widget Three -->
        <article class="widget-item">
            <a class="button" href="?q=node/13">Learn More About<br><strong>WebLabUX 1.0</strong></a>
        </article>
        <!-- End Widget Three -->
        
    </div>
    <!-- End Widgets -->
    <?php endif; /* end front page or login content */ ?>

	<?php if (!$is_front): /* begin main page content */ ?>    
    <!-- Begin Content -->
    <div id="content" class="<?php if (arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login') { print 'register'; } /* if register */ ?>">
        <article>
        <?php if (arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login'): /* if close (X) */ ?>
        <nav class="close"><a href="<?php print $front_page; ?>">x</a></nav>
        <?php endif; /* end if close (X) */ ?>
        <?php print $messages; ?>
        <?php print render($page['content']); /* render the page's content */ ?>
        <nav class="tabs"><?php print render($tabs); /* render the page's tabs */ ?></nav>
        </article>
    </div> 
    <!-- End Content -->
    
	<!-- Begin Sidebar -->
    <div id="sidebar" class="<?php if (arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login') { print 'register'; } ?>">
		<nav class="local">
    	<?php print render($page['sidebar_first']); /* render the first sidebar block */  ?>
        </nav>
	</div>    
    <!-- End Sidebar -->
    
	<?php endif; /* end main page content */ ?>
</div>
<!-- End Main -->

<!-- Begin Footer -->
<div id="footer">
	<footer class="body">
        <nav class="footer">
        <?php print render($page['footer']); /* render the footer block */ ?>
        </nav>
    	<p><a href="http://depts.washington.edu/ibuxl/web/" target="_blank">Internet-Based User Experience Lab</a><br><a href="http://www.hcde.washington.edu/" target="_blank">Human-Centered Design & Engineering</a><br><?php echo ("&copy; 2003 - " . date ('Y') . ". "); ?>All rights reserved.</p>
    </footer>
</div>
<!-- End Footer -->

</div> 
<!-- End Page -->
