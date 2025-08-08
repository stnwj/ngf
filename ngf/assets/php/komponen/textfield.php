<?php
if (!isset($placeholder)) $placeholder = '';
if (!isset($name)) $name = '';
if (!isset($id)) $id = '';
?>
<link rel="stylesheet" href="assets/css/textfield.css" />
<div class="textfield-container">
  <input 
    type="text" 
    class="textfield-input" 
    placeholder="<?php echo htmlspecialchars($placeholder); ?>"
    name="<?php echo htmlspecialchars($name); ?>"
    id="<?php echo htmlspecialchars($id); ?>"
  />
</div> 