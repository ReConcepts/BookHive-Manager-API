
<?php
require_once WPATH . "modules/classes/Users.php";
$users = new Users();

if ($_SESSION['logged_in_user_type_details']['name'] == "STAFF") {
    if (isset($_SESSION['publisher_staff']) && $_SESSION['publisher_staff'] == true) {
        $user = $_SESSION['institution_details']['company_name'] . " " . $_SESSION['logged_in_user_type_details']['name'];
    } else if (isset($_SESSION['book_seller_staff']) && $_SESSION['publisher_staff'] == true) {
        $user = "BOOK SELLER " . $_SESSION['logged_in_user_type_details']['name'];
    } else if (isset($_SESSION['bookhive_staff']) && $_SESSION['bookhive_staff'] == true) {
        $user = "BOOKHIVE " . $_SESSION['logged_in_user_type_details']['name'];
    }
} else {
    $user = $_SESSION['logged_in_user_type_details']['name'];
}
?>

<!--Header-part-->
<div id="header">
    <h1><a href="?dashboard">Bookhive Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $user; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <!--        <li class="divider"></li>
                        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>-->
            </ul>
        </li>
    <!--    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
            <li class="divider"></li>
            <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
            <li class="divider"></li>
            <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
            <li class="divider"></li>
            <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
          </ul>
        </li>-->
        <li class=""><a title="" href="?view_inbox_messages"><i class="icon icon-cog"></i> <span class="text">Messages</span></a></li>
        <!--<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>-->
        <li class=""><a title="" href="?logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->