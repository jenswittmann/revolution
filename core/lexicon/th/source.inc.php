<?php
/**
 * Sources English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'สิทธิ์การเข้าถึง';
$_lang['base_path'] = 'เส้นทางหลัก';
$_lang['base_path_relative'] = 'เป็นเส้นทางหลักแบบสัมพัทธ์หรือไม่?';
$_lang['base_url'] = 'URL หลัก';
$_lang['base_url_relative'] = 'เป็น URL หลักแบบสัมพัทธ์หรือไม่?';
$_lang['minimum_role'] = 'บทบาทขั้นต่ำ';
$_lang['path_options'] = 'ตัวเลือกเส้นทาง';
$_lang['policy'] = 'นโยบาย';
$_lang['source'] = 'แหล่งข้อมูลมีเดีย';
$_lang['source_access_add'] = 'เพิ่มกลุ่มผู้ใช้';
$_lang['source_access_remove'] = 'Delete Access';
$_lang['source_access_remove_confirm'] = 'Are you sure you want to delete Access to this Source for this User Group?';
$_lang['source_access_update'] = 'Edit Access';
$_lang['source_description_desc'] = 'คำอธิบายสั้นๆของแหล่งข้อมูลมีเดีย';
$_lang['source_err_ae_name'] = 'แหล่งข้อมูลมีเดียชื่อนี้มีอยู่แล้ว! โปรดระบุชื่อใหม่';
$_lang['source_err_nf'] = 'ไม่พบแหล่งข้อมูลมีเดีย!';
$_lang['source_err_init'] = 'Could not initialize "[[+source]]" Media Source!';
$_lang['source_err_nfs'] = 'ไม่มีแหล่งข้อมูลมีเดียที่สามารถค้นหาด้วยไอดี: [[+id]]';
$_lang['source_err_ns'] = 'กรุณาระบุแหล่งข้อมูลมีเดีย';
$_lang['source_err_ns_name'] = 'กรุณาระบุชื่อสำหรับแหล่งข้อมูลมีเดีย';
$_lang['source_name_desc'] = 'ชื่อของแหล่งข้อมูลมีเดีย';
$_lang['source_properties.intro_msg'] = 'จัดการคุณสมบัติสำหรับแหล่งข้อมูลข้างล่างนี้';
$_lang['source_remove_confirm'] = 'Are you sure you want to delete this Media Source? This might break any TVs you have assigned to this source.';
$_lang['source_remove_multiple_confirm'] = 'คุณแน่ใจว่าต้องการลบเหล่าแหล่งข้อมูลมีเดียนี้หรือไม่? นี่อาจจะสร้างความเสียหายให้กับตัวแปรแม่แบบใดๆที่คุณกำหนดมันให้กับเหล่าแหล่งข้อมูลนี้';
$_lang['source_type'] = 'ประเภทแหล่งข้อมูล';
$_lang['source_type_desc'] = 'ประเภทหรือไดรเวอร์ของแหล่งข้อมูลมีเดีย แหล่งข้อมูลจะใช้ไดรเวอร์นี้เพื่อเชื่อมต่อเมื่อรวบรวมข้อมูลของมัน ตัวอย่าง: ระบบไฟล์จะดึงไฟล์จากระบบไฟล์เดียวกัน เช่น S3 จะรับไฟล์จาก S3 bucket';
$_lang['source_type.file'] = 'ระบบไฟล์';
$_lang['source_type.file_desc'] = 'A filesystem-based แหล่งข้อมูลที่ใช้ระะบไฟล์ที่นำทางไฟล์ของเซิร์ฟเวอร์ของคุณ';
$_lang['source_type.s3'] = 'Amazon S3';
$_lang['source_type.s3_desc'] = 'Navigates an Amazon S3 bucket';
$_lang['source_type.ftp'] = 'File Transfer Protocol';
$_lang['source_type.ftp_desc'] = 'Navigates an FTP remote server.';
$_lang['source_types'] = 'ประเภทแหล่งข้อมูล';
$_lang['source_types.intro_msg'] = 'นี่คือรายการทั้งหมดของประเภทแหล่งข้อมูลมีเดียที่ติดตั้งบน MODX นี้';
$_lang['source.access.intro_msg'] = 'คุณสามารถจำกัดแหล่งข้อมูลมีเดียเพื่อระบุกลุ่มผู้ใช้และการประยุกต์นโยบายสำหรับกลุ่มผู้ใช้เหล่านั้น แหล่งข้อมูลมีเดียที่ไม่มีการแนบกลุ่มผู้ใช้ใดเลยจะสามารถใช้ได้กับทุกผู้ใช้ที่เป็นเมเนเจอร์';
$_lang['sources'] = 'แหล่งข้อมูลมีเดีย';
$_lang['sources.intro_msg'] = 'จัดการแหล่งข้อมูลมีเดียทั้งหมดของคุณได้ตรงนี้';
$_lang['user_group'] = 'กลุ่มผู้ใช้';

/* file source type */
$_lang['allowedFileTypes'] = 'allowedFileTypes';
$_lang['prop_file.allowedFileTypes_desc'] = 'ถ้าตั้งค่านี้ จะเป็นการจำกัดไฟล์ที่จะแสดงบนส่วนขยายที่ระบุเท่านั้น โปรดระบุในรายการที่คั่นด้วยเครื่องหมายจุลภาคโดยไม่ต้องมี .';
$_lang['basePath'] = 'basePath';
$_lang['prop_file.basePath_desc'] = 'The file path to point the Source to, for example: assets/images/<br>The path may depend on the "basePathRelative" parameter';
$_lang['basePathRelative'] = 'basePathRelative';
$_lang['prop_file.basePathRelative_desc'] = 'ถ้าการตั้งเส้นทางหลักข้างบนไม่เป็นแบบสัมพัทธ์ไปยังเส้นทางการติดตั้ง MODX ให้ตั้งค่านี้เป็นไม่';
$_lang['baseUrl'] = 'baseUrl';
$_lang['prop_file.baseUrl_desc'] = 'The URL that this source can be accessed from, for example: assets/images/<br>The path may depend on the "baseUrlRelative" parameter';
$_lang['baseUrlPrependCheckSlash'] = 'baseUrlPrependCheckSlash';
$_lang['prop_file.baseUrlPrependCheckSlash_desc'] = 'ถ้าค่าเป็นจริง MODX จะเพิ่ม baseUrl เข้าไปส่วนบนเท่านั้นถ้าไม่มีเครื่องหมายทับ (/) ถูกพบที่จุดเริ่มต้นของ URL เมื่อเรนเดอร์ตัวแปรแม่แบบ มีประโยชน์สำหรับการตั้งค่าตัวแปรแม่แบบที่อยู่นอก baseUrl';
$_lang['baseUrlRelative'] = 'baseUrlRelative';
$_lang['prop_file.baseUrlRelative_desc'] = 'ถ้าการตั้ง URL หลักข้างบนไม่เป็นแบบสัมพัทธ์ไปยัง URL การติดตั้ง MODX ให้ตั้งเป็นไม่';
$_lang['imageExtensions'] = 'imageExtensions';
$_lang['prop_file.imageExtensions_desc'] = 'รายการคั่นด้วยเครื่องหมายจุลภาคของนามสกุลไฟล์ที่จะทำเป็นรูปภาพ MODX จะพยายามสร้างรูปขนาดย่อของไฟล์นามสกุลนี้';
$_lang['skipFiles'] = 'skipFiles';
$_lang['prop_file.skipFiles_desc'] = 'รายการคั่นด้วยเครื่องหมายจุลภาค MODX จะข้ามและซ่อนไฟล์และโฟลเดอร์ที่ตรงกับพวกเหล่านี้';
$_lang['skipExtensions'] = 'skipExtensions';
$_lang['prop_file.skipExtensions'] = 'A comma-separated list of extensions. MODX will not show files that match any of these.';
$_lang['thumbnailQuality'] = 'thumbnailQuality';
$_lang['prop_file.thumbnailQuality_desc'] = 'คุณภาพของการเรนเดอร์รูปขนาดย่อในอัตราส่วนจาก 0-100';
$_lang['thumbnailType'] = 'thumbnailType';
$_lang['prop_file.thumbnailType_desc'] = 'ประเภทรูปภาพเพื่อจะเรนเดอร์รูปขนาดย่อเป็น';
$_lang['prop_file.visibility_desc'] = 'Default visibility for new files and folders.';
$_lang['no_move_folder'] = 'The Media Source driver does not support moving of folders at this time.';

