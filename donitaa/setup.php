<?php
require_once('custom_files/config.php');
function callback($buffer)
{
    // Change title and hide the Start from scratch and Start from a theme boxes from the starter.htm partial
    $buffer = (str_replace('<title>October Installation</title>', '<title>' . constant("TITLE") . '</title><style>.clean, .theme, .product-search, #attachProjectForm, .list-inline {display:none;}</style>', $buffer));

    // Change icon
    $buffer = (str_replace('<link type="image/png" href="install_files/images/october.png" rel="icon">', '<link type="image/png" href="' . constant("ICON") . '" rel="icon">', $buffer));

    // Replace logo
    $buffer = (str_replace('<link href="install_files/css/layout.css" rel="stylesheet">', '<link href="install_files/css/layout.css" rel="stylesheet"><link href="' . constant("STYLESHEET") . '?id='.date('YmdHis').'" rel="stylesheet">', $buffer));

    // Change the starter.htm partial to focus on installing projects
    $buffer = (str_replace('<p class="lead text-center">How do you want to set up your site?</p>', '<p class="lead text-center">How do you want to set up your project?</p>', $buffer));
    $buffer = (str_replace("col-md-4", "col-md-12", $buffer));
    $buffer = (str_replace("Use a project ID", "<strong>".constant("TITLE")." Installation</strong><br /><span style='font-size:10px'>by Spotlayer<span>", $buffer));
    $buffer = (str_replace('<a target="_blank" href="{{backendUrl}}">{{backendUrl}}</a>', '<a target="_blank" href="{{baseUrl}}/login">{{baseUrl}}login</a><br />Username: admin<br />Password:123456', $buffer));
    $buffer = (str_replace("<p>If you've set up a project at the OctoberCMS website you can enter it here.</p>", "", $buffer));
    $buffer = (str_replace("<p>This option can be used to define plugins and themes manually.</p>", "", $buffer));
    $buffer = (str_replace('value=""', '', $buffer));
    $buffer = (str_replace('value="/backend"', 'value="/spotlayer"', $buffer));
    $buffer = (str_replace('id="adminLogin"', 'id="adminLogin" value="admin"', $buffer));
    $buffer = (str_replace('id="adminPassword"', 'id="adminPassword" value="123456"', $buffer));
    $buffer = (str_replace('id="adminConfirmPassword"', 'id="adminConfirmPassword" value="123456"', $buffer));

    $buffer = (str_replace('<h4 class="section-header">Recommended</h4>', '<h4 class="section-header">Available</h4>', $buffer));
    $buffer = (str_replace('When finished, click Install to continue.', 'When you are ready, click Install to continue.', $buffer));
    $buffer = (str_replace("If you have a Project for this installation, specify it below.", "This wizard will lead you to install ".constant("TITLE").", please wait and don't close the window until it sayes that the installation is finished.", $buffer));
    $buffer = (str_replace("<p>Instead of providing a project ID, you can define plugins and themes manually using the links above.</p>", "", $buffer));
    $buffer = (str_replace("the <strong>install.php</strong> script and the <strong>install_files</strong> directory.", "the <strong>db.sql</strong>, the <strong>install.php</strong> and the <strong>setup.php</strong> scripts. Also delete the <strong>install_files</strong> and the <strong>custom_files</strong> directories.", $buffer));





    $buffer = (str_replace('<option value="mysql">MySQL</option>','<option value="mysql" selected>MySQL</option>',$buffer));
    $buffer = (str_replace('<option value="pgsql">Postgres</option>','',$buffer));
    $buffer = (str_replace('<option value="sqlite">SQLite</option>','',$buffer));
    $buffer = (str_replace('<option value="sqlsrv">SQL Server</option>','',$buffer));
    $buffer = (str_replace('javascript:Installer.Pages.starterForm.useProject()',"javascript:Installer.showPage('installComplete')",$buffer));
    return $buffer;
}

// Overwrite PHP files
$myfile = fopen("install.php", "r");
$content = fread($myfile,filesize("install.php"));
fclose($myfile);
$content = str_replace("install_files/php/boot.php","custom_files/php/boot.php",$content);
$content = str_replace("install_files/js/project.js","custom_files/js/project.js",$content);
$content = str_replace("label: 'Project'","label: '".constant("TITLE")."'",$content);
$content = str_replace("{ code: 'plugins', label: 'Plugins', partial: 'project/plugins' },","",$content);
$content = str_replace("{ code: 'themes', label: 'Themes', partial: 'project/themes' }","",$content);
$content = str_replace("{ code: 'admin', label: 'Administrator', category: 'General', handler: 'onValidateAdminAccount', partial: 'config/admin' },","",$content);
$content = str_replace("{ code: 'advanced', label: 'Advanced', category: 'Advanced', handler: 'onValidateAdvancedConfig', partial: 'config/advanced' }","",$content);

ob_start("callback");
eval('?>' . $content);
ob_end_flush();
