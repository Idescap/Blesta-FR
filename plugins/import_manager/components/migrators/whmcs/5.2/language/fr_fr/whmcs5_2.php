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

$lang['Whmcs5_2.!error.host.invalid'] = "L'hôte de base de données est requis.";
$lang['Whmcs5_2.!error.database.invalid'] = "Le nom de la base de données est requis.";
$lang['Whmcs5_2.!error.user.invalid'] = "L'utilisateur de base de données est requis.";
$lang['Whmcs5_2.!error.pass.invalid'] = "Le mot de passe de la base de données est requis.";
$lang['Whmcs5_2.!error.key.invalid'] = "Une  clé AES valide est requise.";
$lang['Whmcs5_2.!error.import'] = "L'importation est terminée mais les erreurs suivantes se sont produites:";
$lang['Whmcs5_2.!notice.gmp'] = "L'extension'gmp' n'a pas été trouvée. Cette extension est recommandée pour améliorer les performances et améliorera le processus d'importation. Vous pouvez continuer sans cette extension mais le processus d'importation peut être beaucoup plus lent.";
$lang['Whmcs5_2.settings.host'] = "Hôte de base de données";
$lang['Whmcs5_2.settings.database'] = "Nom de la base de données";
$lang['Whmcs5_2.settings.user'] = "Utilisateur de base de données";
$lang['Whmcs5_2.settings.pass'] = "Mot de passe de base de données";
$lang['Whmcs5_2.settings.key'] = "Hachage de chiffrement CC";
$lang['Whmcs5_2.settings.key.info'] = "Il s'agit de la clé de chiffrement utilisée par WHMCS pour chiffrer divers bits de données. Vous le trouverez dans votre fichier WHMCS configuration.php.";
$lang['Whmcs5_2.settings.balance_credit'] = "Transactions auto-équilibrées pour correspondre aux crédits du client dans WHMCS";
$lang['Whmcs5_2.settings.balance_credit.info'] = "Si cette case est cochée, une transaction ou une facture sera générée pour garantir que le crédit client dans Blesta correspond à celui défini pour le client dans WHMCS. Cela est nécessaire car WHMCS ne comptabilise pas correctement les crédits du client.";
$lang['Whmcs5_2.settings.enable_debug'] = "Activer le débogage";
$lang['Whmcs5_2.configuration.create_packages_true'] = "Créer automatiquement les forfaits nécessaires lors de l'importation";
$lang['Whmcs5_2.configuration.create_packages_false'] = "Mapper manuellement les forfaits";
$lang['Whmcs5_2.configuration.local_package'] = "Forfait local";
$lang['Whmcs5_2.configuration.remote_package'] = "Forfait distant";
$lang['Whmcs5_2.configuration.no_local_packages'] = "Vous devez créer des forfaits avant de pouvoir les mapper.";
?>