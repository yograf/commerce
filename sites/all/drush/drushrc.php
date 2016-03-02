<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'commerce_kickstart',
  1 => 'pantheon',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'poll' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.41',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.41',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.41',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7080',
        'version' => '7.41',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
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
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.41',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.41',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'pantheon_api' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/pantheon/pantheon_api/pantheon_api.module',
        'basename' => 'pantheon_api.module',
        'name' => 'pantheon_api',
        'info' => 
        array (
          'name' => 'Pantheon Platform API',
          'description' => 'Integration with the Pantheon Platform',
          'version' => '7.x-1.0',
          'package' => 'Pantheon',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'pantheon_apachesolr' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/pantheon/pantheon_apachesolr/pantheon_apachesolr.module',
        'basename' => 'pantheon_apachesolr.module',
        'name' => 'pantheon_apachesolr',
        'info' => 
        array (
          'name' => 'Pantheon Apache Solr',
          'description' => 'Exposes Pantheon\'s ApacheSolr Service',
          'package' => 'Pantheon',
          'version' => '7.x-1.0',
          'dependencies' => 
          array (
            0 => 'pantheon_api',
          ),
          'files' => 
          array (
            0 => 'Pantheon_Apache_Solr_Service.php',
            1 => 'Pantheon_Search_Api_Solr_Service.php',
          ),
          'configure' => 'admin/config/search/pantheon',
          'core' => '7.x',
          'php' => '5.3',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.0',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.41',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.41',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.41',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.41',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.41',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.41',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.41',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.41',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.41',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'version' => '7.41',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.41',
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
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.41',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.41',
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
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'version' => '7.41',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'views/webform.views.inc',
            21 => 'tests/components.test',
            22 => 'tests/conditionals.test',
            23 => 'tests/permissions.test',
            24 => 'tests/submission.test',
            25 => 'tests/webform.test',
          ),
          'version' => '7.x-4.12',
          'project' => 'webform',
          'datestamp' => '1445622245',
        ),
        'schema_version' => '7430',
        'version' => '7.x-4.12',
      ),
      'form_builder_examples' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/examples/form_builder_examples.module',
        'basename' => 'form_builder_examples.module',
        'name' => 'form_builder_examples',
        'info' => 
        array (
          'name' => 'Form builder examples',
          'description' => 'Form builder support for CCK, Webform, and Profile modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'form_builder_webform' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/modules/webform/form_builder_webform.module',
        'basename' => 'form_builder_webform.module',
        'name' => 'form_builder_webform',
        'info' => 
        array (
          'name' => 'Form builder Webform UI',
          'description' => 'Form builder integration for the Webform module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
            1 => 'webform',
          ),
          'files' => 
          array (
            0 => 'form_builder_webform.classes.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'form_builder' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/form_builder.module',
        'basename' => 'form_builder.module',
        'name' => 'form_builder',
        'info' => 
        array (
          'name' => 'Form builder',
          'description' => 'Form building framework.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'options_element',
          ),
          'files' => 
          array (
            0 => 'form_builder.classes.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.13',
      ),
      'commerce_globalone_terminal' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_globalone/modules/terminal/commerce_globalone_terminal.module',
        'basename' => 'commerce_globalone_terminal.module',
        'name' => 'commerce_globalone_terminal',
        'info' => 
        array (
          'name' => 'GlobalOne Terminal',
          'description' => 'Implements GlobalOne payment terminal.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce_globalone',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'commerce_globalone' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_globalone/commerce_globalone.module',
        'basename' => 'commerce_globalone.module',
        'name' => 'commerce_globalone',
        'info' => 
        array (
          'name' => 'GlobalOne',
          'description' => 'Implements GlobalOne payment services for use with Drupal Commerce.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_payment',
            3 => 'commerce_order',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_globalone.curl.inc',
            1 => 'includes/commerce_globalone.format.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'commerce_devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_devel/commerce_devel_generate/commerce_devel_generate.module',
        'basename' => 'commerce_devel_generate.module',
        'name' => 'commerce_devel_generate',
        'info' => 
        array (
          'name' => 'Commerce Devel Generate',
          'description' => 'Generate dummy products, etc.',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
            2 => 'commerce_product',
            3 => 'commerce_cart',
            4 => 'commerce_order',
            5 => 'devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'commerce_devel',
          'datestamp' => '1444709866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'commerce_devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_devel/commerce_devel.module',
        'basename' => 'commerce_devel.module',
        'name' => 'commerce_devel',
        'info' => 
        array (
          'name' => 'Commerce Devel',
          'description' => 'Provide debugging and development information for Commerce modules',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta6',
          'project' => 'commerce_devel',
          'datestamp' => '1444709866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
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
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
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
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
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
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
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
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc5',
      ),
      'options_element' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/options_element/options_element.module',
        'basename' => 'options_element.module',
        'name' => 'options_element',
        'info' => 
        array (
          'name' => 'Options element',
          'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
          'core' => '7.x',
          'package' => 'User interface',
          'version' => '7.x-1.12',
          'project' => 'options_element',
          'datestamp' => '1397696072',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.12',
      ),
    ),
    'themes' => 
    array (
      'garland' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.41',
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
        ),
        'version' => '7.41',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
        ),
        'version' => '7.41',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.41',
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
        ),
        'version' => '7.41',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.41',
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
        ),
        'version' => '7.41',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.41',
        'description' => 'This platform is running Drupal 7.41',
      ),
    ),
    'profiles' => 
    array (
      'commerce_kickstart' => 
      array (
        'name' => 'commerce_kickstart',
        'filename' => './profiles/commerce_kickstart/commerce_kickstart.profile',
        'info' => 
        array (
          'name' => 'Commerce Kickstart',
          'description' => 'Install with Drupal Commerce pre-configured for use.',
          'core' => '7.x',
          'distribution_name' => 'Commerce Kickstart',
          'exclusive' => '1',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'comment',
            2 => 'contextual',
            3 => 'image',
            4 => 'list',
            5 => 'menu',
            6 => 'number',
            7 => 'options',
            8 => 'path',
            9 => 'taxonomy',
            10 => 'dblog',
            11 => 'overlay',
            12 => 'field_ui',
            13 => 'file',
            14 => 'toolbar',
            15 => 'addressfield',
            16 => 'ctools',
            17 => 'entity',
            18 => 'entity_token',
            19 => 'rules',
            20 => 'rules_admin',
            21 => 'views',
            22 => 'views_ui',
            23 => 'date',
            24 => 'date_popup',
            25 => 'date_api',
            26 => 'message',
            27 => 'message_notify',
            28 => 'commerce',
            29 => 'commerce_ui',
            30 => 'commerce_cart',
            31 => 'commerce_checkout',
            32 => 'commerce_customer',
            33 => 'commerce_customer_ui',
            34 => 'commerce_line_item',
            35 => 'commerce_line_item_ui',
            36 => 'commerce_price',
            37 => 'commerce_order',
            38 => 'commerce_order_ui',
            39 => 'commerce_payment',
            40 => 'commerce_payment_example',
            41 => 'commerce_payment_ui',
            42 => 'commerce_shipping',
            43 => 'commerce_shipping_ui',
            44 => 'commerce_product',
            45 => 'commerce_product_ui',
            46 => 'commerce_product_pricing',
            47 => 'commerce_product_pricing_ui',
            48 => 'commerce_product_reference',
            49 => 'commerce_tax',
            50 => 'commerce_tax_ui',
            51 => 'chosen',
            52 => 'crumbs',
            53 => 'distro_update',
            54 => 'module_filter',
            55 => 'image_delta_formatter',
            56 => 'taxonomy_menu',
            57 => 'libraries',
            58 => 'mimemail_compress',
            59 => 'pathauto',
            60 => 'inline_entity_form',
            61 => 'entityreference',
            62 => 'views_megarow',
            63 => 'commerce_addressbook',
            64 => 'commerce_discount',
            65 => 'commerce_discount_date',
            66 => 'commerce_add_to_cart_confirmation',
            67 => 'commerce_message',
            68 => 'commerce_backoffice',
            69 => 'commerce_backoffice_product',
            70 => 'commerce_backoffice_order',
            71 => 'commerce_backoffice_content',
            72 => 'commerce_checkout_progress',
            73 => 'commerce_amex',
            74 => 'menu_attributes',
            75 => 'fences',
            76 => 'title',
            77 => 'admin_views',
            78 => 'features',
            79 => 'commerce_features',
            80 => 'migrate',
            81 => 'commerce_migrate',
            82 => 'facetapi',
            83 => 'search_api',
            84 => 'search_api_db',
            85 => 'search_api_views',
            86 => 'search_api_facetapi',
            87 => 'search_api_ranges',
            88 => 'commerce_kickstart_help',
            89 => 'commerce_kickstart_inline_help',
            90 => 'commerce_kickstart_order',
            91 => 'commerce_kickstart_comment',
            92 => 'commerce_kickstart_migrate',
          ),
          'php_memory_limit' => '128M',
          'version' => '7.x-2.32',
          'project' => 'commerce_kickstart',
          'datestamp' => '1452771861',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.41',
      ),
      'pantheon' => 
      array (
        'name' => 'pantheon',
        'filename' => './profiles/pantheon/pantheon.profile',
        'info' => 
        array (
          'name' => 'Pantheon',
          'description' => 'Install with pre-configured integration for the Pantheon Platform',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
            21 => 'pantheon_api',
            22 => 'pantheon_login',
          ),
          'files' => 
          array (
            0 => 'pantheon.profile',
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.41',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'webform' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'views/webform.views.inc',
            21 => 'tests/components.test',
            22 => 'tests/conditionals.test',
            23 => 'tests/permissions.test',
            24 => 'tests/submission.test',
            25 => 'tests/webform.test',
          ),
          'version' => '7.x-4.12',
          'project' => 'webform',
          'datestamp' => '1445622245',
        ),
        'schema_version' => '7430',
        'version' => '7.x-4.12',
      ),
      'form_builder_examples' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/examples/form_builder_examples.module',
        'basename' => 'form_builder_examples.module',
        'name' => 'form_builder_examples',
        'info' => 
        array (
          'name' => 'Form builder examples',
          'description' => 'Form builder support for CCK, Webform, and Profile modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'form_builder_webform' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/modules/webform/form_builder_webform.module',
        'basename' => 'form_builder_webform.module',
        'name' => 'form_builder_webform',
        'info' => 
        array (
          'name' => 'Form builder Webform UI',
          'description' => 'Form builder integration for the Webform module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
            1 => 'webform',
          ),
          'files' => 
          array (
            0 => 'form_builder_webform.classes.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'form_builder' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/form_builder/form_builder.module',
        'basename' => 'form_builder.module',
        'name' => 'form_builder',
        'info' => 
        array (
          'name' => 'Form builder',
          'description' => 'Form building framework.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'options_element',
          ),
          'files' => 
          array (
            0 => 'form_builder.classes.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'form_builder',
          'datestamp' => '1440525840',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.13',
      ),
      'commerce_globalone_terminal' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_globalone/modules/terminal/commerce_globalone_terminal.module',
        'basename' => 'commerce_globalone_terminal.module',
        'name' => 'commerce_globalone_terminal',
        'info' => 
        array (
          'name' => 'GlobalOne Terminal',
          'description' => 'Implements GlobalOne payment terminal.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce_globalone',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'commerce_globalone' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_globalone/commerce_globalone.module',
        'basename' => 'commerce_globalone.module',
        'name' => 'commerce_globalone',
        'info' => 
        array (
          'name' => 'GlobalOne',
          'description' => 'Implements GlobalOne payment services for use with Drupal Commerce.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_payment',
            3 => 'commerce_order',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_globalone.curl.inc',
            1 => 'includes/commerce_globalone.format.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'commerce_devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_devel/commerce_devel_generate/commerce_devel_generate.module',
        'basename' => 'commerce_devel_generate.module',
        'name' => 'commerce_devel_generate',
        'info' => 
        array (
          'name' => 'Commerce Devel Generate',
          'description' => 'Generate dummy products, etc.',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
            2 => 'commerce_product',
            3 => 'commerce_cart',
            4 => 'commerce_order',
            5 => 'devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'commerce_devel',
          'datestamp' => '1444709866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'commerce_devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/commerce_devel/commerce_devel.module',
        'basename' => 'commerce_devel.module',
        'name' => 'commerce_devel',
        'info' => 
        array (
          'name' => 'Commerce Devel',
          'description' => 'Provide debugging and development information for Commerce modules',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta6',
          'project' => 'commerce_devel',
          'datestamp' => '1444709866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
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
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
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
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
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
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
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
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc5',
      ),
      'options_element' => 
      array (
        'filename' => '/var/aegir/projects/commerce/dev/sites/all/modules/options_element/options_element.module',
        'basename' => 'options_element.module',
        'name' => 'options_element',
        'info' => 
        array (
          'name' => 'Options element',
          'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
          'core' => '7.x',
          'package' => 'User interface',
          'version' => '7.x-1.12',
          'project' => 'options_element',
          'datestamp' => '1397696072',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.12',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'commerce_kickstart' => 
    array (
      'modules' => 
      array (
        'views_bulk_operations' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
          'info' => 
          array (
            'name' => 'Views Bulk Operations',
            'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'views',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2.9',
            'files' => 
            array (
              0 => 'plugins/operation_types/base.class.php',
              1 => 'views/views_bulk_operations_handler_field_operations.inc',
            ),
            'version' => '7.x-3.3',
            'project' => 'views_bulk_operations',
            'datestamp' => '1435764542',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.3',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions (VBO)',
            'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-3.3',
            'project' => 'views_bulk_operations',
            'datestamp' => '1435764542',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.3',
        ),
        'field_extractor' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/field_extractor/field_extractor.module',
          'basename' => 'field_extractor.module',
          'name' => 'field_extractor',
          'info' => 
          array (
            'name' => 'Field Extractor',
            'description' => 'Provides a formatter that displays a field from the referenced entities.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'views/field_extractor_handler_field.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'field_extractor',
            'datestamp' => '1360578234',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_migrate_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_migrate/commerce_migrate_example/commerce_migrate_example.module',
          'basename' => 'commerce_migrate_example.module',
          'name' => 'commerce_migrate_example',
          'info' => 
          array (
            'core' => '7.x',
            'description' => 'Demonstrate migration of products and product display nodes.',
            'name' => 'Commerce Migrate Example',
            'package' => 'Commerce (contrib)',
            'files' => 
            array (
              0 => 'commerce_migrate_example.migrate.inc',
            ),
            'dependencies' => 
            array (
              0 => 'migrate',
              1 => 'commerce_migrate',
            ),
            'version' => '7.x-1.2',
            'project' => 'commerce_migrate',
            'datestamp' => '1447468741',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'commerce_migrate' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_migrate/commerce_migrate.module',
          'basename' => 'commerce_migrate.module',
          'name' => 'commerce_migrate',
          'info' => 
          array (
            'name' => 'Commerce Migrate',
            'description' => 'Provides Commerce-specific Migrate handlers.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'migrate',
              1 => 'migrate_extras',
              2 => 'commerce_product',
            ),
            'files' => 
            array (
              0 => 'plugins/destinations/commerce_license.inc',
              1 => 'plugins/destinations/commerce_product_type.inc',
              2 => 'plugins/destinations/commerce_product.inc',
              3 => 'plugins/destinations/fields.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'commerce_migrate',
            'datestamp' => '1447468741',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'special_menu_items' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/special_menu_items/special_menu_items.module',
          'basename' => 'special_menu_items.module',
          'name' => 'special_menu_items',
          'info' => 
          array (
            'name' => 'Special menu items',
            'description' => 'Allow users to add placeholder and/or separator menu items.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'configure' => 'admin/config/system/special_menu_items',
            'version' => '7.x-2.0',
            'project' => 'special_menu_items',
            'datestamp' => '1346788411',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.0',
        ),
        'entity' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.i18n.inc',
              2 => 'entity.info.inc',
              3 => 'entity.rules.inc',
              4 => 'entity.test',
              5 => 'includes/entity.inc',
              6 => 'includes/entity.controller.inc',
              7 => 'includes/entity.ui.inc',
              8 => 'includes/entity.wrapper.inc',
              9 => 'views/entity.views.inc',
              10 => 'views/handlers/entity_views_field_handler_helper.inc',
              11 => 'views/handlers/entity_views_handler_area_entity.inc',
              12 => 'views/handlers/entity_views_handler_field_boolean.inc',
              13 => 'views/handlers/entity_views_handler_field_date.inc',
              14 => 'views/handlers/entity_views_handler_field_duration.inc',
              15 => 'views/handlers/entity_views_handler_field_entity.inc',
              16 => 'views/handlers/entity_views_handler_field_field.inc',
              17 => 'views/handlers/entity_views_handler_field_numeric.inc',
              18 => 'views/handlers/entity_views_handler_field_options.inc',
              19 => 'views/handlers/entity_views_handler_field_text.inc',
              20 => 'views/handlers/entity_views_handler_field_uri.inc',
              21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              22 => 'views/handlers/entity_views_handler_relationship.inc',
              23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.6',
            'project' => 'entity',
            'datestamp' => '1424876582',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.6',
        ),
        'entity_token' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
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
            'version' => '7.x-1.6',
            'project' => 'entity',
            'datestamp' => '1424876582',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'commerce_cba' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_cba/commerce_cba.module',
          'basename' => 'commerce_cba.module',
          'name' => 'commerce_cba',
          'info' => 
          array (
            'name' => 'Commerce Checkout by Amazon',
            'description' => 'Checkout by Amazon integration',
            'package' => 'Commerce (contrib)',
            'core' => '7.x',
            'configure' => 'admin/commerce/config/cba',
            'dependencies' => 
            array (
              0 => 'commerce_cart',
              1 => 'commerce_customer',
              2 => 'commerce_payment',
            ),
            'files' => 
            array (
              0 => 'tests/commerce_cba.test',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'commerce_cba',
            'datestamp' => '1405087128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta1',
        ),
        'swedish_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/swedish_services.module',
          'basename' => 'swedish_services.module',
          'name' => 'swedish_services',
          'info' => 
          array (
            'name' => 'Swedish Services',
            'description' => 'Provide the Swedish Services: Bloggy, Pusha',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'files' => 
            array (
              0 => 'swedish_services.module',
            ),
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'polish_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/polish_services.module',
          'basename' => 'polish_services.module',
          'name' => 'polish_services',
          'info' => 
          array (
            'name' => 'Polish Services',
            'description' => 'Provide the Polish Services: Blip, Wykop, Sledzik',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'italian_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/italian_services.module',
          'basename' => 'italian_services.module',
          'name' => 'italian_services',
          'info' => 
          array (
            'name' => 'Italian Services',
            'description' => 'Provide the Italian Services: Diggita, Meemi, OkNotizie, Segnalo.com, TechNotizie, Wikio, ZicZac',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'print_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/print_services.module',
          'basename' => 'print_services.module',
          'name' => 'print_services',
          'info' => 
          array (
            'name' => 'Print Services',
            'description' => 'Add the support for Print module which render the page as PDF or printable HTML',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'print',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'dutch_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/dutch_services.module',
          'basename' => 'dutch_services.module',
          'name' => 'dutch_services',
          'info' => 
          array (
            'name' => 'Dutch Services',
            'description' => 'Provide the Dutch Services: eKudos, Hyves, Nujij',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'favorite_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/favorite_services.module',
          'basename' => 'favorite_services.module',
          'name' => 'favorite_services',
          'info' => 
          array (
            'name' => 'Favorite Services',
            'description' => 'Add the page in your favorite, work with Chrome, Firefox, IE, Opera',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'general_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/general_services.module',
          'basename' => 'general_services.module',
          'name' => 'general_services',
          'info' => 
          array (
            'name' => 'General Services',
            'description' => 'Blinklist, Box, del.icio.us, Digg, Diigo, Facebook, Furl, Google Bookmark, Google Plus, Icerocket, Identi.ca, Linkedin, Mister Wong, Mixx, MySpace, Newsvine, Newskicks, Phing this, Reddit, StumbleUpon, Technorati, Twitter, Viadeo, Yahoo',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'forward_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/forward_services.module',
          'basename' => 'forward_services.module',
          'name' => 'forward_services',
          'info' => 
          array (
            'name' => 'Forward Services',
            'description' => 'Add the support for Forward module which send the link through email.',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'forward',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'basque_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/basque_services.module',
          'basename' => 'basque_services.module',
          'name' => 'basque_services',
          'info' => 
          array (
            'name' => 'Basque Services',
            'description' => 'Provide the Basque Services: Zabaldu, Bildu, Aupatu',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'widget_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/widget_services.module',
          'basename' => 'widget_services.module',
          'name' => 'widget_services',
          'info' => 
          array (
            'name' => 'Widget Services',
            'description' => 'Facebook Like, Facebook Share, Google Plus One, Linkedin Share Button, Pinterest, Twitter',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.3+0-dev',
        ),
        'russian_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/russian_services.module',
          'basename' => 'russian_services.module',
          'name' => 'russian_services',
          'info' => 
          array (
            'name' => 'Russian Services',
            'description' => 'Provide the Russian Services (12+3): 100zakladok, Ruspace, Mister Wong, Memori, Moemesto, MyScoop, Vaau, Yandex, LinkStore, Bobrdobr, Lopas, Communizm, Newsland, News2, Smi2',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'spanish_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/spanish_services.module',
          'basename' => 'spanish_services.module',
          'name' => 'spanish_services',
          'info' => 
          array (
            'name' => 'Spanish Services',
            'description' => 'Provide the Spanish Services: Barrapunto, Fresqui, Latafanera, Meneame, Tuenti',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'hungarian_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/hungarian_services.module',
          'basename' => 'hungarian_services.module',
          'name' => 'hungarian_services',
          'info' => 
          array (
            'name' => 'Hungarian Services',
            'description' => 'Provide the Hungarian Service: iWiW',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'farsi_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/farsi_services.module',
          'basename' => 'farsi_services.module',
          'name' => 'farsi_services',
          'info' => 
          array (
            'name' => 'Farsi Services',
            'description' => 'Provide the Farsi services: Balatarin, Donbaleh, Friendfa, Viwio.',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'german_services' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/services/german_services.module',
          'basename' => 'german_services.module',
          'name' => 'german_services',
          'info' => 
          array (
            'name' => 'German Services',
            'description' => 'Provide the German Services: Alltagz, Colivia, Icio, InfoPirat, Linkarena, MeinVZ, Mister Wong, Netselektor, Oneview, Readster, seekXL, SeoIGG, Weblinkr, Webnews, Xing, Yigg',
            'core' => '7.x',
            'package' => 'Service Links - Services',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'service_links_displays' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/plugins/service_links_displays.module',
          'basename' => 'service_links_displays.module',
          'name' => 'service_links_displays',
          'info' => 
          array (
            'name' => 'Service Links Displays',
            'description' => 'Provide the integration between Service Links and Node Displays (Display Suite)',
            'core' => '7.x',
            'package' => 'Service Links',
            'dependencies' => 
            array (
              0 => 'service_links',
              1 => 'ds',
            ),
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'service_links_sprites' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/plugins/service_links_sprites.module',
          'basename' => 'service_links_sprites.module',
          'name' => 'service_links_sprites',
          'info' => 
          array (
            'name' => 'Service Links Sprites',
            'description' => 'Add the ability to handle sprites with Service Links',
            'core' => '7.x',
            'package' => 'Service Links',
            'dependencies' => 
            array (
              0 => 'service_links',
            ),
            'configure' => 'admin/config/services/service-links',
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3+0-dev',
        ),
        'service_links' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/service_links/service_links.module',
          'basename' => 'service_links.module',
          'name' => 'service_links',
          'info' => 
          array (
            'name' => 'Service links',
            'description' => 'Module engine for add various service links about sharing networks to nodes.',
            'core' => '7.x',
            'package' => 'Service Links',
            'files' => 
            array (
              0 => 'service_links_handler_field_service_links.inc',
            ),
            'configure' => 'admin/config/services/service-links',
            'version' => '7.x-2.3+0-dev',
            'project' => 'service_links',
            'datestamp' => '1452771910',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.3+0-dev',
        ),
        'features_override' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/features_override/features_override.module',
          'basename' => 'features_override.module',
          'name' => 'features_override',
          'info' => 
          array (
            'name' => 'Features Override',
            'description' => 'Allows exported Features to be overridden',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
            ),
            'package' => 'Features',
            'version' => '7.x-2.0-rc3',
            'project' => 'features_override',
            'datestamp' => '1444843045',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-rc3',
        ),
        'chosen' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/chosen/chosen.module',
          'basename' => 'chosen.module',
          'name' => 'chosen',
          'info' => 
          array (
            'name' => 'Chosen',
            'description' => 'Makes select elements more user-friendly using <a href="http://harvesthq.github.com/chosen/">Chosen</a>.',
            'package' => 'User interface',
            'configure' => 'admin/config/user-interface/chosen',
            'core' => '7.x',
            'version' => '7.x-2.0-beta4+1-dev',
            'project' => 'chosen',
            'datestamp' => '1452771902',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7203',
          'version' => '7.x-2.0-beta4+1-dev',
        ),
        'search_api_db' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api_db/search_api_db.module',
          'basename' => 'search_api_db.module',
          'name' => 'search_api_db',
          'info' => 
          array (
            'name' => 'Database search',
            'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
            'dependencies' => 
            array (
              0 => 'search_api',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'search_api_db.test',
              1 => 'service.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'search_api_db',
            'datestamp' => '1440962643',
            'php' => '5.2.4',
          ),
          'schema_version' => '7106',
          'version' => '7.x-1.5',
        ),
        'commerce_search_api' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_search_api/commerce_search_api.module',
          'basename' => 'commerce_search_api.module',
          'name' => 'commerce_search_api',
          'info' => 
          array (
            'name' => 'Commerce Search API',
            'description' => 'Provides Search API commerce related enhancements.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'configure' => 'admin/commerce/config/commerce_search_api',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'commerce_product_reference',
              1 => 'search_api',
            ),
            'files' => 
            array (
              0 => 'includes/facetapi/filter_same_search.inc',
              1 => 'includes/facetapi/filter_search_start.inc',
              2 => 'includes/facetapi/widget_fancy_attributes.inc',
              3 => 'includes/commerce_search_api_product_display_filter.inc',
              4 => 'includes/callback_product_status.inc',
            ),
            'version' => '7.x-1.4',
            'project' => 'commerce_search_api',
            'datestamp' => '1436974444',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.4',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'pathauto',
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
              0 => 'pathauto.migrate.inc',
              1 => 'pathauto.test',
            ),
            'configure' => 'admin/config/search/path/patterns',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '7.x-1.3',
            'project' => 'pathauto',
            'datestamp' => '1444232655',
            'php' => '5.2.4',
          ),
          'schema_version' => '7006',
          'version' => '7.x-1.3',
        ),
        'commerce_addressbook' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_addressbook/commerce_addressbook.module',
          'basename' => 'commerce_addressbook.module',
          'name' => 'commerce_addressbook',
          'info' => 
          array (
            'name' => 'Commerce Addressbook',
            'description' => 'Prepopulates and provides a dropdown for previously added addresses.',
            'package' => 'Commerce (contrib)',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'commerce_customer',
              1 => 'commerce_checkout',
            ),
            'version' => '7.x-2.0-rc9',
            'project' => 'commerce_addressbook',
            'datestamp' => '1438117143',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.0-rc9',
        ),
        'search_api_ranges' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api_ranges/search_api_ranges.module',
          'basename' => 'search_api_ranges.module',
          'name' => 'search_api_ranges',
          'info' => 
          array (
            'name' => 'Search ranges',
            'description' => 'Provides range widgets and a min/max slider for Search API.',
            'dependencies' => 
            array (
              0 => 'facetapi',
              1 => 'search_api',
              2 => 'search_api_facetapi',
            ),
            'files' => 
            array (
              0 => 'includes/callback_search_api_ranges.inc',
              1 => 'plugins/facetapi/widget_links.inc',
              2 => 'plugins/facetapi/widget_slider.inc',
              3 => 'plugins/facetapi/widget_select.inc',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'version' => '7.x-1.5',
            'project' => 'search_api_ranges',
            'datestamp' => '1392554914',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'yottaa' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/yottaa/yottaa.module',
          'basename' => 'yottaa.module',
          'name' => 'yottaa',
          'info' => 
          array (
            'name' => 'Yottaa',
            'description' => 'Integration with the Yottaa Service',
            'package' => 'Reports',
            'core' => '7.x',
            'configure' => 'admin/config/services/yottaa/settings',
            'dependencies' => 
            array (
              0 => 'http_client',
            ),
            'version' => '7.x-1.2',
            'project' => 'yottaa',
            'datestamp' => '1386261516',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'term_depth' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/term_depth/term_depth.module',
          'basename' => 'term_depth.module',
          'name' => 'term_depth',
          'info' => 
          array (
            'name' => 'Term Depth access',
            'description' => 'Controls access to context based upon term depth',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
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
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'views_content' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
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
            'version' => '7.x-1.9',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
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
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/css-cache.inc',
              2 => 'includes/math-expr.inc',
              3 => 'includes/stylizer.inc',
              4 => 'tests/css_cache.test',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.9',
        ),
        'commerce_discount_date' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_discount/modules/commerce_discount_date/commerce_discount_date.module',
          'basename' => 'commerce_discount_date.module',
          'name' => 'commerce_discount_date',
          'info' => 
          array (
            'name' => 'Commerce Discount Date',
            'description' => 'Provides date fields for the Commerce discount entity.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_discount',
              2 => 'date',
              3 => 'date_popup',
              4 => 'entity',
            ),
            'files' => 
            array (
              0 => 'commerce_discount_date.test',
            ),
            'version' => '7.x-1.0-alpha7',
            'project' => 'commerce_discount',
            'datestamp' => '1445639056',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha7',
        ),
        'commerce_discount_usage' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_discount/modules/commerce_discount_usage/commerce_discount_usage.module',
          'basename' => 'commerce_discount_usage.module',
          'name' => 'commerce_discount_usage',
          'info' => 
          array (
            'name' => 'Commerce Discount Usage',
            'description' => 'Provide usage tracking and limits for Commerce Discounts',
            'package' => 'Commerce (contrib)',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_discount',
              2 => 'entity',
              3 => 'commerce',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_discount_usage_handler_field_commerce_discount_analytics.inc',
              1 => 'commerce_discount_usage.test',
            ),
            'version' => '7.x-1.0-alpha7',
            'project' => 'commerce_discount',
            'datestamp' => '1445639056',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.0-alpha7',
        ),
        'commerce_discount' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_discount/commerce_discount.module',
          'basename' => 'commerce_discount.module',
          'name' => 'commerce_discount',
          'info' => 
          array (
            'name' => 'Commerce Discount',
            'description' => 'Provides common functionality and a UI for managing discounts.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'number',
              1 => 'entity',
              2 => 'entityreference',
              3 => 'inline_entity_form (>=1.5)',
              4 => 'list',
              5 => 'options',
              6 => 'text',
              7 => 'views',
              8 => 'commerce',
              9 => 'commerce_price',
              10 => 'commerce_line_item',
              11 => 'commerce_product_reference',
              12 => 'inline_conditions (>1.0-alpha4)',
            ),
            'files' => 
            array (
              0 => 'commerce_discount.info.inc',
              1 => 'includes/commerce_discount.admin.inc',
              2 => 'includes/commerce_discount.class.inc',
              3 => 'includes/commerce_discount_offer.class.inc',
              4 => 'includes/commerce_discount_offer.inline_entity_form.inc',
              5 => 'includes/commerce_discount.controller.inc',
              6 => 'includes/views/commerce_discount.views.inc',
              7 => 'includes/views/handlers/commerce_discount_handler_field_operations_dropbutton.inc',
              8 => 'commerce_discount.test',
            ),
            'test_dependencies' => 
            array (
              0 => 'addressfield',
              1 => 'commerce_shipping',
            ),
            'version' => '7.x-1.0-alpha7',
            'project' => 'commerce_discount',
            'datestamp' => '1445639056',
            'php' => '5.2.4',
          ),
          'schema_version' => '7108',
          'version' => '7.x-1.0-alpha7',
        ),
        'commerce_hosted_pci' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_hosted_pci/commerce_hosted_pci.module',
          'basename' => 'commerce_hosted_pci.module',
          'name' => 'commerce_hosted_pci',
          'info' => 
          array (
            'name' => 'Hosted PCI',
            'description' => 'Implements Hosted PCI payments services for use with Drupal Commerce.',
            'package' => 'Commerce (payment)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/payment-methods/manage/commerce_payment_hosted_pci',
            'version' => '7.x-1.0-rc2',
            'project' => 'commerce_hosted_pci',
            'datestamp' => '1367313016',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'fences' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/fences/fences.module',
          'basename' => 'fences.module',
          'name' => 'fences',
          'info' => 
          array (
            'name' => 'Fences',
            'description' => 'Configurable field wrappers',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'configure' => 'admin/config/content/fences',
            'version' => '7.x-1.2',
            'project' => 'fences',
            'datestamp' => '1443071044',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.2',
        ),
        'commerce_authnet' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_authnet/commerce_authnet.module',
          'basename' => 'commerce_authnet.module',
          'name' => 'commerce_authnet',
          'info' => 
          array (
            'name' => 'Authorize.Net',
            'description' => 'Implements Authorize.Net payment services for use with Drupal Commerce.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_authnet.module',
              1 => 'includes/commerce_authnet.admin.inc',
            ),
            'version' => '7.x-1.1',
            'project' => 'commerce_authnet',
            'datestamp' => '1368798834',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'title' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/title/title.module',
          'basename' => 'title.module',
          'name' => 'title',
          'info' => 
          array (
            'name' => 'Title',
            'description' => 'Replaces entity legacy fields with regular fields.',
            'core' => '7.x',
            'package' => 'Fields',
            'configure' => 'admin/config/content/title',
            'dependencies' => 
            array (
              0 => 'system (>7.14)',
            ),
            'files' => 
            array (
              0 => 'title.module',
              1 => 'views/views_handler_title_field.inc',
              2 => 'tests/title.test',
            ),
            'version' => '7.x-1.0-alpha7',
            'project' => 'title',
            'datestamp' => '1363626024',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.0-alpha7',
        ),
        'commerce_autosku' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_autosku/commerce_autosku.module',
          'basename' => 'commerce_autosku.module',
          'name' => 'commerce_autosku',
          'info' => 
          array (
            'name' => 'Commerce AutoSKU',
            'description' => 'Automatically Creates the SKU of a product using tokens.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_product',
              1 => 'ctools',
            ),
            'test_dependencies' => 
            array (
              0 => 'commerce_product_ui',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_autosku.test',
            ),
            'version' => '7.x-1.1+12-dev',
            'project' => 'commerce_autosku',
            'datestamp' => '1452771920',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.1+12-dev',
        ),
        'commerce_payleap' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_payleap/commerce_payleap.module',
          'basename' => 'commerce_payleap.module',
          'name' => 'commerce_payleap',
          'info' => 
          array (
            'name' => 'Commerce PayLeap',
            'description' => 'Implements PayLeap payment services for use with Drupal Commerce.',
            'package' => 'Commerce (payment)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/commerce_payleap.test',
            ),
            'version' => '7.x-1.1',
            'project' => 'commerce_payleap',
            'datestamp' => '1374768067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'message_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/message/message_example/message_example.module',
          'basename' => 'message_example.module',
          'name' => 'message_example',
          'info' => 
          array (
            'name' => 'Message example',
            'description' => 'Message example.',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'list',
              4 => 'message',
              5 => 'strongarm',
              6 => 'token',
              7 => 'views',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/message_example.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'message-example_create_comment-field_comment_ref',
                1 => 'message-example_create_comment-field_node_ref',
                2 => 'message-example_create_comment-field_published',
                3 => 'message-example_create_node-field_node_ref',
                4 => 'message-example_create_node-field_published',
                5 => 'message-example_user_register-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_create_comment',
                1 => 'example_create_node',
                2 => 'example_user_register',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_message__example_create_comment',
                1 => 'field_bundle_settings_message__example_create_node',
                2 => 'field_bundle_settings_message__example_user_register',
              ),
              'views_view' => 
              array (
                0 => 'message_example',
              ),
            ),
            'version' => '7.x-1.11',
            'project' => 'message',
            'datestamp' => '1450768746',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'message_og_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/message/message_og_example/message_og_example.module',
          'basename' => 'message_og_example.module',
          'name' => 'message_og_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'entityreference',
              1 => 'features',
              2 => 'list',
              3 => 'message',
              4 => 'message_example',
              5 => 'og',
              6 => 'views',
            ),
            'description' => 'Message integration with Organic groups example.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-example_og_post_in_group-field_node_groups_ref',
                1 => 'message-example_og_post_in_group-field_node_ref',
                2 => 'message-example_og_post_in_group-field_published',
                3 => 'message-example_og_user_membership-field_node_groups_ref',
                4 => 'message-example_og_user_membership-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_og_post_in_group',
                1 => 'example_og_user_membership',
              ),
              'views_view' => 
              array (
                0 => 'message_og_example',
              ),
            ),
            'name' => 'Message OG example',
            'package' => 'Message',
            'php' => '5.2.4',
            'version' => '7.x-1.11',
            'project' => 'message',
            'datestamp' => '1450768746',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'message' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/message/message.module',
          'basename' => 'message.module',
          'name' => 'message',
          'info' => 
          array (
            'name' => 'Message',
            'description' => 'A general message logging utility.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'files' => 
            array (
              0 => 'message.info.inc',
              1 => 'includes/message.admin.inc',
              2 => 'includes/message.exception.inc',
              3 => 'includes/message.message_type_category.inc',
              4 => 'includes/message.message_type.inc',
              5 => 'includes/message.message.inc',
              6 => 'message.test',
              7 => 'includes/views/message.views.inc',
              8 => 'includes/views/handlers/message_handler_field_message_render.inc',
              9 => 'includes/views/handlers/message_handler_filter_message_type.inc',
              10 => 'includes/views/handlers/message_handler_filter_message_type_category.inc',
            ),
            'version' => '7.x-1.11',
            'project' => 'message',
            'datestamp' => '1450768746',
            'php' => '5.2.4',
          ),
          'schema_version' => '7012',
          'version' => '7.x-1.11',
        ),
        'commerce_checkout_redirect' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_checkout_redirect/commerce_checkout_redirect.module',
          'basename' => 'commerce_checkout_redirect.module',
          'name' => 'commerce_checkout_redirect',
          'info' => 
          array (
            'name' => 'Commerce Checkout Redirect',
            'description' => 'Force anonymous users to login before being able to checkout.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_cart',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/checkout_redirect',
            'version' => '7.x-2.0-rc1',
            'project' => 'commerce_checkout_redirect',
            'datestamp' => '1406127529',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-rc1',
        ),
        'commerce_firstdata_gge4_ws' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_firstdata_gge4/modules/commerce_firstdata_gge4_ws/commerce_firstdata_gge4_ws.module',
          'basename' => 'commerce_firstdata_gge4_ws.module',
          'name' => 'commerce_firstdata_gge4_ws',
          'info' => 
          array (
            'name' => 'First Data Global Gateway e4 Web Service',
            'description' => 'Implements First Data Global Gateway e4 web service for use with Drupal Commerce.',
            'package' => 'Commerce (payment)',
            'dependencies' => 
            array (
              0 => 'commerce_firstdata_gge4',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'commerce_firstdata_gge4',
            'datestamp' => '1387206506',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'commerce_firstdata_gge4_hpp' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_firstdata_gge4/modules/commerce_firstdata_gge4_hpp/commerce_firstdata_gge4_hpp.module',
          'basename' => 'commerce_firstdata_gge4_hpp.module',
          'name' => 'commerce_firstdata_gge4_hpp',
          'info' => 
          array (
            'name' => 'First Data Global Gateway e4 Hosted Payment Pages',
            'description' => 'Implements First Data Global Gateway e4 Hosted Payment Pages for use with Drupal Commerce.',
            'package' => 'Commerce (payment)',
            'dependencies' => 
            array (
              0 => 'commerce_firstdata_gge4',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'commerce_firstdata_gge4',
            'datestamp' => '1387206506',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'commerce_firstdata_gge4' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_firstdata_gge4/commerce_firstdata_gge4.module',
          'basename' => 'commerce_firstdata_gge4.module',
          'name' => 'commerce_firstdata_gge4',
          'info' => 
          array (
            'name' => 'First Data Global Gateway e4',
            'description' => 'Implements First Data Global Gateway e4 payment services for use with Drupal Commerce.',
            'package' => 'Commerce (payment)',
            'dependencies' => 
            array (
              0 => 'commerce_payment',
              1 => 'commerce_order',
              2 => 'commerce_customer',
              3 => 'addressfield',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/component/base.inc',
              1 => 'includes/commerce_firstdata_gge4.controller.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'commerce_firstdata_gge4',
            'datestamp' => '1387206506',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'taxonomy_menu' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/taxonomy_menu/taxonomy_menu.module',
          'basename' => 'taxonomy_menu.module',
          'name' => 'taxonomy_menu',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'menu',
            ),
            'description' => 'Adds links to taxonomy terms to a menu.',
            'name' => 'Taxonomy menu',
            'package' => 'Taxonomy menu',
            'files' => 
            array (
              0 => 'taxonomy_menu.batch.inc',
              1 => 'taxonomy_menu.database.inc',
              2 => 'taxonomy_menu.module',
              3 => 'taxonomy_menu.test',
              4 => 'taxonomy_menu.install',
            ),
            'version' => '7.x-1.5',
            'project' => 'taxonomy_menu',
            'datestamp' => '1396359247',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.5',
        ),
        'views_export' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'views' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
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
              1 => 'handlers/views_handler_area_messages.inc',
              2 => 'handlers/views_handler_area_result.inc',
              3 => 'handlers/views_handler_area_text.inc',
              4 => 'handlers/views_handler_area_text_custom.inc',
              5 => 'handlers/views_handler_area_view.inc',
              6 => 'handlers/views_handler_argument.inc',
              7 => 'handlers/views_handler_argument_date.inc',
              8 => 'handlers/views_handler_argument_formula.inc',
              9 => 'handlers/views_handler_argument_many_to_one.inc',
              10 => 'handlers/views_handler_argument_null.inc',
              11 => 'handlers/views_handler_argument_numeric.inc',
              12 => 'handlers/views_handler_argument_string.inc',
              13 => 'handlers/views_handler_argument_group_by_numeric.inc',
              14 => 'handlers/views_handler_field.inc',
              15 => 'handlers/views_handler_field_counter.inc',
              16 => 'handlers/views_handler_field_boolean.inc',
              17 => 'handlers/views_handler_field_contextual_links.inc',
              18 => 'handlers/views_handler_field_custom.inc',
              19 => 'handlers/views_handler_field_date.inc',
              20 => 'handlers/views_handler_field_entity.inc',
              21 => 'handlers/views_handler_field_markup.inc',
              22 => 'handlers/views_handler_field_math.inc',
              23 => 'handlers/views_handler_field_numeric.inc',
              24 => 'handlers/views_handler_field_prerender_list.inc',
              25 => 'handlers/views_handler_field_time_interval.inc',
              26 => 'handlers/views_handler_field_serialized.inc',
              27 => 'handlers/views_handler_field_machine_name.inc',
              28 => 'handlers/views_handler_field_url.inc',
              29 => 'handlers/views_handler_filter.inc',
              30 => 'handlers/views_handler_filter_boolean_operator.inc',
              31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              32 => 'handlers/views_handler_filter_combine.inc',
              33 => 'handlers/views_handler_filter_date.inc',
              34 => 'handlers/views_handler_filter_equality.inc',
              35 => 'handlers/views_handler_filter_entity_bundle.inc',
              36 => 'handlers/views_handler_filter_group_by_numeric.inc',
              37 => 'handlers/views_handler_filter_in_operator.inc',
              38 => 'handlers/views_handler_filter_many_to_one.inc',
              39 => 'handlers/views_handler_filter_numeric.inc',
              40 => 'handlers/views_handler_filter_string.inc',
              41 => 'handlers/views_handler_filter_fields_compare.inc',
              42 => 'handlers/views_handler_relationship.inc',
              43 => 'handlers/views_handler_relationship_groupwise_max.inc',
              44 => 'handlers/views_handler_sort.inc',
              45 => 'handlers/views_handler_sort_date.inc',
              46 => 'handlers/views_handler_sort_formula.inc',
              47 => 'handlers/views_handler_sort_group_by_numeric.inc',
              48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              49 => 'handlers/views_handler_sort_random.inc',
              50 => 'includes/base.inc',
              51 => 'includes/handlers.inc',
              52 => 'includes/plugins.inc',
              53 => 'includes/view.inc',
              54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              63 => 'modules/book/views_plugin_argument_default_book_root.inc',
              64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              65 => 'modules/comment/views_handler_field_comment.inc',
              66 => 'modules/comment/views_handler_field_comment_depth.inc',
              67 => 'modules/comment/views_handler_field_comment_link.inc',
              68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              72 => 'modules/comment/views_handler_field_comment_node_link.inc',
              73 => 'modules/comment/views_handler_field_comment_username.inc',
              74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              76 => 'modules/comment/views_handler_field_node_comment.inc',
              77 => 'modules/comment/views_handler_field_node_new_comments.inc',
              78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              81 => 'modules/comment/views_handler_filter_node_comment.inc',
              82 => 'modules/comment/views_handler_sort_comment_thread.inc',
              83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              85 => 'modules/comment/views_plugin_row_comment_rss.inc',
              86 => 'modules/comment/views_plugin_row_comment_view.inc',
              87 => 'modules/contact/views_handler_field_contact_link.inc',
              88 => 'modules/field/views_handler_field_field.inc',
              89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              90 => 'modules/field/views_handler_argument_field_list.inc',
              91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
              92 => 'modules/field/views_handler_argument_field_list_string.inc',
              93 => 'modules/field/views_handler_filter_field_list.inc',
              94 => 'modules/filter/views_handler_field_filter_format_name.inc',
              95 => 'modules/locale/views_handler_field_node_language.inc',
              96 => 'modules/locale/views_handler_filter_node_language.inc',
              97 => 'modules/locale/views_handler_argument_locale_group.inc',
              98 => 'modules/locale/views_handler_argument_locale_language.inc',
              99 => 'modules/locale/views_handler_field_locale_group.inc',
              100 => 'modules/locale/views_handler_field_locale_language.inc',
              101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              102 => 'modules/locale/views_handler_filter_locale_group.inc',
              103 => 'modules/locale/views_handler_filter_locale_language.inc',
              104 => 'modules/locale/views_handler_filter_locale_version.inc',
              105 => 'modules/node/views_handler_argument_dates_various.inc',
              106 => 'modules/node/views_handler_argument_node_language.inc',
              107 => 'modules/node/views_handler_argument_node_nid.inc',
              108 => 'modules/node/views_handler_argument_node_type.inc',
              109 => 'modules/node/views_handler_argument_node_vid.inc',
              110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              112 => 'modules/node/views_handler_field_node.inc',
              113 => 'modules/node/views_handler_field_node_link.inc',
              114 => 'modules/node/views_handler_field_node_link_delete.inc',
              115 => 'modules/node/views_handler_field_node_link_edit.inc',
              116 => 'modules/node/views_handler_field_node_revision.inc',
              117 => 'modules/node/views_handler_field_node_revision_link.inc',
              118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              120 => 'modules/node/views_handler_field_node_path.inc',
              121 => 'modules/node/views_handler_field_node_type.inc',
              122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              123 => 'modules/node/views_handler_filter_node_access.inc',
              124 => 'modules/node/views_handler_filter_node_status.inc',
              125 => 'modules/node/views_handler_filter_node_type.inc',
              126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              127 => 'modules/node/views_plugin_argument_default_node.inc',
              128 => 'modules/node/views_plugin_argument_validate_node.inc',
              129 => 'modules/node/views_plugin_row_node_rss.inc',
              130 => 'modules/node/views_plugin_row_node_view.inc',
              131 => 'modules/profile/views_handler_field_profile_date.inc',
              132 => 'modules/profile/views_handler_field_profile_list.inc',
              133 => 'modules/profile/views_handler_filter_profile_selection.inc',
              134 => 'modules/search/views_handler_argument_search.inc',
              135 => 'modules/search/views_handler_field_search_score.inc',
              136 => 'modules/search/views_handler_filter_search.inc',
              137 => 'modules/search/views_handler_sort_search_score.inc',
              138 => 'modules/search/views_plugin_row_search_view.inc',
              139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              140 => 'modules/system/views_handler_argument_file_fid.inc',
              141 => 'modules/system/views_handler_field_file.inc',
              142 => 'modules/system/views_handler_field_file_extension.inc',
              143 => 'modules/system/views_handler_field_file_filemime.inc',
              144 => 'modules/system/views_handler_field_file_uri.inc',
              145 => 'modules/system/views_handler_field_file_status.inc',
              146 => 'modules/system/views_handler_filter_file_status.inc',
              147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
              164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
              165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
              166 => 'modules/system/views_handler_filter_system_type.inc',
              167 => 'modules/translation/views_handler_argument_node_tnid.inc',
              168 => 'modules/translation/views_handler_field_node_link_translate.inc',
              169 => 'modules/translation/views_handler_field_node_translation_link.inc',
              170 => 'modules/translation/views_handler_filter_node_tnid.inc',
              171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              172 => 'modules/translation/views_handler_relationship_translation.inc',
              173 => 'modules/user/views_handler_argument_user_uid.inc',
              174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              175 => 'modules/user/views_handler_field_user.inc',
              176 => 'modules/user/views_handler_field_user_language.inc',
              177 => 'modules/user/views_handler_field_user_link.inc',
              178 => 'modules/user/views_handler_field_user_link_cancel.inc',
              179 => 'modules/user/views_handler_field_user_link_edit.inc',
              180 => 'modules/user/views_handler_field_user_mail.inc',
              181 => 'modules/user/views_handler_field_user_name.inc',
              182 => 'modules/user/views_handler_field_user_permissions.inc',
              183 => 'modules/user/views_handler_field_user_picture.inc',
              184 => 'modules/user/views_handler_field_user_roles.inc',
              185 => 'modules/user/views_handler_filter_user_current.inc',
              186 => 'modules/user/views_handler_filter_user_name.inc',
              187 => 'modules/user/views_handler_filter_user_permissions.inc',
              188 => 'modules/user/views_handler_filter_user_roles.inc',
              189 => 'modules/user/views_plugin_argument_default_current_user.inc',
              190 => 'modules/user/views_plugin_argument_default_user.inc',
              191 => 'modules/user/views_plugin_argument_validate_user.inc',
              192 => 'modules/user/views_plugin_row_user_view.inc',
              193 => 'plugins/views_plugin_access.inc',
              194 => 'plugins/views_plugin_access_none.inc',
              195 => 'plugins/views_plugin_access_perm.inc',
              196 => 'plugins/views_plugin_access_role.inc',
              197 => 'plugins/views_plugin_argument_default.inc',
              198 => 'plugins/views_plugin_argument_default_php.inc',
              199 => 'plugins/views_plugin_argument_default_fixed.inc',
              200 => 'plugins/views_plugin_argument_default_raw.inc',
              201 => 'plugins/views_plugin_argument_validate.inc',
              202 => 'plugins/views_plugin_argument_validate_numeric.inc',
              203 => 'plugins/views_plugin_argument_validate_php.inc',
              204 => 'plugins/views_plugin_cache.inc',
              205 => 'plugins/views_plugin_cache_none.inc',
              206 => 'plugins/views_plugin_cache_time.inc',
              207 => 'plugins/views_plugin_display.inc',
              208 => 'plugins/views_plugin_display_attachment.inc',
              209 => 'plugins/views_plugin_display_block.inc',
              210 => 'plugins/views_plugin_display_default.inc',
              211 => 'plugins/views_plugin_display_embed.inc',
              212 => 'plugins/views_plugin_display_extender.inc',
              213 => 'plugins/views_plugin_display_feed.inc',
              214 => 'plugins/views_plugin_display_page.inc',
              215 => 'plugins/views_plugin_exposed_form_basic.inc',
              216 => 'plugins/views_plugin_exposed_form.inc',
              217 => 'plugins/views_plugin_exposed_form_input_required.inc',
              218 => 'plugins/views_plugin_localization_core.inc',
              219 => 'plugins/views_plugin_localization.inc',
              220 => 'plugins/views_plugin_localization_none.inc',
              221 => 'plugins/views_plugin_pager.inc',
              222 => 'plugins/views_plugin_pager_full.inc',
              223 => 'plugins/views_plugin_pager_mini.inc',
              224 => 'plugins/views_plugin_pager_none.inc',
              225 => 'plugins/views_plugin_pager_some.inc',
              226 => 'plugins/views_plugin_query.inc',
              227 => 'plugins/views_plugin_query_default.inc',
              228 => 'plugins/views_plugin_row.inc',
              229 => 'plugins/views_plugin_row_fields.inc',
              230 => 'plugins/views_plugin_row_rss_fields.inc',
              231 => 'plugins/views_plugin_style.inc',
              232 => 'plugins/views_plugin_style_default.inc',
              233 => 'plugins/views_plugin_style_grid.inc',
              234 => 'plugins/views_plugin_style_list.inc',
              235 => 'plugins/views_plugin_style_jump_menu.inc',
              236 => 'plugins/views_plugin_style_mapping.inc',
              237 => 'plugins/views_plugin_style_rss.inc',
              238 => 'plugins/views_plugin_style_summary.inc',
              239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              240 => 'plugins/views_plugin_style_summary_unformatted.inc',
              241 => 'plugins/views_plugin_style_table.inc',
              242 => 'tests/handlers/views_handlers.test',
              243 => 'tests/handlers/views_handler_area_text.test',
              244 => 'tests/handlers/views_handler_argument_null.test',
              245 => 'tests/handlers/views_handler_argument_string.test',
              246 => 'tests/handlers/views_handler_field.test',
              247 => 'tests/handlers/views_handler_field_boolean.test',
              248 => 'tests/handlers/views_handler_field_custom.test',
              249 => 'tests/handlers/views_handler_field_counter.test',
              250 => 'tests/handlers/views_handler_field_date.test',
              251 => 'tests/handlers/views_handler_field_file_extension.test',
              252 => 'tests/handlers/views_handler_field_file_size.test',
              253 => 'tests/handlers/views_handler_field_math.test',
              254 => 'tests/handlers/views_handler_field_url.test',
              255 => 'tests/handlers/views_handler_field_xss.test',
              256 => 'tests/handlers/views_handler_filter_combine.test',
              257 => 'tests/handlers/views_handler_filter_date.test',
              258 => 'tests/handlers/views_handler_filter_equality.test',
              259 => 'tests/handlers/views_handler_filter_in_operator.test',
              260 => 'tests/handlers/views_handler_filter_numeric.test',
              261 => 'tests/handlers/views_handler_filter_string.test',
              262 => 'tests/handlers/views_handler_sort_random.test',
              263 => 'tests/handlers/views_handler_sort_date.test',
              264 => 'tests/handlers/views_handler_sort.test',
              265 => 'tests/test_handlers/views_test_area_access.inc',
              266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
              269 => 'tests/plugins/views_plugin_display.test',
              270 => 'tests/styles/views_plugin_style_jump_menu.test',
              271 => 'tests/styles/views_plugin_style.test',
              272 => 'tests/styles/views_plugin_style_base.test',
              273 => 'tests/styles/views_plugin_style_mapping.test',
              274 => 'tests/styles/views_plugin_style_unformatted.test',
              275 => 'tests/views_access.test',
              276 => 'tests/views_analyze.test',
              277 => 'tests/views_basic.test',
              278 => 'tests/views_argument_default.test',
              279 => 'tests/views_argument_validator.test',
              280 => 'tests/views_exposed_form.test',
              281 => 'tests/field/views_fieldapi.test',
              282 => 'tests/views_glossary.test',
              283 => 'tests/views_groupby.test',
              284 => 'tests/views_handlers.test',
              285 => 'tests/views_module.test',
              286 => 'tests/views_pager.test',
              287 => 'tests/views_plugin_localization_test.inc',
              288 => 'tests/views_translatable.test',
              289 => 'tests/views_query.test',
              290 => 'tests/views_upgrade.test',
              291 => 'tests/views_test.views_default.inc',
              292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              294 => 'tests/node/views_node_revision_relations.test',
              295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              296 => 'tests/user/views_handler_field_user_name.test',
              297 => 'tests/user/views_user_argument_default.test',
              298 => 'tests/user/views_user_argument_validate.test',
              299 => 'tests/user/views_user.test',
              300 => 'tests/views_cache.test',
              301 => 'tests/views_view.test',
              302 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.13',
            'project' => 'views',
            'datestamp' => '1446804876',
          ),
          'schema_version' => '7302',
          'version' => '7.x-3.13',
        ),
        'views_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
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
            'version' => '7.x-3.13',
            'project' => 'views',
            'datestamp' => '1446804876',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.13',
        ),
        'eva' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/eva/eva.module',
          'basename' => 'eva.module',
          'name' => 'eva',
          'info' => 
          array (
            'name' => 'Eva',
            'description' => 'Provides a Views display type that can be attached to entities.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'package' => 'Views',
            'files' => 
            array (
              0 => 'eva_plugin_display_entity.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'eva',
            'datestamp' => '1343701935',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'commerce_amex' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_amex/commerce_amex.module',
          'basename' => 'commerce_amex.module',
          'name' => 'commerce_amex',
          'info' => 
          array (
            'name' => 'Commerce American Express',
            'description' => 'Implements American Express payment gateway for use with Drupal Commerce.',
            'package' => 'Commerce Payments',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
              4 => 'countries',
            ),
            'core' => '7.x',
            'version' => '7.x-1.1',
            'project' => 'commerce_amex',
            'datestamp' => '1375445167',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'strongarm' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/strongarm/strongarm.module',
          'basename' => 'strongarm.module',
          'name' => 'strongarm',
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
            'version' => '7.x-2.0',
            'project' => 'strongarm',
            'datestamp' => '1339604214',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.0',
        ),
        'migrate_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate/migrate_ui/migrate_ui.module',
          'basename' => 'migrate_ui.module',
          'name' => 'migrate_ui',
          'info' => 
          array (
            'name' => 'Migrate UI',
            'description' => 'UI for managing migration processes',
            'package' => 'Migration',
            'configure' => 'admin/content/migrate/configure',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'migrate',
            ),
            'files' => 
            array (
              0 => 'migrate_ui.wizard.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.8',
        ),
        'migrate_example_oracle' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate/migrate_example/migrate_example_oracle/migrate_example_oracle.module',
          'basename' => 'migrate_example_oracle.module',
          'name' => 'migrate_example_oracle',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'image',
              2 => 'migrate',
            ),
            'description' => 'Content type supporting example of Oracle migration',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_oracle-body',
                1 => 'node-migrate_example_oracle-field_mainimage',
              ),
              'node' => 
              array (
                0 => 'migrate_example_oracle',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_example_oracle.migrate.inc',
            ),
            'name' => 'Migrate example - Oracle',
            'package' => 'Migration',
            'project' => 'migrate',
            'version' => '7.x-2.8',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.8',
        ),
        'migrate_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate/migrate_example/migrate_example.module',
          'basename' => 'migrate_example.module',
          'name' => 'migrate_example',
          'info' => 
          array (
            'name' => 'Migrate Example',
            'description' => 'Example migration data.',
            'package' => 'Migration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'image',
              2 => 'comment',
              3 => 'migrate',
              4 => 'list',
              5 => 'number',
            ),
            'files' => 
            array (
              0 => 'beer.inc',
              1 => 'wine.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => '7007',
          'version' => '7.x-2.8',
        ),
        'migrate_example_baseball' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate/migrate_example_baseball/migrate_example_baseball.module',
          'basename' => 'migrate_example_baseball.module',
          'name' => 'migrate_example_baseball',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'migrate',
              2 => 'number',
            ),
            'description' => 'Import baseball box scores.',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_baseball-body',
                1 => 'node-migrate_example_baseball-field_attendance',
                2 => 'node-migrate_example_baseball-field_duration',
                3 => 'node-migrate_example_baseball-field_home_batters',
                4 => 'node-migrate_example_baseball-field_home_game_number',
                5 => 'node-migrate_example_baseball-field_home_pitcher',
                6 => 'node-migrate_example_baseball-field_home_score',
                7 => 'node-migrate_example_baseball-field_home_team',
                8 => 'node-migrate_example_baseball-field_outs',
                9 => 'node-migrate_example_baseball-field_park',
                10 => 'node-migrate_example_baseball-field_start_date',
                11 => 'node-migrate_example_baseball-field_visiting_batters',
                12 => 'node-migrate_example_baseball-field_visiting_pitcher',
                13 => 'node-migrate_example_baseball-field_visiting_score',
                14 => 'node-migrate_example_baseball-field_visiting_team',
              ),
              'node' => 
              array (
                0 => 'migrate_example_baseball',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_example_baseball.migrate.inc',
            ),
            'name' => 'migrate_example_baseball',
            'package' => 'Migration',
            'php' => '5.2.4',
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.8',
        ),
        'migrate' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate/migrate.module',
          'basename' => 'migrate.module',
          'name' => 'migrate',
          'info' => 
          array (
            'name' => 'Migrate',
            'description' => 'Import content from external sources',
            'package' => 'Migration',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/base.inc',
              1 => 'includes/field_mapping.inc',
              2 => 'includes/migration.inc',
              3 => 'includes/destination.inc',
              4 => 'includes/exception.inc',
              5 => 'includes/group.inc',
              6 => 'includes/handler.inc',
              7 => 'includes/map.inc',
              8 => 'includes/source.inc',
              9 => 'includes/team.inc',
              10 => 'migrate.mail.inc',
              11 => 'plugins/destinations/block_custom.inc',
              12 => 'plugins/destinations/entity.inc',
              13 => 'plugins/destinations/term.inc',
              14 => 'plugins/destinations/user.inc',
              15 => 'plugins/destinations/node.inc',
              16 => 'plugins/destinations/comment.inc',
              17 => 'plugins/destinations/file.inc',
              18 => 'plugins/destinations/path.inc',
              19 => 'plugins/destinations/fields.inc',
              20 => 'plugins/destinations/poll.inc',
              21 => 'plugins/destinations/table.inc',
              22 => 'plugins/destinations/table_copy.inc',
              23 => 'plugins/destinations/menu.inc',
              24 => 'plugins/destinations/menu_links.inc',
              25 => 'plugins/destinations/statistics.inc',
              26 => 'plugins/destinations/variable.inc',
              27 => 'plugins/sources/csv.inc',
              28 => 'plugins/sources/db2.inc',
              29 => 'plugins/sources/files.inc',
              30 => 'plugins/sources/json.inc',
              31 => 'plugins/sources/list.inc',
              32 => 'plugins/sources/mongodb.inc',
              33 => 'plugins/sources/multiitems.inc',
              34 => 'plugins/sources/sql.inc',
              35 => 'plugins/sources/sqlmap.inc',
              36 => 'plugins/sources/mssql.inc',
              37 => 'plugins/sources/oracle.inc',
              38 => 'plugins/sources/spreadsheet.inc',
              39 => 'plugins/sources/xml.inc',
              40 => 'tests/import/options.test',
              41 => 'tests/plugins/destinations/comment.test',
              42 => 'tests/plugins/destinations/node.test',
              43 => 'tests/plugins/destinations/table.test',
              44 => 'tests/plugins/destinations/term.test',
              45 => 'tests/plugins/destinations/user.test',
              46 => 'tests/plugins/sources/xml.test',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7207',
          'version' => '7.x-2.8',
        ),
        'link' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/link/link.module',
          'basename' => 'link.module',
          'name' => 'link',
          'info' => 
          array (
            'name' => 'Link',
            'description' => 'Defines simple link field types.',
            'core' => '7.x',
            'package' => 'Fields',
            'files' => 
            array (
              0 => 'link.module',
              1 => 'link.migrate.inc',
              2 => 'tests/link.test',
              3 => 'tests/link.attribute.test',
              4 => 'tests/link.crud.test',
              5 => 'tests/link.crud_browser.test',
              6 => 'tests/link.token.test',
              7 => 'tests/link.validate.test',
              8 => 'views/link_views_handler_argument_target.inc',
              9 => 'views/link_views_handler_filter_protocol.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'link',
            'datestamp' => '1413924830',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.3',
        ),
        'i18n_select' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_select/i18n_select.module',
          'basename' => 'i18n_select.module',
          'name' => 'i18n_select',
          'info' => 
          array (
            'name' => 'Multilingual select',
            'description' => 'API module for multilingual content selection',
            'dependencies' => 
            array (
              0 => 'i18n',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'configure' => 'admin/config/regional/i18n/select',
            'files' => 
            array (
              0 => 'i18n_select.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_field' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_field/i18n_field.module',
          'basename' => 'i18n_field.module',
          'name' => 'i18n_field',
          'info' => 
          array (
            'name' => 'Field translation',
            'description' => 'Translate field properties',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_field.inc',
              1 => 'i18n_field.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.13',
        ),
        'i18n_sync' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_sync/i18n_sync.module',
          'basename' => 'i18n_sync.module',
          'name' => 'i18n_sync',
          'info' => 
          array (
            'name' => 'Synchronize translations',
            'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'translation',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_sync.module',
              1 => 'i18n_sync.install',
              2 => 'i18n_sync.module.inc',
              3 => 'i18n_sync.node.inc',
              4 => 'i18n_sync.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.13',
        ),
        'i18n_path' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_path/i18n_path.module',
          'basename' => 'i18n_path.module',
          'name' => 'i18n_path',
          'info' => 
          array (
            'name' => 'Path translation',
            'description' => 'Define translations for generic paths',
            'dependencies' => 
            array (
              0 => 'i18n_translation',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_path.inc',
              1 => 'i18n_path.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.13',
        ),
        'i18n_forum' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_forum/i18n_forum.module',
          'basename' => 'i18n_forum.module',
          'name' => 'i18n_forum',
          'info' => 
          array (
            'name' => 'Multilingual forum',
            'description' => 'Enables multilingual forum, translates names and containers.',
            'dependencies' => 
            array (
              0 => 'forum',
              1 => 'i18n_taxonomy',
              2 => 'i18n_node',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_forum.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_translation' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_translation/i18n_translation.module',
          'basename' => 'i18n_translation.module',
          'name' => 'i18n_translation',
          'info' => 
          array (
            'name' => 'Translation sets',
            'description' => 'Simple translation sets API for generic objects',
            'dependencies' => 
            array (
              0 => 'i18n',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_translation.inc',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_user' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_user/i18n_user.module',
          'basename' => 'i18n_user.module',
          'name' => 'i18n_user',
          'info' => 
          array (
            'name' => 'User mail translation',
            'description' => 'Translate emails sent from the User module.',
            'core' => '7.x',
            'package' => 'Multilingual - Internationalization',
            'dependencies' => 
            array (
              0 => 'i18n_variable',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_redirect' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
          'basename' => 'i18n_redirect.module',
          'name' => 'i18n_redirect',
          'info' => 
          array (
            'name' => 'Translation redirect',
            'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
            'dependencies' => 
            array (
              0 => 'i18n',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_node' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_node/i18n_node.module',
          'basename' => 'i18n_node.module',
          'name' => 'i18n_node',
          'info' => 
          array (
            'name' => 'Multilingual content',
            'description' => 'Extended node options for multilingual content',
            'dependencies' => 
            array (
              0 => 'translation',
              1 => 'i18n',
              2 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'configure' => 'admin/config/regional/i18n/node',
            'files' => 
            array (
              0 => 'i18n_node.test',
              1 => 'i18n_node.variable.inc',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.13',
        ),
        'i18n_contact' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_contact/i18n_contact.module',
          'basename' => 'i18n_contact.module',
          'name' => 'i18n_contact',
          'info' => 
          array (
            'name' => 'Contact translation',
            'description' => 'Makes contact categories and replies available for translation.',
            'dependencies' => 
            array (
              0 => 'contact',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.13',
        ),
        'i18n_variable' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_variable/i18n_variable.module',
          'basename' => 'i18n_variable.module',
          'name' => 'i18n_variable',
          'info' => 
          array (
            'name' => 'Variable translation',
            'description' => 'Multilingual variables that switch language depending on page language.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'variable_store (7.x-2.x)',
              2 => 'variable_realm (7.x-2.x)',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'configure' => 'admin/config/regional/i18n/variable',
            'files' => 
            array (
              0 => 'i18n_variable.class.inc',
              1 => 'i18n_variable.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7004',
          'version' => '7.x-1.13',
        ),
        'i18n_block' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_block/i18n_block.module',
          'basename' => 'i18n_block.module',
          'name' => 'i18n_block',
          'info' => 
          array (
            'name' => 'Block languages',
            'description' => 'Enables language selector for blocks and optional block translation.',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_block.inc',
              1 => 'i18n_block.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.13',
        ),
        'i18n_menu' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_menu/i18n_menu.module',
          'basename' => 'i18n_menu.module',
          'name' => 'i18n_menu',
          'info' => 
          array (
            'name' => 'Menu translation',
            'description' => 'Supports translatable custom menu items.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'menu',
              2 => 'i18n_string',
              3 => 'i18n_translation',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_menu.inc',
              1 => 'i18n_menu.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.13',
        ),
        'i18n_string' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_string/i18n_string.module',
          'basename' => 'i18n_string.module',
          'name' => 'i18n_string',
          'info' => 
          array (
            'name' => 'String translation',
            'description' => 'Provides support for translation of user defined strings.',
            'dependencies' => 
            array (
              0 => 'locale',
              1 => 'i18n',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_string.admin.inc',
              1 => 'i18n_string.inc',
              2 => 'i18n_string.test',
            ),
            'configure' => 'admin/config/regional/i18n/strings',
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.13',
        ),
        'i18n_taxonomy' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
          'basename' => 'i18n_taxonomy.module',
          'name' => 'i18n_taxonomy',
          'info' => 
          array (
            'name' => 'Taxonomy translation',
            'description' => 'Enables multilingual taxonomy.',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'i18n_string',
              2 => 'i18n_translation',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_taxonomy.inc',
              1 => 'i18n_taxonomy.pages.inc',
              2 => 'i18n_taxonomy.admin.inc',
              3 => 'i18n_taxonomy.test',
            ),
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7004',
          'version' => '7.x-1.13',
        ),
        'i18n' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/i18n/i18n.module',
          'basename' => 'i18n.module',
          'name' => 'i18n',
          'info' => 
          array (
            'name' => 'Internationalization',
            'description' => 'Extends Drupal support for multilingual features.',
            'dependencies' => 
            array (
              0 => 'locale',
              1 => 'variable',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'i18n_object.inc',
              1 => 'i18n.test',
            ),
            'configure' => 'admin/config/regional/i18n',
            'version' => '7.x-1.13',
            'project' => 'i18n',
            'datestamp' => '1430999922',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.13',
        ),
        'message_notify_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/message_notify/message_notify_example/message_notify_example.module',
          'basename' => 'message_notify_example.module',
          'name' => 'message_notify_example',
          'info' => 
          array (
            'name' => 'Message notify example',
            'description' => 'Message notify example',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'message',
              4 => 'message_notify',
              5 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-comment_insert-field_comment_ref',
                1 => 'message-comment_insert-field_message_rendered_body',
                2 => 'message-comment_insert-field_message_rendered_subject',
              ),
              'message_type' => 
              array (
                0 => 'comment_insert',
              ),
              'views_view' => 
              array (
                0 => 'message_notify_example',
              ),
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'message_notify' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/message_notify/message_notify.module',
          'basename' => 'message_notify.module',
          'name' => 'message_notify',
          'info' => 
          array (
            'name' => 'Message notify',
            'description' => 'Message notify.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'message',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'includes/message_notify.exception.inc',
              1 => 'plugins/notifier/abstract.inc',
              2 => 'message_notify.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-2.5',
        ),
        'commerce_fancy_attributes' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_fancy_attributes/commerce_fancy_attributes.module',
          'basename' => 'commerce_fancy_attributes.module',
          'name' => 'commerce_fancy_attributes',
          'info' => 
          array (
            'name' => 'Commerce fancy attributes',
            'core' => '7.x',
            'description' => 'Provides better-looking attribute selectors for the add to cart form.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'commerce_cart',
            ),
            'version' => '7.x-1.0',
            'project' => 'commerce_fancy_attributes',
            'datestamp' => '1343752308',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'commerce_nosto_tagging' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_nosto_tagging/commerce_nosto_tagging.module',
          'basename' => 'commerce_nosto_tagging.module',
          'name' => 'commerce_nosto_tagging',
          'info' => 
          array (
            'name' => 'Nosto Tagging',
            'description' => 'Implements the required tagging blocks for using Nosto marketing automation service.',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_product',
              2 => 'commerce_product_pricing',
              3 => 'commerce_order',
              4 => 'commerce_cart',
              5 => 'taxonomy',
            ),
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'configure' => 'admin/config/services/nostotagging',
            'version' => '7.x-1.0',
            'project' => 'commerce_nosto_tagging',
            'datestamp' => '1378843042',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'physical' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/physical/physical.module',
          'basename' => 'physical.module',
          'name' => 'physical',
          'info' => 
          array (
            'name' => 'Physical Fields',
            'description' => 'Defines fields (e.g. weight and dimensions) to support describing the physical attributes of entities.',
            'package' => 'Fields',
            'core' => '7.x',
            'version' => '',
            'project' => 'physical',
            'datestamp' => '1452771912',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '',
        ),
        'image_delta_formatter' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/image_delta_formatter/image_delta_formatter.module',
          'basename' => 'image_delta_formatter.module',
          'name' => 'image_delta_formatter',
          'info' => 
          array (
            'name' => 'Image Delta Formatter',
            'description' => 'Provides a formatter that displays a specific delta of a multivalue imagefield.',
            'core' => '7.x',
            'version' => '7.x-1.0-rc1',
            'project' => 'image_delta_formatter',
            'datestamp' => '1355927255',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc1',
        ),
        'colorbox' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/colorbox/colorbox.module',
          'basename' => 'colorbox.module',
          'name' => 'colorbox',
          'info' => 
          array (
            'name' => 'Colorbox',
            'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
            'dependencies' => 
            array (
              0 => 'libraries (2.x)',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/media/colorbox',
            'files' => 
            array (
              0 => 'views/colorbox_handler_field_colorbox.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'colorbox',
            'datestamp' => '1403692729',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.7',
        ),
        'libraries' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/libraries/libraries.module',
          'basename' => 'libraries.module',
          'name' => 'libraries',
          'info' => 
          array (
            'name' => 'Libraries',
            'description' => 'Allows version-dependent and shared usage of external libraries.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'system (>=7.11)',
            ),
            'files' => 
            array (
              0 => 'tests/libraries.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'libraries',
            'datestamp' => '1391965716',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.2',
        ),
        'lingotek' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/lingotek/lingotek.module',
          'basename' => 'lingotek.module',
          'name' => 'lingotek',
          'info' => 
          array (
            'name' => 'Lingotek Translation',
            'description' => 'Extends Drupal\'s multilingual features by integrating with the Lingotek Translation Management System.',
            'package' => 'Multilingual',
            'core' => '7.x',
            'php' => '5.3',
            'configure' => 'admin/config/lingotek/setup',
            'dependencies' => 
            array (
              0 => 'locale',
              1 => 'field_ui',
              2 => 'title',
              3 => 'block',
              4 => 'menu',
              5 => 'i18n',
              6 => 'i18n_block',
              7 => 'variable',
              8 => 'entity',
              9 => 'i18n_menu',
              10 => 'i18n_string',
              11 => 'taxonomy',
              12 => 'i18n_taxonomy',
              13 => 'i18n_translation',
              14 => 'i18n_variable',
              15 => 'views',
              16 => 'ctools',
              17 => 'potx',
            ),
            'files' => 
            array (
              0 => 'lib/Drupal/lingotek/Lingotek.php',
              1 => 'lib/Drupal/lingotek/LingotekApi.php',
              2 => 'lib/Drupal/lingotek/LingotekAccount.php',
              3 => 'lib/Drupal/lingotek/LingotekConfigSet.php',
              4 => 'lib/Drupal/lingotek/LingotekDocument.php',
              5 => 'lib/Drupal/lingotek/LingotekLog.php',
              6 => 'lib/Drupal/lingotek/LingotekEntity.php',
              7 => 'lib/Drupal/lingotek/LingotekPhase.php',
              8 => 'lib/Drupal/lingotek/LingotekSync.php',
              9 => 'lib/Drupal/lingotek/LingotekTranslatableEntity.php',
              10 => 'tests/lingotek.base.test',
              11 => 'tests/lingotek.access.test',
              12 => 'tests/lingotek.setup.test',
              13 => 'lingotek_views_handler_workbench_link.inc',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'style/base.css',
              ),
            ),
            'version' => '7.x-6.02',
            'project' => 'lingotek',
            'datestamp' => '1427170701',
          ),
          'schema_version' => '7606',
          'version' => '7.x-6.02',
        ),
        'commerce_cart' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/cart/commerce_cart.module',
          'basename' => 'commerce_cart.module',
          'name' => 'commerce_cart',
          'info' => 
          array (
            'name' => 'Cart',
            'description' => 'Implements the shopping cart system and add to cart features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_checkout',
              2 => 'commerce_line_item',
              3 => 'commerce_order',
              4 => 'commerce_product',
              5 => 'commerce_product_pricing',
              6 => 'commerce_product_reference',
              7 => 'entity',
              8 => 'rules',
              9 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
              1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
              2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
              3 => 'tests/commerce_cart.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.11',
        ),
        'commerce_product_reference' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
          'basename' => 'commerce_product_reference.module',
          'name' => 'commerce_product_reference',
          'info' => 
          array (
            'name' => 'Product Reference',
            'description' => 'Defines a product reference field and default display formatters.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_price',
              3 => 'commerce_product',
              4 => 'entity',
              5 => 'options',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
              1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
              2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
              3 => 'tests/commerce_product_reference.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_line_item_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
          'basename' => 'commerce_line_item_ui.module',
          'name' => 'commerce_line_item_ui',
          'info' => 
          array (
            'name' => 'Line Item UI',
            'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'field_ui',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_line_item',
              4 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/line-items',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_line_item' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
          'basename' => 'commerce_line_item.module',
          'name' => 'commerce_line_item',
          'info' => 
          array (
            'name' => 'Line Item',
            'description' => 'Defines the Line Item entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
              2 => 'entity',
              3 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_line_item.controller.inc',
              1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
              2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
              3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
              4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
              5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
              6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
              7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.11',
        ),
        'commerce_price' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/price/commerce_price.module',
          'basename' => 'commerce_price.module',
          'name' => 'commerce_price',
          'info' => 
          array (
            'name' => 'Price',
            'description' => 'Defines the price field and a price alteration system.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_price.rules.inc',
              1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
              2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.11',
        ),
        'commerce_order_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/order/commerce_order_ui.module',
          'basename' => 'commerce_order_ui.module',
          'name' => 'commerce_order_ui',
          'info' => 
          array (
            'name' => 'Order UI',
            'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'field_ui',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_line_item',
              4 => 'commerce_order',
              5 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/order',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
              1 => 'tests/commerce_order_ui.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_order' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/order/commerce_order.module',
          'basename' => 'commerce_order.module',
          'name' => 'commerce_order',
          'info' => 
          array (
            'name' => 'Order',
            'description' => 'Defines the Order entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_customer',
              2 => 'commerce_line_item',
              3 => 'commerce_price',
              4 => 'entity',
              5 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_order.controller.inc',
              1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
              2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
              3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
              4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
              5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
              6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
              7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
              8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
              9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
              10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
              11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
              12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
              13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
              14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
              15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
              16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
              17 => 'tests/commerce_order.rules.test',
              18 => 'tests/commerce_order.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7109',
          'version' => '7.x-1.11',
        ),
        'commerce_product_pricing' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
          'basename' => 'commerce_product_pricing.module',
          'name' => 'commerce_product_pricing',
          'info' => 
          array (
            'name' => 'Product Pricing',
            'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
              2 => 'commerce_product_reference',
              3 => 'entity',
              4 => 'rules',
            ),
            'core' => '7.x',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.11',
        ),
        'commerce_product_pricing_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
          'basename' => 'commerce_product_pricing_ui.module',
          'name' => 'commerce_product_pricing_ui',
          'info' => 
          array (
            'name' => 'Product Pricing UI',
            'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'rules_admin',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_price',
              4 => 'commerce_product_pricing',
              5 => 'commerce_product_reference',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/product-pricing',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_product_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/product/commerce_product_ui.module',
          'basename' => 'commerce_product_ui.module',
          'name' => 'commerce_product_ui',
          'info' => 
          array (
            'name' => 'Product UI',
            'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'field_ui',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_product',
              4 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/products/types',
            'files' => 
            array (
              0 => 'tests/commerce_product_ui.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.11',
        ),
        'commerce_product' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/product/commerce_product.module',
          'basename' => 'commerce_product.module',
          'name' => 'commerce_product',
          'info' => 
          array (
            'name' => 'Product',
            'description' => 'Defines the Product entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_product.controller.inc',
              1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
              2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
              3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
              4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
              5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
              6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
              7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
              8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
              9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
              10 => 'includes/commerce_product.translation_handler.inc',
              11 => 'tests/commerce_product.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'version' => '7.x-1.11',
        ),
        'commerce_checkout' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
          'basename' => 'commerce_checkout.module',
          'name' => 'commerce_checkout',
          'info' => 
          array (
            'name' => 'Checkout',
            'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_order',
              3 => 'entity',
              4 => 'rules',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/checkout',
            'files' => 
            array (
              0 => 'tests/commerce_checkout.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.11',
        ),
        'commerce_customer_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
          'basename' => 'commerce_customer_ui.module',
          'name' => 'commerce_customer_ui',
          'info' => 
          array (
            'name' => 'Customer UI',
            'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'field_ui',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_customer',
              4 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/customer-profiles/types',
            'files' => 
            array (
              0 => 'tests/commerce_customer_ui.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_customer' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/customer/commerce_customer.module',
          'basename' => 'commerce_customer.module',
          'name' => 'commerce_customer',
          'info' => 
          array (
            'name' => 'Customer',
            'description' => 'Defines the Customer entity with Address Field integration.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'addressfield',
              1 => 'commerce',
              2 => 'entity',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_customer_profile.controller.inc',
              1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
              2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
              3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
              4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
              5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
              6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
              7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.11',
        ),
        'commerce_tax_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
          'basename' => 'commerce_tax_ui.module',
          'name' => 'commerce_tax_ui',
          'info' => 
          array (
            'name' => 'Tax UI',
            'description' => 'Provides a UI for creating simple tax types and rates.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_tax',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/taxes',
            'files' => 
            array (
              0 => 'tests/commerce_tax_ui.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.11',
        ),
        'commerce_tax' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/tax/commerce_tax.module',
          'basename' => 'commerce_tax.module',
          'name' => 'commerce_tax',
          'info' => 
          array (
            'name' => 'Tax',
            'description' => 'Define tax rates and configure tax rules for applicability and display.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_price',
              3 => 'commerce_product_pricing',
              4 => 'entity',
              5 => 'rules',
            ),
            'core' => '7.x',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_payment_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
          'basename' => 'commerce_payment_example.module',
          'name' => 'commerce_payment_example',
          'info' => 
          array (
            'name' => 'Payment Method Example',
            'description' => 'Provides an example payment method for testing and development.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
            ),
            'core' => '7.x',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce_payment' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/payment/commerce_payment.module',
          'basename' => 'commerce_payment.module',
          'name' => 'commerce_payment',
          'info' => 
          array (
            'name' => 'Payment',
            'description' => 'Implement core payment features for Drupal commerce.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_order',
              2 => 'entity',
              3 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_payment.rules.inc',
              1 => 'includes/commerce_payment_transaction.controller.inc',
              2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
              3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
              4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
              5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
              6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
              7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
              8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
              9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
              10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
              11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
              12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
              13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
              14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
              15 => 'tests/commerce_payment.rules.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.11',
        ),
        'commerce_payment_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
          'basename' => 'commerce_payment_ui.module',
          'name' => 'commerce_payment_ui',
          'info' => 
          array (
            'name' => 'Payment UI',
            'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'rules_admin',
              1 => 'commerce',
              2 => 'commerce_order',
              3 => 'commerce_order_ui',
              4 => 'commerce_payment',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/payment-methods',
            'files' => 
            array (
              0 => 'tests/commerce_payment_ui.test',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'commerce' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/commerce.module',
          'basename' => 'commerce.module',
          'name' => 'commerce',
          'info' => 
          array (
            'name' => 'Commerce',
            'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'system',
              1 => 'entity',
              2 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/commerce_base.test',
              1 => 'includes/commerce.controller.inc',
            ),
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.11',
        ),
        'commerce_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce/commerce_ui.module',
          'basename' => 'commerce_ui.module',
          'name' => 'commerce_ui',
          'info' => 
          array (
            'name' => 'Commerce UI',
            'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
            ),
            'core' => '7.x',
            'version' => '7.x-1.11',
            'project' => 'commerce',
            'datestamp' => '1421426596',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.11',
        ),
        'crumbs_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/crumbs/example/crumbs_example.module',
          'basename' => 'crumbs_example.module',
          'name' => 'crumbs_example',
          'info' => 
          array (
            'name' => 'Crumbs example',
            'description' => 'Example module for Crumbs custom plugins.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'xautoload',
            ),
            'version' => '7.x-1.10',
            'project' => 'crumbs',
            'datestamp' => '1374945067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.10',
        ),
        'crumbs' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/crumbs/crumbs.module',
          'basename' => 'crumbs.module',
          'name' => 'crumbs',
          'info' => 
          array (
            'name' => 'Crumbs',
            'description' => 'The ultimate breadcrumbs module',
            'package' => 'menu',
            'core' => '7.x',
            'php' => '5.2',
            'version' => '7.x-1.10',
            'project' => 'crumbs',
            'datestamp' => '1374945067',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => 0,
          'version' => '7.x-1.10',
        ),
        'menu_attributes' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/menu_attributes/menu_attributes.module',
          'basename' => 'menu_attributes.module',
          'name' => 'menu_attributes',
          'info' => 
          array (
            'name' => 'Menu attributes',
            'description' => 'Allows administrators to specify custom attributes for menu items.',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'core' => '7.x',
            'configure' => 'admin/structure/menu/settings',
            'files' => 
            array (
              0 => 'menu_attributes.test',
            ),
            'version' => '7.x-1.0-rc3',
            'project' => 'menu_attributes',
            'datestamp' => '1413756231',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.0-rc3',
        ),
        'search_api_views' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api/contrib/search_api_views/search_api_views.module',
          'basename' => 'search_api_views.module',
          'name' => 'search_api_views',
          'info' => 
          array (
            'name' => 'Search views',
            'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
            'dependencies' => 
            array (
              0 => 'search_api',
              1 => 'views',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'includes/display_facet_block.inc',
              1 => 'includes/handler_argument.inc',
              2 => 'includes/handler_argument_fulltext.inc',
              3 => 'includes/handler_argument_more_like_this.inc',
              4 => 'includes/handler_argument_string.inc',
              5 => 'includes/handler_argument_date.inc',
              6 => 'includes/handler_argument_taxonomy_term.inc',
              7 => 'includes/handler_filter.inc',
              8 => 'includes/handler_filter_boolean.inc',
              9 => 'includes/handler_filter_date.inc',
              10 => 'includes/handler_filter_entity.inc',
              11 => 'includes/handler_filter_fulltext.inc',
              12 => 'includes/handler_filter_language.inc',
              13 => 'includes/handler_filter_options.inc',
              14 => 'includes/handler_filter_taxonomy_term.inc',
              15 => 'includes/handler_filter_text.inc',
              16 => 'includes/handler_filter_user.inc',
              17 => 'includes/handler_sort.inc',
              18 => 'includes/plugin_cache.inc',
              19 => 'includes/query.inc',
            ),
            'version' => '7.x-1.16',
            'project' => 'search_api',
            'datestamp' => '1440962813',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.16',
        ),
        'search_api_facetapi' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
          'basename' => 'search_api_facetapi.module',
          'name' => 'search_api_facetapi',
          'info' => 
          array (
            'name' => 'Search facets',
            'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
            'dependencies' => 
            array (
              0 => 'search_api',
              1 => 'facetapi',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'plugins/facetapi/adapter.inc',
              1 => 'plugins/facetapi/query_type_term.inc',
              2 => 'plugins/facetapi/query_type_date.inc',
            ),
            'version' => '7.x-1.16',
            'project' => 'search_api',
            'datestamp' => '1440962813',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.16',
        ),
        'search_api' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api/search_api.module',
          'basename' => 'search_api.module',
          'name' => 'search_api',
          'info' => 
          array (
            'name' => 'Search API',
            'description' => 'Provides a generic API for modules offering search capabilites.',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'search_api.test',
              1 => 'includes/callback.inc',
              2 => 'includes/callback_add_aggregation.inc',
              3 => 'includes/callback_add_hierarchy.inc',
              4 => 'includes/callback_add_url.inc',
              5 => 'includes/callback_add_viewed_entity.inc',
              6 => 'includes/callback_bundle_filter.inc',
              7 => 'includes/callback_comment_access.inc',
              8 => 'includes/callback_language_control.inc',
              9 => 'includes/callback_node_access.inc',
              10 => 'includes/callback_node_status.inc',
              11 => 'includes/callback_role_filter.inc',
              12 => 'includes/callback_user_status.inc',
              13 => 'includes/datasource.inc',
              14 => 'includes/datasource_entity.inc',
              15 => 'includes/datasource_external.inc',
              16 => 'includes/datasource_multiple.inc',
              17 => 'includes/exception.inc',
              18 => 'includes/index_entity.inc',
              19 => 'includes/processor.inc',
              20 => 'includes/processor_highlight.inc',
              21 => 'includes/processor_html_filter.inc',
              22 => 'includes/processor_ignore_case.inc',
              23 => 'includes/processor_stopwords.inc',
              24 => 'includes/processor_tokenizer.inc',
              25 => 'includes/processor_transliteration.inc',
              26 => 'includes/query.inc',
              27 => 'includes/server_entity.inc',
              28 => 'includes/service.inc',
            ),
            'configure' => 'admin/config/search/search_api',
            'version' => '7.x-1.16',
            'project' => 'search_api',
            'datestamp' => '1440962813',
            'php' => '5.2.4',
          ),
          'schema_version' => '7118',
          'version' => '7.x-1.16',
        ),
        'mailjet_campaign' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/modules/campaign/mailjet_campaign.module',
          'basename' => 'mailjet_campaign.module',
          'name' => 'mailjet_campaign',
          'info' => 
          array (
            'name' => 'Mailjet Campaigns',
            'description' => 'Add support for sending MailJet Campaigns.',
            'core' => '7.x',
            'php' => '5.3',
            'package' => 'MailJet',
            'dependencies' => 
            array (
              0 => 'mailjet',
              1 => 'entity',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mailjet_trigger_examples' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/modules/trigger_examples/mailjet_trigger_examples.module',
          'basename' => 'mailjet_trigger_examples.module',
          'name' => 'mailjet_trigger_examples',
          'info' => 
          array (
            'name' => 'Mailjet Trigger Examples',
            'description' => 'Examples of displaying information for customer\'s orders',
            'core' => '7.x',
            'php' => '5.3',
            'package' => 'MailJet',
            'dependencies' => 
            array (
              0 => 'mailjet',
              1 => 'rules',
              2 => 'commerce_message',
              3 => 'entityreference',
              4 => 'entity_token',
              5 => 'message',
              6 => 'message_notify',
            ),
            'files' => 
            array (
              0 => 'mailjet_trigger_examples.rules_defaults.inc',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mailjet_stats' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/modules/stats/mailjet_stats.module',
          'basename' => 'mailjet_stats.module',
          'name' => 'mailjet_stats',
          'info' => 
          array (
            'name' => 'Mailjet Stats',
            'description' => 'Add support for viewing MailJet Stats.',
            'core' => '7.x',
            'php' => '5.3',
            'package' => 'MailJet',
            'dependencies' => 
            array (
              0 => 'views_date_format_sql',
              1 => 'views',
              2 => 'mailjet',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mailjet_event' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/modules/event/mailjet_event.module',
          'basename' => 'mailjet_event.module',
          'name' => 'mailjet_event',
          'info' => 
          array (
            'name' => 'Mailjet Event API',
            'description' => 'Add support for MailJet Events.',
            'core' => '7.x',
            'package' => 'MailJet',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'mailjet',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mailjet_list' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/modules/list/mailjet_list.module',
          'basename' => 'mailjet_list.module',
          'name' => 'mailjet_list',
          'info' => 
          array (
            'name' => 'Mailjet Lists',
            'description' => 'Add support for MailJet Lists.',
            'core' => '7.x',
            'php' => '5.3',
            'package' => 'MailJet',
            'dependencies' => 
            array (
              0 => 'mailjet',
              1 => 'viewfield',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mailjet' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailjet/mailjet.module',
          'basename' => 'mailjet.module',
          'name' => 'mailjet',
          'info' => 
          array (
            'name' => 'Mailjet',
            'description' => 'Send your emails by your Mailjet API.',
            'core' => '7.x',
            'package' => 'MailJet',
            'configure' => 'admin/config/system/mailjet',
            'files' => 
            array (
              0 => 'includes/mailjet.mail.inc',
            ),
            'dependencies' => 
            array (
              0 => 'views_bulk_operations',
            ),
            'version' => '7.x-2.5',
            'project' => 'mailjet',
            'datestamp' => '1444309146',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.5',
        ),
        'distro_update' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/distro_update/distro_update.module',
          'basename' => 'distro_update.module',
          'name' => 'distro_update',
          'info' => 
          array (
            'name' => 'Distribution Update Status Manager',
            'description' => 'Provides an alternative Update Manager interface to limit status updates for modules/themes managed by a distribution\'s or module\'s .make file.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'update',
            ),
            'configure' => 'admin/reports/updates/settings',
            'version' => '7.x-1.0-beta4',
            'project' => 'distro_update',
            'datestamp' => '1413825230',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'inline_entity_form' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/inline_entity_form/inline_entity_form.module',
          'basename' => 'inline_entity_form.module',
          'name' => 'inline_entity_form',
          'info' => 
          array (
            'name' => 'Inline Entity Form',
            'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'system (>7.14)',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/entity.inline_entity_form.inc',
              1 => 'includes/node.inline_entity_form.inc',
              2 => 'includes/taxonomy_term.inline_entity_form.inc',
              3 => 'includes/commerce_product.inline_entity_form.inc',
              4 => 'includes/commerce_line_item.inline_entity_form.inc',
            ),
            'version' => '7.x-1.6',
            'project' => 'inline_entity_form',
            'datestamp' => '1434553381',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'commerce_yotpo' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_yotpo/commerce_yotpo.module',
          'basename' => 'commerce_yotpo.module',
          'name' => 'commerce_yotpo',
          'info' => 
          array (
            'name' => 'Commerce Yotpo',
            'description' => 'Intergration with Yotpo.',
            'core' => '7.x',
            'package' => 'Commerce (Contrib)',
            'configure' => 'admin/commerce/config/yotpo',
            'dependencies' => 
            array (
              0 => 'libraries',
              1 => 'commerce',
              2 => 'commerce_order',
              3 => 'commerce_product',
            ),
            'version' => '7.x-1.2',
            'project' => 'commerce_yotpo',
            'datestamp' => '1431015501',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'current_search' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/facetapi/contrib/current_search/current_search.module',
          'basename' => 'current_search.module',
          'name' => 'current_search',
          'info' => 
          array (
            'name' => 'Current Search Blocks',
            'description' => 'Provides an interface for creating blocks containing information about the current search.',
            'dependencies' => 
            array (
              0 => 'facetapi',
            ),
            'package' => 'Search Toolkit',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/current_search/item.inc',
              1 => 'plugins/current_search/item_active.inc',
              2 => 'plugins/current_search/item_group.inc',
              3 => 'plugins/current_search/item_text.inc',
              4 => 'tests/current_search.test',
            ),
            'configure' => 'admin/config/search/current_search',
            'version' => '7.x-1.5',
            'project' => 'facetapi',
            'datestamp' => '1405685332',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.5',
        ),
        'facetapi' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/facetapi/facetapi.module',
          'basename' => 'facetapi.module',
          'name' => 'facetapi',
          'info' => 
          array (
            'name' => 'Facet API',
            'description' => 'An abstracted facet API that can be used by various search backends.',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Search Toolkit',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/facetapi/adapter.inc',
              1 => 'plugins/facetapi/dependency.inc',
              2 => 'plugins/facetapi/dependency_bundle.inc',
              3 => 'plugins/facetapi/dependency_role.inc',
              4 => 'plugins/facetapi/empty_behavior.inc',
              5 => 'plugins/facetapi/empty_behavior_text.inc',
              6 => 'plugins/facetapi/filter.inc',
              7 => 'plugins/facetapi/query_type.inc',
              8 => 'plugins/facetapi/url_processor.inc',
              9 => 'plugins/facetapi/url_processor_standard.inc',
              10 => 'plugins/facetapi/widget.inc',
              11 => 'plugins/facetapi/widget_links.inc',
              12 => 'tests/facetapi_test.plugins.inc',
              13 => 'tests/facetapi.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'facetapi',
            'datestamp' => '1405685332',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.5',
        ),
        'rules_i18n' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/rules/rules_i18n/rules_i18n.module',
          'basename' => 'rules_i18n.module',
          'name' => 'rules_i18n',
          'info' => 
          array (
            'name' => 'Rules translation',
            'description' => 'Allows translating rules.',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules_i18n.i18n.inc',
              1 => 'rules_i18n.rules.inc',
              2 => 'rules_i18n.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'rules',
            'datestamp' => '1426527210',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'rules_scheduler' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
          'basename' => 'rules_scheduler.module',
          'name' => 'rules_scheduler',
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
              5 => 'includes/rules_scheduler.handler.inc',
              6 => 'includes/rules_scheduler.views_default.inc',
              7 => 'includes/rules_scheduler.views.inc',
              8 => 'includes/rules_scheduler_views_filter.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'rules',
            'datestamp' => '1426527210',
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'version' => '7.x-2.9',
        ),
        'rules_admin' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/rules/rules_admin/rules_admin.module',
          'basename' => 'rules_admin.module',
          'name' => 'rules_admin',
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
            'version' => '7.x-2.9',
            'project' => 'rules',
            'datestamp' => '1426527210',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'rules' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/rules/rules.module',
          'basename' => 'rules.module',
          'name' => 'rules',
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
              4 => 'includes/rules.event.inc',
              5 => 'includes/rules.processor.inc',
              6 => 'includes/rules.plugins.inc',
              7 => 'includes/rules.state.inc',
              8 => 'includes/rules.dispatcher.inc',
              9 => 'modules/node.eval.inc',
              10 => 'modules/php.eval.inc',
              11 => 'modules/rules_core.eval.inc',
              12 => 'modules/system.eval.inc',
              13 => 'ui/ui.controller.inc',
              14 => 'ui/ui.core.inc',
              15 => 'ui/ui.data.inc',
              16 => 'ui/ui.plugins.inc',
            ),
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entity',
            ),
            'version' => '7.x-2.9',
            'project' => 'rules',
            'datestamp' => '1426527210',
            'php' => '5.2.4',
          ),
          'schema_version' => '7214',
          'version' => '7.x-2.9',
        ),
        'addressfield' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/addressfield/addressfield.module',
          'basename' => 'addressfield.module',
          'name' => 'addressfield',
          'info' => 
          array (
            'name' => 'Address Field',
            'description' => 'Manage a flexible address field, implementing the xNAL standard.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'addressfield.migrate.inc',
              1 => 'views/addressfield_views_handler_field_administrative_area.inc',
              2 => 'views/addressfield_views_handler_field_country.inc',
              3 => 'views/addressfield_views_handler_filter_country.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'addressfield',
            'datestamp' => '1444254070',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.2',
        ),
        'admin_views' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/admin_views/admin_views.module',
          'basename' => 'admin_views.module',
          'name' => 'admin_views',
          'info' => 
          array (
            'name' => 'Administration views',
            'description' => 'Replaces all system object management pages in Drupal core with real views.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'views_bulk_operations (>=7.x-3.2)',
            ),
            'files' => 
            array (
              0 => 'plugins/views_plugin_display_system.inc',
              1 => 'plugins/views_plugin_access_menu.inc',
              2 => 'tests/admin_views.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'admin_views',
            'datestamp' => '1436376676',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'commerce_add_to_cart_confirmation' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_add_to_cart_confirmation/commerce_add_to_cart_confirmation.module',
          'basename' => 'commerce_add_to_cart_confirmation.module',
          'name' => 'commerce_add_to_cart_confirmation',
          'info' => 
          array (
            'name' => 'Commerce add to cart confirmation',
            'description' => 'Provides an "add to cart" confirmation screen.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_cart',
              1 => 'commerce_product_ui',
              2 => 'views',
              3 => 'rules',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/commerce_add_to_cart_confirmation.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/commerce_add_to_cart_confirmation.js',
            ),
            'version' => '7.x-1.0-rc2',
            'project' => 'commerce_add_to_cart_confirmation',
            'datestamp' => '1360857057',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'help_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/advanced_help/help_example/help_example.module',
          'basename' => 'help_example.module',
          'name' => 'help_example',
          'info' => 
          array (
            'name' => 'Advanced help example',
            'description' => 'A example help module to demonstrate the advanced help module.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advanced_help',
            ),
            'attributions' => 
            array (
              'wikipedia_adaption' => 
              array (
                'type' => 'asset',
                'weight' => '-10',
                'exception' => '#2460769',
                'title' => 'About PHP, History of PHP, Usage of PHP, PHP Syntax, Security of PHP',
                'license_url' => 'http://creativecommons.org/licenses/by-sa/3.0/',
                'org_title' => 'PHP (Wikipedia)',
                'org_author' => 'multiple Wikipedia contributors',
                'org_author_url' => 'http://en.wikipedia.org/w/index.php?title=PHP&action=history',
                'org_work_url' => 'http://en.wikipedia.org/wiki/PHP',
                'org_license' => 'Creative Commons BY-SA 3.0',
                'org_license_url' => 'http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License',
              ),
              'lerdorf' => 
              array (
                'type' => 'asset',
                'exception' => '#2460769',
                'author' => 'Jud Dagnall',
                'work_url' => 'http://en.wikipedia.org/wiki/File:Lerdorf.jpg',
                'title' => 'Lerdorf',
                'license' => 'Creative Commons BY-SA 3.0',
                'license_url' => 'http://creativecommons.org/licenses/by-sa/3.0/deed.en',
              ),
              'gutmans' => 
              array (
                'type' => 'asset',
                'exception' => '#2460769',
                'author' => 'Jim Winstead',
                'author_url' => 'https://www.flickr.com/people/81342178@N00',
                'work_url' => 'http://en.wikipedia.org/wiki/File:Andi_Gutmans_1.jpg',
                'title' => 'Andi Gutmans',
                'license' => 'Creative Commons BY 2.0',
                'license_url' => 'http://creativecommons.org/licenses/by/2.0/deed.en',
              ),
            ),
            'version' => '7.x-1.3',
            'project' => 'advanced_help',
            'datestamp' => '1432557782',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'advanced_help' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/advanced_help/advanced_help.module',
          'basename' => 'advanced_help.module',
          'name' => 'advanced_help',
          'info' => 
          array (
            'name' => 'Advanced help',
            'description' => 'Provide extended help and documentation.',
            'core' => '7.x',
            'attributions' => 
            array (
              'click_icon' => 
              array (
                'type' => 'asset',
                'exception' => '#2460769',
                'author' => 'Gisle Hannemyr',
                'hide' => true,
                'title' => 'click_icon.png',
                'license' => 'Creative Commons 0',
                'license_url' => 'https://creativecommons.org/publicdomain/zero/1.0/',
              ),
            ),
            'version' => '7.x-1.3',
            'project' => 'advanced_help',
            'datestamp' => '1432557782',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_kiala_ps' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_kiala/modules/commerce_kiala_ps/commerce_kiala_ps.module',
          'basename' => 'commerce_kiala_ps.module',
          'name' => 'commerce_kiala_ps',
          'info' => 
          array (
            'name' => 'Kiala Pack & Ship Integration',
            'description' => 'Integrates Kiala Pack & Ship with Commerce Kiala.',
            'package' => 'Commerce (shipping)',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'rules',
              2 => 'commerce',
              3 => 'commerce_order',
              4 => 'commerce_kiala',
              5 => 'commerce_physical',
            ),
            'files' => 
            array (
              0 => 'includes/kiala/commerce_kiala_ps.ws.inc',
              1 => 'includes/commerce_kiala_ps_ws_log.entity.inc',
              2 => 'includes/commerce_kiala_ps_ws_log.controller.inc',
              3 => 'includes/commerce_kiala_ps_ws_log.metadatacontroller.inc',
              4 => 'includes/views/handlers/commerce_kiala_ps_handler_field_ws_log_operations.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_kiala',
            'datestamp' => '1363011015',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-rc1',
        ),
        'commerce_kiala_track' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_kiala/modules/commerce_kiala_track/commerce_kiala_track.module',
          'basename' => 'commerce_kiala_track.module',
          'name' => 'commerce_kiala_track',
          'info' => 
          array (
            'name' => 'Kiala Track & Trace Integration',
            'description' => 'Integrates Kiala Track & Trace with Commerce Kiala.',
            'package' => 'Commerce (shipping)',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'commerce_kiala',
            ),
            'files' => 
            array (
              0 => 'includes/kiala/commerce_kiala.api.tracktrace.inc',
              1 => 'includes/views/handlers/commerce_kiala_track_views_handler_tracking_link_field.inc',
              2 => 'includes/views/handlers/commerce_kiala_track_views_handler_tracking_iframe_field.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_kiala',
            'datestamp' => '1363011015',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc1',
        ),
        'commerce_kiala' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_kiala/commerce_kiala.module',
          'basename' => 'commerce_kiala.module',
          'name' => 'commerce_kiala',
          'info' => 
          array (
            'name' => 'Kiala',
            'description' => 'Integrates Kiala with Commerce Shipping to select a Kiala Point during checkout.',
            'package' => 'Commerce (shipping)',
            'core' => '7.x',
            'configure' => 'admin/commerce/config/shipping/methods/kiala/edit',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_shipping',
              2 => 'commerce_order',
              3 => 'image',
              4 => 'remote_stream_wrapper',
            ),
            'files' => 
            array (
              0 => 'includes/kiala/commerce_kiala.api.inc',
              1 => 'includes/kiala/commerce_kiala.api.locateselect.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_kiala',
            'datestamp' => '1363011015',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-rc1',
        ),
        'entityreference_behavior_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
          'basename' => 'entityreference_behavior_example.module',
          'name' => 'entityreference_behavior_example',
          'info' => 
          array (
            'name' => 'Entity Reference Behavior Example',
            'description' => 'Provides some example code for implementing Entity Reference behaviors.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entityreference',
            ),
            'version' => '7.x-1.1',
            'project' => 'entityreference',
            'datestamp' => '1384973110',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'entityreference' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/entityreference/entityreference.module',
          'basename' => 'entityreference.module',
          'name' => 'entityreference',
          'info' => 
          array (
            'name' => 'Entity Reference',
            'description' => 'Provides a field that can reference other entities.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'entityreference.migrate.inc',
              1 => 'plugins/selection/abstract.inc',
              2 => 'plugins/selection/views.inc',
              3 => 'plugins/behavior/abstract.inc',
              4 => 'views/entityreference_plugin_display.inc',
              5 => 'views/entityreference_plugin_style.inc',
              6 => 'views/entityreference_plugin_row_fields.inc',
              7 => 'tests/entityreference.handlers.test',
              8 => 'tests/entityreference.taxonomy.test',
              9 => 'tests/entityreference.admin.test',
              10 => 'tests/entityreference.feeds.test',
            ),
            'version' => '7.x-1.1',
            'project' => 'entityreference',
            'datestamp' => '1384973110',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.1',
        ),
        'commerce_backoffice_product' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_backoffice/commerce_backoffice_product.module',
          'basename' => 'commerce_backoffice_product.module',
          'name' => 'commerce_backoffice_product',
          'info' => 
          array (
            'name' => 'Commerce Backoffice Product',
            'description' => 'Provides advanced product management.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_product',
              2 => 'commerce_product_ui',
              3 => 'views_bulk_operations',
              4 => 'views_megarow',
              5 => 'commerce_product_reference',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_product_handler_field_product_quick_edit_form.inc',
              1 => 'commerce_backoffice_product.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'commerce_backoffice',
            'datestamp' => '1444858742',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'commerce_backoffice_order' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_backoffice/commerce_backoffice_order.module',
          'basename' => 'commerce_backoffice_order.module',
          'name' => 'commerce_backoffice_order',
          'info' => 
          array (
            'name' => 'Commerce Backoffice Order',
            'description' => 'Provides advanced order management.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_order',
              2 => 'commerce_order_ui',
              3 => 'commerce_payment',
              4 => 'date',
              5 => 'date_popup',
              6 => 'date_views',
              7 => 'eva',
              8 => 'entity_token',
              9 => 'views_bulk_operations',
              10 => 'views_megarow',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_order_handler_field_order_operations.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'commerce_backoffice',
            'datestamp' => '1444858742',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'commerce_backoffice_content' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_backoffice/commerce_backoffice_content.module',
          'basename' => 'commerce_backoffice_content.module',
          'name' => 'commerce_backoffice_content',
          'info' => 
          array (
            'name' => 'Commerce Backoffice content',
            'description' => 'Backoffice content views for Commerce.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_product_reference',
              2 => 'views_bulk_operations',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_content_filter_node_type.inc',
              1 => 'includes/views/plugins/commerce_backoffice_content_plugin_display_system.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'commerce_backoffice',
            'datestamp' => '1444858742',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'commerce_backoffice' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_backoffice/commerce_backoffice.module',
          'basename' => 'commerce_backoffice.module',
          'name' => 'commerce_backoffice',
          'info' => 
          array (
            'name' => 'Commerce Backoffice',
            'description' => 'Provides the basic backoffice functionality needed by the submodules.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_handler_filter_term_node_tid.inc',
              1 => 'includes/views/handlers/commerce_backoffice_handler_field_term_entity_tid.inc',
              2 => 'includes/views/handlers/commerce_backoffice_handler_field_node_operations.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'commerce_backoffice',
            'datestamp' => '1444858742',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'mailsystem' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailsystem/mailsystem.module',
          'basename' => 'mailsystem.module',
          'name' => 'mailsystem',
          'info' => 
          array (
            'package' => 'Mail',
            'name' => 'Mail System',
            'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
            'php' => '5.0',
            'core' => '7.x',
            'configure' => 'admin/config/system/mailsystem',
            'dependencies' => 
            array (
              0 => 'filter',
            ),
            'version' => '7.x-2.34',
            'project' => 'mailsystem',
            'datestamp' => '1334082653',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.34',
        ),
        'commerce_checkout_progress' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_checkout_progress/commerce_checkout_progress.module',
          'basename' => 'commerce_checkout_progress.module',
          'name' => 'commerce_checkout_progress',
          'info' => 
          array (
            'name' => 'Commerce Checkout Progress',
            'description' => 'Provides an ordered list which shows the Commerce checkout progress, from start to completion.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_checkout',
            ),
            'configure' => 'admin/commerce/config/checkout',
            'core' => '7.x',
            'version' => '7.x-1.4',
            'project' => 'commerce_checkout_progress',
            'datestamp' => '1444964041',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.4',
        ),
        'commerce_physical' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_physical/commerce_physical.module',
          'basename' => 'commerce_physical.module',
          'name' => 'commerce_physical',
          'info' => 
          array (
            'name' => 'Physical Product',
            'description' => 'Provides API support for working with physical product types in Drupal Commerce.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_line_item',
              1 => 'commerce_order',
              2 => 'commerce_product',
              3 => 'commerce_product_reference',
              4 => 'physical',
            ),
            'core' => '7.x',
            'version' => '',
            'project' => 'commerce_physical',
            'datestamp' => '1452771917',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '',
        ),
        'commerce_shipping_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_shipping/modules/commerce_shipping_example.module',
          'basename' => 'commerce_shipping_example.module',
          'name' => 'commerce_shipping_example',
          'info' => 
          array (
            'name' => 'Shipping Method Example',
            'description' => 'Provides an example shipping method for testing and development.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_shipping',
            ),
            'core' => '7.x',
            'version' => '7.x-2.2',
            'project' => 'commerce_shipping',
            'datestamp' => '1428479882',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'commerce_shipping' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_shipping/commerce_shipping.module',
          'basename' => 'commerce_shipping.module',
          'name' => 'commerce_shipping',
          'info' => 
          array (
            'name' => 'Shipping',
            'description' => 'Implement core shipping features for Drupal commerce.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_payment',
              3 => 'list',
              4 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_shipping_handler_relationship_shipping_line_item_representative.inc',
            ),
            'version' => '7.x-2.2',
            'project' => 'commerce_shipping',
            'datestamp' => '1428479882',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-2.2',
        ),
        'commerce_shipping_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_shipping/commerce_shipping_ui.module',
          'basename' => 'commerce_shipping_ui.module',
          'name' => 'commerce_shipping_ui',
          'info' => 
          array (
            'name' => 'Shipping UI',
            'description' => 'Provides an interface for viewing and managing shipping methods and services.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'commerce',
              2 => 'commerce_shipping',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/shipping',
            'version' => '7.x-2.2',
            'project' => 'commerce_shipping',
            'datestamp' => '1428479882',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'views_megarow' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/views_megarow/views_megarow.module',
          'basename' => 'views_megarow.module',
          'name' => 'views_megarow',
          'info' => 
          array (
            'name' => 'Views megarow',
            'description' => 'Open views links in a modal.',
            'core' => '7.x',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'configure' => 'admin/config/user-interface/views_megarow',
            'files' => 
            array (
              0 => 'includes/views/plugins/views_plugin_style_table_megarows.inc',
              1 => 'includes/views/handlers/views_handler_field_megarow_links.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'views_megarow',
            'datestamp' => '1438968242',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'mailup_subscribe' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailup/modules/mailup_subscribe/mailup_subscribe.module',
          'basename' => 'mailup_subscribe.module',
          'name' => 'mailup_subscribe',
          'info' => 
          array (
            'name' => 'MailUp Subscribe',
            'description' => 'Provides functionality for managing and subscribing to MailUp Lists',
            'package' => 'MailUp',
            'core' => '7.x',
            'configure' => 'admin/config/services/mailup/lists',
            'dependencies' => 
            array (
              0 => 'mailup',
              1 => 'entity',
              2 => 'ctools',
              3 => 'token',
            ),
            'files' => 
            array (
              0 => 'mailup_subscribe.entity.inc',
              1 => 'mailup_subscribe.translate.inc',
            ),
            'version' => '7.x-1.1',
            'project' => 'mailup',
            'datestamp' => '1420543083',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'mailup' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mailup/mailup.module',
          'basename' => 'mailup.module',
          'name' => 'mailup',
          'info' => 
          array (
            'name' => 'MailUp',
            'description' => 'Integration with MailUp email marketing',
            'package' => 'MailUp',
            'core' => '7.x',
            'configure' => 'admin/config/services/mailup',
            'dependencies' => 
            array (
              0 => 'http_client',
            ),
            'files' => 
            array (
              0 => 'includes/MailUpClient.inc',
            ),
            'version' => '7.x-1.1',
            'project' => 'mailup',
            'datestamp' => '1420543083',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'commerce_message' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_message/commerce_message.module',
          'basename' => 'commerce_message.module',
          'name' => 'commerce_message',
          'info' => 
          array (
            'name' => 'Commerce Message',
            'description' => 'Provides message history and order confirmation messages.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_order',
              1 => 'commerce_cart',
              2 => 'entityreference',
              3 => 'entity_token',
              4 => 'message',
              5 => 'message_notify',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_message_handler_area_add_message.inc',
            ),
            'version' => '7.x-1.0-rc3',
            'project' => 'commerce_message',
            'datestamp' => '1402495128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc3',
        ),
        'date_tools' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_tools/date_tools.module',
          'basename' => 'date_tools.module',
          'name' => 'date_tools',
          'info' => 
          array (
            'name' => 'Date Tools',
            'description' => 'Tools to import and auto-create dates and calendars.',
            'dependencies' => 
            array (
              0 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/tools',
            'files' => 
            array (
              0 => 'tests/date_tools.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_context' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_context/date_context.module',
          'basename' => 'date_context.module',
          'name' => 'date_context',
          'info' => 
          array (
            'name' => 'Date Context',
            'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'context',
            ),
            'files' => 
            array (
              0 => 'date_context.module',
              1 => 'plugins/date_context_date_condition.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_api' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_api/date_api.module',
          'basename' => 'date_api.module',
          'name' => 'date_api',
          'info' => 
          array (
            'name' => 'Date API',
            'description' => 'A Date API that can be used by other modules.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date.css',
              ),
            ),
            'files' => 
            array (
              0 => 'date_api.module',
              1 => 'date_api_sql.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.9',
        ),
        'date_popup' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_popup/date_popup.module',
          'basename' => 'date_popup.module',
          'name' => 'date_popup',
          'info' => 
          array (
            'name' => 'Date Popup',
            'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/date_popup',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'themes/datepicker.1.7.css',
              ),
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_views' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_views/date_views.module',
          'basename' => 'date_views.module',
          'name' => 'date_views',
          'info' => 
          array (
            'name' => 'Date Views',
            'description' => 'Views integration for date fields and date functionality.',
            'package' => 'Date/Time',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'views',
            ),
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'includes/date_views_argument_handler.inc',
              1 => 'includes/date_views_argument_handler_simple.inc',
              2 => 'includes/date_views_filter_handler.inc',
              3 => 'includes/date_views_filter_handler_simple.inc',
              4 => 'includes/date_views.views.inc',
              5 => 'includes/date_views_plugin_pager.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.9',
        ),
        'date_migrate_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
          'basename' => 'date_migrate_example.module',
          'name' => 'date_migrate_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'date_repeat',
              2 => 'date_repeat_field',
              3 => 'features',
              4 => 'migrate',
            ),
            'description' => 'Examples of migrating with the Date module',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-date_migrate_example-body',
                1 => 'node-date_migrate_example-field_date',
                2 => 'node-date_migrate_example-field_date_range',
                3 => 'node-date_migrate_example-field_date_repeat',
                4 => 'node-date_migrate_example-field_datestamp',
                5 => 'node-date_migrate_example-field_datestamp_range',
                6 => 'node-date_migrate_example-field_datetime',
                7 => 'node-date_migrate_example-field_datetime_range',
              ),
              'node' => 
              array (
                0 => 'date_migrate_example',
              ),
            ),
            'files' => 
            array (
              0 => 'date_migrate_example.migrate.inc',
            ),
            'name' => 'Date Migration Example',
            'package' => 'Features',
            'project' => 'date',
            'version' => '7.x-2.9',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_all_day' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_all_day/date_all_day.module',
          'basename' => 'date_all_day.module',
          'name' => 'date_all_day',
          'info' => 
          array (
            'name' => 'Date All Day',
            'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_repeat' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_repeat/date_repeat.module',
          'basename' => 'date_repeat.module',
          'name' => 'date_repeat',
          'info' => 
          array (
            'name' => 'Date Repeat API',
            'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'tests/date_repeat.test',
              1 => 'tests/date_repeat_form.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_repeat_field' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date_repeat_field/date_repeat_field.module',
          'basename' => 'date_repeat_field.module',
          'name' => 'date_repeat_field',
          'info' => 
          array (
            'name' => 'Date Repeat Field',
            'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
              2 => 'date_repeat',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date_repeat_field.css',
              ),
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/date/date.module',
          'basename' => 'date.module',
          'name' => 'date',
          'info' => 
          array (
            'name' => 'Date',
            'description' => 'Makes date/time fields available.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'date.migrate.inc',
              1 => 'tests/date_api.test',
              2 => 'tests/date.test',
              3 => 'tests/date_field.test',
              4 => 'tests/date_migrate.test',
              5 => 'tests/date_validation.test',
              6 => 'tests/date_timezone.test',
              7 => 'tests/date_views_pager.test',
              8 => 'tests/date_views_popup.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => '7004',
          'version' => '7.x-2.9',
        ),
        'commerce_moneybookers_quickcheckout' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_moneybookers/commerce_moneybookers_quickcheckout/commerce_moneybookers_quickcheckout.module',
          'basename' => 'commerce_moneybookers_quickcheckout.module',
          'name' => 'commerce_moneybookers_quickcheckout',
          'info' => 
          array (
            'name' => 'Commerce Moneybookers Quick Checkout',
            'description' => 'Integrates Moneybookers\' Quick Checkout service with Drupal Commerce.',
            'core' => '7.x',
            'package' => 'Commerce - Payment',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
            ),
            'version' => '7.x-1.2',
            'project' => 'commerce_moneybookers',
            'datestamp' => '1364994916',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'commerce_moneybookers' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_moneybookers/commerce_moneybookers/commerce_moneybookers.module',
          'basename' => 'commerce_moneybookers.module',
          'name' => 'commerce_moneybookers',
          'info' => 
          array (
            'name' => 'Commerce Moneybookers',
            'description' => 'Integrates Moneybookers\' Web Payment Frontend service with Drupal Commerce.',
            'core' => '7.x',
            'package' => 'Commerce - Payment',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
            ),
            'version' => '7.x-1.2',
            'project' => 'commerce_moneybookers',
            'datestamp' => '1364994916',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'commerce_features' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_features/commerce_features.module',
          'basename' => 'commerce_features.module',
          'name' => 'commerce_features',
          'info' => 
          array (
            'name' => 'Commerce Features',
            'description' => 'Features integration for Drupal Commerce module',
            'package' => 'Features',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'commerce',
            ),
            'version' => '7.x-1.1',
            'project' => 'commerce_features',
            'datestamp' => '1437515562',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'variable_realm' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable_realm/variable_realm.module',
          'basename' => 'variable_realm.module',
          'name' => 'variable_realm',
          'info' => 
          array (
            'name' => 'Variable realm',
            'description' => 'API to use variable realms from different modules',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'files' => 
            array (
              0 => 'variable_realm.class.inc',
              1 => 'variable_realm_union.class.inc',
            ),
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.5',
        ),
        'variable_store' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable_store/variable_store.module',
          'basename' => 'variable_store.module',
          'name' => 'variable_store',
          'info' => 
          array (
            'name' => 'Variable store',
            'description' => 'Database storage for variable realms. This is an API module.',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'files' => 
            array (
              0 => 'variable_store.class.inc',
              1 => 'variable_store.test',
            ),
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.5',
        ),
        'variable_views' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable_views/variable_views.module',
          'basename' => 'variable_views.module',
          'name' => 'variable_views',
          'info' => 
          array (
            'name' => 'Variable views',
            'description' => 'Provides views integration for variable, included a default variable argument.',
            'dependencies' => 
            array (
              0 => 'variable',
              1 => 'views',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views_plugin_argument_default_variable.inc',
              1 => 'includes/views_handler_field_variable_title.inc',
              2 => 'includes/views_handler_field_variable_value.inc',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable_admin' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable_admin/variable_admin.module',
          'basename' => 'variable_admin.module',
          'name' => 'variable_admin',
          'info' => 
          array (
            'name' => 'Variable admin',
            'description' => 'Variable Administration UI',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable_example/variable_example.module',
          'basename' => 'variable_example.module',
          'name' => 'variable_example',
          'info' => 
          array (
            'name' => 'Variable example',
            'description' => 'An example module showing how to use the Variable API and providing some variables.',
            'dependencies' => 
            array (
              0 => 'variable',
              1 => 'variable_store',
            ),
            'package' => 'Example modules',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'variable_example.variable.inc',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/variable/variable.module',
          'basename' => 'variable.module',
          'name' => 'variable',
          'info' => 
          array (
            'name' => 'Variable',
            'description' => 'Variable Information and basic variable API',
            'package' => 'Variable',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/forum.variable.inc',
              1 => 'includes/locale.variable.inc',
              2 => 'includes/menu.variable.inc',
              3 => 'includes/node.variable.inc',
              4 => 'includes/system.variable.inc',
              5 => 'includes/taxonomy.variable.inc',
              6 => 'includes/translation.variable.inc',
              7 => 'includes/user.variable.inc',
              8 => 'variable.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'inline_conditions' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/inline_conditions/inline_conditions.module',
          'basename' => 'inline_conditions.module',
          'name' => 'inline_conditions',
          'info' => 
          array (
            'name' => 'Inline Conditions',
            'description' => 'Manage frequently used conditions through an attached field.',
            'package' => 'Rules',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '7.x-1.0-alpha5',
            'project' => 'inline_conditions',
            'datestamp' => '1431982983',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha5',
        ),
        'migrate_extras_media' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_media/migrate_extras_media.module',
          'basename' => 'migrate_extras_media.module',
          'name' => 'migrate_extras_media',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'file',
              2 => 'media',
              3 => 'media_youtube',
              4 => 'migrate',
              5 => 'migrate_extras',
            ),
            'description' => 'Examples for migrating Media',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_extras_media_example-body',
                1 => 'node-migrate_extras_media_example-field_document',
                2 => 'node-migrate_extras_media_example-field_media_image',
                3 => 'node-migrate_extras_media_example-field_youtube_video',
              ),
              'node' => 
              array (
                0 => 'migrate_extras_media_example',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_extras_media.migrate.inc',
            ),
            'name' => 'Migrate Extras Media',
            'package' => 'Migrate Examples',
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras_pathauto' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_pathauto/migrate_extras_pathauto.module',
          'basename' => 'migrate_extras_pathauto.module',
          'name' => 'migrate_extras_pathauto',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'migrate_extras',
              2 => 'pathauto',
            ),
            'description' => 'Examples of migrating with the Pathauto module',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_pathauto-body',
              ),
              'node' => 
              array (
                0 => 'migrate_example_pathauto',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_extras_pathauto.migrate.inc',
            ),
            'name' => 'Migrate Extras Pathauto Example',
            'package' => 'Migrate Examples',
            'project' => 'migrate_extras',
            'version' => '7.x-2.5',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras_profile2' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_profile2/migrate_extras_profile2.module',
          'basename' => 'migrate_extras_profile2.module',
          'name' => 'migrate_extras_profile2',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'migrate_extras',
              1 => 'profile2',
            ),
            'description' => 'Examples of migrating into Profile2 entities',
            'files' => 
            array (
              0 => 'migrate_extras_profile2.migrate.inc',
            ),
            'name' => 'Migrate Extras Profile2 Example',
            'package' => 'Migrate Examples',
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/migrate_extras/migrate_extras.module',
          'basename' => 'migrate_extras.module',
          'name' => 'migrate_extras',
          'info' => 
          array (
            'name' => 'Migrate Extras',
            'description' => 'Adds migrate module integration with contrib modules and other miscellaneous tweaks.',
            'core' => '7.x',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'migrate',
            ),
            'files' => 
            array (
              0 => 'addressfield.inc',
              1 => 'cck_phone.inc',
              2 => 'entity_api.inc',
              3 => 'flag.inc',
              4 => 'geofield.inc',
              5 => 'interval.inc',
              6 => 'media.inc',
              7 => 'name.inc',
              8 => 'pathauto.inc',
              9 => 'privatemsg.inc',
              10 => 'profile2.inc',
              11 => 'rules.inc',
              12 => 'user_relationships.inc',
              13 => 'votingapi.inc',
              14 => 'webform.inc',
              15 => 'tests/pathauto.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'connector_action_default_register_form' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/connector/modules/connector_action_default_register_form/connector_action_default_register_form.module',
          'basename' => 'connector_action_default_register_form.module',
          'name' => 'connector_action_default_register_form',
          'info' => 
          array (
            'name' => 'Connector Action Default Register Form',
            'description' => 'Adepts the default action for new accounts.',
            'core' => '7.x',
            'package' => 'Connector Action',
            'dependencies' => 
            array (
              0 => 'connector',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'connector',
            'datestamp' => '1361736072',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2',
        ),
        'connector' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/connector/connector.module',
          'basename' => 'connector.module',
          'name' => 'connector',
          'info' => 
          array (
            'name' => 'Connector',
            'description' => 'Provides base functionality for one-click login with eg. Facebook Connect and Twitter Connect',
            'core' => '7.x',
            'package' => 'Connector',
            'version' => '7.x-1.0-beta2',
            'project' => 'connector',
            'datestamp' => '1361736072',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2',
        ),
        'commerce_paymill' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paymill/commerce_paymill.module',
          'basename' => 'commerce_paymill.module',
          'name' => 'commerce_paymill',
          'info' => 
          array (
            'name' => 'Commerce Paymill',
            'description' => 'Provides an interface for making payments via Paymill',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
              2 => 'libraries',
            ),
            'core' => '7.x',
            'configure' => 'admin/settings/commerce-paymill',
            'version' => '7.x-2.4',
            'project' => 'commerce_paymill',
            'datestamp' => '1411981758',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4',
        ),
        'remote_stream_wrapper' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/remote_stream_wrapper/remote_stream_wrapper.module',
          'basename' => 'remote_stream_wrapper.module',
          'name' => 'remote_stream_wrapper',
          'info' => 
          array (
            'name' => 'Remote stream wrapper',
            'description' => 'Provides the ability to use external files with filefields without saving the files to your local files directory.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'remote_stream_wrapper.inc',
              1 => 'RemoteStreamWrapperMediaBrowser.inc',
              2 => 'remote_stream_wrapper.test',
            ),
            'suggests' => 
            array (
              0 => 'file',
              1 => 'media',
              2 => 'image',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'remote_stream_wrapper',
            'datestamp' => '1398126831',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc1',
        ),
        'oauth2_common' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/oauthconnector/modules/oauth2/oauth2_common.module',
          'basename' => 'oauth2_common.module',
          'name' => 'oauth2_common',
          'info' => 
          array (
            'name' => 'OAuth2',
            'description' => 'Extends OAuth functionality with Oauth2',
            'package' => 'OAuth',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'lib/DrupalOAuth2Client.inc',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'oauthconnector',
            'datestamp' => '1369926362',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2',
        ),
        'oauthconnector' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/oauthconnector/oauthconnector.module',
          'basename' => 'oauthconnector.module',
          'name' => 'oauthconnector',
          'info' => 
          array (
            'name' => 'OAuth Connector',
            'description' => 'OAuth support for the Connector module',
            'core' => '7.x',
            'package' => 'Connector',
            'dependencies' => 
            array (
              0 => 'connector',
              1 => 'oauth_common',
              2 => 'oauth2_common',
              3 => 'http_client',
              4 => 'http_client_oauth',
              5 => 'ctools',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'oauthconnector',
            'datestamp' => '1369926362',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.0-beta2',
        ),
        'commerce_exactor_euc' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_exactor/modules/commerce_exactor_euc/commerce_exactor_euc.module',
          'basename' => 'commerce_exactor_euc.module',
          'name' => 'commerce_exactor_euc',
          'info' => 
          array (
            'name' => 'Exactor EUC',
            'description' => 'Utilize standard codes used to assign tax rules to commerce products.',
            'package' => 'Commerce (Tax)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_product',
              2 => 'commerce_exactor',
              3 => 'rules',
              4 => 'views',
              5 => 'views_bulk_operations',
            ),
            'core' => '7.x',
            'version' => '7.x-1.3',
            'project' => 'commerce_exactor',
            'datestamp' => '1389605916',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_exactor_avs' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_exactor/modules/commerce_exactor_avs/commerce_exactor_avs.module',
          'basename' => 'commerce_exactor_avs.module',
          'name' => 'commerce_exactor_avs',
          'info' => 
          array (
            'name' => 'Exactor AVS',
            'description' => 'Integration with Exactor address verification services.',
            'core' => '7.x',
            'package' => 'Commerce (Tax)',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'addressfield',
              2 => 'countries',
            ),
            'version' => '7.x-1.3',
            'project' => 'commerce_exactor',
            'datestamp' => '1389605916',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_exactor_calc' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_exactor/modules/commerce_exactor_calc/commerce_exactor_calc.module',
          'basename' => 'commerce_exactor_calc.module',
          'name' => 'commerce_exactor_calc',
          'info' => 
          array (
            'name' => 'Exactor Calculation Services',
            'description' => 'Enable commerce to calculate taxes accurately on orders using the Exactor sales tax engine.',
            'package' => 'Commerce (Tax)',
            'dependencies' => 
            array (
              0 => 'countries',
              1 => 'commerce',
              2 => 'commerce_order',
              3 => 'commerce_exactor',
              4 => 'rules',
            ),
            'core' => '7.x',
            'version' => '7.x-1.3',
            'project' => 'commerce_exactor',
            'datestamp' => '1389605916',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_exactor' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_exactor/commerce_exactor.module',
          'basename' => 'commerce_exactor.module',
          'name' => 'commerce_exactor',
          'info' => 
          array (
            'name' => 'Exactor API',
            'description' => 'Enable the Exactor Sales Tax Service',
            'package' => 'Commerce (Tax)',
            'core' => '7.x',
            'configure' => 'admin/commerce/config/exactor',
            'version' => '7.x-1.3',
            'project' => 'commerce_exactor',
            'datestamp' => '1389605916',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'commerce_extra_price_formatters' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_extra_price_formatters/commerce_extra_price_formatters.module',
          'basename' => 'commerce_extra_price_formatters.module',
          'name' => 'commerce_extra_price_formatters',
          'info' => 
          array (
            'name' => 'Commerce Extra Price Formatters',
            'description' => 'Provides alternative price formatters for Drupal Commerce',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
            ),
            'package' => 'Commerce (contrib)',
            'version' => '7.x-1.1+7-dev',
            'project' => 'commerce_extra_price_formatters',
            'datestamp' => '1452771919',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1+7-dev',
        ),
        'commerce_flat_rate' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_flat_rate/commerce_flat_rate.module',
          'basename' => 'commerce_flat_rate.module',
          'name' => 'commerce_flat_rate',
          'info' => 
          array (
            'name' => 'Flat Rate',
            'description' => 'Allows you to define any number of flat rate shipping services for customers to choose during checkout.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_shipping',
              2 => 'commerce_shipping_ui',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0-beta2',
            'project' => 'commerce_flat_rate',
            'datestamp' => '1353122757',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2',
        ),
        'countries_i18n' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/countries/modules/countries_i18n/countries_i18n.module',
          'basename' => 'countries_i18n.module',
          'name' => 'countries_i18n',
          'info' => 
          array (
            'name' => 'Countries translation',
            'description' => 'Translation of countries.',
            'core' => '7.x',
            'package' => 'Multilingual - Internationalization',
            'dependencies' => 
            array (
              0 => 'countries',
              1 => 'i18n_string',
            ),
            'version' => '7.x-2.3',
            'project' => 'countries',
            'datestamp' => '1409450929',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'countries_configuration' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/countries/modules/countries_configuration/countries_configuration.module',
          'basename' => 'countries_configuration.module',
          'name' => 'countries_configuration',
          'info' => 
          array (
            'name' => 'Countries configuration',
            'description' => 'A configuration utility module to assist storing country specific data.',
            'package' => 'Fields',
            'version' => '7.x-2.3',
            'core' => '7.x',
            'project' => 'countries',
            'datestamp' => '1409450929',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'countries_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/countries/modules/countries_example/countries_example.module',
          'basename' => 'countries_example.module',
          'name' => 'countries_example',
          'info' => 
          array (
            'name' => 'Countries Example',
            'description' => 'Countries example module',
            'core' => '7.x',
            'package' => 'Example modules',
            'dependencies' => 
            array (
              0 => 'countries',
            ),
            'version' => '7.x-2.3',
            'project' => 'countries',
            'datestamp' => '1409450929',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'countries' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/countries/countries.module',
          'basename' => 'countries.module',
          'name' => 'countries',
          'info' => 
          array (
            'name' => 'Countries',
            'description' => 'A module that provides a FAPI / Field country element and a simple wrapper module to store / update country data.',
            'package' => 'Fields',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views/views_handler_argument_countries_country.inc',
              1 => 'views/views_handler_field_countries_continent.inc',
              2 => 'views/views_handler_filter_countries_continents_list.inc',
              3 => 'views/views_handler_filter_countries_list.inc',
              4 => 'countries.migrate.inc',
              5 => 'tests/countries.test',
            ),
            'configure' => 'admin/config/regional/countries',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'recommends' => 
            array (
              0 => 'countryicons',
            ),
            'version' => '7.x-2.3',
            'project' => 'countries',
            'datestamp' => '1409450929',
            'php' => '5.2.4',
          ),
          'schema_version' => '7205',
          'version' => '7.x-2.3',
        ),
        'mimemail_action' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
          'basename' => 'mimemail_action.module',
          'name' => 'mimemail_action',
          'info' => 
          array (
            'name' => 'Mime Mail Action',
            'description' => 'Provide actions for Mime Mail.',
            'package' => 'Mail',
            'dependencies' => 
            array (
              0 => 'mimemail',
              1 => 'trigger',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail_compress' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
          'basename' => 'mimemail_compress.module',
          'name' => 'mimemail_compress',
          'info' => 
          array (
            'name' => 'Mime Mail CSS Compressor',
            'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
            'package' => 'Mail',
            'dependencies' => 
            array (
              0 => 'mimemail',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'mimemail_compress.inc',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail_example' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mimemail/modules/mimemail_example/mimemail_example.module',
          'basename' => 'mimemail_example.module',
          'name' => 'mimemail_example',
          'info' => 
          array (
            'name' => 'Mime Mail Example',
            'description' => 'Example of how to use the Mime Mail module.',
            'dependencies' => 
            array (
              0 => 'mimemail',
            ),
            'package' => 'Example modules',
            'core' => '7.x',
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/mimemail/mimemail.module',
          'basename' => 'mimemail.module',
          'name' => 'mimemail',
          'info' => 
          array (
            'name' => 'Mime Mail',
            'description' => 'Send MIME-encoded emails with embedded images and attachments.',
            'dependencies' => 
            array (
              0 => 'mailsystem',
              1 => 'system (>=7.24)',
            ),
            'package' => 'Mail',
            'core' => '7.x',
            'configure' => 'admin/config/system/mimemail',
            'files' => 
            array (
              0 => 'includes/mimemail.mail.inc',
              1 => 'tests/mimemail.test',
              2 => 'tests/mimemail_rules.test',
              3 => 'tests/mimemail_compress.test',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.0-beta4',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.test',
            ),
            'version' => '7.x-1.6',
            'project' => 'token',
            'datestamp' => '1425149060',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.6',
        ),
        'commerce_paypal_wps' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paypal/modules/wps/commerce_paypal_wps.module',
          'basename' => 'commerce_paypal_wps.module',
          'name' => 'commerce_paypal_wps',
          'info' => 
          array (
            'name' => 'PayPal WPS',
            'description' => 'Implements PayPal Website Payments Standard in Drupal Commerce checkout.',
            'package' => 'Commerce (PayPal)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
              4 => 'commerce_paypal',
            ),
            'core' => '7.x',
            'version' => '7.x-2.3',
            'project' => 'commerce_paypal',
            'datestamp' => '1389740908',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'commerce_paypal_ec' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paypal/modules/ec/commerce_paypal_ec.module',
          'basename' => 'commerce_paypal_ec.module',
          'name' => 'commerce_paypal_ec',
          'info' => 
          array (
            'name' => 'PayPal Express Checkout',
            'description' => 'Implements PayPal Express Checkout in Drupal Commerce checkout.',
            'package' => 'Commerce (PayPal)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
              4 => 'commerce_paypal',
            ),
            'core' => '7.x',
            'version' => '7.x-2.3',
            'project' => 'commerce_paypal',
            'datestamp' => '1389740908',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'commerce_payflow' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paypal/modules/payflow/commerce_payflow.module',
          'basename' => 'commerce_payflow.module',
          'name' => 'commerce_payflow',
          'info' => 
          array (
            'name' => 'PayPal Payments Advanced and Payflow Link',
            'description' => 'Implements PayPal Payments Advanced (U.S. only) and Payflow Link Hosted Checkout pages and Transparent Redirect.',
            'package' => 'Commerce (PayPal)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
              4 => 'commerce_paypal',
            ),
            'core' => '7.x',
            'version' => '7.x-2.3',
            'project' => 'commerce_paypal',
            'datestamp' => '1389740908',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'commerce_paypal_wpp' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paypal/modules/wpp/commerce_paypal_wpp.module',
          'basename' => 'commerce_paypal_wpp.module',
          'name' => 'commerce_paypal_wpp',
          'info' => 
          array (
            'name' => 'PayPal WPP',
            'description' => 'Implements PayPal Website Payments Pro in Drupal Commerce checkout.',
            'package' => 'Commerce (PayPal)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
              4 => 'commerce_paypal',
            ),
            'core' => '7.x',
            'version' => '7.x-2.3',
            'project' => 'commerce_paypal',
            'datestamp' => '1389740908',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'commerce_paypal' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/commerce_paypal/commerce_paypal.module',
          'basename' => 'commerce_paypal.module',
          'name' => 'commerce_paypal',
          'info' => 
          array (
            'name' => 'PayPal',
            'description' => 'Implements PayPal payment services for use with Drupal Commerce.',
            'package' => 'Commerce (PayPal)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_payment',
              3 => 'commerce_order',
            ),
            'core' => '7.x',
            'version' => '7.x-2.3',
            'project' => 'commerce_paypal',
            'datestamp' => '1389740908',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'kameleoon' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/kameleoon/kameleoon.module',
          'basename' => 'kameleoon.module',
          'name' => 'kameleoon',
          'info' => 
          array (
            'name' => 'Kameleoon',
            'description' => 'Integration with Kameleoon A/B testing solution.',
            'core' => '7.x',
            'configure' => 'admin/config/system/kameleoon',
            'files' => 
            array (
              0 => 'kameleoon.test',
            ),
            'version' => '7.x-1.1',
            'project' => 'kameleoon',
            'datestamp' => '1403519328',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'module_filter' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/module_filter/module_filter.module',
          'basename' => 'module_filter.module',
          'name' => 'module_filter',
          'info' => 
          array (
            'name' => 'Module filter',
            'description' => 'Filter the modules list.',
            'core' => '7.x',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'module_filter.install',
              1 => 'module_filter.js',
              2 => 'module_filter.module',
              3 => 'module_filter.admin.inc',
              4 => 'module_filter.theme.inc',
              5 => 'css/module_filter.css',
              6 => 'css/module_filter_tab.css',
              7 => 'js/module_filter.js',
              8 => 'js/module_filter_tab.js',
            ),
            'configure' => 'admin/config/user-interface/modulefilter',
            'version' => '7.x-2.0',
            'project' => 'module_filter',
            'datestamp' => '1424631189',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.0',
        ),
        'features' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
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
            'configure' => 'admin/structure/features/settings',
            'version' => '7.x-2.7',
            'project' => 'features',
            'datestamp' => '1444829630',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.7',
        ),
        'search_api_sorts' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/search_api_sorts/search_api_sorts.module',
          'basename' => 'search_api_sorts.module',
          'name' => 'search_api_sorts',
          'info' => 
          array (
            'name' => 'Search sorts',
            'description' => 'Create sort options for search queries executed via the Search API.',
            'dependencies' => 
            array (
              0 => 'search_api',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'search_api_sorts.entity.inc',
            ),
            'version' => '7.x-1.6',
            'project' => 'search_api_sorts',
            'datestamp' => '1450819140',
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'version' => '7.x-1.6',
        ),
        'cloud_zoom' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/cloud_zoom/cloud_zoom.module',
          'basename' => 'cloud_zoom.module',
          'name' => 'cloud_zoom',
          'info' => 
          array (
            'name' => 'Cloud Zoom',
            'description' => 'Cloud Zoom (Professor Cloud) integration',
            'core' => '7.x',
            'package' => 'Cloud Zoom',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'files' => 
            array (
              0 => 'cloud_zoom.module',
            ),
            'version' => '7.x-1.1+1-dev',
            'project' => 'cloud_zoom',
            'datestamp' => '1452771902',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1+1-dev',
        ),
        'http_client_oauth' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/http_client/http_client_oauth.module',
          'basename' => 'http_client_oauth.module',
          'name' => 'http_client_oauth',
          'info' => 
          array (
            'name' => 'Http Client OAuth',
            'description' => 'Provides a OAuth authentication mechanism for the Http Client',
            'dependencies' => 
            array (
              0 => 'oauth_common',
              1 => 'http_client',
            ),
            'files' => 
            array (
              0 => 'includes/HttpClientOAuth.inc',
            ),
            'package' => 'Services - clients',
            'core' => '7.x',
            'version' => '7.x-2.4',
            'project' => 'http_client',
            'datestamp' => '1345646840',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4',
        ),
        'http_client' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/http_client/http_client.module',
          'basename' => 'http_client.module',
          'name' => 'http_client',
          'info' => 
          array (
            'name' => 'Http Client',
            'description' => 'Provides a Http client for use with the services Http server',
            'files' => 
            array (
              0 => 'includes/HttpClient.inc',
              1 => 'includes/HttpClientXMLFormatter.inc',
              2 => 'includes/HttpClientCurlDelegate.inc',
            ),
            'package' => 'Services - clients',
            'core' => '7.x',
            'version' => '7.x-2.4',
            'project' => 'http_client',
            'datestamp' => '1345646840',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4',
        ),
        'oauth_common_providerui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/oauth/oauth_common_providerui.module',
          'basename' => 'oauth_common_providerui.module',
          'name' => 'oauth_common_providerui',
          'info' => 
          array (
            'name' => 'OAuth Provider UI',
            'description' => 'Provides a UI for when OAuth is acting as a provider.',
            'package' => 'OAuth',
            'dependencies' => 
            array (
              0 => 'oauth_common',
            ),
            'core' => '7.x',
            'version' => '7.x-3.2',
            'project' => 'oauth',
            'datestamp' => '1390561406',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.2',
        ),
        'oauth_common' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/contrib/oauth/oauth_common.module',
          'basename' => 'oauth_common.module',
          'name' => 'oauth_common',
          'info' => 
          array (
            'name' => 'OAuth',
            'description' => 'Provides OAuth functionality',
            'configure' => 'admin/config/services/oauth',
            'package' => 'OAuth',
            'recommends' => 
            array (
              0 => 'ctools',
            ),
            'suggests' => 
            array (
              0 => 'inputstream',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'lib/OAuth.php',
              1 => 'includes/DrupalOAuthServer.inc',
              2 => 'includes/DrupalOAuthDataStore.inc',
              3 => 'includes/DrupalOAuthRequest.inc',
              4 => 'includes/DrupalOAuthToken.inc',
              5 => 'includes/DrupalOAuthConsumer.inc',
              6 => 'includes/DrupalOAuthClient.inc',
              7 => 'includes/OAuthSignatureMethod_HMAC.inc',
            ),
            'version' => '7.x-3.2',
            'project' => 'oauth',
            'datestamp' => '1390561406',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.2',
        ),
        'commerce_kickstart_blog' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_blog/commerce_kickstart_blog.module',
          'basename' => 'commerce_kickstart_blog.module',
          'name' => 'commerce_kickstart_blog',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Blog',
            'description' => 'Provides the blog_post content type and related functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'commerce_kickstart_migrate',
              1 => 'ctools',
              2 => 'features',
              3 => 'fences',
              4 => 'image',
              5 => 'image_delta_formatter',
              6 => 'menu',
              7 => 'options',
              8 => 'strongarm',
              9 => 'taxonomy',
              10 => 'text',
              11 => 'title',
              12 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_blog_category',
                1 => 'field_tags',
              ),
              'field_instance' => 
              array (
                0 => 'node-blog_post-body',
                1 => 'node-blog_post-field_blog_category',
                2 => 'node-blog_post-field_image',
                3 => 'node-blog_post-field_tags',
                4 => 'node-blog_post-title_field',
              ),
              'image' => 
              array (
                0 => 'blog_full',
                1 => 'blog_medium',
              ),
              'node' => 
              array (
                0 => 'blog_post',
              ),
              'taxonomy' => 
              array (
                0 => 'blog_category',
                1 => 'tags',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_blog_post',
                1 => 'comment_blog_post',
                2 => 'comment_default_mode_blog_post',
                3 => 'comment_default_per_page_blog_post',
                4 => 'comment_form_location_blog_post',
                5 => 'comment_preview_blog_post',
                6 => 'comment_subject_field_blog_post',
                7 => 'field_bundle_settings_node__blog_post',
                8 => 'menu_options_blog_post',
                9 => 'menu_parent_blog_post',
                10 => 'node_options_blog_post',
                11 => 'node_preview_blog_post',
                12 => 'node_submitted_blog_post',
                13 => 'pathauto_node_blog_post_pattern',
              ),
              'views_view' => 
              array (
                0 => 'blog',
                1 => 'blog_category_list',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'body' => 'body',
                'field_image' => 'field_image',
                'title_field' => 'title_field',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_blog.migrate.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_dfp' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_dfp/commerce_kickstart_dfp.module',
          'basename' => 'commerce_kickstart_dfp.module',
          'name' => 'commerce_kickstart_dfp',
          'info' => 
          array (
            'name' => 'Commerce Kickstart DFP',
            'description' => 'Provides in-distribution content for Commerce Kickstart.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_product_ui' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_product_ui/commerce_kickstart_product_ui.module',
          'basename' => 'commerce_kickstart_product_ui.module',
          'name' => 'commerce_kickstart_product_ui',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Product UI',
            'description' => 'Provides product-related views and other UI elements.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'commerce_product',
              1 => 'views',
              2 => 'libraries',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_menus' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_menus/commerce_kickstart_menus.module',
          'basename' => 'commerce_kickstart_menus.module',
          'name' => 'commerce_kickstart_menus',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Menus',
            'description' => 'Provides a Kickstart-specific administration menu.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'toolbar_megamenu',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'commerce_kickstart_menus.css',
              ),
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_migrate' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_migrate/commerce_kickstart_migrate.module',
          'basename' => 'commerce_kickstart_migrate.module',
          'name' => 'commerce_kickstart_migrate',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Migrate',
            'description' => 'Provides Kickstart-specific Migrate handlers and base migrations.',
            'package' => 'Commerce Kickstart',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'migrate',
              1 => 'commerce_migrate',
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_migrate.migrate.inc',
              1 => 'plugins/destinations/fields.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_user' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_user/commerce_kickstart_user.module',
          'basename' => 'commerce_kickstart_user.module',
          'name' => 'commerce_kickstart_user',
          'info' => 
          array (
            'name' => 'Commerce Kickstart User',
            'description' => 'Provides user related functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'commerce_addressbook',
              2 => 'commerce_customer',
              3 => 'commerce_shipping',
              4 => 'ctools',
              5 => 'features',
              6 => 'menu',
              7 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'menu_custom' => 
              array (
                0 => 'menu-user-menu',
              ),
              'menu_links' => 
              array (
                0 => 'menu-user-menu_create-account:user/register',
                1 => 'menu-user-menu_log-in:user/login',
                2 => 'menu-user-menu_log-out:user/logout',
                3 => 'menu-user-menu_my-account:user',
              ),
              'user_permission' => 
              array (
                0 => 'create commerce_customer_profile entities',
                1 => 'create commerce_customer_profile entities of bundle billing',
                2 => 'create commerce_customer_profile entities of bundle shipping',
                3 => 'edit own commerce_customer_profile entities',
                4 => 'edit own commerce_customer_profile entities of bundle billing',
                5 => 'edit own commerce_customer_profile entities of bundle shipping',
                6 => 'view own commerce_customer_profile entities',
                7 => 'view own commerce_customer_profile entities of bundle billing',
                8 => 'view own commerce_customer_profile entities of bundle shipping',
              ),
              'variable' => 
              array (
                0 => 'commerce_customer_profile_billing_addressbook',
                1 => 'commerce_customer_profile_billing_field',
                2 => 'commerce_customer_profile_shipping_addressbook',
                3 => 'commerce_customer_profile_shipping_field',
                4 => 'commerce_customer_profile_shipping_profile_copy',
                5 => 'commerce_customer_profile_shipping_profile_copy_default',
                6 => 'commerce_customer_profile_shipping_profile_copy_source',
                7 => 'configurable_timezones',
                8 => 'pathauto_user_pattern',
                9 => 'user_email_verification',
                10 => 'user_pictures',
                11 => 'user_register',
              ),
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'toolbar_megamenu' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/toolbar_megamenu/toolbar_megamenu.module',
          'basename' => 'toolbar_megamenu.module',
          'name' => 'toolbar_megamenu',
          'info' => 
          array (
            'name' => 'Toolbar Megamenu',
            'description' => 'Extension of Toolbar to support dropdown megamenus.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_order' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_order/commerce_kickstart_order.module',
          'basename' => 'commerce_kickstart_order.module',
          'name' => 'commerce_kickstart_order',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Order',
            'description' => 'Provides Kickstart-specific cart and order customizations.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'commerce_message',
              2 => 'commerce_cart',
              3 => 'ctools',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_block' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_block/commerce_kickstart_block.module',
          'basename' => 'commerce_kickstart_block.module',
          'name' => 'commerce_kickstart_block',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Block',
            'description' => 'Provides blocks and menus.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'ctools',
              2 => 'features',
              3 => 'menu',
              4 => 'special_menu_items',
              5 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'menu_custom' => 
              array (
                0 => 'menu-footer-navigation',
                1 => 'menu-payment-methods',
                2 => 'secondary-navigation',
              ),
              'menu_links' => 
              array (
                0 => 'menu-footer-navigation_about-us:node/2',
                1 => 'menu-footer-navigation_company-info:<nolink>',
                2 => 'menu-footer-navigation_our-security-policy:node/8',
                3 => 'menu-footer-navigation_press-links:node/6',
                4 => 'menu-footer-navigation_security--privacy:<nolink>',
                5 => 'menu-footer-navigation_service--support:<nolink>',
                6 => 'menu-footer-navigation_service-agreements:node/7',
                7 => 'menu-footer-navigation_shipping--returns:<nolink>',
                8 => 'menu-footer-navigation_shipping-fees:node/5',
                9 => 'menu-footer-navigation_terms-of-use:node/3',
                10 => 'menu-payment-methods_american-express:<front>',
                11 => 'menu-payment-methods_mastercard:<front>',
                12 => 'menu-payment-methods_paypal:<front>',
                13 => 'menu-payment-methods_visa:<front>',
                14 => 'secondary-navigation_about:node/2',
                15 => 'secondary-navigation_contact:node/1',
              ),
              'variable' => 
              array (
                0 => 'menu_secondary_links_source',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_block.module',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_social' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_social/commerce_kickstart_social.module',
          'basename' => 'commerce_kickstart_social.module',
          'name' => 'commerce_kickstart_social',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Social',
            'description' => 'Social features for Commerce kickstart.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'connector_action_default_register_form',
              2 => 'ctools',
              3 => 'features',
              4 => 'http_client',
              5 => 'menu',
              6 => 'oauth_common',
              7 => 'oauthconnector',
              8 => 'service_links',
              9 => 'strongarm',
              10 => 'widget_services',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'oauthconnector:oauthconnector:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'menu_custom' => 
              array (
                0 => 'menu-social-connection',
              ),
              'menu_links' => 
              array (
                0 => 'menu-social-connection_follow-us-on-twitter:https://twitter.com/commerceguys',
                1 => 'menu-social-connection_like-us-on-facebook:https://www.facebook.com/commerceguys',
                2 => 'menu-social-connection_what-we-like-on-pinterest:http://pinterest.com/',
              ),
              'oauthconnector_provider' => 
              array (
                0 => 'facebook',
                1 => 'google',
                2 => 'twitter',
              ),
              'variable' => 
              array (
                0 => 'service_links_in_links',
                1 => 'service_links_in_node',
                2 => 'service_links_label_in_node',
                3 => 'service_links_node_types',
                4 => 'service_links_node_view_modes',
                5 => 'service_links_show',
                6 => 'service_links_style',
                7 => 'service_links_visibility_for_node',
              ),
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_slideshow' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_slideshow/commerce_kickstart_slideshow.module',
          'basename' => 'commerce_kickstart_slideshow.module',
          'name' => 'commerce_kickstart_slideshow',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Slideshow',
            'description' => 'Provides the slideshow node type and related functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'commerce_kickstart_migrate',
              2 => 'ctools',
              3 => 'features',
              4 => 'image',
              5 => 'libraries',
              6 => 'link',
              7 => 'list',
              8 => 'menu',
              9 => 'path',
              10 => 'strongarm',
              11 => 'taxonomy',
              12 => 'text',
              13 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'comment_body',
                1 => 'field_headline',
                2 => 'field_link',
                3 => 'field_tagline',
              ),
              'field_instance' => 
              array (
                0 => 'comment-comment_node_slideshow-comment_body',
                1 => 'node-slideshow-field_headline',
                2 => 'node-slideshow-field_image',
                3 => 'node-slideshow-field_link',
                4 => 'node-slideshow-field_tagline',
                5 => 'node-slideshow-title_field',
              ),
              'image' => 
              array (
                0 => 'hp_slideshow',
              ),
              'node' => 
              array (
                0 => 'slideshow',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_slideshow',
                1 => 'comment_default_mode_slideshow',
                2 => 'comment_default_per_page_slideshow',
                3 => 'comment_form_location_slideshow',
                4 => 'comment_preview_slideshow',
                5 => 'comment_slideshow',
                6 => 'comment_subject_field_slideshow',
                7 => 'field_bundle_settings_node__slideshow',
                8 => 'menu_options_slideshow',
                9 => 'menu_parent_slideshow',
                10 => 'node_options_slideshow',
                11 => 'node_preview_slideshow',
                12 => 'node_submitted_slideshow',
                13 => 'pathauto_node_slideshow_pattern',
              ),
              'views_view' => 
              array (
                0 => 'demo_content_slideshow',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'field_image' => 'field_image',
                'title_field' => 'title_field',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_slideshow.migrate.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_search' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_search/commerce_kickstart_search.module',
          'basename' => 'commerce_kickstart_search.module',
          'name' => 'commerce_kickstart_search',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Search',
            'description' => 'Provides the faceted search page and supporting plugins, sorts, and other functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'current_search',
              1 => 'commerce_product_reference',
              2 => 'entity',
              3 => 'commerce_search_api',
              4 => 'search_api_db',
              5 => 'search_api_facetapi',
              6 => 'search_api_ranges',
              7 => 'search_api_sorts',
              8 => 'search_api_views',
              9 => 'views',
            ),
            'scripts' => 
            array (
              0 => 'commerce_kickstart_search.js',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_merchandising' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_merchandising/commerce_kickstart_merchandising.module',
          'basename' => 'commerce_kickstart_merchandising.module',
          'name' => 'commerce_kickstart_merchandising',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Merchandising',
            'description' => 'Provides merchandising functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'commerce_kickstart_migrate',
              2 => 'ctools',
              3 => 'features',
              4 => 'image',
              5 => 'libraries',
              6 => 'link',
              7 => 'list',
              8 => 'menu',
              9 => 'path',
              10 => 'strongarm',
              11 => 'text',
              12 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_link',
                1 => 'field_tagline',
              ),
              'field_instance' => 
              array (
                0 => 'comment-comment_node_ad_push-comment_body',
                1 => 'node-ad_push-field_image',
                2 => 'node-ad_push-field_link',
                3 => 'node-ad_push-field_tagline',
                4 => 'node-ad_push-title_field',
              ),
              'node' => 
              array (
                0 => 'ad_push',
              ),
              'variable' => 
              array (
                0 => 'comment_ad_push',
                1 => 'field_bundle_settings_node__ad_push',
                2 => 'field_bundle_settings_taxonomy_term__collection',
                3 => 'menu_options_ad_push',
                4 => 'menu_parent_ad_push',
                5 => 'node_options_ad_push',
                6 => 'node_submitted_ad_push',
                7 => 'pathauto_node_ad_push_pattern',
                8 => 'site_403',
                9 => 'site_404',
              ),
              'views_view' => 
              array (
                0 => 'ad_push',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'field_image' => 'field_image',
                'title_field' => 'title_field',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_merchandising.migrate.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_lite_product' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_lite_product/commerce_kickstart_lite_product.module',
          'basename' => 'commerce_kickstart_lite_product.module',
          'name' => 'commerce_kickstart_lite_product',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Lite Product',
            'description' => 'Provides the taxonomy vocabularies, product types, product display types, and related functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'cloud_zoom',
              1 => 'commerce_cart',
              2 => 'commerce_extra_price_formatters',
              3 => 'commerce_features',
              4 => 'commerce_flat_rate',
              5 => 'commerce_kickstart_migrate',
              6 => 'commerce_price',
              7 => 'commerce_product',
              8 => 'commerce_product_reference',
              9 => 'commerce_product_ui',
              10 => 'ctools',
              11 => 'features',
              12 => 'image',
              13 => 'image_delta_formatter',
              14 => 'inline_entity_form',
              15 => 'menu',
              16 => 'options',
              17 => 'strongarm',
              18 => 'taxonomy',
              19 => 'text',
              20 => 'title',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'body',
                1 => 'commerce_price',
                2 => 'field_images',
                3 => 'field_product',
                4 => 'field_product_category',
                5 => 'title_field',
              ),
              'field_instance' => 
              array (
                0 => 'commerce_product-product-commerce_price',
                1 => 'commerce_product-product-field_images',
                2 => 'commerce_product-product-title_field',
                3 => 'node-product_display-body',
                4 => 'node-product_display-field_product',
                5 => 'node-product_display-field_product_category',
                6 => 'node-product_display-title_field',
              ),
              'image' => 
              array (
                0 => 'product_full',
                1 => 'product_medium',
                2 => 'product_thumbnail',
              ),
              'variable' => 
              array (
                0 => 'comment_product_display',
                1 => 'comment_subject_field_product_display',
                2 => 'field_bundle_settings_commerce_product__product',
                3 => 'field_bundle_settings_node__product_display',
                4 => 'menu_options_product_display',
                5 => 'menu_parent_product_display',
                6 => 'node_options_product_display',
                7 => 'node_submitted_product_display',
                8 => 'pathauto_node_pattern',
                9 => 'pathauto_punctuation_hyphen',
                10 => 'pathauto_taxonomy_term_pattern',
              ),
            ),
            'features_exclude' => 
            array (
              'taxonomy' => 
              array (
                'product_category' => 'product_category',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_lite_product.migrate.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_reset' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_reset/commerce_kickstart_reset.module',
          'basename' => 'commerce_kickstart_reset.module',
          'name' => 'commerce_kickstart_reset',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Reset',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'dependencies' => 
            array (
            ),
            'description' => '',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_comment' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_comment/commerce_kickstart_comment.module',
          'basename' => 'commerce_kickstart_comment.module',
          'name' => 'commerce_kickstart_comment',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Comment',
            'description' => 'Provides Kickstart-specific comment customizations.',
            'package' => 'Commerce Kickstart',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'comment',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_product' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_product/commerce_kickstart_product.module',
          'basename' => 'commerce_kickstart_product.module',
          'name' => 'commerce_kickstart_product',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Product',
            'description' => 'Provides the taxonomy vocabularies, product types, product display types, and related functionality.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'cloud_zoom',
              1 => 'commerce_autosku',
              2 => 'commerce_cart',
              3 => 'commerce_extra_price_formatters',
              4 => 'commerce_fancy_attributes',
              5 => 'commerce_features',
              6 => 'commerce_flat_rate',
              7 => 'commerce_kickstart_migrate',
              8 => 'commerce_price',
              9 => 'commerce_product',
              10 => 'commerce_product_reference',
              11 => 'commerce_product_ui',
              12 => 'commerce_shipping',
              13 => 'ctools',
              14 => 'entity',
              15 => 'entityreference',
              16 => 'facetapi',
              17 => 'features',
              18 => 'field_extractor',
              19 => 'image',
              20 => 'image_delta_formatter',
              21 => 'inline_entity_form',
              22 => 'menu',
              23 => 'options',
              24 => 'rules',
              25 => 'strongarm',
              26 => 'taxonomy',
              27 => 'text',
              28 => 'title',
            ),
            'features' => 
            array (
              'commerce_autosku_patterns' => 
              array (
                0 => 'bags_cases',
                1 => 'drinks',
                2 => 'hats',
                3 => 'shoes',
                4 => 'storage_devices',
                5 => 'tops',
              ),
              'commerce_flat_rate_services' => 
              array (
                0 => 'express_shipping',
                1 => 'free_shipping',
                2 => 'standard_shipping',
              ),
              'commerce_product_type' => 
              array (
                0 => 'bags_cases',
                1 => 'drinks',
                2 => 'hats',
                3 => 'shoes',
                4 => 'storage_devices',
                5 => 'tops',
              ),
              'ctools' => 
              array (
                0 => 'commerce_autosku:autosku_pattern:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'commerce_price',
                1 => 'field_bag_size',
                2 => 'field_brand',
                3 => 'field_category',
                4 => 'field_category_color',
                5 => 'field_collection',
                6 => 'field_color',
                7 => 'field_gender',
                8 => 'field_hat_size',
                9 => 'field_images',
                10 => 'field_product',
                11 => 'field_shoe_size',
                12 => 'field_storage_capacity',
                13 => 'field_top_size',
              ),
              'field_instance' => 
              array (
                0 => 'commerce_product-bags_cases-commerce_price',
                1 => 'commerce_product-bags_cases-field_bag_size',
                2 => 'commerce_product-bags_cases-field_color',
                3 => 'commerce_product-bags_cases-field_images',
                4 => 'commerce_product-bags_cases-title_field',
                5 => 'commerce_product-drinks-commerce_price',
                6 => 'commerce_product-drinks-field_color',
                7 => 'commerce_product-drinks-field_images',
                8 => 'commerce_product-drinks-title_field',
                9 => 'commerce_product-hats-commerce_price',
                10 => 'commerce_product-hats-field_color',
                11 => 'commerce_product-hats-field_hat_size',
                12 => 'commerce_product-hats-field_images',
                13 => 'commerce_product-hats-title_field',
                14 => 'commerce_product-shoes-commerce_price',
                15 => 'commerce_product-shoes-field_color',
                16 => 'commerce_product-shoes-field_images',
                17 => 'commerce_product-shoes-field_shoe_size',
                18 => 'commerce_product-shoes-title_field',
                19 => 'commerce_product-storage_devices-commerce_price',
                20 => 'commerce_product-storage_devices-field_images',
                21 => 'commerce_product-storage_devices-field_storage_capacity',
                22 => 'commerce_product-storage_devices-title_field',
                23 => 'commerce_product-tops-commerce_price',
                24 => 'commerce_product-tops-field_color',
                25 => 'commerce_product-tops-field_images',
                26 => 'commerce_product-tops-field_top_size',
                27 => 'commerce_product-tops-title_field',
                28 => 'node-bags_cases-body',
                29 => 'node-bags_cases-field_brand',
                30 => 'node-bags_cases-field_category',
                31 => 'node-bags_cases-field_collection',
                32 => 'node-bags_cases-field_gender',
                33 => 'node-bags_cases-field_product',
                34 => 'node-bags_cases-title_field',
                35 => 'node-drinks-body',
                36 => 'node-drinks-field_brand',
                37 => 'node-drinks-field_category',
                38 => 'node-drinks-field_collection',
                39 => 'node-drinks-field_gender',
                40 => 'node-drinks-field_product',
                41 => 'node-drinks-title_field',
                42 => 'node-hats-body',
                43 => 'node-hats-field_brand',
                44 => 'node-hats-field_category',
                45 => 'node-hats-field_collection',
                46 => 'node-hats-field_gender',
                47 => 'node-hats-field_product',
                48 => 'node-hats-title_field',
                49 => 'node-shoes-body',
                50 => 'node-shoes-field_brand',
                51 => 'node-shoes-field_category',
                52 => 'node-shoes-field_collection',
                53 => 'node-shoes-field_gender',
                54 => 'node-shoes-field_product',
                55 => 'node-shoes-title_field',
                56 => 'node-storage_devices-body',
                57 => 'node-storage_devices-field_brand',
                58 => 'node-storage_devices-field_category',
                59 => 'node-storage_devices-field_collection',
                60 => 'node-storage_devices-field_gender',
                61 => 'node-storage_devices-field_product',
                62 => 'node-storage_devices-title_field',
                63 => 'node-tops-body',
                64 => 'node-tops-field_brand',
                65 => 'node-tops-field_category',
                66 => 'node-tops-field_collection',
                67 => 'node-tops-field_gender',
                68 => 'node-tops-field_product',
                69 => 'node-tops-title_field',
                70 => 'taxonomy_term-category-field_category_color',
                71 => 'taxonomy_term-collection-field_image',
                72 => 'taxonomy_term-color-field_category_color',
              ),
              'image' => 
              array (
                0 => 'product_full',
                1 => 'product_medium',
                2 => 'product_thumbnail',
              ),
              'node' => 
              array (
                0 => 'bags_cases',
                1 => 'drinks',
                2 => 'hats',
                3 => 'shoes',
                4 => 'storage_devices',
                5 => 'tops',
              ),
              'rules_config' => 
              array (
                0 => 'commerce_shipping_service_express_shipping',
                1 => 'commerce_shipping_service_free_shipping',
                2 => 'commerce_shipping_service_standard_shipping',
              ),
              'taxonomy' => 
              array (
                0 => 'bag_size',
                1 => 'brand',
                2 => 'category',
                3 => 'collection',
                4 => 'color',
                5 => 'gender',
                6 => 'hat_size',
                7 => 'shoe_size',
                8 => 'storage_capacity',
                9 => 'top_size',
              ),
              'user_permission' => 
              array (
                0 => 'view any commerce_product entity of bundle bags_cases',
                1 => 'view any commerce_product entity of bundle drinks',
                2 => 'view any commerce_product entity of bundle hats',
                3 => 'view any commerce_product entity of bundle shoes',
                4 => 'view any commerce_product entity of bundle storage_devices',
                5 => 'view any commerce_product entity of bundle tops',
                6 => 'view own commerce_product entities of bundle bags_cases',
                7 => 'view own commerce_product entities of bundle drinks',
                8 => 'view own commerce_product entities of bundle hats',
                9 => 'view own commerce_product entities of bundle shoes',
                10 => 'view own commerce_product entities of bundle storage_devices',
                11 => 'view own commerce_product entities of bundle tops',
              ),
              'variable' => 
              array (
                0 => 'comment_bags_cases',
                1 => 'comment_drinks',
                2 => 'comment_hats',
                3 => 'comment_shoes',
                4 => 'comment_storage_devices',
                5 => 'comment_tops',
                6 => 'field_bundle_settings_commerce_product__bags_cases',
                7 => 'field_bundle_settings_commerce_product__drinks',
                8 => 'field_bundle_settings_commerce_product__hats',
                9 => 'field_bundle_settings_commerce_product__shoes',
                10 => 'field_bundle_settings_commerce_product__storage_devices',
                11 => 'field_bundle_settings_commerce_product__tops',
                12 => 'field_bundle_settings_node__bags_cases',
                13 => 'field_bundle_settings_node__drinks',
                14 => 'field_bundle_settings_node__hats',
                15 => 'field_bundle_settings_node__shoes',
                16 => 'field_bundle_settings_node__storage_devices',
                17 => 'field_bundle_settings_node__tops',
                18 => 'menu_options_bags_cases',
                19 => 'menu_options_drinks',
                20 => 'menu_options_hats',
                21 => 'menu_options_shoes',
                22 => 'menu_options_storage_devices',
                23 => 'menu_options_tops',
                24 => 'node_options_bags_cases',
                25 => 'node_options_drinks',
                26 => 'node_options_hats',
                27 => 'node_options_shoes',
                28 => 'node_options_storage_devices',
                29 => 'node_options_tops',
                30 => 'node_submitted_bags_cases',
                31 => 'node_submitted_drinks',
                32 => 'node_submitted_hats',
                33 => 'node_submitted_shoes',
                34 => 'node_submitted_storage_devices',
                35 => 'node_submitted_tops',
                36 => 'pathauto_node_bags_cases_pattern',
                37 => 'pathauto_node_drinks_pattern',
                38 => 'pathauto_node_hats_pattern',
                39 => 'pathauto_node_pattern',
                40 => 'pathauto_node_shoes_pattern',
                41 => 'pathauto_node_storage_devices_pattern',
                42 => 'pathauto_node_tops_pattern',
                43 => 'pathauto_punctuation_hyphen',
                44 => 'pathauto_taxonomy_term_bag_size_pattern',
                45 => 'pathauto_taxonomy_term_brand_pattern',
                46 => 'pathauto_taxonomy_term_category_pattern',
                47 => 'pathauto_taxonomy_term_collection_pattern',
                48 => 'pathauto_taxonomy_term_color_pattern',
                49 => 'pathauto_taxonomy_term_gender_pattern',
                50 => 'pathauto_taxonomy_term_hat_size_pattern',
                51 => 'pathauto_taxonomy_term_pattern',
                52 => 'pathauto_taxonomy_term_shoe_size_pattern',
                53 => 'pathauto_taxonomy_term_storage_capacity_pattern',
                54 => 'pathauto_taxonomy_term_top_size_pattern',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'body' => 'body',
                'field_image' => 'field_image',
                'title_field' => 'title_field',
              ),
            ),
            'files' => 
            array (
              0 => 'commerce_kickstart_product.migrate.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_taxonomy' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_taxonomy/commerce_kickstart_taxonomy.module',
          'basename' => 'commerce_kickstart_taxonomy.module',
          'name' => 'commerce_kickstart_taxonomy',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Taxonomy',
            'description' => 'Provides Kickstart-specific taxonomy customizations..',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'taxonomy_menu',
              1 => 'commerce_kickstart_search',
              2 => 'views',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_kickstart_taxonomy_handler_field_text.inc',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_inline_help' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_help/commerce_kickstart_inline_help/commerce_kickstart_inline_help.module',
          'basename' => 'commerce_kickstart_inline_help.module',
          'name' => 'commerce_kickstart_inline_help',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Inline Help',
            'description' => 'Injects inline help into various parts of Commerce Kickstart.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'advanced_help',
              1 => 'commerce_kickstart_help',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_help' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/modules/commerce_kickstart/commerce_kickstart_help/commerce_kickstart_help.module',
          'basename' => 'commerce_kickstart_help.module',
          'name' => 'commerce_kickstart_help',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Help',
            'description' => 'Provides in-distribution help for Commerce Kickstart.',
            'core' => '7.x',
            'package' => 'Commerce Kickstart',
            'dependencies' => 
            array (
              0 => 'advanced_help',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.32',
        ),
      ),
      'themes' => 
      array (
        'omega' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega/omega/omega.info',
          'basename' => 'omega.info',
          'name' => 'Omega',
          'info' => 
          array (
            'name' => 'Omega',
            'description' => '<a href="http://drupal.org/project/omega">Omega</a> extends the Omega theme framework with some additional features and makes them availabe to its subthemes. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'version' => '7.x-3.1',
            'base theme' => 'alpha',
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'user_first' => 'User Bar First',
              'user_second' => 'User Bar Second',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'header_first' => 'Header First',
              'header_second' => 'Header Second',
              'preface_first' => 'Preface First',
              'preface_second' => 'Preface Second',
              'preface_third' => 'Preface Third',
              'postscript_first' => 'Postscript First',
              'postscript_second' => 'Postscript Second',
              'postscript_third' => 'Postscript Third',
              'postscript_fourth' => 'Postscript Fourth',
              'footer_first' => 'Footer First',
              'footer_second' => 'Footer Second',
            ),
            'zones' => 
            array (
              'user' => 'User',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'header' => 'Header',
              'preface' => 'Preface',
              'content' => 'Content',
              'postscript' => 'Postscript',
              'footer' => 'Footer',
            ),
            'css' => 
            array (
              'omega-text.css' => 
              array (
                'name' => 'Text Styles',
                'description' => 'Default text styles for Omega.',
                'options' => 
                array (
                  'weight' => '-10',
                ),
              ),
              'omega-branding.css' => 
              array (
                'name' => 'Branding Styles',
                'description' => 'Provides positioning for the logo, title and slogan.',
                'options' => 
                array (
                  'weight' => '-10',
                ),
              ),
              'omega-menu.css' => 
              array (
                'name' => 'Menu Styles',
                'description' => 'Provides positoning and basic CSS for primary and secondary menus.',
                'options' => 
                array (
                  'weight' => '-10',
                ),
              ),
              'omega-forms.css' => 
              array (
                'name' => 'Form Styles',
                'description' => 'Provides basic form styles.',
                'options' => 
                array (
                  'weight' => '-10',
                ),
              ),
              'omega-visuals.css' => 
              array (
                'name' => 'Omega Styles',
                'description' => 'Custom visual styles for Omega. (pagers, menus, etc.)',
                'options' => 
                array (
                  'weight' => '-10',
                ),
              ),
            ),
            'libraries' => 
            array (
              'omega_formalize' => 
              array (
                'name' => 'Formalize',
                'description' => 'Formalize is a framework by <a href="http://formalize.me/" title="Formalize">Nathan Smith</a> for neat looking cross-browser forms with extended functionality.',
                'js' => 
                array (
                  0 => 
                  array (
                    'file' => 'jquery.formalize.js',
                    'options' => 
                    array (
                      'weight' => '-20',
                    ),
                  ),
                ),
                'css' => 
                array (
                  0 => 
                  array (
                    'file' => 'formalize.css',
                    'options' => 
                    array (
                      'weight' => '-20',
                    ),
                  ),
                ),
              ),
              'omega_mediaqueries' => 
              array (
                'name' => 'Media queries',
                'description' => 'Provides a tiny JavaScript library that can be used in your custom JavaScript.',
                'js' => 
                array (
                  0 => 
                  array (
                    'file' => 'omega-mediaqueries.js',
                    'options' => 
                    array (
                      'weight' => '-19',
                    ),
                  ),
                ),
              ),
              'omega_equalheights' => 
              array (
                'name' => 'Equal heights',
                'description' => 'Allows you to force all regions of a zone or all blocks of a region to be of equal size. <span class="marker">This library reveals a corresponding checkbox on every region and zone configuration panel if activated.</span>',
                'js' => 
                array (
                  0 => 
                  array (
                    'file' => 'omega-equalheights.js',
                    'options' => 
                    array (
                      'weight' => '-18',
                    ),
                  ),
                ),
              ),
            ),
            'plugins' => 
            array (
              'panels' => 
              array (
                'layouts' => 'panels/layouts',
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '1',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_libraries' => 
              array (
                'omega_formalize' => 'omega_formalize',
                'omega_equalheights' => '',
                'omega_mediaqueries' => 'omega_mediaqueries',
              ),
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'omega-text.css' => 'omega-text.css',
                'omega-branding.css' => 'omega-branding.css',
                'omega-menu.css' => 'omega-menu.css',
                'omega-forms.css' => 'omega-forms.css',
                'omega-visuals.css' => 'omega-visuals.css',
              ),
              'alpha_debug_block_toggle' => '1',
              'alpha_debug_block_active' => '1',
              'alpha_debug_grid_toggle' => '1',
              'alpha_debug_grid_active' => '1',
              'alpha_debug_grid_roles' => 
              array (
                1 => '1',
                2 => '2',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_user_equal_height_container' => '',
              'alpha_zone_user_wrapper' => '1',
              'alpha_zone_user_force' => '',
              'alpha_zone_user_section' => 'header',
              'alpha_zone_user_weight' => '1',
              'alpha_zone_user_columns' => '12',
              'alpha_zone_user_primary' => '',
              'alpha_zone_user_css' => '',
              'alpha_zone_user_wrapper_css' => '',
              'alpha_zone_branding_equal_height_container' => '',
              'alpha_zone_branding_wrapper' => '1',
              'alpha_zone_branding_force' => '',
              'alpha_zone_branding_section' => 'header',
              'alpha_zone_branding_weight' => '2',
              'alpha_zone_branding_columns' => '12',
              'alpha_zone_branding_primary' => '',
              'alpha_zone_branding_css' => '',
              'alpha_zone_branding_wrapper_css' => '',
              'alpha_zone_menu_equal_height_container' => '',
              'alpha_zone_menu_wrapper' => '1',
              'alpha_zone_menu_force' => '',
              'alpha_zone_menu_section' => 'header',
              'alpha_zone_menu_weight' => '3',
              'alpha_zone_menu_columns' => '12',
              'alpha_zone_menu_primary' => '',
              'alpha_zone_menu_css' => '',
              'alpha_zone_menu_wrapper_css' => '',
              'alpha_zone_header_equal_height_container' => '',
              'alpha_zone_header_wrapper' => '1',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '4',
              'alpha_zone_header_columns' => '12',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_preface_equal_height_container' => '',
              'alpha_zone_preface_wrapper' => '1',
              'alpha_zone_preface_force' => '',
              'alpha_zone_preface_section' => 'content',
              'alpha_zone_preface_weight' => '1',
              'alpha_zone_preface_columns' => '12',
              'alpha_zone_preface_primary' => '',
              'alpha_zone_preface_css' => '',
              'alpha_zone_preface_wrapper_css' => '',
              'alpha_zone_content_equal_height_container' => '',
              'alpha_zone_content_wrapper' => '1',
              'alpha_zone_content_force' => '1',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '2',
              'alpha_zone_content_columns' => '12',
              'alpha_zone_content_primary' => 'content',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_postscript_equal_height_container' => '',
              'alpha_zone_postscript_wrapper' => '1',
              'alpha_zone_postscript_force' => '',
              'alpha_zone_postscript_section' => 'content',
              'alpha_zone_postscript_weight' => '3',
              'alpha_zone_postscript_columns' => '12',
              'alpha_zone_postscript_primary' => '',
              'alpha_zone_postscript_css' => '',
              'alpha_zone_postscript_wrapper_css' => '',
              'alpha_zone_footer_equal_height_container' => '',
              'alpha_zone_footer_wrapper' => '1',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '1',
              'alpha_zone_footer_columns' => '12',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_region_dashboard_sidebar_equal_height_container' => '',
              'alpha_region_dashboard_sidebar_equal_height_element' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '-50',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_inactive_equal_height_container' => '',
              'alpha_region_dashboard_inactive_equal_height_element' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '-50',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_main_equal_height_container' => '',
              'alpha_region_dashboard_main_equal_height_element' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '-50',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_user_first_equal_height_container' => '',
              'alpha_region_user_first_equal_height_element' => '',
              'alpha_region_user_first_force' => '',
              'alpha_region_user_first_zone' => 'user',
              'alpha_region_user_first_prefix' => '',
              'alpha_region_user_first_columns' => '8',
              'alpha_region_user_first_suffix' => '',
              'alpha_region_user_first_weight' => '1',
              'alpha_region_user_first_css' => '',
              'alpha_region_user_second_equal_height_container' => '',
              'alpha_region_user_second_equal_height_element' => '',
              'alpha_region_user_second_force' => '',
              'alpha_region_user_second_zone' => 'user',
              'alpha_region_user_second_prefix' => '',
              'alpha_region_user_second_columns' => '4',
              'alpha_region_user_second_suffix' => '',
              'alpha_region_user_second_weight' => '2',
              'alpha_region_user_second_css' => '',
              'alpha_region_branding_equal_height_container' => '',
              'alpha_region_branding_equal_height_element' => '',
              'alpha_region_branding_force' => '1',
              'alpha_region_branding_zone' => 'branding',
              'alpha_region_branding_prefix' => '',
              'alpha_region_branding_columns' => '12',
              'alpha_region_branding_suffix' => '',
              'alpha_region_branding_weight' => '1',
              'alpha_region_branding_css' => '',
              'alpha_region_menu_equal_height_container' => '',
              'alpha_region_menu_equal_height_element' => '',
              'alpha_region_menu_force' => '1',
              'alpha_region_menu_zone' => 'menu',
              'alpha_region_menu_prefix' => '',
              'alpha_region_menu_columns' => '12',
              'alpha_region_menu_suffix' => '',
              'alpha_region_menu_weight' => '1',
              'alpha_region_menu_css' => '',
              'alpha_region_header_first_equal_height_container' => '',
              'alpha_region_header_first_equal_height_element' => '',
              'alpha_region_header_first_force' => '',
              'alpha_region_header_first_zone' => 'header',
              'alpha_region_header_first_prefix' => '',
              'alpha_region_header_first_columns' => '6',
              'alpha_region_header_first_suffix' => '',
              'alpha_region_header_first_weight' => '1',
              'alpha_region_header_first_css' => '',
              'alpha_region_header_second_equal_height_container' => '',
              'alpha_region_header_second_equal_height_element' => '',
              'alpha_region_header_second_force' => '',
              'alpha_region_header_second_zone' => 'header',
              'alpha_region_header_second_prefix' => '',
              'alpha_region_header_second_columns' => '6',
              'alpha_region_header_second_suffix' => '',
              'alpha_region_header_second_weight' => '2',
              'alpha_region_header_second_css' => '',
              'alpha_region_preface_first_equal_height_container' => '',
              'alpha_region_preface_first_equal_height_element' => '',
              'alpha_region_preface_first_force' => '',
              'alpha_region_preface_first_zone' => 'preface',
              'alpha_region_preface_first_prefix' => '',
              'alpha_region_preface_first_columns' => '4',
              'alpha_region_preface_first_suffix' => '',
              'alpha_region_preface_first_weight' => '1',
              'alpha_region_preface_first_css' => '',
              'alpha_region_preface_second_equal_height_container' => '',
              'alpha_region_preface_second_equal_height_element' => '',
              'alpha_region_preface_second_force' => '',
              'alpha_region_preface_second_zone' => 'preface',
              'alpha_region_preface_second_prefix' => '',
              'alpha_region_preface_second_columns' => '4',
              'alpha_region_preface_second_suffix' => '',
              'alpha_region_preface_second_weight' => '2',
              'alpha_region_preface_second_css' => '',
              'alpha_region_preface_third_equal_height_container' => '',
              'alpha_region_preface_third_equal_height_element' => '',
              'alpha_region_preface_third_force' => '',
              'alpha_region_preface_third_zone' => 'preface',
              'alpha_region_preface_third_prefix' => '',
              'alpha_region_preface_third_columns' => '4',
              'alpha_region_preface_third_suffix' => '',
              'alpha_region_preface_third_weight' => '3',
              'alpha_region_preface_third_css' => '',
              'alpha_region_content_equal_height_container' => '',
              'alpha_region_content_equal_height_element' => '',
              'alpha_region_content_force' => '',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '6',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_equal_height_container' => '',
              'alpha_region_sidebar_first_equal_height_element' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '3',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_equal_height_container' => '',
              'alpha_region_sidebar_second_equal_height_element' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '3',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_postscript_first_equal_height_container' => '',
              'alpha_region_postscript_first_equal_height_element' => '',
              'alpha_region_postscript_first_force' => '',
              'alpha_region_postscript_first_zone' => 'postscript',
              'alpha_region_postscript_first_prefix' => '',
              'alpha_region_postscript_first_columns' => '3',
              'alpha_region_postscript_first_suffix' => '',
              'alpha_region_postscript_first_weight' => '1',
              'alpha_region_postscript_first_css' => '',
              'alpha_region_postscript_second_equal_height_container' => '',
              'alpha_region_postscript_second_equal_height_element' => '',
              'alpha_region_postscript_second_force' => '',
              'alpha_region_postscript_second_zone' => 'postscript',
              'alpha_region_postscript_second_prefix' => '',
              'alpha_region_postscript_second_columns' => '3',
              'alpha_region_postscript_second_suffix' => '',
              'alpha_region_postscript_second_weight' => '2',
              'alpha_region_postscript_second_css' => '',
              'alpha_region_postscript_third_equal_height_container' => '',
              'alpha_region_postscript_third_equal_height_element' => '',
              'alpha_region_postscript_third_force' => '',
              'alpha_region_postscript_third_zone' => 'postscript',
              'alpha_region_postscript_third_prefix' => '',
              'alpha_region_postscript_third_columns' => '3',
              'alpha_region_postscript_third_suffix' => '',
              'alpha_region_postscript_third_weight' => '3',
              'alpha_region_postscript_third_css' => '',
              'alpha_region_postscript_fourth_equal_height_container' => '',
              'alpha_region_postscript_fourth_equal_height_element' => '',
              'alpha_region_postscript_fourth_force' => '',
              'alpha_region_postscript_fourth_zone' => 'postscript',
              'alpha_region_postscript_fourth_prefix' => '',
              'alpha_region_postscript_fourth_columns' => '3',
              'alpha_region_postscript_fourth_suffix' => '',
              'alpha_region_postscript_fourth_weight' => '4',
              'alpha_region_postscript_fourth_css' => '',
              'alpha_region_footer_first_equal_height_container' => '',
              'alpha_region_footer_first_equal_height_element' => '',
              'alpha_region_footer_first_force' => '',
              'alpha_region_footer_first_zone' => 'footer',
              'alpha_region_footer_first_prefix' => '',
              'alpha_region_footer_first_columns' => '12',
              'alpha_region_footer_first_suffix' => '',
              'alpha_region_footer_first_weight' => '1',
              'alpha_region_footer_first_css' => '',
              'alpha_region_footer_second_equal_height_container' => '',
              'alpha_region_footer_second_equal_height_element' => '',
              'alpha_region_footer_second_force' => '',
              'alpha_region_footer_second_zone' => 'footer',
              'alpha_region_footer_second_prefix' => '',
              'alpha_region_footer_second_columns' => '12',
              'alpha_region_footer_second_suffix' => '',
              'alpha_region_footer_second_weight' => '2',
              'alpha_region_footer_second_css' => '',
            ),
            'project' => 'omega',
            'datestamp' => '1329681647',
          ),
          'version' => '7.x-3.1',
        ),
        'alpha' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega/alpha/alpha.info',
          'basename' => 'alpha.info',
          'name' => 'Alpha',
          'info' => 
          array (
            'name' => 'Alpha',
            'description' => 'Alpha is the core basetheme for <a href="http://drupal.org/project/omega">Omega</a> and all its subthemes. It includes the most basic features of the Omega theme framework. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'version' => '7.x-3.1',
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'header' => 'Header',
              'footer' => 'Footer',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
            ),
            'zones' => 
            array (
              'content' => 'Content',
              'header' => 'Header',
              'footer' => 'Footer',
            ),
            'css' => 
            array (
              'alpha-reset.css' => 
              array (
                'name' => 'Reset',
                'description' => 'Created by <a href="http://meyerweb.com/eric/tools/css/reset/">Eric Meyer</a>.',
                'options' => 
                array (
                  'weight' => '-20',
                ),
              ),
              'alpha-mobile.css' => 
              array (
                'name' => 'Mobile',
                'description' => 'Default stylesheet for mobile styles.',
                'options' => 
                array (
                  'weight' => '-20',
                ),
              ),
              'alpha-alpha.css' => 
              array (
                'name' => 'Alpha',
                'description' => 'Default styles & resets for Alpha/Omega base theme.',
                'options' => 
                array (
                  'weight' => '-20',
                ),
              ),
            ),
            'exclude' => 
            array (
              'misc/vertical-tabs.css' => 'This requires a description.',
              'modules/aggregator/aggregator.css' => 'This requires a description.',
              'modules/block/block.css' => 'This requires a description.',
              'modules/dblog/dblog.css' => 'This requires a description.',
              'modules/file/file.css' => 'This requires a description.',
              'modules/filter/filter.css' => 'This requires a description.',
              'modules/help/help.css' => 'This requires a description.',
              'modules/menu/menu.css' => 'This requires a description.',
              'modules/openid/openid.css' => 'This requires a description.',
              'modules/profile/profile.css' => 'This requires a description.',
              'modules/statistics/statistics.css' => 'This requires a description.',
              'modules/syslog/syslog.css' => 'This requires a description.',
              'modules/system/admin.css' => 'This requires a description.',
              'modules/system/maintenance.css' => 'This requires a description.',
              'modules/system/system.css' => 'This requires a description.',
              'modules/system/system.admin.css' => 'This requires a description.',
              'modules/system/system.base.css' => 'This requires a description.',
              'modules/system/system.maintenance.css' => 'This requires a description.',
              'modules/system/system.menus.css' => 'This requires a description.',
              'modules/system/system.messages.css' => 'This requires a description.',
              'modules/system/system.theme.css' => 'This requires a description.',
              'modules/taxonomy/taxonomy.css' => 'This requires a description.',
              'modules/tracker/tracker.css' => 'This requires a description.',
              'modules/update/update.css' => 'This requires a description.',
            ),
            'grids' => 
            array (
              'alpha_default' => 
              array (
                'name' => 'Default (960px)',
                'layouts' => 
                array (
                  'fluid' => 'Fluid',
                  'narrow' => 'Narrow',
                  'normal' => 'Normal',
                  'wide' => 'Wide',
                ),
                'columns' => 
                array (
                  12 => '12 Columns',
                  16 => '16 Columns',
                  24 => '24 Columns',
                ),
              ),
              'alpha_fluid' => 
              array (
                'name' => 'Fluid',
                'layouts' => 
                array (
                  'normal' => 'Normal',
                ),
                'columns' => 
                array (
                  12 => '12 Columns',
                  16 => '16 Columns',
                  24 => '24 Columns',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '1',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
              ),
              'alpha_debug_block_toggle' => '1',
              'alpha_debug_block_active' => '1',
              'alpha_debug_grid_toggle' => '1',
              'alpha_debug_grid_active' => '1',
              'alpha_debug_grid_roles' => 
              array (
                1 => '1',
                2 => '2',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_header_wrapper' => '',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '',
              'alpha_zone_header_columns' => '12',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_content_wrapper' => '',
              'alpha_zone_content_force' => '',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '',
              'alpha_zone_content_columns' => '12',
              'alpha_zone_content_primary' => '',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_footer_wrapper' => '',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '',
              'alpha_zone_footer_columns' => '12',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_header_force' => '',
              'alpha_region_header_zone' => 'header',
              'alpha_region_header_prefix' => '',
              'alpha_region_header_columns' => '12',
              'alpha_region_header_suffix' => '',
              'alpha_region_header_weight' => '',
              'alpha_region_header_css' => '',
              'alpha_region_content_force' => '',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '6',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '1',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '3',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '2',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '3',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_footer_force' => '',
              'alpha_region_footer_zone' => 'footer',
              'alpha_region_footer_prefix' => '',
              'alpha_region_footer_columns' => '12',
              'alpha_region_footer_suffix' => '',
              'alpha_region_footer_weight' => '',
              'alpha_region_footer_css' => '',
            ),
            'project' => 'omega',
            'datestamp' => '1329681647',
          ),
          'version' => '7.x-3.1',
        ),
        'starterkit_alpha_xhtml' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega/starterkits/alpha-xhtml/starterkit_alpha_xhtml.info',
          'basename' => 'starterkit_alpha_xhtml.info',
          'name' => 'Alpha XHTML Starterkit',
          'info' => 
          array (
            'name' => 'Alpha XHTML Starterkit',
            'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Alpha</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'base theme' => 'alpha',
            'hidden' => true,
            'starterkit' => true,
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'header' => 'Header',
              'footer' => 'Footer',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
            ),
            'zones' => 
            array (
              'content' => 'Content',
              'header' => 'Header',
              'footer' => 'Footer',
            ),
            'css' => 
            array (
              'global.css' => 
              array (
                'name' => 'Your custom global styles',
                'description' => 'This file holds all the globally active custom CSS of your theme.',
                'options' => 
                array (
                  'weight' => '10',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '1',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'global.css' => 'global.css',
              ),
              'alpha_debug_block_toggle' => '1',
              'alpha_debug_block_active' => '1',
              'alpha_debug_grid_toggle' => '1',
              'alpha_debug_grid_active' => '1',
              'alpha_debug_grid_roles' => 
              array (
                1 => '1',
                2 => '2',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_header_wrapper' => '',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '',
              'alpha_zone_header_columns' => '12',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_order' => '0',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_content_wrapper' => '',
              'alpha_zone_content_force' => '',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '',
              'alpha_zone_content_columns' => '12',
              'alpha_zone_content_primary' => '',
              'alpha_zone_content_order' => '0',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_footer_wrapper' => '',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '',
              'alpha_zone_footer_columns' => '12',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_order' => '0',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '',
              'alpha_region_dashboard_inactive_position' => '',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '',
              'alpha_region_dashboard_sidebar_position' => '',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '',
              'alpha_region_dashboard_main_position' => '',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_header_force' => '',
              'alpha_region_header_zone' => 'header',
              'alpha_region_header_prefix' => '',
              'alpha_region_header_columns' => '12',
              'alpha_region_header_suffix' => '',
              'alpha_region_header_weight' => '',
              'alpha_region_header_position' => '1',
              'alpha_region_header_css' => '',
              'alpha_region_content_force' => '',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '6',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '1',
              'alpha_region_content_position' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '3',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '2',
              'alpha_region_sidebar_first_position' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '3',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_position' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_footer_force' => '',
              'alpha_region_footer_zone' => 'footer',
              'alpha_region_footer_prefix' => '',
              'alpha_region_footer_columns' => '12',
              'alpha_region_footer_suffix' => '',
              'alpha_region_footer_weight' => '1',
              'alpha_region_footer_css' => '',
            ),
            'version' => '7.x-3.1',
            'project' => 'omega',
            'datestamp' => '1329681647',
          ),
          'version' => '7.x-3.1',
        ),
        'starterkit_omega_html5' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega/starterkits/omega-html5/starterkit_omega_html5.info',
          'basename' => 'starterkit_omega_html5.info',
          'name' => 'Omega HTML5 Starterkit',
          'info' => 
          array (
            'name' => 'Omega HTML5 Starterkit',
            'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'base theme' => 'omega',
            'hidden' => true,
            'starterkit' => true,
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'user_first' => 'User Bar First',
              'user_second' => 'User Bar Second',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'header_first' => 'Header First',
              'header_second' => 'Header Second',
              'preface_first' => 'Preface First',
              'preface_second' => 'Preface Second',
              'preface_third' => 'Preface Third',
              'postscript_first' => 'Postscript First',
              'postscript_second' => 'Postscript Second',
              'postscript_third' => 'Postscript Third',
              'postscript_fourth' => 'Postscript Fourth',
              'footer_first' => 'Footer First',
              'footer_second' => 'Footer Second',
            ),
            'zones' => 
            array (
              'user' => 'User',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'header' => 'Header',
              'preface' => 'Preface',
              'content' => 'Content',
              'postscript' => 'Postscript',
              'footer' => 'Footer',
            ),
            'css' => 
            array (
              'global.css' => 
              array (
                'name' => 'Your custom global styles',
                'description' => 'This file holds all the globally active custom CSS of your theme.',
                'options' => 
                array (
                  'weight' => '10',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '1',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_libraries' => 
              array (
                'omega_formalize' => 'omega_formalize',
                'omega_equalheights' => '',
                'omega_mediaqueries' => 'omega_mediaqueries',
              ),
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'omega-text.css' => 'omega-text.css',
                'omega-branding.css' => 'omega-branding.css',
                'omega-menu.css' => 'omega-menu.css',
                'omega-forms.css' => 'omega-forms.css',
                'omega-visuals.css' => 'omega-visuals.css',
                'global.css' => 'global.css',
              ),
              'alpha_debug_block_toggle' => '1',
              'alpha_debug_block_active' => '1',
              'alpha_debug_grid_toggle' => '1',
              'alpha_debug_grid_active' => '1',
              'alpha_debug_grid_roles' => 
              array (
                1 => '1',
                2 => '2',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_user_equal_height_container' => '',
              'alpha_zone_user_wrapper' => '1',
              'alpha_zone_user_force' => '',
              'alpha_zone_user_section' => 'header',
              'alpha_zone_user_weight' => '1',
              'alpha_zone_user_columns' => '12',
              'alpha_zone_user_primary' => '',
              'alpha_zone_user_css' => '',
              'alpha_zone_user_wrapper_css' => '',
              'alpha_zone_branding_equal_height_container' => '',
              'alpha_zone_branding_wrapper' => '1',
              'alpha_zone_branding_force' => '',
              'alpha_zone_branding_section' => 'header',
              'alpha_zone_branding_weight' => '2',
              'alpha_zone_branding_columns' => '12',
              'alpha_zone_branding_primary' => '',
              'alpha_zone_branding_css' => '',
              'alpha_zone_branding_wrapper_css' => '',
              'alpha_zone_menu_equal_height_container' => '',
              'alpha_zone_menu_wrapper' => '1',
              'alpha_zone_menu_force' => '',
              'alpha_zone_menu_section' => 'header',
              'alpha_zone_menu_weight' => '3',
              'alpha_zone_menu_columns' => '12',
              'alpha_zone_menu_primary' => '',
              'alpha_zone_menu_css' => '',
              'alpha_zone_menu_wrapper_css' => '',
              'alpha_zone_header_equal_height_container' => '',
              'alpha_zone_header_wrapper' => '1',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '4',
              'alpha_zone_header_columns' => '12',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_preface_equal_height_container' => '',
              'alpha_zone_preface_wrapper' => '1',
              'alpha_zone_preface_force' => '',
              'alpha_zone_preface_section' => 'content',
              'alpha_zone_preface_weight' => '1',
              'alpha_zone_preface_columns' => '12',
              'alpha_zone_preface_primary' => '',
              'alpha_zone_preface_css' => '',
              'alpha_zone_preface_wrapper_css' => '',
              'alpha_zone_content_equal_height_container' => '',
              'alpha_zone_content_wrapper' => '1',
              'alpha_zone_content_force' => '1',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '2',
              'alpha_zone_content_columns' => '12',
              'alpha_zone_content_primary' => 'content',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_postscript_equal_height_container' => '',
              'alpha_zone_postscript_wrapper' => '1',
              'alpha_zone_postscript_force' => '',
              'alpha_zone_postscript_section' => 'content',
              'alpha_zone_postscript_weight' => '3',
              'alpha_zone_postscript_columns' => '12',
              'alpha_zone_postscript_primary' => '',
              'alpha_zone_postscript_css' => '',
              'alpha_zone_postscript_wrapper_css' => '',
              'alpha_zone_footer_equal_height_container' => '',
              'alpha_zone_footer_wrapper' => '1',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '1',
              'alpha_zone_footer_columns' => '12',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_region_dashboard_sidebar_equal_height_container' => '',
              'alpha_region_dashboard_sidebar_equal_height_element' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '-50',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_inactive_equal_height_container' => '',
              'alpha_region_dashboard_inactive_equal_height_element' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '-50',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_main_equal_height_container' => '',
              'alpha_region_dashboard_main_equal_height_element' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '-50',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_user_first_equal_height_container' => '',
              'alpha_region_user_first_equal_height_element' => '',
              'alpha_region_user_first_force' => '',
              'alpha_region_user_first_zone' => 'user',
              'alpha_region_user_first_prefix' => '',
              'alpha_region_user_first_columns' => '8',
              'alpha_region_user_first_suffix' => '',
              'alpha_region_user_first_weight' => '1',
              'alpha_region_user_first_css' => '',
              'alpha_region_user_second_equal_height_container' => '',
              'alpha_region_user_second_equal_height_element' => '',
              'alpha_region_user_second_force' => '',
              'alpha_region_user_second_zone' => 'user',
              'alpha_region_user_second_prefix' => '',
              'alpha_region_user_second_columns' => '4',
              'alpha_region_user_second_suffix' => '',
              'alpha_region_user_second_weight' => '2',
              'alpha_region_user_second_css' => '',
              'alpha_region_branding_equal_height_container' => '',
              'alpha_region_branding_equal_height_element' => '',
              'alpha_region_branding_force' => '1',
              'alpha_region_branding_zone' => 'branding',
              'alpha_region_branding_prefix' => '',
              'alpha_region_branding_columns' => '12',
              'alpha_region_branding_suffix' => '',
              'alpha_region_branding_weight' => '1',
              'alpha_region_branding_css' => '',
              'alpha_region_menu_equal_height_container' => '',
              'alpha_region_menu_equal_height_element' => '',
              'alpha_region_menu_force' => '1',
              'alpha_region_menu_zone' => 'menu',
              'alpha_region_menu_prefix' => '',
              'alpha_region_menu_columns' => '12',
              'alpha_region_menu_suffix' => '',
              'alpha_region_menu_weight' => '1',
              'alpha_region_menu_css' => '',
              'alpha_region_header_first_equal_height_container' => '',
              'alpha_region_header_first_equal_height_element' => '',
              'alpha_region_header_first_force' => '',
              'alpha_region_header_first_zone' => 'header',
              'alpha_region_header_first_prefix' => '',
              'alpha_region_header_first_columns' => '6',
              'alpha_region_header_first_suffix' => '',
              'alpha_region_header_first_weight' => '1',
              'alpha_region_header_first_css' => '',
              'alpha_region_header_second_equal_height_container' => '',
              'alpha_region_header_second_equal_height_element' => '',
              'alpha_region_header_second_force' => '',
              'alpha_region_header_second_zone' => 'header',
              'alpha_region_header_second_prefix' => '',
              'alpha_region_header_second_columns' => '6',
              'alpha_region_header_second_suffix' => '',
              'alpha_region_header_second_weight' => '2',
              'alpha_region_header_second_css' => '',
              'alpha_region_preface_first_equal_height_container' => '',
              'alpha_region_preface_first_equal_height_element' => '',
              'alpha_region_preface_first_force' => '',
              'alpha_region_preface_first_zone' => 'preface',
              'alpha_region_preface_first_prefix' => '',
              'alpha_region_preface_first_columns' => '4',
              'alpha_region_preface_first_suffix' => '',
              'alpha_region_preface_first_weight' => '1',
              'alpha_region_preface_first_css' => '',
              'alpha_region_preface_second_equal_height_container' => '',
              'alpha_region_preface_second_equal_height_element' => '',
              'alpha_region_preface_second_force' => '',
              'alpha_region_preface_second_zone' => 'preface',
              'alpha_region_preface_second_prefix' => '',
              'alpha_region_preface_second_columns' => '4',
              'alpha_region_preface_second_suffix' => '',
              'alpha_region_preface_second_weight' => '2',
              'alpha_region_preface_second_css' => '',
              'alpha_region_preface_third_equal_height_container' => '',
              'alpha_region_preface_third_equal_height_element' => '',
              'alpha_region_preface_third_force' => '',
              'alpha_region_preface_third_zone' => 'preface',
              'alpha_region_preface_third_prefix' => '',
              'alpha_region_preface_third_columns' => '4',
              'alpha_region_preface_third_suffix' => '',
              'alpha_region_preface_third_weight' => '3',
              'alpha_region_preface_third_css' => '',
              'alpha_region_content_equal_height_container' => '',
              'alpha_region_content_equal_height_element' => '',
              'alpha_region_content_force' => '',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '6',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_equal_height_container' => '',
              'alpha_region_sidebar_first_equal_height_element' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '3',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_equal_height_container' => '',
              'alpha_region_sidebar_second_equal_height_element' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '3',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_postscript_first_equal_height_container' => '',
              'alpha_region_postscript_first_equal_height_element' => '',
              'alpha_region_postscript_first_force' => '',
              'alpha_region_postscript_first_zone' => 'postscript',
              'alpha_region_postscript_first_prefix' => '',
              'alpha_region_postscript_first_columns' => '3',
              'alpha_region_postscript_first_suffix' => '',
              'alpha_region_postscript_first_weight' => '1',
              'alpha_region_postscript_first_css' => '',
              'alpha_region_postscript_second_equal_height_container' => '',
              'alpha_region_postscript_second_equal_height_element' => '',
              'alpha_region_postscript_second_force' => '',
              'alpha_region_postscript_second_zone' => 'postscript',
              'alpha_region_postscript_second_prefix' => '',
              'alpha_region_postscript_second_columns' => '3',
              'alpha_region_postscript_second_suffix' => '',
              'alpha_region_postscript_second_weight' => '2',
              'alpha_region_postscript_second_css' => '',
              'alpha_region_postscript_third_equal_height_container' => '',
              'alpha_region_postscript_third_equal_height_element' => '',
              'alpha_region_postscript_third_force' => '',
              'alpha_region_postscript_third_zone' => 'postscript',
              'alpha_region_postscript_third_prefix' => '',
              'alpha_region_postscript_third_columns' => '3',
              'alpha_region_postscript_third_suffix' => '',
              'alpha_region_postscript_third_weight' => '3',
              'alpha_region_postscript_third_css' => '',
              'alpha_region_postscript_fourth_equal_height_container' => '',
              'alpha_region_postscript_fourth_equal_height_element' => '',
              'alpha_region_postscript_fourth_force' => '',
              'alpha_region_postscript_fourth_zone' => 'postscript',
              'alpha_region_postscript_fourth_prefix' => '',
              'alpha_region_postscript_fourth_columns' => '3',
              'alpha_region_postscript_fourth_suffix' => '',
              'alpha_region_postscript_fourth_weight' => '4',
              'alpha_region_postscript_fourth_css' => '',
              'alpha_region_footer_first_equal_height_container' => '',
              'alpha_region_footer_first_equal_height_element' => '',
              'alpha_region_footer_first_force' => '',
              'alpha_region_footer_first_zone' => 'footer',
              'alpha_region_footer_first_prefix' => '',
              'alpha_region_footer_first_columns' => '12',
              'alpha_region_footer_first_suffix' => '',
              'alpha_region_footer_first_weight' => '1',
              'alpha_region_footer_first_css' => '',
              'alpha_region_footer_second_equal_height_container' => '',
              'alpha_region_footer_second_equal_height_element' => '',
              'alpha_region_footer_second_force' => '',
              'alpha_region_footer_second_zone' => 'footer',
              'alpha_region_footer_second_prefix' => '',
              'alpha_region_footer_second_columns' => '12',
              'alpha_region_footer_second_suffix' => '',
              'alpha_region_footer_second_weight' => '2',
              'alpha_region_footer_second_css' => '',
            ),
            'version' => '7.x-3.1',
            'project' => 'omega',
            'datestamp' => '1329681647',
          ),
          'version' => '7.x-3.1',
        ),
        'starterkit_omega_xhtml' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega/starterkits/omega-xhtml/starterkit_omega_xhtml.info',
          'basename' => 'starterkit_omega_xhtml.info',
          'name' => 'Omega XHTML Starter Kit',
          'info' => 
          array (
            'name' => 'Omega XHTML Starter Kit',
            'description' => 'Default XHTML starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'base theme' => 'omega',
            'hidden' => true,
            'starterkit' => true,
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'user_first' => 'User Bar First',
              'user_second' => 'User Bar Second',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'header_first' => 'Header First',
              'header_second' => 'Header Second',
              'preface_first' => 'Preface First',
              'preface_second' => 'Preface Second',
              'preface_third' => 'Preface Third',
              'postscript_first' => 'Postscript First',
              'postscript_second' => 'Postscript Second',
              'postscript_third' => 'Postscript Third',
              'postscript_fourth' => 'Postscript Fourth',
              'footer_first' => 'Footer First',
              'footer_second' => 'Footer Second',
            ),
            'zones' => 
            array (
              'user' => 'User',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'header' => 'Header',
              'preface' => 'Preface',
              'content' => 'Content',
              'postscript' => 'Postscript',
              'footer' => 'Footer',
            ),
            'css' => 
            array (
              'global.css' => 
              array (
                'name' => 'Your custom global styles',
                'description' => 'This file holds all the globally active custom CSS of your theme.',
                'options' => 
                array (
                  'weight' => '10',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '1',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_libraries' => 
              array (
                'omega_formalize' => 'omega_formalize',
                'omega_equalheights' => '',
                'omega_mediaqueries' => 'omega_mediaqueries',
              ),
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'omega-text.css' => 'omega-text.css',
                'omega-branding.css' => 'omega-branding.css',
                'omega-menu.css' => 'omega-menu.css',
                'omega-forms.css' => 'omega-forms.css',
                'omega-visuals.css' => 'omega-visuals.css',
                'global.css' => 'global.css',
              ),
              'alpha_debug_block_toggle' => '1',
              'alpha_debug_block_active' => '1',
              'alpha_debug_grid_toggle' => '1',
              'alpha_debug_grid_active' => '1',
              'alpha_debug_grid_roles' => 
              array (
                1 => '1',
                2 => '2',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_user_equal_height_container' => '',
              'alpha_zone_user_wrapper' => '1',
              'alpha_zone_user_force' => '',
              'alpha_zone_user_section' => 'header',
              'alpha_zone_user_weight' => '1',
              'alpha_zone_user_columns' => '12',
              'alpha_zone_user_primary' => '',
              'alpha_zone_user_css' => '',
              'alpha_zone_user_wrapper_css' => '',
              'alpha_zone_branding_equal_height_container' => '',
              'alpha_zone_branding_wrapper' => '1',
              'alpha_zone_branding_force' => '',
              'alpha_zone_branding_section' => 'header',
              'alpha_zone_branding_weight' => '2',
              'alpha_zone_branding_columns' => '12',
              'alpha_zone_branding_primary' => '',
              'alpha_zone_branding_css' => '',
              'alpha_zone_branding_wrapper_css' => '',
              'alpha_zone_menu_equal_height_container' => '',
              'alpha_zone_menu_wrapper' => '1',
              'alpha_zone_menu_force' => '',
              'alpha_zone_menu_section' => 'header',
              'alpha_zone_menu_weight' => '3',
              'alpha_zone_menu_columns' => '12',
              'alpha_zone_menu_primary' => '',
              'alpha_zone_menu_css' => '',
              'alpha_zone_menu_wrapper_css' => '',
              'alpha_zone_header_equal_height_container' => '',
              'alpha_zone_header_wrapper' => '1',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '4',
              'alpha_zone_header_columns' => '12',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_preface_equal_height_container' => '',
              'alpha_zone_preface_wrapper' => '1',
              'alpha_zone_preface_force' => '',
              'alpha_zone_preface_section' => 'content',
              'alpha_zone_preface_weight' => '1',
              'alpha_zone_preface_columns' => '12',
              'alpha_zone_preface_primary' => '',
              'alpha_zone_preface_css' => '',
              'alpha_zone_preface_wrapper_css' => '',
              'alpha_zone_content_equal_height_container' => '',
              'alpha_zone_content_wrapper' => '1',
              'alpha_zone_content_force' => '1',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '2',
              'alpha_zone_content_columns' => '12',
              'alpha_zone_content_primary' => 'content',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_postscript_equal_height_container' => '',
              'alpha_zone_postscript_wrapper' => '1',
              'alpha_zone_postscript_force' => '',
              'alpha_zone_postscript_section' => 'content',
              'alpha_zone_postscript_weight' => '3',
              'alpha_zone_postscript_columns' => '12',
              'alpha_zone_postscript_primary' => '',
              'alpha_zone_postscript_css' => '',
              'alpha_zone_postscript_wrapper_css' => '',
              'alpha_zone_footer_equal_height_container' => '',
              'alpha_zone_footer_wrapper' => '1',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '1',
              'alpha_zone_footer_columns' => '12',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_region_dashboard_sidebar_equal_height_container' => '',
              'alpha_region_dashboard_sidebar_equal_height_element' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '-50',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_inactive_equal_height_container' => '',
              'alpha_region_dashboard_inactive_equal_height_element' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '-50',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_main_equal_height_container' => '',
              'alpha_region_dashboard_main_equal_height_element' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '-50',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_user_first_equal_height_container' => '',
              'alpha_region_user_first_equal_height_element' => '',
              'alpha_region_user_first_force' => '',
              'alpha_region_user_first_zone' => 'user',
              'alpha_region_user_first_prefix' => '',
              'alpha_region_user_first_columns' => '8',
              'alpha_region_user_first_suffix' => '',
              'alpha_region_user_first_weight' => '1',
              'alpha_region_user_first_css' => '',
              'alpha_region_user_second_equal_height_container' => '',
              'alpha_region_user_second_equal_height_element' => '',
              'alpha_region_user_second_force' => '',
              'alpha_region_user_second_zone' => 'user',
              'alpha_region_user_second_prefix' => '',
              'alpha_region_user_second_columns' => '4',
              'alpha_region_user_second_suffix' => '',
              'alpha_region_user_second_weight' => '2',
              'alpha_region_user_second_css' => '',
              'alpha_region_branding_equal_height_container' => '',
              'alpha_region_branding_equal_height_element' => '',
              'alpha_region_branding_force' => '1',
              'alpha_region_branding_zone' => 'branding',
              'alpha_region_branding_prefix' => '',
              'alpha_region_branding_columns' => '12',
              'alpha_region_branding_suffix' => '',
              'alpha_region_branding_weight' => '1',
              'alpha_region_branding_css' => '',
              'alpha_region_menu_equal_height_container' => '',
              'alpha_region_menu_equal_height_element' => '',
              'alpha_region_menu_force' => '1',
              'alpha_region_menu_zone' => 'menu',
              'alpha_region_menu_prefix' => '',
              'alpha_region_menu_columns' => '12',
              'alpha_region_menu_suffix' => '',
              'alpha_region_menu_weight' => '1',
              'alpha_region_menu_css' => '',
              'alpha_region_header_first_equal_height_container' => '',
              'alpha_region_header_first_equal_height_element' => '',
              'alpha_region_header_first_force' => '',
              'alpha_region_header_first_zone' => 'header',
              'alpha_region_header_first_prefix' => '',
              'alpha_region_header_first_columns' => '6',
              'alpha_region_header_first_suffix' => '',
              'alpha_region_header_first_weight' => '1',
              'alpha_region_header_first_css' => '',
              'alpha_region_header_second_equal_height_container' => '',
              'alpha_region_header_second_equal_height_element' => '',
              'alpha_region_header_second_force' => '',
              'alpha_region_header_second_zone' => 'header',
              'alpha_region_header_second_prefix' => '',
              'alpha_region_header_second_columns' => '6',
              'alpha_region_header_second_suffix' => '',
              'alpha_region_header_second_weight' => '2',
              'alpha_region_header_second_css' => '',
              'alpha_region_preface_first_equal_height_container' => '',
              'alpha_region_preface_first_equal_height_element' => '',
              'alpha_region_preface_first_force' => '',
              'alpha_region_preface_first_zone' => 'preface',
              'alpha_region_preface_first_prefix' => '',
              'alpha_region_preface_first_columns' => '4',
              'alpha_region_preface_first_suffix' => '',
              'alpha_region_preface_first_weight' => '1',
              'alpha_region_preface_first_css' => '',
              'alpha_region_preface_second_equal_height_container' => '',
              'alpha_region_preface_second_equal_height_element' => '',
              'alpha_region_preface_second_force' => '',
              'alpha_region_preface_second_zone' => 'preface',
              'alpha_region_preface_second_prefix' => '',
              'alpha_region_preface_second_columns' => '4',
              'alpha_region_preface_second_suffix' => '',
              'alpha_region_preface_second_weight' => '2',
              'alpha_region_preface_second_css' => '',
              'alpha_region_preface_third_equal_height_container' => '',
              'alpha_region_preface_third_equal_height_element' => '',
              'alpha_region_preface_third_force' => '',
              'alpha_region_preface_third_zone' => 'preface',
              'alpha_region_preface_third_prefix' => '',
              'alpha_region_preface_third_columns' => '4',
              'alpha_region_preface_third_suffix' => '',
              'alpha_region_preface_third_weight' => '3',
              'alpha_region_preface_third_css' => '',
              'alpha_region_content_equal_height_container' => '',
              'alpha_region_content_equal_height_element' => '',
              'alpha_region_content_force' => '',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '6',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_equal_height_container' => '',
              'alpha_region_sidebar_first_equal_height_element' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '3',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_equal_height_container' => '',
              'alpha_region_sidebar_second_equal_height_element' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '3',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_postscript_first_equal_height_container' => '',
              'alpha_region_postscript_first_equal_height_element' => '',
              'alpha_region_postscript_first_force' => '',
              'alpha_region_postscript_first_zone' => 'postscript',
              'alpha_region_postscript_first_prefix' => '',
              'alpha_region_postscript_first_columns' => '3',
              'alpha_region_postscript_first_suffix' => '',
              'alpha_region_postscript_first_weight' => '1',
              'alpha_region_postscript_first_css' => '',
              'alpha_region_postscript_second_equal_height_container' => '',
              'alpha_region_postscript_second_equal_height_element' => '',
              'alpha_region_postscript_second_force' => '',
              'alpha_region_postscript_second_zone' => 'postscript',
              'alpha_region_postscript_second_prefix' => '',
              'alpha_region_postscript_second_columns' => '3',
              'alpha_region_postscript_second_suffix' => '',
              'alpha_region_postscript_second_weight' => '2',
              'alpha_region_postscript_second_css' => '',
              'alpha_region_postscript_third_equal_height_container' => '',
              'alpha_region_postscript_third_equal_height_element' => '',
              'alpha_region_postscript_third_force' => '',
              'alpha_region_postscript_third_zone' => 'postscript',
              'alpha_region_postscript_third_prefix' => '',
              'alpha_region_postscript_third_columns' => '3',
              'alpha_region_postscript_third_suffix' => '',
              'alpha_region_postscript_third_weight' => '3',
              'alpha_region_postscript_third_css' => '',
              'alpha_region_postscript_fourth_equal_height_container' => '',
              'alpha_region_postscript_fourth_equal_height_element' => '',
              'alpha_region_postscript_fourth_force' => '',
              'alpha_region_postscript_fourth_zone' => 'postscript',
              'alpha_region_postscript_fourth_prefix' => '',
              'alpha_region_postscript_fourth_columns' => '3',
              'alpha_region_postscript_fourth_suffix' => '',
              'alpha_region_postscript_fourth_weight' => '4',
              'alpha_region_postscript_fourth_css' => '',
              'alpha_region_footer_first_equal_height_container' => '',
              'alpha_region_footer_first_equal_height_element' => '',
              'alpha_region_footer_first_force' => '',
              'alpha_region_footer_first_zone' => 'footer',
              'alpha_region_footer_first_prefix' => '',
              'alpha_region_footer_first_columns' => '12',
              'alpha_region_footer_first_suffix' => '',
              'alpha_region_footer_first_weight' => '1',
              'alpha_region_footer_first_css' => '',
              'alpha_region_footer_second_equal_height_container' => '',
              'alpha_region_footer_second_equal_height_element' => '',
              'alpha_region_footer_second_force' => '',
              'alpha_region_footer_second_zone' => 'footer',
              'alpha_region_footer_second_prefix' => '',
              'alpha_region_footer_second_columns' => '12',
              'alpha_region_footer_second_suffix' => '',
              'alpha_region_footer_second_weight' => '2',
              'alpha_region_footer_second_css' => '',
            ),
            'version' => '7.x-3.1',
            'project' => 'omega',
            'datestamp' => '1329681647',
          ),
          'version' => '7.x-3.1',
        ),
        'shiny' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/shiny/shiny.info',
          'basename' => 'shiny.info',
          'name' => 'Shiny',
          'info' => 
          array (
            'name' => 'Shiny',
            'description' => 'A simple one-column, tableless, fluid width administration theme.',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'screen' => 
              array (
                0 => 'css/reset.css',
                1 => 'css/style.css',
                2 => 'css/contrib.css',
              ),
              'all' => 
              array (
                0 => 'css/shiny.css',
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
              'footer' => 'Footer',
            ),
            'regions_hidden' => 
            array (
              0 => 'sidebar_first',
            ),
            'version' => '7.x-1.7',
            'project' => 'shiny',
            'datestamp' => '1438551540',
          ),
          'version' => '7.x-1.7',
        ),
        'omega_kickstart' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/contrib/omega_kickstart/omega_kickstart.info',
          'basename' => 'omega_kickstart.info',
          'name' => 'Omega Kickstart',
          'info' => 
          array (
            'name' => 'Omega Kickstart',
            'description' => 'Clean, simple starting point for building <a href="http://drupal.org/project/omega" target="_blank">Omega</a> subthemes for Commerce Kickstart. <br />HTML5, Responsive, ready to customize...',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'screenshot' => 'screenshot.png',
            'base theme' => 'omega',
            'scripts' => 
            array (
              0 => 'js/omega_kickstart.js',
            ),
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'user_first' => 'User Bar First',
              'user_second' => 'User Bar Second',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'breadcrumb' => 'Breadcrumb',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'header_first' => 'Header First',
              'header_second' => 'Header Second',
              'preface_first' => 'Preface First',
              'preface_second' => 'Preface Second',
              'preface_third' => 'Preface Third',
              'postscript_first' => 'Postscript First',
              'postscript_second' => 'Postscript Second',
              'postscript_third' => 'Postscript Third',
              'footer_first' => 'Footer First',
              'footer_second' => 'Footer Second',
              'footer_third' => 'Footer Third',
              'footer2_first' => 'Footer2 First',
              'footer2_second' => 'Footer2 Second',
            ),
            'zones' => 
            array (
              'header' => 'Header',
              'content' => 'Content',
              'footer' => 'Footer',
              'footer2' => 'Footer 2',
              'user' => 'User',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'preface' => 'Preface',
              'postscript' => 'Postscript',
            ),
            'css' => 
            array (
              'global.css' => 
              array (
                'name' => 'Your custom global styles',
                'description' => 'This file holds all the globally active custom CSS of your theme.',
                'options' => 
                array (
                  'weight' => '10',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '0',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_libraries' => 
              array (
                'omega_formalize' => 'omega_formalize',
                'omega_equalheights' => '',
                'omega_mediaqueries' => 'omega_mediaqueries',
              ),
              'alpha_css' => 
              array (
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'omega-text.css' => 'omega-text.css',
                'omega-branding.css' => 'omega-branding.css',
                'omega-menu.css' => 'omega-menu.css',
                'omega-forms.css' => 'omega-forms.css',
                'global.css' => 'global.css',
              ),
              'alpha_debug_block_toggle' => '0',
              'alpha_debug_block_active' => '0',
              'alpha_debug_grid_toggle' => '0',
              'alpha_debug_grid_active' => '0',
              'alpha_debug_grid_roles' => 
              array (
                1 => '0',
                2 => '0',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '1',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_user_equal_height_container' => '',
              'alpha_zone_user_wrapper' => '1',
              'alpha_zone_user_force' => '',
              'alpha_zone_user_section' => 'header',
              'alpha_zone_user_weight' => '1',
              'alpha_zone_user_columns' => '24',
              'alpha_zone_user_primary' => '',
              'alpha_zone_user_css' => '',
              'alpha_zone_user_wrapper_css' => '',
              'alpha_zone_branding_equal_height_container' => '',
              'alpha_zone_branding_wrapper' => '1',
              'alpha_zone_branding_force' => '',
              'alpha_zone_branding_section' => 'header',
              'alpha_zone_branding_weight' => '2',
              'alpha_zone_branding_columns' => '24',
              'alpha_zone_branding_primary' => '',
              'alpha_zone_branding_css' => '',
              'alpha_zone_branding_wrapper_css' => '',
              'alpha_zone_menu_equal_height_container' => '',
              'alpha_zone_menu_wrapper' => '1',
              'alpha_zone_menu_force' => '',
              'alpha_zone_menu_section' => 'header',
              'alpha_zone_menu_weight' => '3',
              'alpha_zone_menu_columns' => '24',
              'alpha_zone_menu_primary' => '',
              'alpha_zone_menu_css' => '',
              'alpha_zone_menu_wrapper_css' => '',
              'alpha_zone_header_equal_height_container' => '',
              'alpha_zone_header_wrapper' => '1',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '4',
              'alpha_zone_header_columns' => '24',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_preface_equal_height_container' => '',
              'alpha_zone_preface_wrapper' => '1',
              'alpha_zone_preface_force' => '',
              'alpha_zone_preface_section' => 'content',
              'alpha_zone_preface_weight' => '1',
              'alpha_zone_preface_columns' => '24',
              'alpha_zone_preface_primary' => '',
              'alpha_zone_preface_css' => '',
              'alpha_zone_preface_wrapper_css' => '',
              'alpha_zone_content_equal_height_container' => '',
              'alpha_zone_content_wrapper' => '1',
              'alpha_zone_content_force' => '1',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '2',
              'alpha_zone_content_columns' => '24',
              'alpha_zone_content_primary' => 'content',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_postscript_equal_height_container' => '',
              'alpha_zone_postscript_wrapper' => '1',
              'alpha_zone_postscript_force' => '',
              'alpha_zone_postscript_section' => 'content',
              'alpha_zone_postscript_weight' => '3',
              'alpha_zone_postscript_columns' => '24',
              'alpha_zone_postscript_primary' => '',
              'alpha_zone_postscript_css' => '',
              'alpha_zone_postscript_wrapper_css' => '',
              'alpha_zone_footer_equal_height_container' => '',
              'alpha_zone_footer_wrapper' => '1',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '1',
              'alpha_zone_footer_columns' => '24',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_zone_footer2_equal_height_container' => '',
              'alpha_zone_footer2_wrapper' => '1',
              'alpha_zone_footer2_force' => '',
              'alpha_zone_footer2_section' => 'footer',
              'alpha_zone_footer2_weight' => '2',
              'alpha_zone_footer2_columns' => '24',
              'alpha_zone_footer2_primary' => '',
              'alpha_zone_footer2_css' => '',
              'alpha_zone_footer2_wrapper_css' => '',
              'alpha_region_dashboard_sidebar_equal_height_container' => '',
              'alpha_region_dashboard_sidebar_equal_height_element' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '-50',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_inactive_equal_height_container' => '',
              'alpha_region_dashboard_inactive_equal_height_element' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '-50',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_main_equal_height_container' => '',
              'alpha_region_dashboard_main_equal_height_element' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '-50',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_user_first_equal_height_container' => '',
              'alpha_region_user_first_equal_height_element' => '',
              'alpha_region_user_first_force' => '',
              'alpha_region_user_first_zone' => 'user',
              'alpha_region_user_first_prefix' => '',
              'alpha_region_user_first_columns' => '17',
              'alpha_region_user_first_suffix' => '0',
              'alpha_region_user_first_weight' => '1',
              'alpha_region_user_first_css' => '',
              'alpha_region_user_second_equal_height_container' => '',
              'alpha_region_user_second_equal_height_element' => '',
              'alpha_region_user_second_force' => '',
              'alpha_region_user_second_zone' => 'user',
              'alpha_region_user_second_prefix' => '',
              'alpha_region_user_second_columns' => '7',
              'alpha_region_user_second_suffix' => '',
              'alpha_region_user_second_weight' => '2',
              'alpha_region_user_second_css' => '',
              'alpha_region_branding_equal_height_container' => '',
              'alpha_region_branding_equal_height_element' => '',
              'alpha_region_branding_force' => '1',
              'alpha_region_branding_zone' => 'branding',
              'alpha_region_branding_prefix' => '',
              'alpha_region_branding_columns' => '24',
              'alpha_region_branding_suffix' => '',
              'alpha_region_branding_weight' => '1',
              'alpha_region_branding_css' => '',
              'alpha_region_menu_equal_height_container' => '',
              'alpha_region_menu_equal_height_element' => '',
              'alpha_region_menu_force' => '1',
              'alpha_region_menu_zone' => 'menu',
              'alpha_region_menu_prefix' => '',
              'alpha_region_menu_columns' => '24',
              'alpha_region_menu_suffix' => '',
              'alpha_region_menu_weight' => '1',
              'alpha_region_menu_css' => '',
              'alpha_region_breadcrumb_equal_height_container' => '',
              'alpha_region_breadcrumb_equal_height_element' => '',
              'alpha_region_breadcrumb_force' => '0',
              'alpha_region_breadcrumb_zone' => 'preface',
              'alpha_region_breadcrumb_prefix' => '',
              'alpha_region_breadcrumb_columns' => '24',
              'alpha_region_breadcrumb_suffix' => '',
              'alpha_region_breadcrumbu_weight' => '1',
              'alpha_region_breadcrumbu_css' => '',
              'alpha_region_header_first_equal_height_container' => '',
              'alpha_region_header_first_equal_height_element' => '',
              'alpha_region_header_first_force' => '',
              'alpha_region_header_first_zone' => 'header',
              'alpha_region_header_first_prefix' => '',
              'alpha_region_header_first_columns' => '17',
              'alpha_region_header_first_suffix' => '',
              'alpha_region_header_first_weight' => '1',
              'alpha_region_header_first_css' => '',
              'alpha_region_header_second_equal_height_container' => '',
              'alpha_region_header_second_equal_height_element' => '',
              'alpha_region_header_second_force' => '',
              'alpha_region_header_second_zone' => 'header',
              'alpha_region_header_second_prefix' => '',
              'alpha_region_header_second_columns' => '7',
              'alpha_region_header_second_suffix' => '',
              'alpha_region_header_second_weight' => '2',
              'alpha_region_header_second_css' => '',
              'alpha_region_preface_first_equal_height_container' => '',
              'alpha_region_preface_first_equal_height_element' => '',
              'alpha_region_preface_first_force' => '',
              'alpha_region_preface_first_zone' => 'preface',
              'alpha_region_preface_first_prefix' => '',
              'alpha_region_preface_first_columns' => '8',
              'alpha_region_preface_first_suffix' => '',
              'alpha_region_preface_first_weight' => '1',
              'alpha_region_preface_first_css' => '',
              'alpha_region_preface_second_equal_height_container' => '',
              'alpha_region_preface_second_equal_height_element' => '',
              'alpha_region_preface_second_force' => '',
              'alpha_region_preface_second_zone' => 'preface',
              'alpha_region_preface_second_prefix' => '',
              'alpha_region_preface_second_columns' => '8',
              'alpha_region_preface_second_suffix' => '',
              'alpha_region_preface_second_weight' => '2',
              'alpha_region_preface_second_css' => '',
              'alpha_region_preface_third_equal_height_container' => '',
              'alpha_region_preface_third_equal_height_element' => '',
              'alpha_region_preface_third_force' => '',
              'alpha_region_preface_third_zone' => 'preface',
              'alpha_region_preface_third_prefix' => '',
              'alpha_region_preface_third_columns' => '8',
              'alpha_region_preface_third_suffix' => '',
              'alpha_region_preface_third_weight' => '3',
              'alpha_region_preface_third_css' => '',
              'alpha_region_content_equal_height_container' => '',
              'alpha_region_content_equal_height_element' => '',
              'alpha_region_content_force' => '1',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '12',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_equal_height_container' => '',
              'alpha_region_sidebar_first_equal_height_element' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '6',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_equal_height_container' => '',
              'alpha_region_sidebar_second_equal_height_element' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '6',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_postscript_first_equal_height_container' => '',
              'alpha_region_postscript_first_equal_height_element' => '',
              'alpha_region_postscript_first_force' => '',
              'alpha_region_postscript_first_zone' => 'postscript',
              'alpha_region_postscript_first_prefix' => '',
              'alpha_region_postscript_first_columns' => '8',
              'alpha_region_postscript_first_suffix' => '',
              'alpha_region_postscript_first_weight' => '1',
              'alpha_region_postscript_first_css' => '',
              'alpha_region_postscript_second_equal_height_container' => '',
              'alpha_region_postscript_second_equal_height_element' => '',
              'alpha_region_postscript_second_force' => '',
              'alpha_region_postscript_second_zone' => 'postscript',
              'alpha_region_postscript_second_prefix' => '',
              'alpha_region_postscript_second_columns' => '8',
              'alpha_region_postscript_second_suffix' => '',
              'alpha_region_postscript_second_weight' => '2',
              'alpha_region_postscript_second_css' => '',
              'alpha_region_postscript_third_equal_height_container' => '',
              'alpha_region_postscript_third_equal_height_element' => '',
              'alpha_region_postscript_third_force' => '',
              'alpha_region_postscript_third_zone' => 'postscript',
              'alpha_region_postscript_third_prefix' => '',
              'alpha_region_postscript_third_columns' => '8',
              'alpha_region_postscript_third_suffix' => '',
              'alpha_region_postscript_third_weight' => '2',
              'alpha_region_postscript_third_css' => '',
              'alpha_region_footer_first_equal_height_container' => '',
              'alpha_region_footer_first_equal_height_element' => '',
              'alpha_region_footer_first_force' => '',
              'alpha_region_footer_first_zone' => 'footer',
              'alpha_region_footer_first_prefix' => '',
              'alpha_region_footer_first_columns' => '17',
              'alpha_region_footer_first_suffix' => '',
              'alpha_region_footer_first_weight' => '1',
              'alpha_region_footer_first_css' => '',
              'alpha_region_footer_second_equal_height_container' => '',
              'alpha_region_footer_second_equal_height_element' => '',
              'alpha_region_footer_second_force' => '',
              'alpha_region_footer_second_zone' => 'footer',
              'alpha_region_footer_second_prefix' => '',
              'alpha_region_footer_second_columns' => '7',
              'alpha_region_footer_second_suffix' => '',
              'alpha_region_footer_second_weight' => '2',
              'alpha_region_footer_second_css' => '',
              'alpha_region_footer_third_equal_height_container' => '',
              'alpha_region_footer_third_equal_height_element' => '',
              'alpha_region_footer_third_force' => '',
              'alpha_region_footer_third_zone' => 'footer',
              'alpha_region_footer_third_prefix' => '1',
              'alpha_region_footer_third_columns' => '5',
              'alpha_region_footer_third_suffix' => '',
              'alpha_region_footer_third_weight' => '2',
              'alpha_region_footer_third_css' => '',
              'alpha_region_footer2_first_equal_height_container' => '',
              'alpha_region_footer2_first_equal_height_element' => '',
              'alpha_region_footer2_first_force' => '',
              'alpha_region_footer2_first_zone' => 'footer2',
              'alpha_region_footer2_first_prefix' => '0',
              'alpha_region_footer2_first_columns' => '7',
              'alpha_region_footer2_first_suffix' => '',
              'alpha_region_footer2_first_weight' => '1',
              'alpha_region_footer2_first_css' => '',
              'alpha_region_footer2_second_equal_height_container' => '',
              'alpha_region_footer2_second_equal_height_element' => '',
              'alpha_region_footer2_second_force' => '',
              'alpha_region_footer2_second_zone' => 'footer2',
              'alpha_region_footer2_second_prefix' => '8',
              'alpha_region_footer2_second_columns' => '9',
              'alpha_region_footer2_second_suffix' => '',
              'alpha_region_footer2_second_weight' => '2',
              'alpha_region_footer2_second_css' => '',
            ),
            'version' => '7.x-3.4',
            'project' => 'omega_kickstart',
            'datestamp' => '1374741378',
          ),
          'version' => '7.x-3.4',
        ),
        'commerce_kickstart_theme' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/commerce_kickstart_theme/commerce_kickstart_theme.info',
          'basename' => 'commerce_kickstart_theme.info',
          'name' => 'Commerce Kickstart Theme',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Theme',
            'description' => '',
            'package' => 'Commerce Kickstart',
            'core' => '7.x',
            'screenshot' => 'screenshot.png',
            'base theme' => 'omega_kickstart',
            'regions' => 
            array (
              'page_top' => 'Page Top',
              'page_bottom' => 'Page Bottom',
              'content' => 'Content',
              'user_first' => 'User Bar First',
              'user_second' => 'User Bar Second',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'breadcrumb' => 'Breadcrumb',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'header_first' => 'Header First',
              'header_second' => 'Header Second',
              'preface_first' => 'Preface First',
              'preface_second' => 'Preface Second',
              'preface_third' => 'Preface Third',
              'postscript_first' => 'Postscript First',
              'postscript_second' => 'Postscript Second',
              'postscript_third' => 'Postscript Third',
              'footer_first' => 'Footer First',
              'footer_second' => 'Footer Second',
              'footer_third' => 'Footer Third',
              'footer2_first' => 'Footer2 First',
              'footer2_second' => 'Footer2 Second',
            ),
            'zones' => 
            array (
              'user' => 'User',
              'branding' => 'Branding',
              'menu' => 'Menu',
              'header' => 'Header',
              'preface' => 'Preface',
              'content' => 'Content',
              'postscript' => 'Postscript',
              'footer' => 'Footer first',
              'footer2' => 'Footer second',
            ),
            'css' => 
            array (
              'commerce_kickstart_style.css' => 
              array (
                'name' => 'Commerce Kickstart theme global style.',
                'description' => 'This file holds all the globally active custom CSS of Commerce Kickstart theme.',
                'options' => 
                array (
                  'weight' => '11',
                ),
              ),
            ),
            'settings' => 
            array (
              'alpha_css' => 
              array (
                'commerce_kickstart_style.css' => 'commerce_kickstart_style.css',
                'alpha-reset.css' => 'alpha-reset.css',
                'alpha-mobile.css' => 'alpha-mobile.css',
                'alpha-alpha.css' => 'alpha-alpha.css',
                'omega-text.css' => 'omega-text.css',
                'omega-branding.css' => 'omega-branding.css',
                'omega-menu.css' => 'omega-menu.css',
                'omega-forms.css' => 'omega-forms.css',
                'global.css' => 'global.css',
              ),
              'alpha_libraries' => 
              array (
                'commerce_kickstart_theme_custom' => 'commerce_kickstart_theme_custom',
                'omega_formalize' => 'omega_formalize',
                'omega_equalheights' => '',
                'omega_mediaqueries' => 'omega_mediaqueries',
              ),
              'alpha_grid' => 'alpha_default',
              'alpha_primary_alpha_default' => 'normal',
              'alpha_responsive' => '1',
              'alpha_layouts_alpha_fluid_primary' => 'normal',
              'alpha_layouts_alpha_fluid_normal_responsive' => '0',
              'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_primary' => 'normal',
              'alpha_layouts_alpha_default_fluid_responsive' => '0',
              'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_fluid_weight' => '0',
              'alpha_layouts_alpha_default_narrow_responsive' => '1',
              'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_narrow_weight' => '1',
              'alpha_layouts_alpha_default_normal_responsive' => '1',
              'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
              'alpha_layouts_alpha_default_normal_weight' => '2',
              'alpha_layouts_alpha_default_wide_responsive' => '0',
              'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
              'alpha_layouts_alpha_default_wide_weight' => '3',
              'alpha_viewport' => '1',
              'alpha_viewport_initial_scale' => '1',
              'alpha_viewport_min_scale' => '1',
              'alpha_viewport_max_scale' => '1',
              'alpha_viewport_user_scaleable' => '',
              'alpha_debug_block_toggle' => '0',
              'alpha_debug_block_active' => '0',
              'alpha_debug_grid_toggle' => '0',
              'alpha_debug_grid_active' => '0',
              'alpha_debug_grid_roles' => 
              array (
                1 => '0',
                2 => '0',
                3 => '3',
              ),
              'alpha_toggle_messages' => '1',
              'alpha_toggle_action_links' => '1',
              'alpha_toggle_tabs' => '1',
              'alpha_toggle_breadcrumb' => '1',
              'alpha_toggle_page_title' => '1',
              'alpha_toggle_feed_icons' => '1',
              'alpha_hidden_title' => '',
              'alpha_hidden_site_name' => '1',
              'alpha_hidden_site_slogan' => '',
              'alpha_zone_user_equal_height_container' => '',
              'alpha_zone_user_wrapper' => '1',
              'alpha_zone_user_force' => '',
              'alpha_zone_user_section' => 'header',
              'alpha_zone_user_weight' => '1',
              'alpha_zone_user_columns' => '24',
              'alpha_zone_user_primary' => '',
              'alpha_zone_user_css' => '',
              'alpha_zone_user_wrapper_css' => '',
              'alpha_zone_branding_equal_height_container' => '',
              'alpha_zone_branding_wrapper' => '1',
              'alpha_zone_branding_force' => '',
              'alpha_zone_branding_section' => 'header',
              'alpha_zone_branding_weight' => '2',
              'alpha_zone_branding_columns' => '24',
              'alpha_zone_branding_primary' => '',
              'alpha_zone_branding_css' => '',
              'alpha_zone_branding_wrapper_css' => '',
              'alpha_zone_menu_equal_height_container' => '',
              'alpha_zone_menu_wrapper' => '1',
              'alpha_zone_menu_force' => '',
              'alpha_zone_menu_section' => 'header',
              'alpha_zone_menu_weight' => '3',
              'alpha_zone_menu_columns' => '24',
              'alpha_zone_menu_primary' => '',
              'alpha_zone_menu_css' => '',
              'alpha_zone_menu_wrapper_css' => '',
              'alpha_zone_header_equal_height_container' => '',
              'alpha_zone_header_wrapper' => '1',
              'alpha_zone_header_force' => '',
              'alpha_zone_header_section' => 'header',
              'alpha_zone_header_weight' => '4',
              'alpha_zone_header_columns' => '24',
              'alpha_zone_header_primary' => '',
              'alpha_zone_header_css' => '',
              'alpha_zone_header_wrapper_css' => '',
              'alpha_zone_preface_equal_height_container' => '',
              'alpha_zone_preface_wrapper' => '1',
              'alpha_zone_preface_force' => '',
              'alpha_zone_preface_section' => 'content',
              'alpha_zone_preface_weight' => '1',
              'alpha_zone_preface_columns' => '24',
              'alpha_zone_preface_primary' => '',
              'alpha_zone_preface_css' => '',
              'alpha_zone_preface_wrapper_css' => '',
              'alpha_zone_content_equal_height_container' => '',
              'alpha_zone_content_wrapper' => '1',
              'alpha_zone_content_force' => '1',
              'alpha_zone_content_section' => 'content',
              'alpha_zone_content_weight' => '2',
              'alpha_zone_content_columns' => '24',
              'alpha_zone_content_primary' => 'content',
              'alpha_zone_content_css' => '',
              'alpha_zone_content_wrapper_css' => '',
              'alpha_zone_postscript_equal_height_container' => '',
              'alpha_zone_postscript_wrapper' => '1',
              'alpha_zone_postscript_force' => '',
              'alpha_zone_postscript_section' => 'content',
              'alpha_zone_postscript_weight' => '3',
              'alpha_zone_postscript_columns' => '24',
              'alpha_zone_postscript_primary' => '',
              'alpha_zone_postscript_css' => '',
              'alpha_zone_postscript_wrapper_css' => '',
              'alpha_zone_footer_equal_height_container' => '',
              'alpha_zone_footer_wrapper' => '1',
              'alpha_zone_footer_force' => '',
              'alpha_zone_footer_section' => 'footer',
              'alpha_zone_footer_weight' => '1',
              'alpha_zone_footer_columns' => '24',
              'alpha_zone_footer_primary' => '',
              'alpha_zone_footer_css' => '',
              'alpha_zone_footer_wrapper_css' => '',
              'alpha_zone_footer2_equal_height_container' => '',
              'alpha_zone_footer2_wrapper' => '1',
              'alpha_zone_footer2_force' => '',
              'alpha_zone_footer2_section' => 'footer',
              'alpha_zone_footer2_weight' => '2',
              'alpha_zone_footer2_columns' => '24',
              'alpha_zone_footer2_primary' => '',
              'alpha_zone_footer2_css' => '',
              'alpha_zone_footer2_wrapper_css' => '',
              'alpha_region_dashboard_sidebar_equal_height_container' => '',
              'alpha_region_dashboard_sidebar_equal_height_element' => '',
              'alpha_region_dashboard_sidebar_force' => '',
              'alpha_region_dashboard_sidebar_zone' => '',
              'alpha_region_dashboard_sidebar_prefix' => '',
              'alpha_region_dashboard_sidebar_columns' => '1',
              'alpha_region_dashboard_sidebar_suffix' => '',
              'alpha_region_dashboard_sidebar_weight' => '-50',
              'alpha_region_dashboard_sidebar_css' => '',
              'alpha_region_dashboard_inactive_equal_height_container' => '',
              'alpha_region_dashboard_inactive_equal_height_element' => '',
              'alpha_region_dashboard_inactive_force' => '',
              'alpha_region_dashboard_inactive_zone' => '',
              'alpha_region_dashboard_inactive_prefix' => '',
              'alpha_region_dashboard_inactive_columns' => '1',
              'alpha_region_dashboard_inactive_suffix' => '',
              'alpha_region_dashboard_inactive_weight' => '-50',
              'alpha_region_dashboard_inactive_css' => '',
              'alpha_region_dashboard_main_equal_height_container' => '',
              'alpha_region_dashboard_main_equal_height_element' => '',
              'alpha_region_dashboard_main_force' => '',
              'alpha_region_dashboard_main_zone' => '',
              'alpha_region_dashboard_main_prefix' => '',
              'alpha_region_dashboard_main_columns' => '1',
              'alpha_region_dashboard_main_suffix' => '',
              'alpha_region_dashboard_main_weight' => '-50',
              'alpha_region_dashboard_main_css' => '',
              'alpha_region_user_first_equal_height_container' => '',
              'alpha_region_user_first_equal_height_element' => '',
              'alpha_region_user_first_force' => '',
              'alpha_region_user_first_zone' => 'user',
              'alpha_region_user_first_prefix' => '',
              'alpha_region_user_first_columns' => '16',
              'alpha_region_user_first_suffix' => '0',
              'alpha_region_user_first_weight' => '1',
              'alpha_region_user_first_css' => '',
              'alpha_region_user_second_equal_height_container' => '',
              'alpha_region_user_second_equal_height_element' => '',
              'alpha_region_user_second_force' => '',
              'alpha_region_user_second_zone' => 'user',
              'alpha_region_user_second_prefix' => '',
              'alpha_region_user_second_columns' => '8',
              'alpha_region_user_second_suffix' => '',
              'alpha_region_user_second_weight' => '2',
              'alpha_region_user_second_css' => '',
              'alpha_region_branding_equal_height_container' => '',
              'alpha_region_branding_equal_height_element' => '',
              'alpha_region_branding_force' => '1',
              'alpha_region_branding_zone' => 'branding',
              'alpha_region_branding_prefix' => '',
              'alpha_region_branding_columns' => '24',
              'alpha_region_branding_suffix' => '',
              'alpha_region_branding_weight' => '1',
              'alpha_region_branding_css' => '',
              'alpha_region_menu_equal_height_container' => '',
              'alpha_region_menu_equal_height_element' => '',
              'alpha_region_menu_force' => '1',
              'alpha_region_menu_zone' => 'menu',
              'alpha_region_menu_prefix' => '',
              'alpha_region_menu_columns' => '24',
              'alpha_region_menu_suffix' => '',
              'alpha_region_menu_weight' => '1',
              'alpha_region_menu_css' => '',
              'alpha_region_breadcrumb_equal_height_container' => '',
              'alpha_region_breadcrumb_equal_height_element' => '',
              'alpha_region_breadcrumb_force' => '0',
              'alpha_region_breadcrumb_zone' => 'preface',
              'alpha_region_breadcrumb_prefix' => '',
              'alpha_region_breadcrumb_columns' => '24',
              'alpha_region_breadcrumb_suffix' => '',
              'alpha_region_breadcrumbu_weight' => '1',
              'alpha_region_breadcrumbu_css' => '',
              'alpha_region_header_first_equal_height_container' => '',
              'alpha_region_header_first_equal_height_element' => '',
              'alpha_region_header_first_force' => '',
              'alpha_region_header_first_zone' => 'header',
              'alpha_region_header_first_prefix' => '',
              'alpha_region_header_first_columns' => '17',
              'alpha_region_header_first_suffix' => '',
              'alpha_region_header_first_weight' => '1',
              'alpha_region_header_first_css' => '',
              'alpha_region_header_second_equal_height_container' => '',
              'alpha_region_header_second_equal_height_element' => '',
              'alpha_region_header_second_force' => '',
              'alpha_region_header_second_zone' => 'header',
              'alpha_region_header_second_prefix' => '',
              'alpha_region_header_second_columns' => '7',
              'alpha_region_header_second_suffix' => '',
              'alpha_region_header_second_weight' => '2',
              'alpha_region_header_second_css' => '',
              'alpha_region_preface_first_equal_height_container' => '',
              'alpha_region_preface_first_equal_height_element' => '',
              'alpha_region_preface_first_force' => '',
              'alpha_region_preface_first_zone' => 'preface',
              'alpha_region_preface_first_prefix' => '',
              'alpha_region_preface_first_columns' => '8',
              'alpha_region_preface_first_suffix' => '',
              'alpha_region_preface_first_weight' => '1',
              'alpha_region_preface_first_css' => '',
              'alpha_region_preface_second_equal_height_container' => '',
              'alpha_region_preface_second_equal_height_element' => '',
              'alpha_region_preface_second_force' => '',
              'alpha_region_preface_second_zone' => 'preface',
              'alpha_region_preface_second_prefix' => '',
              'alpha_region_preface_second_columns' => '8',
              'alpha_region_preface_second_suffix' => '',
              'alpha_region_preface_second_weight' => '2',
              'alpha_region_preface_second_css' => '',
              'alpha_region_preface_third_equal_height_container' => '',
              'alpha_region_preface_third_equal_height_element' => '',
              'alpha_region_preface_third_force' => '',
              'alpha_region_preface_third_zone' => 'preface',
              'alpha_region_preface_third_prefix' => '',
              'alpha_region_preface_third_columns' => '8',
              'alpha_region_preface_third_suffix' => '',
              'alpha_region_preface_third_weight' => '3',
              'alpha_region_preface_third_css' => '',
              'alpha_region_content_equal_height_container' => '',
              'alpha_region_content_equal_height_element' => '',
              'alpha_region_content_force' => '1',
              'alpha_region_content_zone' => 'content',
              'alpha_region_content_prefix' => '',
              'alpha_region_content_columns' => '12',
              'alpha_region_content_suffix' => '',
              'alpha_region_content_weight' => '2',
              'alpha_region_content_css' => '',
              'alpha_region_sidebar_first_equal_height_container' => '',
              'alpha_region_sidebar_first_equal_height_element' => '',
              'alpha_region_sidebar_first_force' => '',
              'alpha_region_sidebar_first_zone' => 'content',
              'alpha_region_sidebar_first_prefix' => '',
              'alpha_region_sidebar_first_columns' => '6',
              'alpha_region_sidebar_first_suffix' => '',
              'alpha_region_sidebar_first_weight' => '1',
              'alpha_region_sidebar_first_css' => '',
              'alpha_region_sidebar_second_equal_height_container' => '',
              'alpha_region_sidebar_second_equal_height_element' => '',
              'alpha_region_sidebar_second_force' => '',
              'alpha_region_sidebar_second_zone' => 'content',
              'alpha_region_sidebar_second_prefix' => '',
              'alpha_region_sidebar_second_columns' => '6',
              'alpha_region_sidebar_second_suffix' => '',
              'alpha_region_sidebar_second_weight' => '3',
              'alpha_region_sidebar_second_css' => '',
              'alpha_region_postscript_first_equal_height_container' => '',
              'alpha_region_postscript_first_equal_height_element' => '',
              'alpha_region_postscript_first_force' => '',
              'alpha_region_postscript_first_zone' => 'postscript',
              'alpha_region_postscript_first_prefix' => '',
              'alpha_region_postscript_first_columns' => '8',
              'alpha_region_postscript_first_suffix' => '',
              'alpha_region_postscript_first_weight' => '1',
              'alpha_region_postscript_first_css' => '',
              'alpha_region_postscript_second_equal_height_container' => '',
              'alpha_region_postscript_second_equal_height_element' => '',
              'alpha_region_postscript_second_force' => '',
              'alpha_region_postscript_second_zone' => 'postscript',
              'alpha_region_postscript_second_prefix' => '',
              'alpha_region_postscript_second_columns' => '8',
              'alpha_region_postscript_second_suffix' => '',
              'alpha_region_postscript_second_weight' => '2',
              'alpha_region_postscript_second_css' => '',
              'alpha_region_postscript_third_equal_height_container' => '',
              'alpha_region_postscript_third_equal_height_element' => '',
              'alpha_region_postscript_third_force' => '',
              'alpha_region_postscript_third_zone' => 'postscript',
              'alpha_region_postscript_third_prefix' => '',
              'alpha_region_postscript_third_columns' => '8',
              'alpha_region_postscript_third_suffix' => '',
              'alpha_region_postscript_third_weight' => '2',
              'alpha_region_postscript_third_css' => '',
              'alpha_region_footer_first_equal_height_container' => '',
              'alpha_region_footer_first_equal_height_element' => '',
              'alpha_region_footer_first_force' => '',
              'alpha_region_footer_first_zone' => 'footer',
              'alpha_region_footer_first_prefix' => '',
              'alpha_region_footer_first_columns' => '17',
              'alpha_region_footer_first_suffix' => '',
              'alpha_region_footer_first_weight' => '1',
              'alpha_region_footer_first_css' => '',
              'alpha_region_footer_second_equal_height_container' => '',
              'alpha_region_footer_second_equal_height_element' => '',
              'alpha_region_footer_second_force' => '',
              'alpha_region_footer_second_zone' => 'footer',
              'alpha_region_footer_second_prefix' => '',
              'alpha_region_footer_second_columns' => '7',
              'alpha_region_footer_second_suffix' => '',
              'alpha_region_footer_second_weight' => '2',
              'alpha_region_footer_second_css' => '',
              'alpha_region_footer_third_equal_height_container' => '',
              'alpha_region_footer_third_equal_height_element' => '',
              'alpha_region_footer_third_force' => '',
              'alpha_region_footer_third_zone' => 'footer',
              'alpha_region_footer_third_prefix' => '1',
              'alpha_region_footer_third_columns' => '5',
              'alpha_region_footer_third_suffix' => '',
              'alpha_region_footer_third_weight' => '2',
              'alpha_region_footer_third_css' => '',
              'alpha_region_footer2_first_equal_height_container' => '',
              'alpha_region_footer2_first_equal_height_element' => '',
              'alpha_region_footer2_first_force' => '',
              'alpha_region_footer2_first_zone' => 'footer2',
              'alpha_region_footer2_first_prefix' => '0',
              'alpha_region_footer2_first_columns' => '7',
              'alpha_region_footer2_first_suffix' => '',
              'alpha_region_footer2_first_weight' => '1',
              'alpha_region_footer2_first_css' => '',
              'alpha_region_footer2_second_equal_height_container' => '',
              'alpha_region_footer2_second_equal_height_element' => '',
              'alpha_region_footer2_second_force' => '',
              'alpha_region_footer2_second_zone' => 'footer2',
              'alpha_region_footer2_second_prefix' => '8',
              'alpha_region_footer2_second_columns' => '9',
              'alpha_region_footer2_second_suffix' => '',
              'alpha_region_footer2_second_weight' => '2',
              'alpha_region_footer2_second_css' => '',
            ),
            'libraries' => 
            array (
              'commerce_kickstart_theme_custom' => 
              array (
                'name' => 'Commerce kickstart theme JS',
                'description' => 'This file holds all the custom JS.',
                'js' => 
                array (
                  0 => 
                  array (
                    'file' => 'commerce_kickstart_theme_custom.js',
                    'options' => 
                    array (
                      'weight' => '15',
                    ),
                  ),
                ),
              ),
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'version' => '7.x-2.32',
        ),
        'commerce_kickstart_admin' => 
        array (
          'filename' => '/var/aegir/projects/commerce/dev/profiles/commerce_kickstart/themes/commerce_kickstart_admin/commerce_kickstart_admin.info',
          'basename' => 'commerce_kickstart_admin.info',
          'name' => 'Commerce Kickstart Admin Theme',
          'info' => 
          array (
            'name' => 'Commerce Kickstart Admin Theme',
            'description' => 'A subtheme of Shiny customized for Commerce Kickstart.',
            'core' => '7.x',
            'base theme' => 'shiny',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/commerce_kickstart_admin.css',
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
              'footer' => 'Footer',
            ),
            'regions_hidden' => 
            array (
              0 => 'sidebar_first',
            ),
            'version' => '7.x-2.32',
            'project' => 'commerce_kickstart',
            'datestamp' => '1452771861',
          ),
          'version' => '7.x-2.32',
        ),
      ),
    ),
    'pantheon' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);