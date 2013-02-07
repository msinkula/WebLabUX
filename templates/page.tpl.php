<!-- Begin Page -->
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<!-- Begin Header -->
<div id="header">
	<header class="body">
    <?php if ($logged_in): /* if you are logged into the site */ ?>
        <!-- Begin Logo -->
        <h1 id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" ><img src="<?php print $logo; /* render logo */ ?>" alt="<?php print t('Home'); ?>"/></a></h1>
        <!-- End Logo -->

        <!-- Begin Main Menu -->
        <nav class="main">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); /* render main menu */ ?>
        </nav>
        <!-- End Main Menu -->
    
        <!-- Begin Utility Menu -->
        <nav class="utility">
        <ul>
		<li><a href="#">?</a></li>
        <li id="user"><?php print l($user->name,'user/'.$user->uid); ?>
        <ul id="user-settings">
        <li><a href="#">profile</a></li>
        <li><a href="#">settings</a></li>
        </li>
        <li><?php print l("logout","user/logout"); /* logout link */ ?></li>
</ul>
        </nav>
        <?php endif; /* end if logged in */ ?>
        <?php if (!$logged_in) : /* begin if not logged in */ ?>
        	<?php print render($page['login_form']); /* render login form */  ?>
        <?php endif; /* end if not logged in */?>
        <!-- End Utility Menu -->
    
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
	<?php if ($is_front /*|| arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login'*/): /* begin front page or login content */ ?>
    
    <!-- Begin Spotlight Section -->
    <div class="spotlight">
        <a href="?q=node/4"><img src="sites/all/themes/weblabux/images/img-spotlight-loggingin.png" alt="Welcome to WebLabUX"></a>
    </div>
    <!-- End Spotlight Section -->
    
    <!-- Begin Widgets Section -->
    <div class="widgets">
    	<?php print render($page['content']); /* if is front page render the widgets */ ?>
    </div>
    <!-- End Widgets -->
    <?php endif; /* end front page content */ ?>

	<?php if (!$is_front): /* begin main page content */ ?>    
    <!-- Begin Content -->
    <div id="content" class="<?php if (arg(1) == 'register' || arg(1) == 'password' || arg(1) == 'login') { print 'register'; } /* if register */ ?>">
        <article>
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