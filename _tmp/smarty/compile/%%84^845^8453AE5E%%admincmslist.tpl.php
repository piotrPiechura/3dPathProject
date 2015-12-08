<?php /* Smarty version 2.6.20, created on 2015-10-14 13:59:26
         compiled from admincmslist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'admincmslist.tpl', 32, false),)), $this); ?>
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
            <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><span class="semi-bold"><?php echo $this->_config[0]['vars']['subpageTitle']; ?>
</span></h3>
      </div>
	  <!-- BEGIN BASIC FORM ELEMENTS-->
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
                <?php if (empty ( $this->_tpl_vars['_recordList'] )): ?><?php $this->assign('_recordList', $this->_tpl_vars['recordList']); ?><?php endif; ?>
                <?php if (empty ( $this->_tpl_vars['_shownColumns'] )): ?><?php $this->assign('_shownColumns', $this->_tpl_vars['shownColumns']); ?><?php endif; ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/cms_messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo $this->_tpl_vars['_form']->start($this->_tpl_vars['filterForm'],'filterForm'); ?>

              <table class="table table-hover table-condensed" id="example">
                <?php if ($this->_tpl_vars['superadmin']): ?>
			<tr class="search_box">
                            <td></td>
				<?php $_from = $this->_tpl_vars['_shownColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_colName'] => $this->_tpl_vars['_params']):
?>
				<?php $this->assign('_description', ((is_array($_tmp=$this->_tpl_vars['_colName'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'TableHeader') : smarty_modifier_cat($_tmp, 'TableHeader'))); ?>
				<td class="search_element">
					<span class="label_grey"><?php echo $this->_config[0]['vars'][$this->_tpl_vars['_description']]; ?>
</span>
						<?php echo $this->_tpl_vars['_form']->field($this->_tpl_vars['_colName']); ?>

				</td>
				<?php endforeach; endif; unset($_from); ?>
				  <td>
										<input class="btn btn-white btn-cons" type="submit" value="Filter"  alt="filter"/>
                                        <?php if (empty ( $this->_tpl_vars['addButtonOff'] )): ?>
                                            <?php if (empty ( $this->_tpl_vars['_addButtonUrl'] )): ?><?php $this->assign('_addButtonUrl', $this->_tpl_vars['url']->createHTML('_m',$this->_tpl_vars['controllerModule'],'_o','CMSEdit')); ?><?php endif; ?>
                                            <a class="btn btn-primary btn-cons" href="<?php echo $this->_tpl_vars['_addButtonUrl']; ?>
" ><?php echo $this->_config[0]['vars']['addRecord']; ?>
</a>
                                            <?php endif; ?>
				</td>
			</tr>
			<?php endif; ?>
				<?php if (! empty ( $this->_tpl_vars['_recordList'] )): ?>
				<?php $_from = $this->_tpl_vars['_recordList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_record']):
?>
				<tr>
                                        <td >    
					<?php if (! empty ( $this->_tpl_vars['highlight'] )): ?>
						<?php $this->assign('_highlightValue', $this->_tpl_vars['highlight']->getValue($this->_tpl_vars['_record'])); ?>
						                                                <?php if ($this->_tpl_vars['_highlightValue'] == 10): ?><?php elseif ($this->_tpl_vars['_highlightValue'] == 20): ?><?php elseif ($this->_tpl_vars['_highlightValue'] == 40): ?><span class="label label-success">ACTIVE</span><?php else: ?><span class="label label-important">BLOCKED</span><?php endif; ?>
					<?php endif; ?>
                                        </td>
					<?php $_from = $this->_tpl_vars['_shownColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_colName'] => $this->_tpl_vars['_params']):
?>
					<td><?php if ($this->_tpl_vars['_record'][$this->_tpl_vars['_colName']] == ''): ?>&nbsp;<?php else: ?><?php echo $this->_tpl_vars['_record'][$this->_tpl_vars['_colName']]; ?>
<?php endif; ?></td>
					<?php endforeach; endif; unset($_from); ?>
					<td class="last_table_column"><a class="edit" href="<?php echo $this->_tpl_vars['url']->createHTML('_m',$this->_tpl_vars['controllerModule'],'_o','CMSEdit','id',$this->_tpl_vars['_record']['id']); ?>
"><?php echo $this->_config[0]['vars']['editLinkCaption']; ?>
</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</tbody></table>
		<?php echo $this->_tpl_vars['_form']->end(); ?>

		<?php if (! empty ( $this->_tpl_vars['_recordList'] )): ?>
					<?php else: ?>
			<p class="emptyList"><?php echo $this->_config[0]['vars']['noRecords']; ?>
</p>
		<?php endif; ?>
            </div>
          </div>
        </div>
      </div>    
    </div>      