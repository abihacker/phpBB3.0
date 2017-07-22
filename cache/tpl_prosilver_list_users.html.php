<?php if (!defined('IN_PHPBB')) exit; $_row_count = (isset($this->_tpldata['row'])) ? sizeof($this->_tpldata['row']) : 0;if ($_row_count) {for ($_row_i = 0; $_row_i < $_row_count; ++$_row_i){$_row_val = &$this->_tpldata['row'][$_row_i]; ?>
<?php echo $_row_val['USERNAME']; ?><br />
<?php }} ?>