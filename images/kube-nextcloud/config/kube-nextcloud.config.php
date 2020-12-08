<?php
// kube-nextcloud optimized options
$CONFIG = array (
  // Send logs to PHP then finally to stderr
  'log_type' => 'errorlog',
  // Kubernetes users may mount configuration files from ConfigMap.
  'config_is_read_only' => true,
  // Don't check data directory permissions for Kubernetes PVs
  'check_data_directory_permissions' => false,
);
