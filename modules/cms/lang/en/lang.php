<?php

return [
    'cms_object' => [
        'invalid_file' => 'Invalid file name: :name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_file_inspector' => 'Invalid file name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_property' => "The property ':name' cannot be set",
        'file_already_exists' => "File ':name' already exists.",
        'error_saving' => "Error saving file ':name'. Please check write permissions.",
        'error_creating_directory' => 'Error creating directory :name. Please check write permissions.',
        'invalid_file_extension' => 'Invalid file extension: :invalid. Allowed extensions are: :allowed.',
        'error_deleting' => "Error deleting the template file ':name'. Please check write permissions.",
        'delete_success' => 'Templates deleted: :count.',
        'file_name_required' => 'The File Name field is required.',
        'safe_mode_enabled' => 'Safe mode is currently enabled that prevents PHP code changes.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Website',
            'online' => 'Online',
            'maintenance' => 'In Maintenance',
            'manage_themes' => 'Manage Themes',
            'customize_theme' => 'Customize Theme',
        ],
    ],
    'theme' => [
        'not_found_name' => "The theme ':name' is not found.",
        'by_author' => 'By :name',
        'active' => [
            'not_set' => 'The active theme is not set.',
            'not_found' => 'The active theme is not found.',
            'is_locked' => "The theme ':theme' is locked and cannot be used. Please duplicate this theme or create a child theme.",
        ],
        'edit' => [
            'not_set' => 'The edit theme is not set.',
            'not_found' => 'The edit theme is not found.',
            'not_match' => "The object you're trying to access doesn't belong to the theme being edited. Please reload the page.",
        ],
        'settings_menu' => 'Frontend Theme',
        'settings_menu_description' => 'Manage the front-end theme and customization options.',
        'default_tab' => 'Properties',
        'publish_tab' => 'Publish',
        'advanced_tab' => 'Advanced',
        'name_label' => 'Name',
        'name_create_placeholder' => 'New theme name',
        'author_label' => 'Author Name',
        'author_placeholder' => 'Person or company name',
        'description_label' => 'Description',
        'description_placeholder' => 'Theme description',
        'homepage_label' => 'Homepage',
        'homepage_placeholder' => 'Website URL',
        'author_code_label' => 'Author Code',
        'author_code_placeholder' => 'A unique code for the author used for distribution',
        'code_label' => 'Theme Code',
        'code_placeholder' => 'A unique code for this theme used for distribution',
        'parent_label' => 'Parent Theme',
        'no_parent' => '-- no parent --',
        'database_templates_label' => 'Database Mode',
        'database_templates_description' => 'Save changes to this theme in the database instead of the filesystem',
        'preview_image_label' => 'Preview image',
        'preview_image_placeholder' => 'The path of theme preview image.',
        'dir_name_label' => 'Directory Name',
        'dir_name_create_label' => 'The destination theme directory',
        'theme_label' => 'Theme',
        'theme_title' => 'Themes',
        'activate_button' => 'Activate',
        'active_button' => 'Activate',
        'customize_theme' => 'Customize Theme',
        'customize_button' => 'Customize',
        'duplicate_button' => 'Duplicate',
        'duplicate_title' => 'Duplicate Theme',
        'duplicate_theme_success' => 'Theme Duplicated!',
        'manage_button' => 'Manage',
        'manage_title' => 'Manage Theme',
        'edit_properties_title' => 'Theme',
        'edit_properties_button' => 'Edit Properties',
        'save_properties' => 'Save Properties',
        'import_button' => 'Import',
        'import_title' => 'Import Theme',
        'import_theme_success' => 'Theme Imported!',
        'import_uploaded_file' => 'Theme archive file',
        'import_overwrite_label' => 'Overwrite existing files',
        'import_overwrite_comment' => 'Untick this box to only import new files',
        'import_folders_label' => 'Folders',
        'import_folders_comment' => 'Please select the theme folders you would like to import',
        'export_button' => 'Export',
        'export_title' => 'Export Theme',
        'export_folders_label' => 'Folders',
        'export_folders_comment' => 'Please select the theme folders you would like to export',
        'delete_button' => 'Delete',
        'delete_confirm' => 'Delete this theme? It cannot be undone!',
        'delete_active_theme_failed' => 'Cannot delete the active theme, try making another theme active first.',
        'delete_theme_success' => 'Theme deleted!',
        'create_title' => 'Create Theme',
        'create_button' => 'Create',
        'create_new_blank_theme' => 'Create a New Blank Theme',
        'create_theme_success' => 'Theme Created!',
        'create_theme_required_name' => 'Please specify a name for the theme.',
        'new_directory_name_label' => 'Theme directory',
        'new_directory_name_comment' => 'Provide a new directory name for the duplicated theme.',
        'dir_name_invalid' => 'Name can contain only digits, Latin letters and the following symbols: _-',
        'dir_name_taken' => 'Desired theme directory already exists.',
        'find_more_themes' => 'Find More Themes',
        'saving' => 'Saving Theme...',
        'return' => 'Return to Themes List',
        'setting_edit_theme' => 'Changing edit theme',
        'edit_theme_changed' => 'Edit theme changed',
        'no_themes_found' => 'No themes found',
    ],
    'maintenance' => [
        'settings_menu' => 'Maintenance Mode',
        'settings_menu_description' => 'Configure the maintenance mode page and toggle the setting.',
        'is_enabled' => 'Enable maintenance mode',
        'is_enabled_comment' => 'Select the page to show when maintenance mode is activated.',
        'hint' => 'Maintenance mode will display the maintenance page to visitors who are not signed in to the back-end area.',
    ],
    'page' => [
        'not_found_name' => "The page ':name' is not found",
        'not_found' => [
            'label' => 'Page Not Found',
            'help' => 'The requested page cannot be found.',
        ],
        'custom_error' => [
            'label' => 'Page Error',
            'help' => "We're sorry, but something went wrong and the page cannot be displayed.",
        ],
        'menu_label' => 'Pages',
        'unsaved_label' => 'Unsaved page(s)',
        'no_list_records' => 'No pages found',
        'new' => 'New page',
        'invalid_url' => 'Invalid URL format. The URL should start with the forward slash symbol and can contain digits, Latin letters and the following symbols: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Delete selected pages?',
        'delete_confirm_single' => 'Delete this page?',
        'no_layout' => '-- no layout --',
        'cms_page' => 'CMS page',
        'title' => 'Page title',
        'url' => 'Page URL',
        'url_required' => 'The page URL is required.',
        'file_name' => 'Page file name',
        'editor_node_name' => 'Pages',
        'editor_sorting' => 'Sort Pages',
        'editor_sort_by_url' => 'URL',
        'editor_sort_by_title' => 'Title',
        'editor_sort_by_file_name' => 'File Name',
        'editor_grouping' => 'Group Pages',
        'editor_group_by_filepath' => 'File Path',
        'editor_group_by_url' => 'URL',
        'editor_display' => 'Display',
        'editor_display_title' => 'Title',
        'editor_display_url' => 'URL',
        'editor_display_file' => 'File Path',
        'editor_markup' => 'Markup',
        'editor_code' => 'Code',
        'description_hint' => 'The description is optional and only visible in the back-end user interface.',
        'create_new' => 'New Page',
    ],
    'layout' => [
        'not_found_name' => "The layout ':name' is not found",
        'menu_label' => 'Layouts',
        'unsaved_label' => 'Unsaved layout(s)',
        'no_list_records' => 'No layouts found',
        'new' => 'New layout',
        'delete_confirm_multiple' => 'Delete selected layouts?',
        'delete_confirm_single' => 'Delete this layout?',
        'editor_node_name' => 'Layouts',
        'create_new' => 'New Layout',
    ],
    'partial' => [
        'not_found_name' => "The partial ':name' is not found.",
        'invalid_name' => 'Invalid partial name: :name.',
        'menu_label' => 'Partials',
        'unsaved_label' => 'Unsaved partial(s)',
        'no_list_records' => 'No partials found',
        'delete_confirm_multiple' => 'Delete selected partials?',
        'delete_confirm_single' => 'Delete this partial?',
        'editor_node_name' => 'Partials',
        'new' => 'New partial',
        'create_new' => 'New Partial',
    ],
    'content' => [
        'not_found_name' => "The content file ':name' is not found.",
        'menu_label' => 'Content',
        'unsaved_label' => 'Unsaved content',
        'no_list_records' => 'No content files found',
        'delete_confirm_multiple' => 'Delete selected content files or directories?',
        'delete_confirm_single' => 'Delete this content file?',
        'editor_node_name' => 'Content Files',
        'new' => 'New Content File',
        'editor_content' => 'Content',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Invalid AJAX handler name: :name.',
        'not_found' => "AJAX handler ':name' was not found.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Add',
        'search' => 'Search...',
    ],
    'editor' => [
        'settings' => 'Settings',
        'title' => 'Title',
        'new_title' => 'New Page Title',
        'url' => 'URL',
        'filename' => 'File Name',
        'layout' => 'CMS Layout',
        'description' => 'Description',
        'preview' => 'Preview',
        'page' => 'CMS Page',
        'edit_theme' => 'Edit Theme',
        'change_edit_theme' => 'Change Edit Theme',
        'edit_theme_saved_changed_tabs' => 'You have unsaved changes in open tabs. Please save them or close the tabs in order to proceed.',
        'partial' => 'CMS Partial',
        'meta' => 'Meta',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => 'Markup',
        'code' => 'Code',
        'content' => 'CMS Content File',
        'asset' => 'Asset File',
        'hidden' => 'Hidden',
        'hidden_comment' => 'Hidden pages are accessible only by logged-in back-end users.',
        'enter_fullscreen' => 'Enter fullscreen mode',
        'exit_fullscreen' => 'Exit fullscreen mode',
        'open_searchbox' => 'Open Search box',
        'close_searchbox' => 'Close Search box',
        'open_replacebox' => 'Open Replace box',
        'close_replacebox' => 'Close Replace box',
        'commit' => 'Commit',
        'reset' => 'Reset',
        'commit_confirm' => 'Are you sure you want to commit your changes to this file to the filesystem? This will overwrite the existing file on the filesystem',
        'reset_confirm' => 'Are you sure you want to reset this file to the copy that is on the filesystem? This will completely replace it with the file that is on the filesystem',
        'committing' => 'Committing',
        'resetting' => 'Resetting',
        'commit_success' => 'The :type has been committed to the filesystem',
        'reset_success' => 'The :type has been reset to the filesystem version',
        'error_loading_header' => 'Error loading template',
        'component_list' => 'Components',
        'component_list_description' => 'To add a component, click it or drag and drop to the Markup editor.',
        'info' => 'Info',
        'refresh' => 'Refresh',
        'create' => 'Create',
        'manage_themes' => 'Manage Themes',
        'error_no_doctype_permissions' => 'You don\'t have permission to manage the document type: :doctype',
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Unsaved asset(s)',
        'drop_down_add_title' => 'Add...',
        'drop_down_operation_title' => 'Action...',
        'upload_files' => 'Upload File(s)',
        'create_file' => 'Create file',
        'create_directory' => 'New Directory',
        'directory_popup_title' => 'New Directory',
        'directory_name' => 'Directory Name',
        'directory_name_required' => 'The directory name is required',
        'rename_name_required' => 'The name is required',
        'rename' => 'Rename',
        'delete' => 'Delete',
        'move' => 'Move',
        'moving' => 'Moving selected items',
        'moved' => 'Successfully moved',
        'saved' => 'File saved',
        'deleted' => 'File deleted',
        'select' => 'Select',
        'new' => 'New File',
        'rename_popup_title' => 'Rename',
        'rename_new_name' => 'New name',
        'invalid_path' => 'Path can contain only digits, Latin letters, spaces and the following symbols: ._-@/',
        'error_deleting_file' => 'Error deleting file :name.',
        'error_deleting_dir_not_empty' => 'Error deleting directory :name. The directory is not empty.',
        'error_deleting_dir' => 'Error deleting directory :name.',
        'invalid_name' => 'Name can contain only digits, Latin letters, spaces and the following symbols: ._-@',
        'original_not_found' => 'Original file or directory not found',
        'already_exists' => 'File or directory with this name already exists',
        'error_renaming' => 'Error renaming the file or directory',
        'name_cant_be_empty' => 'The name cannot be empty',
        'too_large' => 'The uploaded file is too large. The maximum allowed file size is :max_size',
        'type_not_allowed' => 'Only the following file types are allowed: :allowed_types',
        'file_not_valid' => 'File is not valid',
        'error_uploading_file' => "Error uploading file ':name': :error",
        'move_please_select' => 'please select',
        'move_destination' => 'Destination Directory',
        'move_popup_title' => 'Move Assets',
        'move_button' => 'Move',
        'selected_files_not_found' => 'Selected files not found',
        'select_destination_dir' => 'Please select a destination directory',
        'destination_not_found' => 'Destination directory is not found',
        'error_moving_file' => 'Error moving file :file',
        'error_moving_directory' => 'Error moving directory :dir',
        'error_deleting_directory' => 'Error deleting the original directory :dir',
        'no_list_records' => 'No files found',
        'delete_confirm' => 'Delete selected files or directories?',
        'delete_confirm_single' => 'Delete selected file or directory?',
        'path' => 'Path',
        'editor_node_name' => 'Assets',
        'open' => 'Open',
    ],
    'component' => [
        'menu_label' => 'Components',
        'unnamed' => 'Unnamed',
        'no_description' => 'No description provided',
        'alias' => 'Alias',
        'alias_description' => 'A unique name given to this component when using it in the page or layout code.',
        'validation_message' => 'Component aliases are required and can contain only Latin symbols, digits, and underscores. The aliases should start with a Latin symbol.',
        'invalid_request' => 'The template cannot be saved because of invalid component data.',
        'no_records' => 'No components found',
        'not_found' => "The component ':name' is not found.",
        'method_not_found' => "The component ':name' does not contain a method ':method'.",
        'expand_or_collapse' => "Expand or collapse the component list",
        'remove' => 'Remove component',
        'expand_partial' => 'Expand Component Partial',
    ],
    'template' => [
        'invalid_type' => 'Unknown template type.',
        'not_found' => 'Template not found.',
        'saved' => 'Template saved',
        'saved_to_db' => 'Template saved to the database',
        'file_updated' => 'Template file updated',
        'reset_from_template_success' => 'Template was reset from file',
        'reloaded' => 'Template reloaded',
        'deleted' => 'Template deleted',
        'no_list_records' => 'No records found',
        'delete_confirm' => 'Delete selected templates?',
        'order_by' => 'Order by',
        'last_modified' => 'Last modified',
        'storage' => 'Storage',
        'template_file' => 'Template file',
        'storage_filesystem' => 'Filesystem',
        'storage_database' => 'database',
        'update_file' => 'Update template file',
        'reset_from_file' => 'Reset from template file',
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Manage website content files',
        'manage_assets' => 'Manage website assets - images, JavaScript files, CSS files',
        'manage_pages' => 'Create, modify and delete website pages',
        'manage_layouts' => 'Create, modify and delete CMS layouts',
        'manage_partials' => 'Create, modify and delete CMS partials',
        'manage_themes' => 'Activate, deactivate and configure CMS themes',
        'manage_theme_options' => 'Configure customization options for the active theme',
    ],
    'theme_log' => [
        'hint' => 'This log displays any changes made to the theme by administrators in the back-end area.',
        'menu_label' => 'Theme log',
        'menu_description' => 'View changes made to the active theme.',
        'empty_link' => 'Empty theme log',
        'empty_loading' => 'Emptying theme log...',
        'empty_success' => 'Theme log emptied',
        'return_link' => 'Return to theme log',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'created_at' => 'Date & Time',
        'user' => 'User',
        'type' => 'Type',
        'type_create' => 'Create',
        'type_update' => 'Update',
        'type_delete' => 'Delete',
        'theme_name' => 'Theme',
        'theme_code' => 'Theme code',
        'old_template' => 'Template (Old)',
        'new_template' => 'Template (New)',
        'template' => 'Template',
        'diff' => 'Changes',
        'old_value' => 'Old value',
        'new_value' => 'New value',
        'preview_title' => 'Template Changes',
        'template_updated' => 'Template was updated',
        'template_created' => 'Template was created',
        'template_deleted' => 'Template was deleted',
    ],
    'intellisense' => [
        'learn_more' => 'Learn more',
        'docs' => [
            'partial' => 'Renders the contents of a CMS partial.',
            'page' => 'Renders the contents of a CMS page into a layout template.',
            'content' => 'Renders a CMS content block.',
            'component' => 'Renders the default markup content for a CMS component.',
            'placeholder' => 'Renders a placeholder section.',
            'scripts' => 'Inserts JavaScript file references to scripts injected by the application.',
            'styles' => 'Renders CSS links to stylesheet files injected by the application.',
            'flash' => 'Renders any flash messages stored in the user session.',
            'verbatim' => 'Marks entire sections as being raw text that should not be parsed.',
            'macro' => 'Allows to define custom functions in a template.',
            'for' => 'Loop over each value in a collection.',
            'if' => 'Allows for conditional displaying of the template markup.',
            'abs_filter' => 'The `abs` filter returns the absolute value.',
            'batch_filter' => 'The `batch` filter "batches" items by returning a list of lists with the given number of items. A second parameter can be provided and used to fill in missing items.',
            'capitalize_filter' => 'The `capitalize` filter capitalizes a value. The first character will be uppercase, all others lowercase.',
            'column_filter' => 'The `column` filter returns the values from a single column in the input array.',
            'convert_encoding_filter' => 'The `convert_encoding` filter converts a string from one encoding to another. The first argument is the expected output charset and the second one is the input charset.',
            'country_name_filter' => 'The `country_name` filter returns the country name given its ISO-3166 two-letter code.',
            'currency_name_filter' => 'The `currency_name` filter returns the currency name given its three-letter code.',
            'currency_symbol_filter' => 'The `currency_symbol` filter returns the currency symbol given its three-letter code.',
            'data_uri_filter' => 'The `data_uri` filter generates a URL using the data scheme as defined in RFC 2397.',
            'date_filter' => 'The `date` filter formats a date to a given format.',
            'date_modify_filter' => 'The `date_modify` filter modifies a date with a given modifier string.',
            'default_filter' => 'The `default` filter returns the passed default value if the value is undefined or empty, otherwise the value of the variable.',
            'escape_filter' => 'The `escape` filter escapes a string using strategies that depend on the context.',
            'filter_filter' => 'The `filter` filter filters elements of a sequence or a mapping using an arrow function. The arrow function receives the value of the sequence or mapping.',
            'first_filter' => 'The `first` filter returns the first "element" of a sequence, a mapping, or a string.',
            'format_filter' => 'The `format` filter formats a given string by replacing the placeholders (placeholders follows the [sprintf](https://www.php.net/sprintf) notation).',
            'format_currency_filter' => 'The `format_currency` filter formats a number as a currency.',
            'join_filter' => 'The `join` filter returns a string which is the concatenation of the items of a sequence',
            'json_encode_filter' => 'The `json_encode` filter returns the JSON representation of a value.',
            'keys_filter' => 'The `keys` filter returns the keys of an array. It is useful when you want to iterate over the keys of an array.',
            'last_filter' => 'The `last` filter returns the last "element" of a sequence, a mapping, or a string.',
            'length_filter' => 'The `length` filter returns the number of items of a sequence or mapping, or the length of a string.',
            'lower_filter' => 'The `lower` filter converts a value to lowercase.',
            'map_filter' => 'The `map` filter applies an arrow function to the elements of a sequence or a mapping. The arrow function receives the value of the sequence or mapping.',
            'merge_filter' => 'The `merge` filter merges an array with another array.',
            'nl2br_filter' => 'The `nl2br` filter inserts HTML line breaks before all newlines in a string.',
            'number_format_filter' => 'The `number_format` filter formats numbers. It is a wrapper around PHP’s [number_format](https://www.php.net/number_format) function.',
            'reduce_filter' => 'The `reduce` filter iteratively reduces a sequence or a mapping to a single value using an arrow function, so as to reduce it to a single value. The arrow function receives the return value of the previous iteration and the current value of the sequence or mapping.',
            'replace_filter' => 'The `replace` filter formats a given string by replacing the placeholders.',
            'reverse_filter' => 'The `reverse` filter reverses a sequence, a mapping, or a string.',
            'round_filter' => 'The `round` filter rounds a number to a given precision.',
            'slice_filter' => 'The `slice` filter extracts a slice of a sequence, a mapping, or a string.',
            'sort_filter' => 'The `sort` filter sorts an array.',
            'spaceless_filter' => 'Use the `spaceless` filter to remove whitespace between HTML tags, not whitespace within HTML tags or whitespace in plain text.',
            'split_filter' => 'The `split` filter splits a string by the given delimiter and returns a list of strings.',
            'striptags_filter' => 'The `striptags` filter strips SGML/XML tags and replace adjacent whitespace by one space.',
            'title_filter' => 'The `title` filter returns a titlecased version of the value. Words will start with uppercase letters, all remaining characters are lowercase.',
            'trim_filter' => 'The `trim` filter strips whitespace (or other characters) from the beginning and end of a string.',
            'upper_filter' => 'The `upper` filter converts a value to uppercase.',
            'url_encode_filter' => 'The `url_encode` filter percent encodes a given string as URL segment or an array as query string.',
            'page_filter' => 'The `page` filter creates a link to a page using a page file name, without an extension, as a parameter.',
            'theme_filter' => 'The `theme` filter returns an address relative to the active theme path of the website. ',
            'app_filter' => 'The `app` filter returns an address relative to the public path of the website.',
            'media_filter' => 'The `media` filter returns an address relative to the public path of the [media manager library](https://octobercms.com/docs/cms/mediamanager). ',
            'md_filter' => 'The `md` filter converts the value from Markdown to HTML format.',
            'raw_filter' => 'The `raw` filter marks the value as being "safe", which means that a variable will not be escaped if `raw` is the last filter applied to it.',
        ],
    ],
];
