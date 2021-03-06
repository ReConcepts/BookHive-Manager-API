<?php
if (!App::isLoggedIn()) App::redirectTo("?");
require_once WPATH . "modules/classes/System_Administration.php";
$system_administration = new System_Administration();
if (!empty($_POST)) {
    $success = $system_administration->execute();
    if (is_bool($success) && $success == true) {
        $_SESSION['add_success'] = true;
    }
    App::redirectTo("?view_system_components");
}
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="?home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?view_system_components">System Components</a> <a href="?add_system_component" class="current">Add System Component</a> </div>
    <h1>Add System Component</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">          
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="action" value="add_system_component"/>
                            <input type="hidden" name="createdby" value="<?php echo 01; //  echo $_SESSION['userid'];    ?>"/>
              
              <div class="control-group">
                <label class="control-label">Component Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name">
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">Component Acronym</label>
                <div class="controls">
                  <input type="text" name="acronym" id="acronym">
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