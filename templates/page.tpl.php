<?php
/**
 * Created by PhpStorm.
 * User: gdahan
 * Date: 12/10/2015
 * Time: 16:12
 */

?>
<div class="btn btn-danger close-button">Close</div>
<div class="container-fluid">
    <div class="row">
        <div id="right_sidebar" class="col-md-2 right-sidebar">
            <?php if ($logged_in): ?>
                <?php print render($page['top_right_sidebar']); ?>
            <?php else: ?>
            <ul class="login">
                <li class="menu"><i class="glyphicon glyphicon-user icon-left"></i><a href="<?php base_path(); ?>user/login">Connection</a></li>
            </ul>
            <?php endif; ?>
            <?php print render($page['bottom_right_sidebar']); ?>

        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="content-container-div clearfix">
                <?php if ($messages): ?>
                    <div id="messages">
                        <div class="section clearfix">
                            <?php print $messages; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($title):?>
                    <h1><?php print $title ?></h1>
                <?php endif;?>

                <?php print render($page['content']); ?>
            </div>
            <div class="footer">
                <hr />
                <div class="text">
                    &copy; 2013 test_theme. All rights reserved.
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
