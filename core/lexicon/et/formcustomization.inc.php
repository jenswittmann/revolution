<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Tegevus';
$_lang['action_desc'] = 'Tegevus millele see reegel kehtib.';
$_lang['activate'] = 'Aktiveeri';
$_lang['constraint'] = 'Constraint';
$_lang['constraint_class'] = 'Constraint Class';
$_lang['constraint_class_desc'] = 'Valikuline. Kui määratud koos Constraint Väljaga ja Constraint valikutega kasutab see reegel constrainte, mis määratud.';
$_lang['constraint_desc'] = 'Valikuline. Constraint Välja väärtus, mille vastu kontrollida.';
$_lang['constraint_field'] = 'Constraint Väli';
$_lang['constraint_field_desc'] = 'Valikuline. Väli, mille kontrollimisel seda constrainti tuleks kasutada.';
$_lang['constraint_incomplete_constraint_err'] = 'To apply constraints, the Constraint must be specified for this rule to work properly.';
$_lang['constraint_incomplete_constraint_warn'] = 'Set #%d in the Form Customization profile named “%s” may not work as expected because a Constraint Field was set but the Constraint is missing.';
$_lang['constraint_incomplete_field_err'] = 'To apply constraints, the Constraint Field must be specified for this rule to work properly.';
$_lang['constraint_incomplete_field_warn'] = 'Set #%d in the Form Customization profile named “%s” may not work as expected because a Constraint was set but the Constraint Field is missing.';
$_lang['containing_panel'] = 'Containimise Paneel';
$_lang['containing_panel_desc'] = 'Contain vorm Paneeli ID milles väli asub. See on mõnikord vajalik kindlatele reeglitele, nii süsteem teab milline vorm või paneel on.';
$_lang['deactivate'] = 'Deaktiveeri';
$_lang['default_value'] = 'Vaike-väärtus';
$_lang['fc.action_create'] = 'Loo Resource';
$_lang['fc.action_update'] = 'Edit Resource';
$_lang['fc.action_resource_wildcard'] = 'Create & Edit Resource';
$_lang['field'] = 'Väli';
$_lang['field_desc'] = 'See on väli mid mõjutada. See võib olla ka tab või TV. Kui see on TV. siis palun määra sellises formaadis: "tv#", kus " on TV ID.';
$_lang['field_default'] = 'Välja Vaikimisi Väärtus';
$_lang['field_label'] = 'Välja nimi';
$_lang['field_visible'] = 'Väli Nähtav';
$_lang['fields'] = 'Väljad';
$_lang['file'] = 'File';
$_lang['filter_by_action'] = 'Filtreeri tegevuse järgi...';
$_lang['filter_by_rule_type'] = 'Filtreeri reegli järgi...';
$_lang['for_parent'] = 'Parentile';
$_lang['for_parent_desc'] = 'Valige see, kui soovite, et see reegel kehtiks parentile. Kasuta ainult Ressurssidega või objektidega, millel on `parent` väli. Kasulik Ressurssi "loo" lehel.';
$_lang['form_customization_msg'] = 'Here is a list of currently applied Rules. More information on Rules and Form Customization can be found <a href="https://docs.modx.com/3.x/en/building-sites/client-proofing/form-customization" target="_blank">here</a>. Please note that improper Rules might cause problems with your MODX Revolution installation. Inactive Rules are faded gray.';
$_lang['form_rules'] = 'Vormi reeglid';
$_lang['label'] = 'Tiitel';
$_lang['original_value'] = 'Originaal väärtus';
$_lang['profile'] = 'Profiil';
$_lang['profile_err_nfs'] = 'Vormi kohandamise Profiili ID-ga [[+id]] ei leitud.';
$_lang['profile_err_ns'] = 'Vormi kohandamise Profiili ei olnud määratud!';
$_lang['profile_err_remove'] = 'An error occurred while trying to delete the Profile.';
$_lang['profile_err_save'] = 'Tekkis viga Profiili salvestamisel.';
$_lang['profile_msg'] = 'Here you can specify Sets for this Profile. A Set is a collection of Rules that apply for a given page (Edit or Create Resource). They can also be restricted to certain Templates, or other field values on the Resource. Constraints for the Create Resource Sets will execute based on the parent of the newly created Resource\'s value.';
$_lang['profile_remove_confirm'] = 'Are you sure you want to completely delete this Profile? This is irreversible.';
$_lang['profile_remove_multiple_confirm'] = 'Are you sure you want to completely delete these Profiles? This is irreversible.';
$_lang['profile_usergroup_err_ae'] = 'See Kasutaja Grupp on juba määratud sellele Profiilile!';
$_lang['profile_usergroups_msg'] = 'Siit saate määrata Kasutaja Gruppe, mis kasutavad seda Profiili. Kui Kasutaja Gruppe ei ole määratud, siis kõik Kasutajad saavad kasutada seda profiili.';
$_lang['profiles'] = 'Vormi Kohandamise Profiilid';
$_lang['profiles_msg'] = 'Siin on nimekiri Vormi Kohendamise Profiilidest. Profiilid saavad sisaldada mitmeid Vormide Kohandamise Reegleid ja saavad olla aktiived ja mitte-aktiivsed. Neid saab sammuti konfigureerida selliselt, et nad kehtiksid teatud Kasutaja Gruppidele.';
$_lang['rank'] = 'Rank';
$_lang['rank_desc'] = 'Järjekord kuidas Reegel käivitatakse. Madalam number tähendab, et see käivitatakse varem.';
$_lang['region'] = 'Region';
$_lang['regions'] = 'Regions';
$_lang['rule'] = 'Reegel';
$_lang['rule_create'] = 'Loo Reegel';
$_lang['rule_desc'] = 'Reegli tüüp, mis sellel väljal kasutatakse.';
$_lang['rule_description_desc'] = 'Valikuline. Reegli kirjeldus.';
$_lang['rule_err_ae'] = 'Reegel juba eksisteerib selle välja jaoks.';
$_lang['rule_err_duplicate'] = 'Tekkis viga selle Reegli dubleerimisel.';
$_lang['rule_err_nf'] = 'Reeglit ei leitud.';
$_lang['rule_err_ns'] = 'Reeglit ei olnud määratud.';
$_lang['rule_err_remove'] = 'An error occurred while trying to delete the rule.';
$_lang['rule_err_save'] = 'Tekkis viga reegli salvestamisel.';
$_lang['rule_remove'] = 'Eemalda Reegel';
$_lang['rule_remove_confirm'] = 'Are you sure you want to delete this Rule?';
$_lang['rule_remove_multiple'] = 'Eemalda Mitu Reeglit';
$_lang['rule_remove_multiple_confirm'] = 'Are you sure you want to delete these Rules? This is irreversible.';
$_lang['rule_update'] = 'Edit Rule';
$_lang['rule_value_desc'] = 'Väärtus, mis määratakse Reeglis.';
$_lang['rules'] = 'Reeglid';
$_lang['set'] = 'Set';
$_lang['set_and_fields'] = 'Kogu Informatsioon ja Väljad';
$_lang['set_change_template'] = 'Muuda Kogu Templatet';
$_lang['set_change_template_confirm'] = 'Olete kindel, et soovite seda teha? See muudab Templatet, millele need Reeglid kehtivad. Kui nii, siis MODX salvestab muutused ennem lehe taaslaadmist, et uuendada uued TV-d (Template Muutujaid) uuel Templatel.';
$_lang['set_constraint_field_desc'] = 'Määrates Piirang välja, takistab reeglitel selles Kogus käivitamise, kui just see väli sellel Ressurssil on samaväärtusega mis on "piirangu" väärtus.';
$_lang['set_constraint_desc'] = 'Määra välja väärtus (näidatud ülal), et piirata reegleid sellest Kogust käivitamast, kui just Ressurssile on see sama väärtus määratud piirang väljas.';
$_lang['set_err_nfs'] = 'Ühtegi Kogu ID-ga [[+id]] ei leitud';
$_lang['set_err_ns'] = 'Kogu ei olnud määratud.';
$_lang['set_fields_msg'] = 'Here you can adjust the fields for this page, including their visibility, labels and default values. Just double-click on a row to edit its value. Leave a field empty to use the default setting.<br>Please note: when hiding an element inside this profile, it will be hidden in overlapping profiles too (even if Visible is checked).';
$_lang['set_import_err_upload'] = 'An error occurred while trying to find the XML file. Please specify a valid file.';
$_lang['set_import_err_xml'] = 'Tekkis viga XML faili importimisel. Palun olge kindel, et kasutasite kehtivat Vormide Kohandamise Kogu XML faili.';
$_lang['set_import_msg'] = 'Valige XML fail, millest importida Vormide Kohandamise Kogu. See peab olema korrektne XML Vormide Kohandamise formaadis.';
$_lang['set_import_template_err_nf'] = 'Template not found while import Form Customization Set.';
$_lang['set_msg'] = 'Here you can edit what fields, tabs and TVs show for this page, as well as their labels and default values. Just double-click on a column to edit its value. You can also use the tab key to progress through the grid. Leave a field blank to use the default setting.';
$_lang['set_remove_confirm'] = 'Are you sure you want to permanently delete this set? This is irreversible.';
$_lang['set_remove_multiple_confirm'] = 'Are you sure you want to permanently delete these sets? This is irreversible.';
$_lang['set_tab_err_ae'] = 'Tab sellise ID-ga juba eksiteerib. Palun määrake teine.';
$_lang['set_tabs_msg'] = 'Here you adjust the tabs and regions for this page, including their visibility and title. Just double-click on a row to edit its value. Leave a field empty to use the default setting.<br>Please note: when hiding an element inside this profile, it will be hidden in overlapping profiles too (even if Visible is checked).';
$_lang['set_template_desc'] = 'Valides Template limiteerite reegleid selles Kogus käivitamast, kui just vastaval Ressurssil on määratud Template.';
$_lang['set_tvs_msg'] = 'Here you can set visibility, labels, default values and the tabs they reside in by double-clicking on the row in the grid. Note: If you move a <abbr title="Template Variable">TV</abbr> to another Region, you can adjust the order of the TV in the "Region Rank" field. Leave a field empty to use the default setting.';
$_lang['sets'] = 'Vormide Kohandamise Kogud';
$_lang['simplexml_err_nf'] = 'MODX nõuab SimpleXML PHP laiendust, et kasutada seda võimalust. Palun olge kindel, et see laiendus on installitud enneb kui jätkate.';
$_lang['tab'] = 'Tab';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'Tab Nimi';
$_lang['tab_title'] = 'Tiitel';
$_lang['tab_rank'] = 'Tab Tähtsus';
$_lang['tab_remove_confirm'] = 'Olete kindel, et soovite eemaldada selle tabi?';
$_lang['tab_visible'] = 'Tab Nähtav';
$_lang['tabs'] = 'Tabid';
$_lang['tv'] = 'TV';
$_lang['tv_default'] = 'TV Vaikimisi Väärtus';
$_lang['tv_label'] = 'TV Nimi';
$_lang['tv_name'] = 'Nimi';
$_lang['tv_move'] = 'Liiguta TV Tab-i';
$_lang['tv_visible'] = 'TV Nähtav';
$_lang['tvs'] = 'Template Variables';
$_lang['usergroup'] = 'Kasutaja Grupp';
$_lang['usergroup_create'] = 'Create User Group';
$_lang['usergroup_desc'] = 'Valikuline. Kui määratud, kehtib see reegel ainult kasutajatele kes on selles määratud Kasutaja Grupis.';
$_lang['usergroup_remove'] = 'Delete User Group From Profile';
$_lang['usergroup_remove_confirm'] = 'Olete kindel, et soovite, et see Profiil ei oleks enam kehtiv Kasutajatele, kes on selle Kasutaja Grupis?';
$_lang['usergroups'] = 'Kasutaja Grupid';
$_lang['visible'] = 'Nähtav';
$_lang['xmlwriter_err_nf'] = 'MODX nõuab XMLWriter PHP laiendust, et kasutada seda võimaust. Palun olge kindel, et see laiendus on installitud, ennem kui jätkate.';
