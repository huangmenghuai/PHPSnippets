<?php
// Check that formats are defined.
if (empty($enabled_methods[$method]['supported_formats']) || !is_array($enabled_methods[$method]['supported_formats'])) {
  watchdog('rest', 'At least one format must be defined for resource @id', array(':id' => $id), WATCHDOG_ERROR);
  continue;
}