/* s3 source type */
$_lang['bucket'] = 'Bucket';
$_lang['prop_s3.bucket_desc'] = 'S3 Bucket เพื่อเรียกข้อมูลของคุณ';
$_lang['prop_s3.key_desc'] = 'คีย์ของ Amazon สำหรับการรับรองความถูกต้องให้ bucket';
$_lang['prop_s3.imageExtensions_desc'] = 'รายการคั่นด้วยเครื่องหมายจุลภาคของนามสกุลไฟล์ที่จะทำเป็นรูปภาพ MODX จะพยายามสร้างรูปขนาดย่อของไฟล์นามสกุลนี้';
$_lang['prop_s3.secret_key_desc'] = 'คีย์ลับของ Amazon สำหรับการรับรองความถูกต้องให้ bucket';
$_lang['prop_s3.skipFiles_desc'] = 'รายการคั่นด้วยเครื่องหมายจุลภาค MODX จะข้ามและซ่อนไฟล์และโฟลเดอร์ที่ตรงกับพวกเหล่านี้';
$_lang['prop_s3.thumbnailQuality_desc'] = 'คุณภาพของการเรนเดอร์รูปขนาดย่อในอัตราส่วนจาก 0-100';
$_lang['prop_s3.thumbnailType_desc'] = 'ประเภทรูปภาพเพื่อจะเรนเดอร์รูปขนาดย่อเป็น';
$_lang['prop_s3.url_desc'] = 'URL ของ Amazon S3 instance';
$_lang['prop_s3.endpoint_desc'] = 'Alternative S3-compatible endpoint URL, e.g., "https://s3.<region>.example.com". Review your S3-compatible provider’s documentation for the endpoint location. Leave empty for Amazon S3';
$_lang['prop_s3.region_desc'] = 'Region of the bucket. Example: us-west-1';
$_lang['prop_s3.prefix_desc'] = 'Optional path/folder prefix';
$_lang['prop_s3.no_check_bucket_desc'] = 'If set, don\'t attempt to check the bucket exists. It can be needed if the access key you are using does not have bucket creation/list permissions.';
$_lang['s3_no_move_folder'] = 'ไดรเวอร์ของ S3 ไม่สนับสนุนการย้ายโฟลเดอร์ในเวลานี้';

/* ftp source type */
$_lang['prop_ftp.host_desc'] = 'Server hostname or IP address';
$_lang['prop_ftp.username_desc'] = 'Username for authentication. Can be "anonymous".';
$_lang['prop_ftp.password_desc'] = 'Password of user. Leave empty for anonymous user.';
$_lang['prop_ftp.url_desc'] = 'If this FTP is has a public URL, you can enter its public http-address here. This will also enable image previews in the media browser.';
$_lang['prop_ftp.port_desc'] = 'Port of the server, default is 21.';
$_lang['prop_ftp.root_desc'] = 'The root folder, it will be opened after connection';
$_lang['prop_ftp.passive_desc'] = 'Enable or disable passive ftp mode';
$_lang['prop_ftp.ssl_desc'] = 'Enable or disable ssl connection';
$_lang['prop_ftp.timeout_desc'] = 'Timeout for connection in seconds.';

/* file type */
$_lang['PNG'] = 'PNG';
$_lang['JPG'] = 'JPG';
$_lang['GIF'] = 'GIF';
$_lang['WebP'] = 'WebP';
