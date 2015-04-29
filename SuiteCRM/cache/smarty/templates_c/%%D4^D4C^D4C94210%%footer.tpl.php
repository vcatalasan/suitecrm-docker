<?php /* Smarty version 2.6.11, created on 2015-04-29 15:44:41
         compiled from themes/SuiteR/tpls/footer.tpl */ ?>
</div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- Start Footer Section -->
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<!-- Start of mobile/tablet footer -->
<div id="mobilefooter">
    <div id="footernav" class="btn-toolbar" role="toolbar" aria-label="...">
        <div class="btn-group dropup" role="group" aria-label="...">
            <a href="index.php" class="btn btn-success"></span><span class="glyphicon glyphicon-home" aria-hidden="true"></a>
            <div class="btn-group" role="group">
                <button type="button" class="btn dropdown-toggle btn-success quickcreate" data-toggle="dropdown" aria-expanded="false">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_ACCOUNT']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_CONTACT']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_OPPORTUNITY']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_LEAD']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_DOCUMENT']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_CALL']; ?>
</a></li>
                    <li role="presentation"><a href="index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView"><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_TASK']; ?>
</a></li>
                </ul>
            </div>
            <a role="menuitem" href='index.php?module=Administration&action=index' class="btn btn-success"><span class=" glyphicon glyphicon-cog" aria-hidden="true"></span></a>
            <a role="menuitem" href='index.php?module=Users&action=Logout' class="btn btn-success"><span class=" glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
        </div>
    </div>
</div>
<!-- END of mobile/tablet footer -->
<!-- Start generic footer -->
    <footer>
        <div class="serverstats">
            <span class="glyphicon glyphicon-globe"></span> <?php echo $this->_tpl_vars['STATISTICS']; ?>

        </div>
        <div id="links">
            <a id="print_page" onclick="printpage()"><?php echo $this->_tpl_vars['MOD']['LBL_SUITE_PRINT']; ?>
</a>
            <a id="backtotop" ><?php echo $this->_tpl_vars['MOD']['LBL_SUITE_TOP']; ?>
</a>
        </div>
        <div id="copyright_data">
            <div id="dialog2" title="<?php echo $this->_tpl_vars['MOD']['LBL_SUITE_SUPERCHARGED']; ?>
">
                <p><?php echo $this->_tpl_vars['MOD']['LBL_SUITE_DESC1']; ?>
</p>
                <br>
                <p><?php echo $this->_tpl_vars['MOD']['LBL_SUITE_DESC2']; ?>
</p>
                <br>
                <p><?php echo $this->_tpl_vars['MOD']['LBL_SUITE_DESC3']; ?>
</p>
                <br>
            </div>
            <div id="dialog" title="&copy; <?php echo $this->_tpl_vars['MOD']['LBL_SUITE_POWERED_BY']; ?>
">
                <p><?php echo $this->_tpl_vars['COPYRIGHT']; ?>
</p>
            </div>
            <div id="copyrightbuttons">
            <a id="admin_options">&copy; <?php echo $this->_tpl_vars['MOD']['LBL_SUITE_SUPERCHARGED']; ?>
</a>
            <a id="powered_by" >&copy; <?php echo $this->_tpl_vars['MOD']['LBL_SUITE_POWERED_BY']; ?>
</a>
            </div>
        </div>
    </footer>
<!-- END Generic Footer -->
<?php endif; ?>
<!-- END Footer Section -->
<?php echo '
<script>
function printpage()
{
    window.print();
}
if(SUGAR.util.isTouchScreen()) {
        setTimeout(resizeHeader,10000);
}

//qe_init function sets listeners to click event on elements of \'quickEdit\' class
 if(typeof(DCMenu) !=\'undefined\'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)==\'undefined\' || typeof(DCMenu) == \'undefined\'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !=\'undefined\'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use(\'node\', function(Y) {
        var qe = Y.all(\'.quickEdit\');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on(\'click\', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get(\'app_strings\', \'LBL_LOADING\'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute(\'data-dashlet-id\'))!=\'undefined\'){
                refreshDashletID = e.currentTarget.getAttribute(\'data-dashlet-id\');
            }
            if(typeof(e.currentTarget.getAttribute(\'data-list\'))!=\'undefined\'){
                refreshListID = e.currentTarget.getAttribute(\'data-list\');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute(\'data-module\'), e.currentTarget.getAttribute(\'data-record\'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();

	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
    	YAHOO.util.Event.onContentReady(\'ajaxUI-history-field\', SUGAR.ajaxUI.firstLoad);
</script>
'; ?>

</div>
</body>
</html>