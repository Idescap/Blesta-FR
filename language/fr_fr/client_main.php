<?php
/**
 * Language definitions. Generated by the Blesta Translator
 * 
 * @package blesta
 * @version 4.4.0
 * @copyright Copyright (c) 2018, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientMain.!success.client_updated'] = "Vos informations de compte ont été mis à jour correctement.";
$lang['ClientMain.!success.invoice_method_updated'] = "Votre méthode de facturation a été mise à jour avec succès. Toutes les factures futures vous seront délivrées via %1\$s."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.!info.invoice_due_title'] = "Bienvenue %1\$s!"; // %1$s is the client's first name
$lang['ClientMain.!info.invoice_due_button'] = "Faire un paiement";
$lang['ClientMain.!info.invoice_due_text'] = "Votre compte a une solde impayé de %1\$s. Veuillez faire un paiement dans les meilleurs délai. "; // %1$s is the total amount due for this client
$lang['ClientMain.!info.invoice_due_other_currencies'] = "Vous avez un solde impayé dans d'autres devises aussi.";
$lang['ClientMain.myinfo.setting_invoices'] = "Vous recevez présentement vos factures par %1\$s."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = "Votre compte n'est configuré pour le paiement automatique.";
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = "Votre compte est paramétré pour des paiements automatiques.";
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = "Nous débitons votre %1\$s terminant en x%2\$s la journée ou le paiement sera du."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = "Nous chargerons votre compte %1\$s se terminant en x%2\$s à la journée due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = "Nous facturerons votre %1\$s se terminant en x%2\$s le jour avant la date due du paiement."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = "Nous porterons les frais à votre compte %1\$s terminant en x%2\$s, la journée avant la date due. "; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = "Nous facturerons votre %1\$s se terminant en x%2\$s %3\$s jours avant la date due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = "Nous débiterons votre compte %1\$s terminant en x%2\$s, %3\$s jours avant la date due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_change'] = "Changer ceci?";
$lang['ClientMain.myinfo.link_editclient'] = "Changer";
$lang['ClientMain.edit.boxtitle_edit'] = "Modifier mon information";
$lang['ClientMain.edit.heading_billing'] = "Information de facturation";
$lang['ClientMain.edit.field_taxid'] = "ID taxe/VATIN";
$lang['ClientMain.edit.field_default_currency'] = "Devise préférée";
$lang['ClientMain.edit.field_invoiceaddress'] = "Adresser les factures à";
$lang['ClientMain.edit.heading_settings'] = "Paramètres additionnels";
$lang['ClientMain.edit.field_language'] = "Langue";
$lang['ClientMain.edit.field_username'] = "Nom d'utilisateur";
$lang['ClientMain.edit.field_new_password'] = "Nouveau mot de passe";
$lang['ClientMain.edit.field_confirm_password'] = "Confirmer le mot de passe";
$lang['ClientMain.edit.field_current_password'] = "Mot de passe actuel";
$lang['ClientMain.edit.field_editsubmit'] = "Mettre à jour mon information";
$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = "Méthode de facturation";
$lang['Clientmain.invoicemethod.field_methodsubmit'] = "Mettre à jour";
$lang['ClientMain.!tooltip.invoice_method_email'] = "Les factures seront envoyées par courriel à l'adresse que nous avons dans nos dossiers.";
$lang['ClientMain.!tooltip.invoice_method_paper'] = "Nous allons imprimer et poster les factures à l'adresse que nous avons au dossier.";
$lang['ClientMain.!tooltip.invoice_method_interfax'] = "Nous allons envoyer automatiquement les factures au numéro de fax que nous avons au dossier. Si vous sélectionnez cette option, s'il vous plaît assurer que nous avons un numéro de fax valide.";
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = "Nous imprimerons automatiquement et enverrons les factures aux adresses que nous avons à nos dossiers. ";
$lang['ClientMain.invoicemethod.text_invoice_method'] = "Votre méthode de facturation est celle qui vous permet de recevoir vos nouvelles factures.";
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = "Crédits:";
$lang['ClientMain.edit.heading_contact'] = "Information de contact";
$lang['ClientMain.edit.heading_authentication'] = "Authentification";
$lang['ClientMain.edit.field_two_factor_mode'] = "Activer l'authentification à deux facteurs";
$lang['ClientMain.edit.two_factor_desc'] = "L'authentification à deux facteurs est une fonction de sécurité dans lequel vous fournissez deux moyens d'identification pour vous connecter à votre compte. Si elle est activée, vous vous connectez à votre compte avec votre nom d'utilisateur et mot de passe et ensuite serez invité à entrer un mot de passe unique.";
$lang['ClientMain.edit.two_factor_instructions'] = "Pour utiliser l'authentification à deux facteurs, vous avez besoin d'un jeton TOTP. Si vous avez un appareil mobile Android, iOS ou Windows, votre téléphone peut agir comme votre jeton et de fournir le One-Time Password nécessaire.";
$lang['ClientMain.edit.two_factor_step1'] = "Télécharger un Authenticator pour votre appareil :";
$lang['ClientMain.edit.two_factor_step2'] = "Ouvrez l'application, et scannez le code QR ci-dessous, ou bien, entrez la clé suivante: %1\$s"; // %1$s is the key
$lang['ClientMain.edit.two_factor_step3'] = "Confirmez votre mot de passe unique (One-Time), puis cliquez sur «Mettre à jour mon information\". Vous serez invité à entrer votre mot de passe la prochaine fois que vous vous connecterez.";
$lang['ClientMain.edit.text_android'] = "Android";
$lang['ClientMain.edit.text_ios'] = "iOS";
$lang['ClientMain.edit.text_windows'] = "Windows";
$lang['ClientMain.edit.field_otp'] = "Mot de passe à usage unique";
$lang['ClientMain.index.page_title'] = "Client #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.myinfo.page_title'] = "Client #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.edit.page_title'] = "Client #%1\$s Modifier mes informations"; // %1$s is the client ID number
$lang['ClientMain.invoicemethod.page_title'] = "Client #%1\$s Méthode de facturation"; // %1$s is the client ID number
$lang['ClientMain.!info.invoice_past_due_button'] = "Payer les arriérés de paiement";
$lang['ClientMain.!info.invoice_due_past_due_text'] = "Votre compte a un solde impayé de %1\$s, dont %2\$s est en souffrance. Veuillez effectuer un paiement dans les plus brefs délais."; // %1$s is the total amount due for this client, %2$s is the total amount past due for this client
$lang['ClientMain.myinfo.client_id'] = "Client #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.!info.service_in_review'] = "Les services suivants sont en attente de révision par le personnel. Une fois approuvés, ils seront activés:";
$lang['ClientMain.!info.service_name'] = "%1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientMain.!info.additional_service'] = "... et 1 service supplémentaire.";
$lang['ClientMain.!info.additional_services'] = "et %1\$s services supplémentaires."; // %1$s is the number of additional services
$lang['ClientMain.edit.field_receive_email_marketing'] = "Je souhaite recevoir des e-mails concernant les nouveaux produits, services et offres.";
?>