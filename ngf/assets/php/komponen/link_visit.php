<?php
if (!isset($visitText)) $visitText = '';
if (!isset($visitHref)) $visitHref = '#';
?>
<link rel="stylesheet" href="assets/css/link-visit.css" />
<a class="link-visit" href="<?php echo htmlspecialchars($visitHref); ?>" target="_blank">
  <span class="link-visit-text"><?php echo htmlspecialchars($visitText); ?></span>
  <img src="assets/images/ic_send.svg" alt="visit" class="link-visit-icon" />
</a> 