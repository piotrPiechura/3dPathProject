<?php /* Smarty version 2.6.20, created on 2015-10-14 13:59:17
         compiled from admincmsedit.tpl */ ?>
<div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/cms_bradcrumbs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold"><?php echo $this->_config[0]['vars']['subpageTitle']; ?>
</span></h3>
      </div>
	  <!-- BEGIN BASIC FORM ELEMENTS-->
        <div class="row">
            <div class="col-md-12">
        <?php echo $this->_tpl_vars['_form']->start($this->_tpl_vars['mainForm'],'mainForm',1); ?>


			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/cms_messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div class="grid simple">
                                                <div class="grid-body no-border"> <br>
                          <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8">
			<?php if ($this->_tpl_vars['mainForm']->hasField('adminName')): ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminNameFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminName',null,'maxlength="40"'); ?>

                            </div>
                        </div>
			<?php else: ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminNameFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <input type="text" value="<?php echo $this->_tpl_vars['recordOldValues']['adminName']; ?>
" disabled="disabled" />
                            </div>
                        </div>
			<?php endif; ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminPasswordFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminPassword',null,'maxlength="40"'); ?>

                            </div>
                        </div>
			<div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminPasswordConfirmFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminPasswordConfirm',null,'maxlength="40"'); ?>

                            </div>
                        </div>
			<?php if ($this->_tpl_vars['mainForm']->hasField('adminFirstName')): ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminFirstNameFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminFirstName',null,'maxlength="80"'); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminSurnameFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminSurname',null,'maxlength="80"'); ?>

                            </div>
                        </div>
			
			<?php endif; ?>
			<?php if ($this->_tpl_vars['mainForm']->hasField('adminRole')): ?>
                         <div class="form-group">
                            <label class="form-label"><?php echo $this->_config[0]['vars']['adminRoleFieldCaption']; ?>
</label>
                            <span class="help"></span>
                            <div class="controls">
                              <?php echo $this->_tpl_vars['_form']->field('adminRole','selectsmartyconfig'); ?>

                            </div>
                        </div>
			
			<?php endif; ?>	
                        <div class="form-group">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/cms_action_buttons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
	</div>
<?php echo $this->_tpl_vars['_form']->end(); ?>


            </div>
        </div>
     </div>