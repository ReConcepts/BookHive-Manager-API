<?php
if (!App::isLoggedIn()) App::redirectTo("?");
require_once WPATH . "modules/classes/System_Administration.php";
$system_administration = new System_Administration();
if (!empty($_POST)) {
    $success = $system_administration->execute();
    if (is_bool($success) && $success == true) {
        $_SESSION['add_success'] = true;
    }
    App::redirectTo("?view_system_privileges");
}
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="?home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?view_system_privileges">System Privileges</a> <a href="?add_system_privilege" class="current">Add System Privilege</a> </div>
        <h1>Add System Privilege</h1>
    </div>
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">          
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="action" value="add_system_privilege"/>
                            <input type="hidden" name="createdby" value="<?php echo 01; //  echo $_SESSION['userid'];      ?>"/>

                            <div class="control-group">
                                <label class="control-label">Privilege Name</label>
                                <div class="controls">
                                    <input type="text" name="name" id="name">
                                </div>
                            </div>                            
                            <div class="control-group">
                                <label class="control-label">Related Component</label>
                                <div class="controls">
                                    <select name="component" id="component">
                                        <?php echo $system_administration->getComponents(); ?> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Save" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>