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
$_lang['add_moduser_classkey'] = 'أضاف حقل ال class_key لدعم مشتقات الموديوزر.';
$_lang['added_cachepwd'] = 'أضاف حقل كاشبيود مفقود في اصدارت الرفيلوشون المبكرة.';
$_lang['added_content_ft_idx'] = 'أضاف`content_ft_idx`جديدة ذات فهرس نص كامل في الحقول `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'تحديد السماح بالقيمة null ل \'class]]`.`properties+]]`.';
$_lang['alter_activeuser_action'] = 'تعديل الحقل modActiveUser
 \'action\' للسماح بعلامات أحداث اطول.';
$_lang['alter_usermessage_messageread'] = 'تغيير الحقل  modUserMessage  
`messageread\' ل \'read\'.';
$_lang['alter_usermessage_postdate'] = 'تغيير الحقل modUserMessage
\'postdate\' من نمط INT إلى نمط DATETIME وإلى الاسم \'date_sent\'.';
$_lang['alter_usermessage_subject'] = 'تغيير  الحقل modUserMessage
\'subject\' من نمط (VARCHAR(60 إلى (VARCHAR(255.';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'إزالة السياق الرابط ACLs.';
$_lang['connector_acls_not_removed'] = 'لا يمكن إزالة السياق الرابط ACLs.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'لا يمكن إزالة السياق الرابط.';
$_lang['data_remove_error'] = 'حدث خطأ أثناء إزالة البيانات من أجل فئة \'[[class+]]\'.';
$_lang['data_remove_success'] = 'إزالة البيانات بنجاح من الجدول من أجل الفئة \'[[class+]]\'.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'تغيير modLexiconEntry
\'createdon\' إلى السماح بقيمة NULL.';
$_lang['lexiconentry_focus_alter'] = 'تغيير modLexiconEntry
\'focus\' من نمط (VARCHAR(100 إلى نمط (INT(10.';
$_lang['lexiconentry_focus_alter_int'] = 'ترقية بيانات عمود modLexiconEntry
\'focus\' من string الى مفتاح خارجي جديد من نمط int من  modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'عمود modLexiconFocus
\'id\' المضاف.';
$_lang['lexiconfocus_add_pk'] = 'المفتاح الرئيسي modLexiconFocus المضاف إلى العمود \'id\'.';
$_lang['lexiconfocus_alter_pk'] = 'تغيير  modLexiconFocus
\'name\' من مفتاح رئيسي إلى مفتاح فريد';
$_lang['lexiconfocus_drop_pk'] = 'إسقاط المفتاح الرئيسي modLexiconFocus.';
$_lang['menu_remove_success'] = 'Menu item `[[+text]]` removed.';
$_lang['menu_remove_failed'] = 'Menu item `[[+text]]` could not be removed.';
$_lang['menu_update_success'] = 'Menu item `[[+text]]` updated.';
$_lang['menu_update_failed'] = 'Menu item `[[+text]]` could not be updated.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'إعادة تسمية الجدول \'[[old+]]\' إلى \'[[new+]]\'.';
$_lang['remove_fulltext_index'] = 'إزالة فهرس النص الكامل \'[[index+]]\'.';
$_lang['systemsetting_xtype_fix'] = 'تم اصلاح انماط xtypes بنجاح من أجل modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'تعديل عمود \'manifest\' إلى نص من نص متوسط من أجل `[[class+]]`.';
$_lang['update_closure_table'] = 'تحديث إغلاق جدول البيانات لفئة \'[[class+]]\'.';
$_lang['update_table_column_data'] = 'تحديث البيانات في العمود [[column+]] للجدول [[table+]] 
( [[class+]] )';
$_lang['iso_country_code_converted'] = 'تم تحويل أسماء المستخدمين الشخصية القطرية إلى رموز ISO بنجاح.';
$_lang['legacy_cleanup_complete'] = 'اكتملت عملية التخلص من الملفات القديمة.';
$_lang['legacy_cleanup_count'] = 'تم إزالة ملف [[+files]] و [[+folders]] مجلد.';
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
