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

$lang['ClientAccounts.!success.defaultaccount_updated'] = "Le compte de paiement par défaut a été mis à jour.";
$lang['ClientAccounts.!success.defaultaccount_deleted'] = "Le compte de paiement par défaut a été supprimé.";
$lang['ClientAccounts.!success.account_created'] = "Le compte de paiement a été créé avec succès.";
$lang['ClientAccounts.!success.ccaccount_deleted'] = "Le compte de paiement a été effacé avec succès.";
$lang['ClientAccounts.!success.ccaccount_updated'] = "Le compte de paiement a été mise à jour avec succès.";
$lang['ClientAccounts.!success.achaccount_deleted'] = "Le compte de paiement a été supprimé avec succès.";
$lang['ClientAccounts.!success.achaccount_updated'] = "Le compte de paiement a été mis à jour avec succès.";
$lang['ClientAccounts.!error.account_invalid'] = "Le type de compte de paiement fourni est inactif ou invalide.";
$lang['ClientAccounts.!error.payment_account_type_invalid'] = "Type de compte de paiement invalide.";
$lang['ClientAccounts.!notice.disabled'] = "La possibilité d'ajouter des comptes de paiement est actuellement désactivée.";
$lang['ClientAccounts.!notice.ach_disabled'] = "Les comptes de paiement ACH sont présentement désactivés et ne peuvent être mis à jour.";
$lang['ClientAccounts.!notice.cc_disabled'] = "Les comptes de paiement par carte de crédit sont actuellement désactivés et ne peuvent pas être mis à jour.";
$lang['ClientAccounts.!notice.reenable_autodebit'] = "Les paiements automatiques ont été spécifiquement désactivé pour ce compte, veuillez communiquer avec un membre du personnel pour les réactiver. Vous pouvez sélectionner un compte de paiement par défaut, mais il ne sera pas débitée automatiquement jusqu'à ce qu'il soit réactivé par le personnel.";
$lang['ClientAccounts.!info.account_info'] = "Les comptes de paiement vous permettent de sauvegarder vos informations de paiement et peuvent être utilisés pour payer des factures. Un compte de paiement qui est sélectionné par défaut sera utilisé pour les paiement automatiques récurrents.";
$lang['ClientAccounts.index.page_title'] = "Comptes du client #%1\$s"; // %1$s is the client ID number
$lang['ClientAccounts.index.create_account'] = "Ajouter un compte de paiement";
$lang['ClientAccounts.index.boxtitle_accounts'] = "Compte de paiement:";
$lang['ClientAccounts.index.heading_name'] = "Nom";
$lang['ClientAccounts.index.heading_type'] = "Type";
$lang['ClientAccounts.index.heading_last4'] = "Derniers 4";
$lang['ClientAccounts.index.heading_options'] = "Options";
$lang['ClientAccounts.index.option_edit'] = "Éditer";
$lang['ClientAccounts.index.option_delete'] = "Effacer";
$lang['ClientAccounts.index.type_cc'] = "%1\$s - %2\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)
$lang['ClientAccounts.index.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)
$lang['ClientAccounts.index.confirm_delete'] = "Êtes vous sur d'effacer ce compte de paiement?";
$lang['ClientAccounts.index.field_accountsubmit'] = "Définir comme compte de paiement par défaut";
$lang['ClientAccounts.index.no_results'] = "Vous n'avez aucun compte de paiement.";
$lang['ClientAccounts.add.page_title'] = "Client #%1\$s - Ajouter un compte de paiement"; // %1$s is the client ID number
$lang['ClientAccounts.add.heading_account_type'] = "Type de compte";
$lang['ClientAccounts.add.field_cc_type'] = "Carte de crédit";
$lang['ClientAccounts.add.field_ach_type'] = "ACH";
$lang['ClientAccounts.add.boxtitle_create'] = "Ajouter un compte de paiement";
$lang['ClientAccounts.add.field_nextsubmit'] = "Continuer";
$lang['ClientAccounts.add.field_accountsubmit'] = "Créer un compte";
$lang['ClientAccounts.editach.page_title'] = "Client #%1\$s Modifier le compte ACH"; // %1$s is the client ID number
$lang['ClientAccounts.editach.boxtitle_editach'] = "Modifier le compte ACH";
$lang['ClientAccounts.editach.field_accountsubmit'] = "Modifier le compte";
$lang['ClientAccounts.editcc.page_title'] = "Client # %1\$s Modifier compte de carte de crédit"; // %1$s is the client ID number
$lang['ClientAccounts.editcc.boxtitle_editcc'] = "Entrez le compte de carte de crédit";
$lang['ClientAccounts.editcc.field_accountsubmit'] = "Modifier le compte";
$lang['ClientAccounts.setcontactview.text_none'] = "Aucun";
$lang['ClientAccounts.cc_info.heading_cc'] = "Information de carte de crédit";
$lang['ClientAccounts.cc_info.field_number'] = "Numéro";
$lang['ClientAccounts.cc_info.field_security'] = "Code de sécurité";
$lang['ClientAccounts.cc_info.field_expiration'] = "Date d'expiration";
$lang['ClientAccounts.cc_info.field_savedetails'] = "Sauvegarder le compte";
$lang['ClientAccounts.cc_info.tooltip_code'] = "Le code de sécurité de 3 ou 4 chiffres, normalement indiqué sur l'arrière de la carte.";
$lang['ClientAccounts.ach_info.heading_ach'] = "Information du compte de banque";
$lang['ClientAccounts.ach_info.field_type'] = "Type";
$lang['ClientAccounts.ach_info.field_accountnum'] = "Numéro de compte";
$lang['ClientAccounts.ach_info.field_routingnum'] = "Numéro de routage";
$lang['ClientAccounts.ach_info.field_savedetails'] = "Enregistrer le compte";
$lang['ClientAccounts.!info.no_accounts'] = "Vous n'avez pas actuellement de comptes de paiement. Ajoutez votre premier compte de paiement ci-dessous.";
?>