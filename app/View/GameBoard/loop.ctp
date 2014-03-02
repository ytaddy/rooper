<p><?php echo $player_id; ?></p>
<form action="rooper/GameBoard/loop" method="post">
<input type="hidden" value="<?php echo $player_id; ?>">
<input type="hidden" value="<?php echo $check_key; ?>">
<input type="submit" value="更新">
</form>