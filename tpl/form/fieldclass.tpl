{if !isset($_class)}{assign var='_class' value=''}{/if}{assign var='_class' value=$_class|cat:' '|cat:$_currentFieldStruct.htmlClass}{if $_currentFieldStruct.showErrors && !empty($formErrorMessages)}{if $formErrorMessages->isBadField($_currentFieldStruct.field->getName())}{assign var='_class' value=$_class|cat:" errorBadField"}{elseif $formErrorMessages->isAffectedField($_currentFieldStruct.field->getName())}{assign var='_class' value=$_class|cat:" errorAffectedField"}{/if}{/if}{if $_class}class="{$_class}"{/if}