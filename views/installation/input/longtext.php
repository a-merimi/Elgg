<?php
/**
 * Elgg long text input
 * Displays a long text input field
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['value'] The current value, if any
 * @uses $vars['js'] Any Javascript to enter into the input tag
 * @uses $vars['name'] The name of the input field
 *
 */

$class = $vars['class'];
if (!$class) {
	$class = "elgg-input-textarea";
}

?>

<textarea class="<?php echo $class; ?>" name="<?php echo $vars['name']; ?>" <?php if ($vars['disabled']) echo ' disabled="yes" '; ?> <?php echo $vars['js']; ?>><?php echo $vars['value']; ?></textarea>