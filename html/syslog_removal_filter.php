	<tr bgcolor="<?php print $colors["panel"];?>">
		<form name="removal">
		<td>
			<table cellpadding="1" cellspacing="0">
				<tr>
					<td width="70">
						Enabled:&nbsp;
					</td>
					<td width="1">
						<select name="enabled" onChange="applyChange(document.removal)">
						<option value="-1"<?php if ($_REQUEST["enabled"] == "-1") {?> selected<?php }?>>All</option>
						<option value="1"<?php if ($_REQUEST["enabled"] == "1") {?> selected<?php }?>>Yes</option>
						<option value="0"<?php if ($_REQUEST["enabled"] == "0") {?> selected<?php }?>>No</option>
						</select>
					</td>
					<td width="55">
						&nbsp;Records:&nbsp;
					</td>
					<td width="1">
						<select name="rows_selector" onChange="applyChange(document.removal)">
						<?php
							if (sizeof($item_rows) > 0) {
							foreach ($item_rows as $key => $value) {
								print '<option value="' . $key . '"'; if ($_REQUEST["rows_selector"] == $key) { print " selected"; } print ">" . $value . "</option>\n";
							}
							}
						?>
						</select>
					</td>
					<td>
						&nbsp;<input type="image" src="<?php echo $config['url_path']; ?>images/button_go.gif" alt="Go" border="0" align="absmiddle">
					</td>
					<td>
						&nbsp;<input type="image" src="<?php echo $config['url_path']; ?>images/button_clear.gif" name="clear" alt="Clear" border="0" align="absmiddle">
					</td>
				</tr>
			</table>
			<table cellpadding="1" cellspacing="0">
				<tr>
					<td width="70">
						Search:&nbsp;
					</td>
					<td width="1">
						<input type="text" name="filter" size="30" value="<?php print $_REQUEST["filter"];?>">
					</td>
				</tr>
			</table>
		</td>
		</form>
	</tr>