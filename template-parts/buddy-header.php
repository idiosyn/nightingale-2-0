<?php

?>



    <span class="buddypress-header">
    <div id="buddy-search" class="buddy-head-popouts">
	<a href="#" class="buddy-search"><svg class="nhsuk-icon nhsuk-icon-buddy-search header-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
                        </svg></a>
	<div class="buddy-header-search"><?php get_search_form(); ?></div>
    </div>
    <div id="buddy-messages" class="buddy-head-popouts">
	<?php
	echo '<a href="#" class="buddy-messages"><img src="' . get_template_directory_uri() . '/assets/images/svg/buddyboss/messages.svg' . '" class="bbnavmenu header-messages" alt="messages"></a>';
	?>
        <div class="bottom">messages<i></i></div>
    </div>
<div id="buddy-notifications" class="buddy-head-popouts">
    <?php
    echo '<a href="#" class="bussy-notifications"><img src="' . get_template_directory_uri() . '/assets/images/svg/buddyboss/notifications.svg' . '" class="bbnavmenu header-notifications" alt="notifications"></a>';
    ?>
	<div class="bottom">notifications<i></i></div>
</div>
<?php
echo "</span>";
