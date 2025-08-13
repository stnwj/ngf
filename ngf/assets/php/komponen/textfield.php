<?php
if (!isset($placeholder)) $placeholder = '';
if (!isset($name)) $name = '';
if (!isset($id)) $id = '';
if (!isset($label)) $label = '';
?>
<link rel="stylesheet" href="assets/css/textfield.css" />
<div class="textfield-container">
  <?php if (!empty($label)): ?>
    <label class="textfield-label" for="<?php echo htmlspecialchars($id); ?>">
      <?php echo htmlspecialchars($label); ?>
    </label>
  <?php endif; ?>
  <input 
    type="text" 
    class="textfield-input" 
    placeholder="<?php echo htmlspecialchars($placeholder); ?>"
    name="<?php echo htmlspecialchars($name); ?>"
    id="<?php echo htmlspecialchars($id); ?>"
  />
</div> 