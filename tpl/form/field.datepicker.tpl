{$_utils->includeOnce('js/external/datepicker/datepicker.js')}{$_utils->includeOnce('js/external/datepicker/datepicker_start.js')}<input {include file="form/fieldtitle.tpl"} {assign var='_class' value='datepicker w8em format-y-m-d divider-dash highlight-days-67 text'}{include file="form/fieldclass.tpl"}{assign var='_class' value=''} type="text" name="{$_currentFieldStruct.field->getName()}" value="{$_currentFieldStruct.field->getHTMLValue()}" id="{$_currentFieldStruct.field->getHTMLId($_currentFormId)}" {$_currentFieldStruct.htmlAttributes} />{include file="form/fielderrormessage.tpl"}