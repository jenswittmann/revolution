<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'Добавено class_key поле за съпорт на modUser производни.';
$_lang['added_cachepwd'] = 'Добавеното поле cachepwd липсва в ранните издания на Revolution.';
$_lang['added_content_ft_idx'] = 'Добавен нов `content_ft_idx` пълен текстови индекс на полетата `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Фиксиране позволява нула за `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Модифицирано modActiveUser `action` поле за позволяване на етикети с по-дълго действие.';
$_lang['alter_usermessage_messageread'] = 'Променено modUserMessage поле `messageread` на `read`.';
$_lang['alter_usermessage_postdate'] = 'Променено modUserMessage `postdate` поле от INT на DATETIME и с името `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Променено modUserMessage `subject` поле от VARCHAR(60) на VARCHAR(255).';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Премахнат конектор конткест ACLs.';
$_lang['connector_acls_not_removed'] = 'Не може да се премахне конектор контекста ACLs.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Не може да се премахне конектор контекст.';
$_lang['data_remove_error'] = 'Грешка при премахване на данни за клас `[[+class]]`.';
$_lang['data_remove_success'] = 'Успешно премахнати данни от таблица за клас `[[+class]]`.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'Променен modLexiconEntry `createdon` за разрешаване на NULL.';
$_lang['lexiconentry_focus_alter'] = 'Променен  modLexiconEntry `focus` от VARCHAR(100) на INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Актуализирана modLexiconEntry `focus`колона данни от низ в нов int външен ключ от modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Добавена колона modLexiconFocus `id`.';
$_lang['lexiconfocus_add_pk'] = 'Добавен modLexiconFocus PRIMARY KEY към `id` колона.';
$_lang['lexiconfocus_alter_pk'] = 'Променено modLexiconFocus `name` от PRIMARY KEY на UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Отпаднал modLexiconFocus PRIMARY KEY.';
$_lang['menu_remove_success'] = 'Menu item `[[+text]]` removed.';
$_lang['menu_remove_failed'] = 'Menu item `[[+text]]` could not be removed.';
$_lang['menu_update_success'] = 'Menu item `[[+text]]` updated.';
$_lang['menu_update_failed'] = 'Menu item `[[+text]]` could not be updated.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Преименувана таблица `[[+old]]` на `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Премахнат пълен текстови индекс `[[+index]]`.';
$_lang['systemsetting_xtype_fix'] = 'Успешно фиксирани xtypes за modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'Променена колона `manifest` на TEXT от MEDIUMTEXT за `[[+class]]`.';
$_lang['update_closure_table'] = 'Актуализиране на  затворени таблични данни за клас `[[+class]]`.';
$_lang['update_table_column_data'] = 'Актуализирани данни [[+column]] на таблица [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'Successfully converted user profile country names to ISO codes.';
$_lang['legacy_cleanup_complete'] = 'Legacy file clean up complete.';
$_lang['legacy_cleanup_count'] = 'Removed [[+files]] file(s) and [[+folders]] folder(s).';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'System Setting `[[+key]]` removed.';
$_lang['system_setting_cleanup_failed'] = 'System Setting `[[+key]]` could not be removed.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'System Setting `[[+key]]` updated.';
$_lang['system_setting_update_failed'] = 'System Setting `[[+key]]` could not be updated.';
$_lang['system_setting_rename_key_success'] = 'Successfully renamed the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Failed to rename the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
