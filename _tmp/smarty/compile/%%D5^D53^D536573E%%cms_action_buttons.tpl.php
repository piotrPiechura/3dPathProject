<?php /* Smarty version 2.6.20, created on 2015-10-14 13:59:17
         compiled from common/cms_action_buttons.tpl */ ?>
<div class="adminAction <?php if (! empty ( $this->_tpl_vars['_firstAction'] ) && $this->_tpl_vars['_firstAction'] == 'Save'): ?>adminActionWithSave<?php else: ?>adminActionWithoutSave<?php endif; ?>">
	<?php if ($this->_tpl_vars['mainForm']->hasField('_action')): ?>
		<?php $this->assign('_actionField', $this->_tpl_vars['mainForm']->getField('_action')); ?>
		<?php $this->assign('_actions', $this->_tpl_vars['_actionField']->getActions()); ?>
		<?php $this->assign('_firstAction', $this->_tpl_vars['_actions'][0]); ?>
                
		<?php echo $this->_tpl_vars['_form']->field('_action',null,null,"btn btn-cons"); ?>

	<?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/cms_back_to_list.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
