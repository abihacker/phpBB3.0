<?php if (!defined('IN_PHPBB')) exit; $_bloc_count = (isset($this->_tpldata['bloc'])) ? sizeof($this->_tpldata['bloc']) : 0;if ($_bloc_count) {for ($_bloc_i = 0; $_bloc_i < $_bloc_count; ++$_bloc_i){$_bloc_val = &$this->_tpldata['bloc'][$_bloc_i]; ?>
<table width="100%" border="1">
<tr>
	<th bgcolor="cyan"><?php echo $_bloc_val['TITLE']; ?></th>
</tr>
<tr>
	<td><?php echo $_bloc_val['CONTENT']; ?></td>
</tr>
</table>
<?php }} ?>