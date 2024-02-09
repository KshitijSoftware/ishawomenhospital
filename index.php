<?php 
include('header.php');
?>

<?php if (isset($page_content)) {include($page_content);} else {include("landingpage.php");}?>
 
    
<?php 
include('footer.php');
?>