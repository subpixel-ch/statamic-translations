<?php

return [

    // General CP
    'dashboard' => 'Dashboard',
    'nav_dashboard' => 'Dashboard',
    'sneak_peek' => 'Sneak Peek',
    'sneak_peeking' => 'Sneaking a Peek',
    'view_site' => 'View Site',
    'visit_url' => 'Visit URL',
    'search_for_anything' => 'Search for anything',

    // Pages
    'pages' => 'Page|Pages',
    'nav_pages' => 'Pages',
    'create_page_button' => 'Create Page',
    'edit_homepage_button' => 'Edit Homepage',
    'create_page' => 'Create a New Page',
    'page_created' => 'Page Created',
    'editing_page' => 'Editing Page',
    'page_updated' => 'Page Updated',
    'home' => 'Home',
    'pages_empty_heading' => 'Site Pages',
    'pages_empty' => 'Pages are used to create the various sections and URL structures of your site, as well as manage their respective content.',
    'show_urls' => 'Show URLs',
    'show_titles' => 'Show Titles',
    'choose_page_type' => 'Choose Page Type',
    'parent_page' => 'Parent Page',
    'pages_reordered' => 'Pages reordered successfully.',

    // Collections
    'collections' => 'Collection|Collections',
    'nav_collections' => 'Collections',
    'manage_collections' => 'Manage Collections',
    'create_collection_button' => 'Create Collection',
    'create_collection' => 'Create a New Collection',
    'collection_created' => ':title Created',
    'editing_collection' => 'Editing :collection',
    'collection_updated' => ':title Updated',
    'collections_empty' => 'Collections are containers that hold groups of similar entries all following the same URL pattern.',
    'collection_title_instructions' => 'The proper name of your collection.',
    'collection_handle_instructions' => "The collection's variable name used in settings and templates.",
    'collection_order_instructions' => "Set the default sorting method for entries in this collection.",
    'collection_route_instructions' => "The route controls the URL pattern all entries in the collection will follow.",

    // Entries
    'entries' => 'Entry|Entries',
    'nav_entries' => 'Entries',
    'create_entry_button' => 'Create Entry',
    'create_entry' => 'New :noun',
    'entry_created' => 'Entry Created',
    'editing_entry' => 'Editing Entry',
    'entry_updated' => 'Entry Updated',
    'entries_empty_heading' => ':type Entries',
    'entries_empty' => 'Entries are bits of content that have their own URL and are often shown in lists, like blog posts, press releases, and events.',

    // Taxonomies
    'taxonomies' => 'Taxonomy|Taxonomies',
    'nav_taxonomies' => 'Taxonomies',
    'create_taxonomy' => 'Create New Taxonomy',
    'create_taxonomy_button' => 'Create Taxonomy',
    'manage_taxonomies' => 'Manage Taxonomies',
    'editing_taxonomy' => 'Editing taxonomy',
    'taxonomy_updated' => 'Taxonomy Updated',
    'taxonomy_created' => 'Taxonomy Created',
    'taxonomies_empty_heading' => 'Taxonomies',
    'taxonomies_empty' => 'A Taxonomy is a system of classifying data around a set of unique characteristics, such as category or color.',
    'taxonomies_title_instructions' => 'The name of your taxonomy.',
    'taxonomies_slug_instructions' => 'This is how the taxonomy will be referenced in templates.',
    'taxonomies_fieldset_instructions' => 'The fields that should be displayed when editing terms in this taxonomy.',
    'taxonomies_route_instructions' => 'The terms in this taxonomy will have URLs that follow this routing scheme.',

    'taxonomy_terms' => 'Term|Terms',
    'create_taxonomy_term_button' => 'Create :term',
    'create_taxonomy_term' => 'Create a New :term',
    'taxonomy_term_created' => 'Taxonomy term created',
    'taxonomy_terms_empty_heading' => 'Terms in :term',
    'taxonomy_terms_empty' => 'Where a Taxonomy is the grouping, a Term is the actual label applied to a piece of content. For example, "Red" would be a term in "Colors".',

    // Globals
    'globals' => 'Global|Globals',
    'nav_globals' => 'Globals',
    'manage_global_sets' => 'Manage Global Sets',
    'create_global_set_button' => 'Create Global Set',
    'create_global_set' => 'Create New Global Set',
    'global_set_created' => ':type created',
    'editing_globals' => 'Editing Globals',
    'globals_updated' => 'Globals Updated',
    'globals_empty_heading' => 'Global Sets',
    'globals_empty' => 'Global sets are groups of variables that represent content that isn\'t tied to a URL, such as company name, address, contact info, or even template level settings like limits, offsets, and show/hide toggles.',
    'general_globals' => 'General',
    'globals_title_instructions' => "The proper name of your global set. For example: Footer Content, or Sidebar Settings.",
    'globals_slug_instructions' => "This is the variable used in your templates. For example: <code>footer_content</code> or <code>sidebar_settings</code>.",
    'globals_fieldset_instructions' => "Pick which group of fields you want to use to manage this fieldset.",

    // Assets
    'assets' => 'Asset|Assets',
    'nav_assets' => 'Assets',
    'new_asset' => 'New Asset',
    'add_asset' => 'Add Asset',
    'browse_assets' => 'Browse Assets',
    'browsing_assets' => 'Browsing Assets',
    'creating_asset' => 'Creating Asset',
    'asset_created' => 'Asset Created',
    'editing_asset' => 'Editing Asset',
    'asset_updated' => 'Asset Updated',
    'drop_to_upload' => 'Drop to Upload',
    'upload_asset' => 'Upload Asset',
    'sync_assets' => 'Sync assets',
    'syncing_assets' => 'Syncing assets',
    'new_folder' => 'New Folder',
    'upload' => 'Upload',
    'uploads' => 'Upload|Uploads',
    'filename' => 'Filename',
    'filesize' => 'File size',
    'date_modified' => 'Date modified',
    'parent_folder' => 'Parent folder',
    'asset_folder_empty_heading' => 'Empty folder.',
    'asset_folder_empty' => 'You may upload new assets into this folder by dragging and dropping files into the outlined area above.',
    'focal_point' => 'Focal point',
    'focal_point_label' => 'Click image to adjust the focal point',
    'focal_point_instructions' => 'The focal point is used when cropping so the most important part of the image is not removed.',
    'or_drag_and_drop_files' => 'or drag and drop files.',
    'no_asset_container_specified' => 'No asset container specified.',
    'rename_file' => 'Rename File',
    'rename_file_warning' => 'Renaming a file will not update any references to it, which _may_ result in broken links in your site.',
    'move_file' => 'Move file',
    'dimensions' => 'Dimensions',
    'last_modified' => 'Last Modified',


    // Folder
    'folder_title_instructions' => 'The display name of the folder.',
    'folder_directory_instructions' => 'The filesystem directory name',

    // Asset Containers
    'asset_containers' => 'Asset Container|Asset Containers',
    'manage_asset_containers' => 'Manage Asset Containers',
    'new_asset_container' => 'New Asset Container',
    'creating_asset_container' => 'Creating Asset Container',
    'asset_container_created' => 'Asset Container created',
    'editing_asset_container' => 'Editing Asset Container',
    'asset_container_updated' => 'Asset Container updated',
    'asset_containers_empty_heading' => 'There are no configured asset containers.',
    'asset_containers_empty' => 'Each asset container can be a location on your file system, which can either be publicly accessible or protected from prying eyes.',
    'select_asset_container' => 'Select an asset container.',

    // Asset Folders
    'create_folder' => 'Create Folder',
    'edit_folder' => 'Edit Folder',
    'asset_name_instructions' => 'The display name of the container.',
    'asset_handle_instructions' => 'A unique string that you can use to reference your container. <b>This cannot be changed after creation.</b>',
    'asset_fieldset_instructions' => 'The fieldset to be used by assets in this container.',
    'asset_driver_instructions' => 'Where will the assets be stored and accessed?',
    'asset_path_instructions' => 'Location of the folder on the filesystem.',
    'asset_url_instructions' => 'URL of the folder.',
    'asset_folder_basename' => 'Folder name',

    // Set Builder
    'add_set' => 'Add Set',
    'edit_set' => 'Edit Set',
    'delete_set' => 'Delete Set',
    'set_fields_instructions' => "Choose this set's fields",

    // Amazon S3
    'access_key_id' => 'Access Key ID',
    'secret_access_key' => 'Secret Access Key',

    // Users
    'users' => 'User|Users',
    'nav_users' => 'Users',
    'create_user_button' => 'Create User',
    'create_user' => 'Create User',
    'create_a_user' => 'Create a User',
    'user_created' => 'User created',
    'editing_user' => 'Editing User',
    'user_updated' => 'User updated',
    'send_activation_email' => 'Send activation email',
    'send_password_reset_email' => 'Send password reset email',
    'copy_activation_link' => 'Copy activation link',
    'copy_password_reset_link' => 'Copy password reset link',
    'account' => 'Account',
    'my_account' => 'My Account',
    'logout' => 'Logout',
    'user_options' => 'User Options',
    'user_bio_instructions' => 'A little bit about you, if you like.',
    'user_account_created' => 'A user account has been created.',

    // Password Reset
    'reset_code_missing' => 'No code specified.',
    'reset_code_invalid' => 'Invalid code',

    // Roles
    'roles' => 'Role|Roles',
    'nav_user-roles' => 'User Roles',
    'create_role_button' => 'Create Role',
    'creating_role' => 'Create a Role',
    'role_created' => 'Role created',
    'editing_role' => 'Editing Role',
    'role_updated' => 'Role Updated',
    'roles_empty_heading' => 'User Roles',
    'roles_empty' => 'User Roles allow you to group a number of permissions under a single label. For example, editor, publisher, and admin.',

    // Permissions
    'permissions' => 'Permission|Permissions',
    'access' => 'Access',
    'checking_folder_permissions' => 'Checking folder permissions, please wait...',
    'folders_permission_valid' => 'File and folder permissions look great!',
    'folders_unwritable' => 'The following directories need to be writable:',

    // Error Pages
    'permission_denied' => 'Permission Denied',
    'permission_denied_instructions' => "You don't have permission to view this page.",
    'page_not_found' => 'Page not found',
    'page_not_found_instructions' => 'The page you requested does not exist.',
    'learn_more_about_trial_mode' => 'Learn more about trial mode.',
    'session_expired' => 'Your session has expired.',


    // User Groups
    'usergroups' => 'User Group|User Groups',
    'nav_user-groups' => 'User Groups',
    'create_usergroup_button' => 'Create Group',
    'creating_usergroup' => 'Creating User Group',
    'usergroup_created' => 'User Group created',
    'editing_usergroup' => 'Editing User Group',
    'usergroup_updated' => 'User Group updated',
    'usergroups_empty_heading' => 'User Groups',
    'usergroups_empty' => 'User Groups allow you mix and match different roles and users together into a single group.',

    // Settings
    'settings' => 'Setting|Settings',
    'nav_settings' => 'Settings',
    'settings_cp' => 'Control Panel',
    'settings_routes' => 'Routes',
    'settings_search' => 'Search',
    'settings_system' => 'System',
    'settings_assets' => 'Assets',
    'settings_caching' => 'Caching',
    'settings_debug' => 'Debugging',
    'settings_email' => 'Email',
    'settings_theming' => 'Theming',
    'settings_users' => 'Users',
    'settings_updated' => 'Settings updated.',
    'settings_locales_instructions' => "Create a locale for each language translation. You can skip this for now and do it later if you'd prefer.",
    'settings_debug_mode_instructions' => "Enabling Debug Mode will display all errors on screen. It's a great tool while a site is development, but remember to disable it in production.",

    // Addons
    'addons' => 'Addon|Addons',
    'nav_addons' => 'Addons',
    'addons_empty_heading' => 'There are no addons',
    'addons_empty' => 'Addons extend the functionality of Statamic.',

    // Fieldsets & Fields
    'fieldset' => 'Fieldset',
    'fieldsets' => 'Fieldset|Fieldsets',
    'nav_fieldsets' => 'Fieldsets',
    'create_fieldset_button' => 'Create Fieldset',
    'create_fieldset' => 'Create a Fieldset',
    'fieldset_created' => 'Fieldset created',
    'editing_fieldset' => 'Editing Fieldset',
    'fieldset_updated' => 'Fieldset updated',
    'fieldsets_empty' => 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.',
    'fieldset_title_instructions' => 'The proper name of the fieldset. Usually a singular noun.',
    'fieldset_handle_instructions' => "The fieldset's variable name used in settings and templates.",
    'fieldset_create_title_instructions' => "Optional, customizable title shown when creating new content with this fieldset.",
    'fieldset_hide_instructions' => "Hide this fieldset from selection dialogs?",
    'fieldset_fields_instructions' => 'Assign and customize the fields and fieldtypes in this fieldset.',
    'fieldset_taxonomies_instructions' => 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.',
    'create_title' => 'Create Title',
    'display_name' => "Display Name",
    'display_name_instructions' => "The field's label shown in the Control Panel.",
    'display_text' => 'Display Text',
    'display_text_instructions' => "The field's label",
    'field_name' => 'Field Name',
    'field_name_instructions' => 'The field variable',
    'field_required' => 'Required',
    'field_required_instructions' => 'This field is required',
    'field_variable' => "Field Variable",
    'field_variable_instructions' => "The field's template variable.",
    'field_instructions_instructions' => "Basic Markdown is allowed. Encouraged, even.",
    'field_width_instructions' => 'The size of the field in the fieldset layout.',
    'validation_rules' => "Validation Rules",
    'validation_instructions' => "Has access to all of Laravel's",
    'validation_instructions_link_text' => 'validation rules',
    'validation_rules_instructions' => 'Enter a pipe delimited string of <a href=":url" target="_blank">validation rules</a>.',
    'default_value' => 'Default Value',
    'field_default_value_instructions' => 'Enter the default value for string-type fields.',
    'edit_field' => 'Edit Field',
    'choose_field_to_edit' => "Choose a field to edit its settings.",


    // Forms
    'form' => 'Form',
    'forms' => 'Form|Forms',
    'nav_forms' => 'Forms',
    'forms_empty' => 'Forms collect, display, and report user submitted reponses.',
    'create_form' => 'Create Form',
    'form_updated' => 'Form updated',
    'form_created' => 'Form created',
    'form_submission_deleted' => 'Submission deleted.',
    'submissions' => 'Submission|Submissions',
    'response' => 'response|responses',
    'empty_responses' => 'This form is awaiting responses.',
    'create_formset' => 'Create Formset',
    'creating_formset' => 'Creating Formset',
    'editing_formset' => 'Editing Formset',
    'import' => 'Import',
    'export' => 'Export',
    'export_csv' => 'Export as CSV',
    'export_json' => 'Export as JSON',

    // Formset Builder
    'formset_title_instructions' => "Your formset's proper label.",
    'formset_slug_instructions' => 'How the formset will be referenced.',
    'formset_metrics_instructions' => 'Specify any metrics you would like displayed.',
    'formset_emails_instructions' => 'Add any emails you want to be sent upon submission.',
    'formset_honeypot_field' => 'Honeypot Field',
    'formset_honeypot_instructions' => 'The field name to be used for the honeypot.',
    'formset_honeypot_link' => "What's a honeypot?",
    'formset_fields_instructions' => 'Choose and customize the fields in this form.',

    // Updater
    'nav_updater' => 'Updater',
    'updates'     => 'Updates',
    'upgrade_to_latest' => 'Upgrade to Latest',
    'upgrade_to_version' => 'Upgrade to :version',
    'downgrade_to_version' => 'Downgrade to :version',
    'update_available' => 'Update Available',
    'update_complete' => 'Update complete.',
    'up_to_date' => 'Up to date!',
    'on_latest' => 'You are running the latest version of Statamic',
    'current_version' => 'Current Version',
    'released_on_date' => 'Released on :date',
    'updates_available' => 'There is an update available|There are :updates updates available',
    'backup_failed' => 'Backup Failed',
    'backup' => 'Backup',
    'backed_up' => 'Backed up',
    'backing_up' => 'Backing up...',
    'backing_up_instructions' => "We're zipping up your <code>statamic</code> folder, just in case you need to roll back.",
    'backup_reminder' => 'This is a safe process. We back up everything during running the update so you can always find your most recent version in <code>local/temp</code> if something goes wrong.',

    // Download
    'downloading' => 'Downloading...',
    'downloaded' => 'Downloaded.',
    'download_failed' => 'Download Failed',
    'downloading_latest' => 'Getting the latest and greatest version of Statamic for you.',
    'downloading_version' => 'Getting v:version',

    // Installation
    'installation' => 'Installation',
    'installation_has_failed' => 'Installation has failed',
    'preparing_installation' => 'Installation will begin once the backup and download have completed.',
    'now_running' => "You're now running Statamic v:version",
    'statamic_ready' => 'Statamic is ready and waiting for you.',
    'delete_installer' => 'Please delete the <code>installer.php</code> file.',
    'installer_deleted' => 'I deleted it. Take me to the Control Panel &rarr;',

    // Archive
    'unzipping_files' => 'Unzipping files...',
    'unzipping_files_instructions' => 'Placing the files from the Statamic zip in a temporary location.',
    'unzipped_files' => 'Files unzipped.',

    // Dependencies
    'installing_dependencies' => 'Installing Dependencies...',
    'installing_dependencies_instructions' => 'Any addons with dependencies will need to be fetched. This may take a moment.',
    'dependencies_installed' => 'Dependencies installed.',

    // Swap Release
    'swapping_files' => 'Swapping files...',
    'swapping_files_instructions' => 'Your smelly old Statamic files are being swapped for sparkly clean new ones.',
    'files_swapped' => 'Files swapped.',

    // Clean Up
    'cleaning_up' => 'Cleaning up...',
    'cleaning_up_instructions' => "We're deleting the temporary files created during the update.",

    // Importers
    'nav_import' => 'Import',
    'site_url' => 'Site URL',
    'import_from_version' => 'Import content from Statamic :version',
    'import_complete' => 'Import Complete',
    'import_has_completed' => 'The import has completed.',
    'import_summary' => 'Import Summary',
    'import_site_url_instructions' => 'Enter the URL of the existing website you will be importing.',

    'duplicate_item_warning'  => "There's one duplicate.|There are :count duplicates.",
    'uncheck_duplicates' => 'Uncheck Duplicates',

    'from_json' => 'From JSON',
    'json_file' => 'JSON File',
    'upload_json_file' => 'Upload a JSON file',

    // Export
    'export_failed' => 'Exporting Failed',
    'export_export_failed_with_error' => 'Export faileed with error:',

    'manage_widgets' => 'Manage Widgets',

    // Things
    'thing_created' => ':thing created.',
    'thing_updated' => ':thing updated.',
    'thing_deleted' => ':thing deleted.',
    'thing_configure' => 'Configure :thing',
    'thing_saved' => ':thing saved.',
    'thing_editing' => 'Editing :thing',

    // Statuses
    'statuses' => 'Status|Statuses',
    'status_pending' => 'Pending',
    'status_active' => 'Active',
    'published' => 'Published',

    // Shortcuts
    'keyboard_shortcuts' => 'Keyboard Shortcuts',
    'show_keyboard_shortcuts' => 'Show Keyboard Shortcuts',

    // License
    'license_unauthorized' => 'This license belongs to another domain. Visit <a href=":url" target="_blank">your account</a> to change it.',
    'license_missing' => 'You are on a public domain without a license. Please <a href=":url">add your license key</a>.',
    'checking_license_key' => 'Checking your license key, please wait...',
    'license_valid' => 'You have a valid license key.',
    'license_invalid' => 'This key is invalid.',
    'license_key_instructions' => 'Please enter your license key. You can find yours in your <a href=":licenses">Statamic Account</a> or you can <a href=":buy_license">buy a new license</a> if you need to.',
    'enter_license_key' => 'Please enter your license key to access to the control panel on a public domain.',

    'continue_in_trial_mode' => 'Continue in Trial Mode',

    // Verbs and helpers
    'actions' => 'Action|Actions',
    'add' => 'Add',
    'edit' => 'Edit',
    'view' => 'View',
    'remove' => 'Remove',
    'update' => 'Update',
    'delete' => 'Delete',
    'uncheck_all' => 'Uncheck All',
    'duplicate' => 'Duplicate',
    'manage' => 'Manage',
    'create' => 'Create',
    'reorder' => 'Reorder',
    'submit' => 'Submit',
    'save' => 'Save',
    'saving' => 'Saving',
    'save_changes' => 'Save Changes',
    'save_and_continue' => 'Save and Continue',
    'are_you_sure' => 'Are you sure?',
    'yes_im_sure' => 'Yes, I\'m sure',
    'refresh' => 'Refresh',
    'cancel' => 'Cancel',
    'loading' => 'Loading',
    'expand' => 'Expand',
    'collapse' => 'Collapse',
    'show' => 'Show',
    'hide' => 'Hide',
    'move' => 'Move',
    'edit_layout' => 'Edit Layout',
    'save_layout' => 'Save Layout',
    'save_order' => 'Save Order',
    'toggle_dropdown' => 'Toggle Dropdown',
    'confirm_delete_items' => 'This item will be deleted|The selected items will be deleted',
    'confirm_delete_folder' => 'This folder will be deleted',
    'configure' => 'Configure',
    'browse' => 'Browse',
    'select' => 'Select',
    'localizing' => 'Localizing',
    'add_row' => 'Add Row',
    'localizable' => 'Localizable',
    'date_col_header' => 'Date',
    'please_wait' => 'Please Wait...',
    'exporting' => 'Exporting...',
    'importing' => 'Importing...',
    'return_to_dashboard' => 'Return to Dashboard',
    'publish_content' => 'Publish Content',
    'close_this_window' => 'Close this Window',
    'toggle_navigation' => 'Toggle navigation',
    'logging_in' => 'Logging in...',
    'logged_in' => 'Logged in! Taking you to the control panel...',
    'write' => 'Write',
    'preview' => 'Preview',
    'collapse_all' => 'Collapse All',
    'expand_all' => 'Expand All',
    'please_select' => 'Please select',
    'selected' => 'selected',

    // Nouns and whatnot
    'fields' => 'Field|Fields',
    'locales' => 'Locale|Locales',
    'keys' => 'Key|Keys',
    'values' => 'Value|Values',
    'names' => 'Name|Names',
    'usernames' => 'Username|Usernames',
    'emails' => 'Email|Emails',
    'passwords' => 'Password|Passwords',
    'confirm_password' => 'Confirm Password',
    'remember_me' => 'Remember me',
    'title' => 'Title',
    'titles' => 'Title|Titles',
    'slug' => 'Slug',
    'slugs' => 'Slug|Slugs',
    'rows' => 'Row|Rows',
    'columns' => 'Column|Columns',
    'folders' => 'Folder|Folders',
    'date' => 'Date',
    'dates' => 'Date|Dates',
    'date_and_time' => 'Date and Time',
    'datestring' => 'Date',
    'items' => 'Item|Items',
    'add_date' => 'Add date',
    'add_time' => 'Add time',
    'login' => 'Login',
    'login_with' => 'Login with :provider',
    'new' => 'New',
    'or' => 'or',
    'order' => 'Order',
    'one_quarter' => '1/4 - One quarter',
    'three_quarters' => '3/4 - Three quarters',
    'one_third' => '1/3 - One third',
    'two_thirds' => '2/3 - Two thirds',
    'half' => 'Half',
    'full_width' => 'Full width',
    'width' => 'Width',
    'version' => 'Version',
    'versions' => 'Version|Versions',
    'developer' => 'Developer',
    'developers' => 'Developer|Developers',
    'developer_mode' => 'Developer Mode',
    'description' => 'Description',
    'descriptions' => 'Description|Descriptions',
    'name' => 'Name',
    'username' => 'Username',
    'email' =>'Email',
    'done' => 'Done',
    'close' => 'Close',
    'templates' => 'Template|Templates',
    'authors' => 'Author|Authors',
    'installer' => 'Installer',
    'search' => 'Search',
    'instructions' => 'Instructions',
    'handle' => 'Handle',
    'label' => 'Label',
    'type' => 'Type',
    'route' => 'Route',
    'terms' => 'Term|Terms',
    'progress' => 'Progress',
    'variables' => 'Variable|Variables',
    'license_key' => 'License Key',
    'driver' => 'Driver',
    'path' => 'Path',
    'url' => 'URL',
    'bucket' => 'Bucket',
    'region' => 'Region',
    'metrics' => 'Metric|Metrics',
    'whats_this' => "What's this?",
    'first_name' => 'First name',
    'last_name' => 'Last name',
    'bio' => 'Bio',
    'markdown_cheatsheet' => 'Markdown Cheatsheet',
    'locales_and_urls' => 'Locales and URLs',
    'debug_mode' => 'Debug Mode',
    'defined_in_environment' => 'Managed externally by your environment.',
    'be_right_back' => 'Be right back.',
    'size' => 'Size',

    'nav_content' => 'Content',
    'nav_tools' => 'Tools',
    'nav_configure' => 'Configure',
    'nav_addons' => 'Addons',
    'nav_fieldsets' => 'Fieldsets',
    'nav_settings' => 'Settings',
    'nav_users' => 'Users',

    'mount_collection' => 'Mount Collection',
    'unmount_collection' => 'Unmount Collection',

    'trial_mode' => 'Trial Mode',
    'trial_mode_badge' => 'FREE TRIAL',
    'trial_mode_explanation' => "Please enter your license key to unlock Statamic's full potential and run on a public domain.",

    // Validation
    'handle_exists' => 'A container with this handle already exists.',
];
