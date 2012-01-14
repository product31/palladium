<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'CApVW5dt2f';
$options['db_name'] = 'nodestreamdev';
$options['db_user'] = 'nodestreamdev';
$options['site_ip_addresses'] = array (
);
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.10',
      'description' => 'This platform is running Drupal 7.10',
    ),
  ),
  'profiles' => 
  array (
    'nodestream' => 
    array (
      'name' => 'nodestream',
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/nodestream.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'NodeStream',
        'description' => 'Default installation profile for NodeStream.',
        'core' => '7.x',
        'theme' => 'bartik',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'uuid_node',
          2 => 'uuid_user',
          3 => 'uuid_role',
          4 => 'entitycache',
          5 => 'nodestream',
          6 => 'libraries',
          7 => 'features',
          8 => 'ns_core',
        ),
        'nodestream_recommended' => 
        array (
          0 => 'menu',
          1 => 'admin_menu',
          2 => 'admin_menu_toolbar',
          3 => 'dblog',
          4 => 'help',
          5 => 'ns_roles',
          6 => 'defaultconfig',
          7 => 'menu',
          8 => 'taxonomy',
          9 => 'uuid_taxonomy',
          10 => 'taxonomy_menu_form',
        ),
        'version' => NULL,
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'version' => '7.10',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aaa_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'files' => 
        array (
          0 => 'admin_devel.module',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'configure' => 'admin/config/administration/admin_menu',
        'version' => '7.x-3.x-dev',
        'core' => '7.x',
        'project' => 'admin_menu',
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.x-dev',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'files' => 
        array (
          0 => 'admin_menu_toolbar.module',
          1 => 'admin_menu_toolbar.install',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_views' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/admin_menu/admin_views/admin_views.module',
      'name' => 'admin_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration views',
        'description' => 'Replaces all system object management pages in Drupal core with real views.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations',
        ),
        'files' => 
        array (
          0 => 'admin_views.module',
          1 => 'plugins/views_plugin_display_system.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ajax_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'batch_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'block_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'cache_actions' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/cache_actions/cache_actions.module',
      'name' => 'cache_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cache Actions',
        'description' => 'This module gives you the ability to clear drupal caches with rules actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'plugins/views/cache_actions_plugin_cache_rules.inc',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'cache_actions',
        'datestamp' => '1313762214',
        'php' => '5.2.4',
      ),
      'project' => 'cache_actions',
      'version' => '7.x-2.0-alpha3',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'coder' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/coder/coder.module',
      'name' => 'coder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coder',
        'description' => 'Developer Module that assists with code review and version upgrade',
        'package' => 'Development',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'coder.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'coder',
        'datestamp' => '1313611616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'coder',
      'version' => '7.x-1.0',
    ),
    'coder_review' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/coder/coder_review/coder_review.module',
      'name' => 'coder_review',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coder Review',
        'description' => 'Developer module which reviews your code identifying coding style problems and where updates to the API are required.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'coder',
        ),
        'files' => 
        array (
          0 => 'tests/coder_review_test_case.tinc',
          1 => 'tests/coder_review_6x.test',
          2 => 'tests/coder_review_7x.test',
          3 => 'tests/coder_review_comment.test',
          4 => 'tests/coder_review_i18n.test',
          5 => 'tests/coder_review_security.test',
          6 => 'tests/coder_review_sql.test',
          7 => 'tests/coder_review_style.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'coder',
        'datestamp' => '1313611616',
        'php' => '5.2.4',
      ),
      'project' => 'coder',
      'version' => '7.x-1.0',
    ),
    'coder_review_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/coder/coder_review/tests/coder_review_test/coder_review_test.module',
      'name' => 'coder_review_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coder Review Test',
        'package' => 'Coder',
        'core' => '7.x',
        'hidden' => true,
        'files' => 
        array (
          0 => 'coder_review_test.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'coder',
        'datestamp' => '1313611616',
        'dependencies' => 
        array (
        ),
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'coder',
      'version' => '7.x-1.0',
    ),
    'coder_upgrade' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/coder/coder_upgrade/coder_upgrade.module',
      'name' => 'coder_upgrade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coder Upgrade',
        'description' => 'Module conversion suite -- generates code to assist with the upgrade of
               contributed 6.x modules to version 7.x modules.
               WARNING: Use only on contributed modules.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'gplib',
        ),
        'files' => 
        array (
          0 => 'coder_upgrade.test',
        ),
        'configure' => 'admin/config/development/coder/upgrade/settings',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'coder',
        'datestamp' => '1313611616',
        'php' => '5.2.4',
      ),
      'project' => 'coder',
      'version' => '7.x-1.0',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'common_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'crossclone' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/crossclone/crossclone.module',
      'name' => 'crossclone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cross Clone',
        'description' => 'This module let\'s you clone and couple nodes in different ways and between different node types.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/crossclone_views_handler_field_node_clone.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'crossclone',
        'datestamp' => '1322230238',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'crossclone',
      'version' => '7.x-1.0-alpha2',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools_plugin_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/tests/ctools_plugin_test.module',
      'name' => 'ctools_plugin_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools plugins test',
        'description' => 'Provides hooks for testing ctools plugins.',
        'package' => 'Chaos tool suite',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'ctools.plugins.test',
          1 => 'object_cache.test',
        ),
        'hidden' => true,
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.10',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'database_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'defaultconfig' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/defaultconfig/defaultconfig.module',
      'name' => 'defaultconfig',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Default config',
        'description' => 'Use features as default configuration without having to deal with overriden features.',
        'core' => '7.x',
        'package' => 'configuration',
        'dependencies' => 
        array (
          0 => 'features',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'diff' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/diff/diff.module',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Diff',
        'description' => 'Show difference between node revisions.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'DiffEngine.php',
        ),
        'version' => '7.x-2.0',
        'project' => 'diff',
        'datestamp' => '1311239815',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'diff',
      'version' => '7.x-2.0',
    ),
    'draggableviews' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/draggableviews/draggableviews.module',
      'name' => 'draggableviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews',
        'description' => 'Makes Views draggable',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'draggableviews-view-draggabletable-form.tpl.php',
          1 => 'draggableviews-view-draggabletable.tpl.php',
          2 => 'draggableviews.inc',
          3 => 'draggableviews.install',
          4 => 'draggableviews.module',
          5 => 'draggableviews_theme.inc',
          6 => 'implementations/draggableviews_handler.inc',
          7 => 'implementations/draggableviews_handler_native.inc',
          8 => 'views/draggableviews.views.inc',
          9 => 'views/draggableviews_plugin_style_draggabletable.inc',
          10 => 'handlers/views_handler_field_draggableviews_structure.inc',
          11 => 'handlers/views_handler_sort_draggableviews_structure.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'draggableviews_tests' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/draggableviews/draggableviews_tests/draggableviews_tests.module',
      'name' => 'draggableviews_tests',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews Tests',
        'description' => 'Automated testing of draggableviews module',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'selenium',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'draggableviews_tests.module',
          1 => 'draggableviews_tests.test',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'dynamic_formatters' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/dynamic_formatters/dynamic_formatters.module',
      'name' => 'dynamic_formatters',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dynamic Formatters',
        'description' => 'Provides a view style plugin which lets you use dynamic formatters.',
        'core' => '7.x',
        'package' => 'Dynamic Formatters',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'plugins/dynamic_formatters_renderer/dynamic_formatters_renderer.inc',
          1 => 'plugins/dynamic_formatters_renderer/dynamic_formatters_renderer_pane.inc',
          2 => 'views/plugins/dynamic_formatters_plugin_style.inc',
          3 => 'views/plugins/dynamic_formatters_plugin_row.inc',
        ),
        'version' => '7.x-2.0-alpha2',
        'project' => 'dynamic_formatters',
        'datestamp' => '1322241940',
        'php' => '5.2.4',
      ),
      'project' => 'dynamic_formatters',
      'version' => '7.x-2.0-alpha2',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.info.inc',
          2 => 'entity.rules.inc',
          3 => 'entity.test',
          4 => 'includes/entity.inc',
          5 => 'includes/entity.controller.inc',
          6 => 'includes/entity.ui.inc',
          7 => 'includes/entity.wrapper.inc',
          8 => 'views/entity.views.inc',
          9 => 'views/handlers/entity_views_field_handler_helper.inc',
          10 => 'views/handlers/entity_views_handler_field_boolean.inc',
          11 => 'views/handlers/entity_views_handler_field_date.inc',
          12 => 'views/handlers/entity_views_handler_field_duration.inc',
          13 => 'views/handlers/entity_views_handler_field_entity.inc',
          14 => 'views/handlers/entity_views_handler_field_field.inc',
          15 => 'views/handlers/entity_views_handler_field_numeric.inc',
          16 => 'views/handlers/entity_views_handler_field_options.inc',
          17 => 'views/handlers/entity_views_handler_field_text.inc',
          18 => 'views/handlers/entity_views_handler_field_uri.inc',
          19 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          20 => 'views/handlers/entity_views_handler_relationship.inc',
          21 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'entity',
        'datestamp' => '1320914735',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'entitycache' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entitycache/entitycache.module',
      'name' => 'entitycache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache',
        'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'entitycache.module',
          1 => 'entitycache.comment.inc',
          2 => 'entitycache.taxonomy.inc',
          3 => 'entitycache.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entitycache',
        'datestamp' => '1315901203',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entitycache',
      'version' => '7.x-1.1',
    ),
    'entityreference' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'entityreference.handler.inc',
          2 => 'handler/base.inc',
          3 => 'tests/entityreference.handlers.test',
        ),
        'version' => '7.x-1.0-beta2',
        'project' => 'entityreference',
        'datestamp' => '1322214940',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.0-beta2',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_feature' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entity/tests/entity_feature.module',
      'name' => 'entity_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity feature module',
        'description' => 'Provides some entities in code.',
        'version' => '7.x-1.0-rc1',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_feature.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity_test',
        ),
        'hidden' => true,
        'project' => 'entity',
        'datestamp' => '1320914735',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'entity_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entity/tests/entity_test.module',
      'name' => 'entity_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD test module',
        'description' => 'Provides entity types based upon the CRUD API.',
        'version' => '7.x-1.0-rc1',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_test.module',
          1 => 'entity_test.install',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'hidden' => true,
        'project' => 'entity',
        'datestamp' => '1320914735',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'entity',
        'datestamp' => '1320914735',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'error_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'features',
        'datestamp' => '1316565919',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'features',
      'version' => '7.x-1.0-beta4',
    ),
    'features_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'strongarm',
          3 => 'views',
        ),
        'description' => 'Test module for Features testing.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'field' => 
          array (
            0 => 'node-features_test-field_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'image' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views_view' => 
          array (
            0 => 'features_test',
          ),
        ),
        'hidden' => true,
        'name' => 'Features Tests',
        'package' => 'Testing',
        'php' => '5.2.0',
        'version' => '7.x-1.0-beta4',
        'project' => 'features',
        'datestamp' => '1316565919',
      ),
      'project' => 'features',
      'version' => '7.x-1.0-beta4',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_group' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Fieldgroup',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_group.install',
          1 => 'field_group.module',
          2 => 'field_group.field_ui.inc',
          3 => 'field_group.form.inc',
          4 => 'field_group.features.inc',
          5 => 'field_group.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'field_group',
        'datestamp' => '1319051133',
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.1',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file_entity' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/file_entity/file_entity.module',
      'name' => 'file_entity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File entity',
        'description' => 'Extends Drupal file entities to be fieldable and viewable.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'file',
          2 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'views/views_handler_argument_file_type.inc',
          1 => 'views/views_handler_field_file_type.inc',
          2 => 'views/views_handler_filter_file_type.inc',
          3 => 'views/views_plugin_row_file_view.inc',
          4 => 'tests/file_entity.test',
        ),
        'version' => '7.x-2.0-unstable2',
        'project' => 'file_entity',
        'datestamp' => '1318435604',
        'php' => '5.2.4',
      ),
      'project' => 'file_entity',
      'version' => '7.x-2.0-unstable2',
    ),
    'file_entity_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/file_entity/tests/file_entity_test.module',
      'name' => 'file_entity_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Entity Test',
        'description' => 'Support module for File Entity tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file_entity',
        ),
        'hidden' => true,
        'version' => '7.x-2.0-unstable2',
        'project' => 'file_entity',
        'datestamp' => '1318435604',
        'php' => '5.2.4',
      ),
      'project' => 'file_entity',
      'version' => '7.x-2.0-unstable2',
    ),
    'file_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'filter_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'flag' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on content.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'files' => 
        array (
          0 => 'flag.inc',
          1 => 'flag.rules.inc',
          2 => 'includes/flag_handler_argument_content_id.inc',
          3 => 'includes/flag_handler_field_ops.inc',
          4 => 'includes/flag_handler_filter_flagged.inc',
          5 => 'includes/flag_handler_relationships.inc',
          6 => 'includes/flag_plugin_argument_validate_flaggability.inc',
          7 => 'tests/flag.test',
        ),
        'version' => '7.x-2.0-beta6',
        'project' => 'flag',
        'datestamp' => '1315511522',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-2.0-beta6',
    ),
    'flag_actions' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/webform/flags',
        'files' => 
        array (
          0 => 'flag.install',
          1 => 'flag_actions.module',
        ),
        'version' => '7.x-2.0-beta6',
        'project' => 'flag',
        'datestamp' => '1315511522',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-2.0-beta6',
    ),
    'form_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version dependent and shared usage of external libraries.',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'libraries',
        'datestamp' => '1296096156',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-1.0',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.install',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.validate.test',
          8 => 'views/link_views_handler_argument_target.inc',
          9 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'link',
        'datestamp' => '1319392535',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'link',
      'version' => '7.x-1.0',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'list_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'locale_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'media' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/media/media.module',
      'name' => 'media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media',
        'description' => 'Provides the core Media API',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file_entity (>1.99)',
          1 => 'image',
          2 => 'views',
        ),
        'files' => 
        array (
          0 => 'includes/MediaReadOnlyStreamWrapper.inc',
          1 => 'includes/media.browser.inc',
          2 => 'includes/MediaBrowserLibrary.inc',
          3 => 'includes/MediaBrowserUpload.inc',
          4 => 'includes/MediaBrowserView.inc',
          5 => 'includes/media_views_plugin_display_media_browser.inc',
          6 => 'includes/media_views_plugin_style_media_browser.inc',
          7 => 'tests/media.test',
          8 => 'tests/media.types.test',
          9 => 'tests/media.entity.test',
        ),
        'testing_api' => '2.x',
        'version' => '7.x-2.0-unstable2',
        'project' => 'media',
        'datestamp' => '1318435308',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-2.0-unstable2',
    ),
    'mediafield' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/media/modules/mediafield/mediafield.module',
      'name' => 'mediafield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Field',
        'description' => 'Provides a field type that stores media-specific data. (deprecated)',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'version' => '7.x-2.0-unstable2',
        'project' => 'media',
        'datestamp' => '1318435308',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-2.0-unstable2',
    ),
    'media_internet' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/media/modules/media_internet/media_internet.module',
      'name' => 'media_internet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Internet Sources',
        'description' => 'Provides an API for accessing media on various internet services',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'files' => 
        array (
          0 => 'media_internet.module',
        ),
        'version' => '7.x-2.0-unstable2',
        'project' => 'media',
        'datestamp' => '1318435308',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-2.0-unstable2',
    ),
    'media_youtube' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/media_youtube/media_youtube.module',
      'name' => 'media_youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: YouTube',
        'description' => 'Provides YouTube support to the Media module.',
        'package' => 'Media',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'media_youtube.module',
          1 => 'includes/MediaInternetYouTubeHandler.inc',
          2 => 'includes/MediaYouTubeStreamWrapper.inc',
          3 => 'includes/MediaYouTubeStyles.inc',
          4 => 'includes/media_youtube.formatters.inc',
          5 => 'includes/media_youtube.styles.inc',
          6 => 'includes/media_youtube.variables.inc',
        ),
        'dependencies' => 
        array (
          0 => 'media_internet',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'menu_block' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'files' => 
        array (
          0 => 'menu_block.module',
          1 => 'menu_block.admin.inc',
          2 => 'menu_block.book.inc',
          3 => 'menu_block.follow.inc',
          4 => 'menu_block.pages.inc',
          5 => 'menu_block.sort.inc',
          6 => 'menu_block.install',
        ),
        '# files' => 
        array (
          0 => 'plugins/content_types/menu_tree/menu_tree.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu_block_export' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/menu_block/menu_block_export.module',
      'name' => 'menu_block_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block Export',
        'description' => 'Provides export interface for Menu block module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu_block',
        ),
        'files' => 
        array (
          0 => 'menu_block_export.module',
          1 => 'menu_block_export.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block/export',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'module_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'nodestream' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/nodestream.profile',
      'name' => 'nodestream',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'NodeStream',
        'description' => 'Default installation profile for NodeStream.',
        'core' => '7.x',
        'theme' => 'bartik',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'uuid_node',
          2 => 'uuid_user',
          3 => 'uuid_role',
          4 => 'entitycache',
          5 => 'nodestream',
          6 => 'libraries',
          7 => 'features',
          8 => 'ns_core',
        ),
        'nodestream_recommended' => 
        array (
          0 => 'menu',
          1 => 'admin_menu',
          2 => 'admin_menu_toolbar',
          3 => 'dblog',
          4 => 'help',
          5 => 'ns_roles',
          6 => 'defaultconfig',
          7 => 'menu',
          8 => 'taxonomy',
          9 => 'uuid_taxonomy',
          10 => 'taxonomy_menu_form',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node_reference' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/references/node_reference/node_reference.module',
      'name' => 'node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'node_reference.test',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ns_ad' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_ad/ns_ad.module',
      'name' => 'ns_ad',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'link',
          3 => 'media',
          4 => 'strongarm',
          5 => 'taxonomy',
          6 => 'defaultconfig',
        ),
        'description' => 'A very basic system for handling advertisements.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'ns_ad',
          ),
        ),
        'name' => 'Advertisements',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_article' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_article/ns_article.module',
      'name' => 'ns_article',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'file',
          3 => 'image',
          4 => 'list',
          5 => 'media',
          6 => 'node_reference',
          7 => 'ns_contributor',
          8 => 'ns_core',
          9 => 'ns_media',
          10 => 'number',
          11 => 'options',
          12 => 'references_dialog',
          13 => 'strongarm',
          14 => 'views',
          15 => 'defaultconfig',
        ),
        'description' => 'This feature provides an extendable article content type with support for revisions.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'field_group' => 
          array (
            0 => 'group_ns_article_attach|node|ns_article|form',
            1 => 'group_ns_article_byline|node|ns_article|form',
            2 => 'group_ns_article_category|node|ns_article|form',
            3 => 'group_ns_article_media|node|ns_article|form',
          ),
          'node' => 
          array (
            0 => 'ns_article',
          ),
          'views_view' => 
          array (
            0 => 'ns_article_reference_search',
          ),
        ),
        'name' => 'Articles',
        'nodestream_recommended' => 
        array (
          0 => 'ns_text',
        ),
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_article_comment' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_article_comment/ns_article_comment.module',
      'name' => 'ns_article_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'comment',
          1 => 'features',
          2 => 'strongarm',
          3 => 'uuid_comment',
          4 => 'defaultconfig',
        ),
        'description' => 'Enables comments for articles using the standard Drupal comments system.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
        ),
        'name' => 'Article Comments',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_blog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_blog/ns_blog.module',
      'name' => 'ns_blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'file_entity',
          3 => 'image',
          4 => 'list',
          5 => 'media',
          6 => 'node_reference',
          7 => 'ns_contributor',
          8 => 'ns_core',
          9 => 'ns_media',
          10 => 'number',
          11 => 'options',
          12 => 'references_dialog',
          13 => 'strongarm',
          14 => 'views',
        ),
        'description' => 'The blog feature allows your users to create multiple blogs in which blog posts can be posted.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'image' => 
          array (
            0 => 'ns_latest_blog_post_header',
          ),
          'node' => 
          array (
            0 => 'ns_blog',
            1 => 'ns_blog_post',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_ns_blog',
            1 => 'comment_default_mode_ns_blog',
            2 => 'comment_default_per_page_ns_blog',
            3 => 'comment_form_location_ns_blog',
            4 => 'comment_ns_blog',
            5 => 'comment_preview_ns_blog',
            6 => 'comment_subject_field_ns_blog',
            7 => 'language_content_type_ns_blog',
            8 => 'menu_options_ns_blog',
            9 => 'menu_options_ns_blog_post',
            10 => 'menu_parent_ns_blog',
            11 => 'menu_parent_ns_blog_post',
            12 => 'node_options_ns_blog',
            13 => 'node_options_ns_blog_post',
            14 => 'node_submitted_ns_blog',
            15 => 'node_submitted_ns_blog_post',
            16 => 'language_content_type_ns_blog_post',
          ),
          'views_view' => 
          array (
            0 => 'ns_blog_reference_search',
          ),
        ),
        'name' => 'Blog',
        'nodestream_recommended' => 'ns_text',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_blog_comment' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_blog_comment/ns_blog_comment.module',
      'name' => 'ns_blog_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'comment',
          1 => 'features',
          2 => 'ns_blog',
          3 => 'strongarm',
          4 => 'uuid_comment',
          5 => 'defaultconfig',
        ),
        'description' => 'Enables comments for blog posts using the standard Drupal comments system.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
        ),
        'name' => 'Blog Comments',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_ch_blog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_ch_blog/ns_ch_blog.module',
      'name' => 'ns_ch_blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'cache_actions',
          2 => 'ctools',
          3 => 'image',
          4 => 'menu_block',
          5 => 'ns_blog',
          6 => 'ns_core',
          7 => 'page_manager',
          8 => 'panels',
          9 => 'panels_everywhere',
          10 => 'panels_mini',
          11 => 'views',
          12 => 'views_content',
        ),
        'description' => 'A simple multi-user blog.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'panels_mini:panels_default:1',
            2 => 'views:views_default:3.0',
          ),
          'image' => 
          array (
            0 => 'ns_blog_preview',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'ns_ch_blog_blog',
            1 => 'ns_ch_blog_blog_post',
            2 => 'ns_ch_blog_site_template',
          ),
          'page_manager_pages' => 
          array (
            0 => 'ns_ch_blog_blog',
          ),
          'panels_mini' => 
          array (
            0 => 'ns_blog_post_blog',
          ),
          'rules_config' => 
          array (
            0 => 'rules_ns_ch_blog_clear_blog',
          ),
          'views_view' => 
          array (
            0 => 'ns_ch_blog_blog',
            1 => 'ns_ch_blog_contributor',
            2 => 'ns_ch_blog_post',
            3 => 'ns_ch_blog_post_contributor',
            4 => 'ns_ch_blog_post_latest',
            5 => 'ns_ch_blog_post_latest_header',
          ),
        ),
        'name' => 'Blog',
        'nodestream_recommended' => 
        array (
          0 => 'ns_text',
        ),
        'nodestream_type' => 'product',
        'package' => 'Products',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_ch_rss' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_ch_rss/ns_ch_rss.module',
      'name' => 'ns_ch_rss',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'crossclone',
          1 => 'ctools',
          2 => 'defaultconfig',
          3 => 'draggableviews',
          4 => 'features',
          5 => 'media',
          6 => 'node_reference',
          7 => 'ns_article',
          8 => 'ns_ch_web',
          9 => 'page_manager',
          10 => 'panels',
          11 => 'rules',
          12 => 'strongarm',
          13 => 'taxonomy',
          14 => 'uuid_taxonomy',
          15 => 'views',
          16 => 'views_content',
          17 => 'views_rss',
        ),
        'description' => 'Publish your articles in different RSS feeds.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'node' => 
          array (
            0 => 'ns_ch_rss_promo',
          ),
          'page_manager_pages' => 
          array (
            0 => 'ns_ch_rss_topic_editor',
            1 => 'ns_ch_rss_topic_list',
          ),
          'rules_config' => 
          array (
            0 => 'rules_ns_ch_rss_create_promo',
          ),
          'taxonomy' => 
          array (
            0 => 'ns_ch_rss_topic',
          ),
          'views_view' => 
          array (
            0 => 'ns_ch_rss_promo_admin_list',
            1 => 'ns_ch_rss_topic',
            2 => 'ns_ch_rss_topic_footer',
          ),
        ),
        'name' => 'RSS Channels',
        'nodestream_type' => 'product',
        'package' => 'Products',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_ch_web' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_ch_web/ns_ch_web.module',
      'name' => 'ns_ch_web',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'cache_actions',
          2 => 'contextual',
          3 => 'crossclone',
          4 => 'ctools',
          5 => 'defaultconfig',
          6 => 'draggableviews',
          7 => 'dynamic_formatters',
          8 => 'features',
          9 => 'file',
          10 => 'media',
          11 => 'menu_block',
          12 => 'node_reference',
          13 => 'ns_article',
          14 => 'ns_core',
          15 => 'ns_styles',
          16 => 'number',
          17 => 'overlay',
          18 => 'page_manager',
          19 => 'panels',
          20 => 'panels_everywhere',
          21 => 'panels_mini',
          22 => 'rules',
          23 => 'strongarm',
          24 => 'taxonomy',
          25 => 'uuid_taxonomy',
          26 => 'views',
          27 => 'views_content',
        ),
        'description' => 'Provides a fully functioning news publishing website',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'dynamic_formatters:dynamic_formatters_default:1',
            1 => 'page_manager:pages_default:1',
            2 => 'panels_mini:panels_default:1',
            3 => 'strongarm:strongarm:1',
            4 => 'views:views_default:3.0',
          ),
          'dynamic_formatters_presets' => 
          array (
            0 => 'ns_ch_web_left_attachment_left_attachment_two_col',
            1 => 'ns_ch_web_left_attachment_top_attachment_two_col',
            2 => 'ns_ch_web_top_attachment_left_attachment_two_col',
            3 => 'ns_ch_web_top_attachment_top_attachment_two_col',
          ),
          'node' => 
          array (
            0 => 'ns_ch_web_promo',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'ns_ch_web_article',
            1 => 'ns_ch_web_article_draft',
            2 => 'ns_ch_web_article_revision',
            3 => 'ns_ch_web_default',
            4 => 'ns_ch_web_site_template',
            5 => 'ns_ch_web_topic',
          ),
          'page_manager_pages' => 
          array (
            0 => 'ns_ch_web_promos',
            1 => 'ns_ch_web_topic_editor',
          ),
          'panels_mini' => 
          array (
            0 => 'ns_ch_web_c_l_a_2_col',
            1 => 'ns_ch_web_c_t_a_2_col',
            2 => 'ns_ch_web_p_l_a',
            3 => 'ns_ch_web_p_t_a',
            4 => 'ns_ch_web_topic_panel',
          ),
          'rules_config' => 
          array (
            0 => 'rules_ns_ch_web_clear_article',
            1 => 'rules_ns_ch_web_clear_article_pub',
            2 => 'rules_ns_ch_web_clear_fact',
            3 => 'rules_ns_ch_web_clear_footer',
            4 => 'rules_ns_ch_web_clear_promo',
            5 => 'rules_ns_ch_web_create_promo',
          ),
          'taxonomy' => 
          array (
            0 => 'ns_ch_web_topic',
            1 => 'ns_ch_web_topic_region',
          ),
          'views_view' => 
          array (
            0 => 'ns_ch_web_ad',
            1 => 'ns_ch_web_article_facts',
            2 => 'ns_ch_web_article_forms',
            3 => 'ns_ch_web_article_polls',
            4 => 'ns_ch_web_article_promos',
            5 => 'ns_ch_web_byline',
            6 => 'ns_ch_web_footer_content',
            7 => 'ns_ch_web_topic',
          ),
        ),
        'name' => 'Web newspaper',
        'nodestream_recommended' => 
        array (
          0 => 'ns_text',
        ),
        'nodestream_type' => 'product',
        'package' => 'Products',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_contributor' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_contributor/ns_contributor.module',
      'name' => 'ns_contributor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'image',
          3 => 'list',
          4 => 'ns_core',
          5 => 'number',
          6 => 'options',
          7 => 'strongarm',
          8 => 'defaultconfig',
          9 => 'user_reference',
        ),
        'description' => 'Adds a contributor content type that lets you describe different contributors on the site',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'ns_contributor',
          ),
        ),
        'name' => 'Contributors',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_core' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/ns_core.module',
      'name' => 'ns_core',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'NodeStream Core',
        'description' => 'A module that wrapps customizations necessary for NodeStream to function properly.',
        'core' => '7.x',
        'package' => 'NodeStream',
        'files' => 
        array (
          0 => 'theme/theme.inc',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_fact' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_fact/ns_fact.module',
      'name' => 'ns_fact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'node_reference',
          3 => 'ns_article',
          4 => 'strongarm',
          5 => 'defaultconfig',
        ),
        'description' => 'Adds the option to attach fact boxes to articles.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
          ),
          'field_group' => 
          array (
            0 => 'group_ns_fact|node|ns_article|form',
          ),
          'node' => 
          array (
            0 => 'ns_fact',
          ),
        ),
        'name' => 'Article fact boxes',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_footer_content' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_footer_content/ns_footer_content.module',
      'name' => 'ns_footer_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'strongarm',
          2 => 'defaultconfig',
        ),
        'description' => 'Provides a simple way of adding footer content.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'ns_footer_content',
          ),
        ),
        'name' => 'Footer content',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_form' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_form/ns_form.module',
      'name' => 'ns_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'node_reference',
          3 => 'ns_article',
          4 => 'strongarm',
          5 => 'webform',
          6 => 'defaultconfig',
        ),
        'description' => 'Adds the option to attach forms to articles',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
          ),
          'field_group' => 
          array (
            0 => 'group_ns_form|node|ns_article|form',
          ),
          'node' => 
          array (
            0 => 'ns_form',
          ),
        ),
        'name' => 'Article Forms',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_media' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_media/ns_media.module',
      'name' => 'ns_media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'defaultconfig',
          1 => 'features',
          2 => 'file',
          3 => 'file_entity',
          4 => 'media',
          5 => 'media_internet',
          6 => 'node_reference',
          7 => 'ns_styles',
          8 => 'references_dialog',
          9 => 'strongarm',
          10 => 'taxonomy',
          11 => 'uuid_file',
          12 => 'views',
        ),
        'description' => 'Handle different kinds of media, like images and videos.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'file_entity:file_default_displays:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'file_display' => 
          array (
            0 => 'image__ns_styles_grid_10__file_image',
            1 => 'image__ns_styles_grid_11__file_image',
            2 => 'image__ns_styles_grid_13__file_image',
            3 => 'image__ns_styles_grid_17__file_image',
            4 => 'image__ns_styles_grid_22__file_image',
            5 => 'image__ns_styles_grid_24__file_image',
            6 => 'image__ns_styles_grid_34__file_image',
            7 => 'image__ns_styles_grid_48__file_image',
            8 => 'image__ns_styles_grid_5__file_image',
            9 => 'image__ns_styles_grid_8__file_image',
            10 => 'video__ns_styles_grid_10__file_image',
            11 => 'video__ns_styles_grid_11__file_image',
            12 => 'video__ns_styles_grid_13__file_image',
            13 => 'video__ns_styles_grid_17__file_image',
            14 => 'video__ns_styles_grid_22__media_youtube_video',
            15 => 'video__ns_styles_grid_24__media_youtube_video',
            16 => 'video__ns_styles_grid_34__media_youtube_video',
            17 => 'video__ns_styles_grid_48__media_youtube_video',
            18 => 'video__ns_styles_grid_5__file_image',
            19 => 'video__ns_styles_grid_8__file_image',
          ),
          'taxonomy' => 
          array (
            0 => 'ns_media_file_category',
            1 => 'ns_media_tag',
          ),
          'views_view' => 
          array (
            0 => 'ns_media_browser',
            1 => 'ns_media_contributor_search',
          ),
        ),
        'name' => 'Media',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_page' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_page/ns_page.module',
      'name' => 'ns_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'file',
          3 => 'link',
          4 => 'media',
          5 => 'node_reference',
          6 => 'ns_contributor',
          7 => 'ns_core',
          8 => 'ns_media',
          9 => 'references_dialog',
          10 => 'strongarm',
          11 => 'views',
          12 => 'defaultconfig',
        ),
        'description' => 'Provides a content type that is meant to be used as static pages.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'field_group' => 
          array (
            0 => 'group_ns_page_attachment|node|ns_page|form',
          ),
          'node' => 
          array (
            0 => 'ns_page',
          ),
          'views_view' => 
          array (
            0 => 'ns_page_reference_search',
          ),
        ),
        'name' => 'Pages',
        'nodestream_type' => 'content',
        'package' => 'Content providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_page_attach' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_page_attach/ns_page_attach.module',
      'name' => 'ns_page_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'ns_page',
        ),
        'description' => 'Adds file attachments to pages.',
        'name' => 'Page Attachments',
        'package' => 'Extensions',
        'nodestream_type' => 'extension',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_page_fact' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_page_fact/ns_page_fact.module',
      'name' => 'ns_page_fact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'node_reference',
          2 => 'ns_page',
          3 => 'strongarm',
          4 => 'defaultconfig',
        ),
        'description' => 'Adds the option to attach fact boxes to pages.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'ns_page_fact',
          ),
        ),
        'name' => 'Page fact boxes',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_poll' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_poll/ns_poll.module',
      'name' => 'ns_poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'node_reference',
          3 => 'ns_article',
          4 => 'poll',
          5 => 'strongarm',
          6 => 'defaultconfig',
        ),
        'description' => 'Adds the option to attach polls to articles.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
          ),
          'field_group' => 
          array (
            0 => 'group_ns_poll|node|ns_article|form',
          ),
        ),
        'name' => 'Article polls',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_promo' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_promo/ns_promo.module',
      'name' => 'ns_promo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'link',
          3 => 'media',
          4 => 'strongarm',
          5 => 'defaultconfig',
        ),
        'description' => 'Create promotions that can be viewed in different sections of your site.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'node' => 
          array (
            0 => 'ns_promo_promo',
          ),
        ),
        'name' => 'Promotions',
        'package' => 'Content Providers',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_roles' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_roles/ns_roles.module',
      'name' => 'ns_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'defaultconfig',
        ),
        'description' => 'A collection of suggested roles and permissions that might be a good starting point for your site.',
        'name' => 'NS Roles',
        'package' => 'Features',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_search' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_search/ns_search.module',
      'name' => 'ns_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'page_manager',
          3 => 'panels',
          4 => 'search',
          5 => 'strongarm',
          6 => 'views',
          7 => 'defaultconfig',
        ),
        'description' => 'A very basic search engine using the built-in Drupal search functionality.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'search_node_panel_context',
          ),
          'views_view' => 
          array (
            0 => 'ns_search_search',
          ),
        ),
        'name' => 'Search',
        'nodestream_type' => 'product',
        'package' => 'Products',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_styles' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_styles/ns_styles.module',
      'name' => 'ns_styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'description' => 'Some handy image styles in various grid-friendly sizes',
        'features' => 
        array (
          'image' => 
          array (
            0 => 'grid-1',
            1 => 'grid-10',
            2 => 'grid-11',
            3 => 'grid-12',
            4 => 'grid-13',
            5 => 'grid-14',
            6 => 'grid-15',
            7 => 'grid-16',
            8 => 'grid-17',
            9 => 'grid-19',
            10 => 'grid-2',
            11 => 'grid-20',
            12 => 'grid-21',
            13 => 'grid-22',
            14 => 'grid-23',
            15 => 'grid-24',
            16 => 'grid-25',
            17 => 'grid-26',
            18 => 'grid-27',
            19 => 'grid-28',
            20 => 'grid-29',
            21 => 'grid-3',
            22 => 'grid-30',
            23 => 'grid-31',
            24 => 'grid-32',
            25 => 'grid-33',
            26 => 'grid-34',
            27 => 'grid-35',
            28 => 'grid-36',
            29 => 'grid-37',
            30 => 'grid-38',
            31 => 'grid-39',
            32 => 'grid-4',
            33 => 'grid-40',
            34 => 'grid-41',
            35 => 'grid-42',
            36 => 'grid-43',
            37 => 'grid-44',
            38 => 'grid-45',
            39 => 'grid-46',
            40 => 'grid-47',
            41 => 'grid-48',
            42 => 'grid-49',
            43 => 'grid-5',
            44 => 'grid-50',
            45 => 'grid-6',
            46 => 'grid-7',
            47 => 'grid-8',
            48 => 'grid-9',
          ),
        ),
        'name' => 'Media Styles',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_text' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_text/ns_text.module',
      'name' => 'ns_text',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'features',
          2 => 'media',
          3 => 'pathfilter',
          4 => 'wysiwyg',
        ),
        'description' => 'Provides some nice text formats together with a wysiwyg editor.',
        'features' => 
        array (
          'filter' => 
          array (
            0 => 'full_html',
            1 => 'html_editor',
          ),
          'wysiwyg_profile' => 
          array (
            0 => 'html_editor',
          ),
        ),
        'name' => 'Text formats',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ns_workbench' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ns_core/features/ns_workbench/ns_workbench.module',
      'name' => 'ns_workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'defaultconfig',
          1 => 'features',
          2 => 'strongarm',
          3 => 'workbench_media',
          4 => 'workbench_moderation',
        ),
        'description' => 'Use workbench to handle your content.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'variable' => 
          array (
            0 => 'ns_workbench_enabled',
          ),
        ),
        'name' => 'Workbench',
        'nodestream_type' => 'extension',
        'package' => 'Extensions',
        'php' => '5.2.4',
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.10',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'openid_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_everywhere' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/panels_everywhere/panels_everywhere.module',
      'name' => 'panels_everywhere',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels everywhere',
        'description' => 'Allow your site to use Panels instead of Blocks to lay out your pages.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'page_manager',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_everywhere.module',
        ),
        'version' => '7.x-1.0-alpha1',
        'project' => 'panels_everywhere',
        'datestamp' => '1305369416',
        'php' => '5.2.4',
      ),
      'project' => 'panels_everywhere',
      'version' => '7.x-1.0-alpha1',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.0',
        'project' => 'pathauto',
        'datestamp' => '1320072936',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.0',
    ),
    'pathfilter' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/pathfilter/pathfilter.module',
      'name' => 'pathfilter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path Filter',
        'description' => 'Input filter to convert internal paths, such as &quot;internal:node/99&quot;, to their corresponding absolute URL or relative path.',
        'package' => 'Input filters',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'rdf_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'references' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/references/references.module',
      'name' => 'references',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References',
        'description' => 'Defines common base features for the various reference field types.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'views/references_handler_relationship.inc',
          1 => 'views/references_handler_argument.inc',
          2 => 'views/references_plugin_display.inc',
          3 => 'views/references_plugin_style.inc',
          4 => 'views/references_plugin_row_fields.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'references_dialog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/references_dialog/references_dialog.module',
      'name' => 'references_dialog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References Dialog',
        'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/references_dialog_plugin_display.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'references_dialog',
        'datestamp' => '1322226644',
        'php' => '5.2.4',
      ),
      'project' => 'references_dialog',
      'version' => '7.x-1.0-alpha2',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'tests/rules.test',
          2 => 'includes/faces.inc',
          3 => 'includes/rules.core.inc',
          4 => 'includes/rules.processor.inc',
          5 => 'includes/rules.plugins.inc',
          6 => 'includes/rules.state.inc',
          7 => 'modules/php.eval.inc',
          8 => 'modules/rules_core.eval.inc',
          9 => 'modules/system.eval.inc',
          10 => 'ui/ui.controller.inc',
          11 => 'ui/ui.core.inc',
          12 => 'ui/ui.data.inc',
          13 => 'ui/ui.plugins.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.0',
        'project' => 'rules',
        'datestamp' => '1318336335',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.0',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_admin.module',
          1 => 'rules_admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-2.0',
        'project' => 'rules',
        'datestamp' => '1318336335',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.0',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_scheduler.admin.inc',
          1 => 'rules_scheduler.module',
          2 => 'rules_scheduler.install',
          3 => 'rules_scheduler.rules.inc',
          4 => 'rules_scheduler.test',
          5 => 'includes/rules_scheduler.views_default.inc',
          6 => 'includes/rules_scheduler.views.inc',
          7 => 'includes/rules_scheduler_views_filter.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'rules',
        'datestamp' => '1318336335',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.0',
    ),
    'rules_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/rules/tests/rules_test.module',
      'name' => 'rules_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Tests',
        'description' => 'Support module for the Rules tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_test.rules.inc',
          1 => 'rules_test.rules_defaults.inc',
        ),
        'hidden' => true,
        'version' => '7.x-2.0',
        'project' => 'rules',
        'datestamp' => '1318336335',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.0',
    ),
    'scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/scheduler/scheduler.module',
      'name' => 'scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Scheduler',
        'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'scheduler.install',
          1 => 'scheduler.module',
          2 => 'scheduler.views.inc',
          3 => 'scheduler.test',
          4 => 'scheduler_handler_field_scheduler_countdown.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'scheduler',
        'datestamp' => '1299939069',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'scheduler',
      'version' => '7.x-1.0',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'session_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/password.test',
          22 => 'tests/path.test',
          23 => 'tests/registry.test',
          24 => 'tests/schema.test',
          25 => 'tests/session.test',
          26 => 'tests/tablesort.test',
          27 => 'tests/theme.test',
          28 => 'tests/unicode.test',
          29 => 'tests/update.test',
          30 => 'tests/xmlrpc.test',
          31 => 'tests/upgrade/upgrade.test',
          32 => 'tests/upgrade/upgrade.comment.test',
          33 => 'tests/upgrade/upgrade.filter.test',
          34 => 'tests/upgrade/upgrade.forum.test',
          35 => 'tests/upgrade/upgrade.locale.test',
          36 => 'tests/upgrade/upgrade.menu.test',
          37 => 'tests/upgrade/upgrade.node.test',
          38 => 'tests/upgrade/upgrade.taxonomy.test',
          39 => 'tests/upgrade/upgrade.translatable.test',
          40 => 'tests/upgrade/upgrade.upload.test',
          41 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'strongarm' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'strongarm.admin.inc',
          1 => 'strongarm.install',
          2 => 'strongarm.module',
        ),
        'version' => '7.x-2.0-beta5',
        'project' => 'strongarm',
        'datestamp' => '1324046743',
        'php' => '5.2.4',
      ),
      'project' => 'strongarm',
      'version' => '7.x-2.0-beta5',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7071',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'taxonomy_menu_form' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/taxonomy_menu_form/taxonomy_menu_form.module',
      'name' => 'taxonomy_menu_form',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy menu form',
        'description' => 'Allowes you to create a menu item on the Taxonomy term add page.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
          1 => 'taxonomy',
        ),
        'version' => '7.x-1.1',
        'project' => 'taxonomy_menu_form',
        'datestamp' => '1317820024',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_menu_form',
      'version' => '7.x-1.1',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'theme_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.module',
          1 => 'token.install',
          2 => 'token.tokens.inc',
          3 => 'token.pages.inc',
          4 => 'token.test',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'token',
        'datestamp' => '1319825735',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-beta7',
    ),
    'token_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-1.0-beta7',
        'project' => 'token',
        'datestamp' => '1319825735',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-beta7',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'translation_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'trigger_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.10',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_script_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_1' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_2' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_3' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7017',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'user_form_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'user_reference' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/references/user_reference/user_reference.module',
      'name' => 'user_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid.module',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Universally Unique IDentifier (UUID)',
        'description' => 'Generate Universally Unique IDentifier (UUID) for content.',
        'core' => '7.x',
        'package' => 'uuid',
        'configure' => 'admin/config/system/uuid',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_comment' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_comment/uuid_comment.module',
      'name' => 'uuid_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Comments',
        'description' => 'UUID handler for comments.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'comment',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_file' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_file/uuid_file.module',
      'name' => 'uuid_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Files',
        'description' => 'UUID handler for files.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'file',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_node' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_node/uuid_node.module',
      'name' => 'uuid_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Nodes',
        'description' => 'UUID handler for nodes.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'node',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_ossp' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_ossp/uuid_ossp.module',
      'name' => 'uuid_ossp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID OSSP',
        'description' => 'Generate Universally Unique IDentifier (UUID) for content using the OSSP UUID library.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_role' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_role/uuid_role.module',
      'name' => 'uuid_role',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Roles',
        'description' => 'UUID handler for user roles.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'user',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_taxonomy/uuid_taxonomy.module',
      'name' => 'uuid_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Taxonomy',
        'description' => 'UUID handler for taxonomy terms.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'taxonomy',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uuid_user' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/uuid/uuid_user/uuid_user.module',
      'name' => 'uuid_user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Users',
        'description' => 'UUID handler for users.',
        'core' => '7.x',
        'package' => 'uuid',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'user',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'variable' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/node.variable.inc',
          1 => 'includes/system.variable.inc',
          2 => 'includes/user.variable.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'variable',
        'datestamp' => '1313088721',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-1.1',
    ),
    'variable_admin' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'variable',
        'datestamp' => '1313088721',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-1.1',
    ),
    'variable_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/variable/variable_advanced/variable_advanced.module',
      'name' => 'variable_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable advanced',
        'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'variable',
        'datestamp' => '1313088721',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-1.1',
    ),
    'variable_realm' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'variable',
        'datestamp' => '1313088721',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-1.1',
    ),
    'variable_store' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable_realm',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'variable',
        'datestamp' => '1313088721',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-1.1',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_text.inc',
          2 => 'handlers/views_handler_area_view.inc',
          3 => 'handlers/views_handler_argument.inc',
          4 => 'handlers/views_handler_argument_date.inc',
          5 => 'handlers/views_handler_argument_formula.inc',
          6 => 'handlers/views_handler_argument_many_to_one.inc',
          7 => 'handlers/views_handler_argument_null.inc',
          8 => 'handlers/views_handler_argument_numeric.inc',
          9 => 'handlers/views_handler_argument_string.inc',
          10 => 'handlers/views_handler_argument_group_by_numeric.inc',
          11 => 'handlers/views_handler_field.inc',
          12 => 'handlers/views_handler_field_counter.inc',
          13 => 'handlers/views_handler_field_boolean.inc',
          14 => 'handlers/views_handler_field_custom.inc',
          15 => 'handlers/views_handler_field_date.inc',
          16 => 'handlers/views_handler_field_entity.inc',
          17 => 'handlers/views_handler_field_markup.inc',
          18 => 'handlers/views_handler_field_math.inc',
          19 => 'handlers/views_handler_field_numeric.inc',
          20 => 'handlers/views_handler_field_prerender_list.inc',
          21 => 'handlers/views_handler_field_time_interval.inc',
          22 => 'handlers/views_handler_field_serialized.inc',
          23 => 'handlers/views_handler_field_url.inc',
          24 => 'handlers/views_handler_filter.inc',
          25 => 'handlers/views_handler_filter_boolean_operator.inc',
          26 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          27 => 'handlers/views_handler_filter_date.inc',
          28 => 'handlers/views_handler_filter_equality.inc',
          29 => 'handlers/views_handler_filter_group_by_numeric.inc',
          30 => 'handlers/views_handler_filter_in_operator.inc',
          31 => 'handlers/views_handler_filter_many_to_one.inc',
          32 => 'handlers/views_handler_filter_numeric.inc',
          33 => 'handlers/views_handler_filter_string.inc',
          34 => 'handlers/views_handler_relationship.inc',
          35 => 'handlers/views_handler_relationship_groupwise_max.inc',
          36 => 'handlers/views_handler_sort.inc',
          37 => 'handlers/views_handler_sort_date.inc',
          38 => 'handlers/views_handler_sort_formula.inc',
          39 => 'handlers/views_handler_sort_group_by_numeric.inc',
          40 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          41 => 'handlers/views_handler_sort_random.inc',
          42 => 'includes/base.inc',
          43 => 'includes/handlers.inc',
          44 => 'includes/plugins.inc',
          45 => 'includes/view.inc',
          46 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          47 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          48 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          49 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          50 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          51 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          52 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          53 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          54 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          55 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          56 => 'modules/comment/views_handler_field_comment.inc',
          57 => 'modules/comment/views_handler_field_comment_depth.inc',
          58 => 'modules/comment/views_handler_field_comment_link.inc',
          59 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          60 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          61 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          62 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          63 => 'modules/comment/views_handler_field_comment_node_link.inc',
          64 => 'modules/comment/views_handler_field_comment_username.inc',
          65 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          66 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          67 => 'modules/comment/views_handler_field_node_comment.inc',
          68 => 'modules/comment/views_handler_field_node_new_comments.inc',
          69 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          70 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          71 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          72 => 'modules/comment/views_handler_filter_node_comment.inc',
          73 => 'modules/comment/views_handler_sort_comment_thread.inc',
          74 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          75 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          76 => 'modules/comment/views_plugin_row_comment_rss.inc',
          77 => 'modules/comment/views_plugin_row_comment_view.inc',
          78 => 'modules/contact/views_handler_field_contact_link.inc',
          79 => 'modules/field/views_handler_field_field.inc',
          80 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          81 => 'modules/field/views_handler_filter_field_list.inc',
          82 => 'modules/filter/views_handler_field_filter_format_name.inc',
          83 => 'modules/locale/views_handler_argument_locale_group.inc',
          84 => 'modules/locale/views_handler_argument_locale_language.inc',
          85 => 'modules/locale/views_handler_field_locale_group.inc',
          86 => 'modules/locale/views_handler_field_locale_language.inc',
          87 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          88 => 'modules/locale/views_handler_filter_locale_group.inc',
          89 => 'modules/locale/views_handler_filter_locale_language.inc',
          90 => 'modules/locale/views_handler_filter_locale_version.inc',
          91 => 'modules/node/views_handler_argument_dates_various.inc',
          92 => 'modules/node/views_handler_argument_node_language.inc',
          93 => 'modules/node/views_handler_argument_node_nid.inc',
          94 => 'modules/node/views_handler_argument_node_type.inc',
          95 => 'modules/node/views_handler_argument_node_vid.inc',
          96 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          97 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          98 => 'modules/node/views_handler_field_node.inc',
          99 => 'modules/node/views_handler_field_node_link.inc',
          100 => 'modules/node/views_handler_field_node_link_delete.inc',
          101 => 'modules/node/views_handler_field_node_link_edit.inc',
          102 => 'modules/node/views_handler_field_node_revision.inc',
          103 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          104 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          105 => 'modules/node/views_handler_field_node_path.inc',
          106 => 'modules/node/views_handler_field_node_type.inc',
          107 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          108 => 'modules/node/views_handler_filter_node_access.inc',
          109 => 'modules/node/views_handler_filter_node_status.inc',
          110 => 'modules/node/views_handler_filter_node_type.inc',
          111 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          112 => 'modules/node/views_plugin_argument_default_node.inc',
          113 => 'modules/node/views_plugin_argument_validate_node.inc',
          114 => 'modules/node/views_plugin_row_node_rss.inc',
          115 => 'modules/node/views_plugin_row_node_view.inc',
          116 => 'modules/profile/views_handler_field_profile_date.inc',
          117 => 'modules/profile/views_handler_field_profile_list.inc',
          118 => 'modules/profile/views_handler_filter_profile_selection.inc',
          119 => 'modules/search/views_handler_argument_search.inc',
          120 => 'modules/search/views_handler_field_search_score.inc',
          121 => 'modules/search/views_handler_filter_search.inc',
          122 => 'modules/search/views_handler_sort_search_score.inc',
          123 => 'modules/search/views_plugin_row_search_view.inc',
          124 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          125 => 'modules/system/views_handler_argument_file_fid.inc',
          126 => 'modules/system/views_handler_field_file.inc',
          127 => 'modules/system/views_handler_field_file_extension.inc',
          128 => 'modules/system/views_handler_field_file_filemime.inc',
          129 => 'modules/system/views_handler_field_file_uri.inc',
          130 => 'modules/system/views_handler_field_file_status.inc',
          131 => 'modules/system/views_handler_filter_file_status.inc',
          132 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          133 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          134 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          135 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          136 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          137 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          138 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          139 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          140 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          141 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          142 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          143 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          144 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          145 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          146 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          147 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          148 => 'modules/system/views_handler_filter_system_type.inc',
          149 => 'modules/translation/views_handler_argument_node_tnid.inc',
          150 => 'modules/translation/views_handler_field_node_language.inc',
          151 => 'modules/translation/views_handler_field_node_link_translate.inc',
          152 => 'modules/translation/views_handler_field_node_translation_link.inc',
          153 => 'modules/translation/views_handler_filter_node_language.inc',
          154 => 'modules/translation/views_handler_filter_node_tnid.inc',
          155 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          156 => 'modules/translation/views_handler_relationship_translation.inc',
          157 => 'modules/upload/views_handler_field_upload_description.inc',
          158 => 'modules/upload/views_handler_field_upload_fid.inc',
          159 => 'modules/upload/views_handler_filter_upload_fid.inc',
          160 => 'modules/user/views_handler_argument_user_uid.inc',
          161 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          162 => 'modules/user/views_handler_field_user.inc',
          163 => 'modules/user/views_handler_field_user_language.inc',
          164 => 'modules/user/views_handler_field_user_link.inc',
          165 => 'modules/user/views_handler_field_user_link_cancel.inc',
          166 => 'modules/user/views_handler_field_user_link_edit.inc',
          167 => 'modules/user/views_handler_field_user_mail.inc',
          168 => 'modules/user/views_handler_field_user_name.inc',
          169 => 'modules/user/views_handler_field_user_permissions.inc',
          170 => 'modules/user/views_handler_field_user_picture.inc',
          171 => 'modules/user/views_handler_field_user_roles.inc',
          172 => 'modules/user/views_handler_filter_user_current.inc',
          173 => 'modules/user/views_handler_filter_user_name.inc',
          174 => 'modules/user/views_handler_filter_user_permissions.inc',
          175 => 'modules/user/views_handler_filter_user_roles.inc',
          176 => 'modules/user/views_plugin_argument_default_current_user.inc',
          177 => 'modules/user/views_plugin_argument_default_user.inc',
          178 => 'modules/user/views_plugin_argument_validate_user.inc',
          179 => 'plugins/views_plugin_access.inc',
          180 => 'plugins/views_plugin_access_none.inc',
          181 => 'plugins/views_plugin_access_perm.inc',
          182 => 'plugins/views_plugin_access_role.inc',
          183 => 'plugins/views_plugin_argument_default.inc',
          184 => 'plugins/views_plugin_argument_default_php.inc',
          185 => 'plugins/views_plugin_argument_default_fixed.inc',
          186 => 'plugins/views_plugin_argument_default_raw.inc',
          187 => 'plugins/views_plugin_argument_validate.inc',
          188 => 'plugins/views_plugin_argument_validate_numeric.inc',
          189 => 'plugins/views_plugin_argument_validate_php.inc',
          190 => 'plugins/views_plugin_cache.inc',
          191 => 'plugins/views_plugin_cache_none.inc',
          192 => 'plugins/views_plugin_cache_time.inc',
          193 => 'plugins/views_plugin_display.inc',
          194 => 'plugins/views_plugin_display_attachment.inc',
          195 => 'plugins/views_plugin_display_block.inc',
          196 => 'plugins/views_plugin_display_default.inc',
          197 => 'plugins/views_plugin_display_extender.inc',
          198 => 'plugins/views_plugin_display_feed.inc',
          199 => 'plugins/views_plugin_exposed_form_basic.inc',
          200 => 'plugins/views_plugin_exposed_form.inc',
          201 => 'plugins/views_plugin_exposed_form_input_required.inc',
          202 => 'plugins/views_plugin_display_page.inc',
          203 => 'plugins/views_plugin_localization_core.inc',
          204 => 'plugins/views_plugin_localization.inc',
          205 => 'plugins/views_plugin_localization_none.inc',
          206 => 'plugins/views_plugin_pager.inc',
          207 => 'plugins/views_plugin_pager_full.inc',
          208 => 'plugins/views_plugin_pager_mini.inc',
          209 => 'plugins/views_plugin_pager_none.inc',
          210 => 'plugins/views_plugin_pager_some.inc',
          211 => 'plugins/views_plugin_query.inc',
          212 => 'plugins/views_plugin_query_default.inc',
          213 => 'plugins/views_plugin_row.inc',
          214 => 'plugins/views_plugin_row_fields.inc',
          215 => 'plugins/views_plugin_style.inc',
          216 => 'plugins/views_plugin_style_default.inc',
          217 => 'plugins/views_plugin_style_grid.inc',
          218 => 'plugins/views_plugin_style_list.inc',
          219 => 'plugins/views_plugin_style_jump_menu.inc',
          220 => 'plugins/views_plugin_style_rss.inc',
          221 => 'plugins/views_plugin_style_summary.inc',
          222 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          223 => 'plugins/views_plugin_style_summary_unformatted.inc',
          224 => 'plugins/views_plugin_style_table.inc',
          225 => 'tests/handlers/views_handler_area_text.test',
          226 => 'tests/handlers/views_handler_argument_null.test',
          227 => 'tests/handlers/views_handler_field_boolean.test',
          228 => 'tests/handlers/views_handler_field_custom.test',
          229 => 'tests/handlers/views_handler_field_counter.test',
          230 => 'tests/handlers/views_handler_field_date.test',
          231 => 'tests/handlers/views_handler_field_file_size.test',
          232 => 'tests/handlers/views_handler_field_math.test',
          233 => 'tests/handlers/views_handler_field_url.test',
          234 => 'tests/handlers/views_handler_field_xss.test',
          235 => 'tests/handlers/views_handler_filter_date.test',
          236 => 'tests/handlers/views_handler_filter_equality.test',
          237 => 'tests/handlers/views_handler_filter_in_operator.test',
          238 => 'tests/handlers/views_handler_filter_numeric.test',
          239 => 'tests/handlers/views_handler_filter_string.test',
          240 => 'tests/handlers/views_handler_sort_random.test',
          241 => 'tests/handlers/views_handler_sort_date.test',
          242 => 'tests/handlers/views_handler_sort.test',
          243 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          244 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          245 => 'tests/styles/views_plugin_style_jump_menu.test',
          246 => 'tests/styles/views_plugin_style.test',
          247 => 'tests/views_access.test',
          248 => 'tests/views_analyze.test',
          249 => 'tests/views_basic.test',
          250 => 'tests/views_argument_default.test',
          251 => 'tests/views_argument_validator.test',
          252 => 'tests/views_exposed_form.test',
          253 => 'tests/views_glossary.test',
          254 => 'tests/views_groupby.test',
          255 => 'tests/views_handlers.test',
          256 => 'tests/views_module.test',
          257 => 'tests/views_pager.test',
          258 => 'tests/views_plugin_localization_test.inc',
          259 => 'tests/views_translatable.test',
          260 => 'tests/views_query.test',
          261 => 'tests/views_upgrade.test',
          262 => 'tests/views_test.views_default.inc',
          263 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          264 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          265 => 'tests/user/views_user_argument_default.test',
          266 => 'tests/user/views_user_argument_validate.test',
          267 => 'tests/user/views_user.test',
          268 => 'tests/views_cache.test',
          269 => 'tests/views_view.test',
          270 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.0',
        'project' => 'views',
        'datestamp' => '1324170450',
      ),
      'project' => 'views',
      'version' => '7.x-3.0',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_rss' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/views_rss/views_rss.module',
      'name' => 'views_rss',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views RSS',
        'description' => 'Provides views plugin for that allows RSS Feeds from Views to be use fields',
        'package' => 'Views Bonus Pack',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '7.x',
        'version' => '6.x-1.0-beta5',
        'project' => 'views_rss',
        'datestamp' => '1284147112',
        'files' => 
        array (
          0 => 'views_rss.module',
          1 => 'views/views-rss-fields-item.tpl.php',
          2 => 'views/views-view-views-rss-fields.tpl.php',
          3 => 'views/views_plugin_style_rss_fields.inc',
          4 => 'views/views_rss.views.inc',
          5 => 'views/views_rss_views_fields.theme.inc',
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_rss',
      'version' => '6.x-1.0-beta5',
    ),
    'views_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/views/tests/views_test.module',
      'name' => 'views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Test',
        'description' => 'Test module for Views.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'hidden' => true,
        'version' => '7.x-3.0',
        'project' => 'views',
        'datestamp' => '1324170450',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.0',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.0',
        'project' => 'views',
        'datestamp' => '1324170450',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.0',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_filter_is_draft.inc',
          8 => 'views/webform.views.inc',
          9 => 'tests/components.test',
          10 => 'tests/permissions.test',
          11 => 'tests/submission.test',
          12 => 'tests/webform.test',
        ),
        'version' => '7.x-3.15',
        'project' => 'webform',
        'datestamp' => '1323326755',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'webform',
      'version' => '7.x-3.15',
    ),
    'workbench' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/workbench/workbench.module',
      'name' => 'workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench',
        'description' => 'Workbench editorial suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/settings',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.1',
        'project' => 'workbench',
        'datestamp' => '1320263738',
        'php' => '5.2.4',
      ),
      'project' => 'workbench',
      'version' => '7.x-1.1',
    ),
    'workbench_access' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/workbench_access/workbench_access.module',
      'name' => 'workbench_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Access',
        'description' => 'Extensible editorial access for the Workbench suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/access',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'includes/workbench_access_handler_field_edit_node.inc',
          1 => 'includes/workbench_access_handler_field_section.inc',
          2 => 'includes/workbench_access_handler_filter_access.inc',
          3 => 'includes/workbench_access_handler_sort_section.inc',
          4 => 'tests/workbench_access.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'workbench_access',
        'datestamp' => '1314385327',
        'php' => '5.2.4',
      ),
      'project' => 'workbench_access',
      'version' => '7.x-1.0',
    ),
    'workbench_media' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/workbench_media/workbench_media.module',
      'name' => 'workbench_media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Media',
        'description' => 'Media features for the Workbench editorial suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'workbench',
          1 => 'media',
        ),
        'version' => '7.x-1.0',
        'project' => 'workbench_media',
        'datestamp' => '1314385328',
        'php' => '5.2.4',
      ),
      'project' => 'workbench_media',
      'version' => '7.x-1.0',
    ),
    'workbench_moderation' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/workbench_moderation/workbench_moderation.module',
      'name' => 'workbench_moderation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Moderation',
        'description' => 'Provides content moderation services',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/moderation',
        'files' => 
        array (
          0 => 'workbench_moderation.module',
          1 => 'includes/workbench_moderation_handler_field_history_link.inc',
          2 => 'includes/workbench_moderation_handler_field_links.inc',
          3 => 'includes/workbench_moderation_handler_field_state.inc',
          4 => 'includes/workbench_moderation_handler_filter_state.inc',
          5 => 'includes/workbench_moderation_handler_filter_moderated_type.inc',
          6 => 'includes/workbench_moderation_handler_filter_user_can_moderate.inc',
          7 => 'tests/workbench_moderation.test',
          8 => 'tests/workbench_moderation.files.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'workbench_moderation',
        'datestamp' => '1320263436',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'workbench_moderation',
      'version' => '7.x-1.1',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'wysiwyg_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/modules/wysiwyg/tests/wysiwyg_test.module',
      'name' => 'wysiwyg_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg testing',
        'description' => 'Tests Wysiwyg module functionality. Do not enable.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'wysiwyg',
        ),
        'files' => 
        array (
          0 => 'wysiwyg_test.module',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'block_test_theme' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/tests/block_test_theme/block_test_theme.info',
      'name' => 'block_test_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test theme',
        'description' => 'Theme for testing the block system',
        'core' => '7.x',
        'hidden' => true,
        'regions' => 
        array (
          'sidebar_first' => 'Left sidebar',
          'sidebar_second' => 'Right sidebar',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
          1 => 'sidebar_second',
        ),
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ns_theme' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/themes/ns_theme/ns_theme.info',
      'name' => 'ns_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'NodeStream',
        'description' => 'Base theme for NodeStream.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'base theme' => 'precision',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/basic.css',
            1 => 'css/layout.css',
            2 => 'css/main.css',
            3 => 'css/enterprise.css',
          ),
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'plugins/layouts',
          ),
        ),
        'version' => '7.x-2.0-alpha2',
        'project' => 'ns_theme',
        'datestamp' => '1322302843',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ns_theme',
      'version' => '7.x-2.0-alpha2',
    ),
    'precision' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/profiles/nodestream/themes/precision/precision.info',
      'name' => 'precision',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Precision',
        'description' => 'Base theme suitable for Panels Everywhere.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/reset.css',
            1 => 'css/grid.css',
            2 => 'css/precision.css',
          ),
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'plugins/layouts',
            'styles' => 'plugins/styles',
          ),
        ),
        'api' => 
        array (
          'panels' => 
          array (
            'styles' => 
            array (
              'version' => '2',
            ),
          ),
        ),
        'version' => '7.x-1.0-alpha1',
        'project' => 'precision',
        'datestamp' => '1313754119',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'precision',
      'version' => '7.x-1.0-alpha1',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'test_theme' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/tests/test_theme/test_theme.info',
      'name' => 'test_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test theme',
        'description' => 'Theme for testing the theme system',
        'core' => '7.x',
        'hidden' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.base.css',
          ),
        ),
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_basetheme' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/tests/update_test_basetheme/update_test_basetheme.info',
      'name' => 'update_test_basetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test base theme',
        'description' => 'Test theme which acts as a base theme for other test subthemes.',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_subtheme' => 
    array (
      'filename' => '/var/aegir/platforms/ns/web/themes/tests/update_test_subtheme/update_test_subtheme.info',
      'name' => 'update_test_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test subtheme',
        'description' => 'Test theme which uses update_test_basetheme as the base theme.',
        'core' => '7.x',
        'base theme' => 'update_test_basetheme',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
  ),
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
