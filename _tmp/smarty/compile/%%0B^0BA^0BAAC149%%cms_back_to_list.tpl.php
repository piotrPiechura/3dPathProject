<?php /* Smarty version 2.6.20, created on 2015-10-14 13:59:17
         compiled from common/cms_back_to_list.tpl */ ?>
<a class="return" href="<?php if (! empty ( $this->_tpl_vars['listPageAddress'] )): ?><?php echo $this->_tpl_vars['listPageAddress']; ?>
<?php else: ?><?php echo $this->_tpl_vars['url']->createHTML('_m',$this->_tpl_vars['controllerModule'],'_o','CMSList'); ?>
<?php endif; ?>"><?php echo $this->_config[0]['vars']['back']; ?>
</a>