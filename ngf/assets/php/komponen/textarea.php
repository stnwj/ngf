<?php
if (!isset($placeholder)) $placeholder = '';
if (!isset($name)) $name = '';
if (!isset($id)) $id = '';
if (!isset($rows)) $rows = 4;
if (!isset($label)) $label = '';
?>
<link rel="stylesheet" href="assets/css/textarea.css" />
<div class="textarea-container">
  <?php if (!empty($label)): ?>
    <label class="textarea-label" for="<?php echo htmlspecialchars($id); ?>">
      <?php echo htmlspecialchars($label); ?>
    </label>
  <?php endif; ?>
  <textarea 
    class="textarea-input" 
    placeholder="<?php echo htmlspecialchars($placeholder); ?>"
    name="<?php echo htmlspecialchars($name); ?>"
    id="<?php echo htmlspecialchars($id); ?>"
    rows="<?php echo htmlspecialchars($rows); ?>"
  ></textarea>
</div> 