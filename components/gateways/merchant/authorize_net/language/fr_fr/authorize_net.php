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

$lang['Authorize_net.name'] = "Authorize.Net";
$lang['Authorize_net.login_id'] = "ID de connexion";
$lang['Authorize_net.transaction_key'] = "Clé de transaction";
$lang['Authorize_net.api'] = "API de paiement";
$lang['Authorize_net.test_mode'] = "Mode de test";
$lang['Authorize_net.apis_aim'] = "AIM (par défaut)";
$lang['Authorize_net.apis_cim'] = "CIM (doit être activée par Authorize.Net)";
$lang['Authorize_net.validation_mode'] = "Mode de validation du compte de paiement";
$lang['Authorize_net.validation_note'] = "Ceci contrôle quel type de validation est effectué quand un compte de paiement est stockée en utilisant CIM. \"Aucun\" n'effectue aucune validation supplémentaire. \"Test\" émet une opération de test qui ne figure pas sur la déclaration du client, mais va générer un courriel au commerçant. \"Live\" traite une transaction \$ 0,00 ou 0,01 \$ qui est immédiatement annulée. Consultez votre fournisseur de compte marchand avant de paramétrer cette valeur à 'Live' puisque vous pourriez être soumis à des frais.";
$lang['Authorize_net.validation_modes_none'] = "Aucun";
$lang['Authorize_net.validation_modes_test'] = "Test";
$lang['Authorize_net.validation_modes_live'] = "En direct";
$lang['Authorize_net.!error.login_id.format'] = "L'identifiant de connexion ne doit pas dépasser 20 caractères ou être vide. ";
$lang['Authorize_net.!error.transaction_key.format'] = "La clé de transaction doit être de 16 caractères de long. ";
$lang['Authorize_net.!error.test_mode.valid'] = "Mode test doit être réglée sur \"vrai\" si fourni.";
$lang['Authorize_net.test_mode_note'] = "La fonction de mode de test est uniquement pris en charge par AIM. Pour tester les transactions CIM, vous devez activer le mode de test à partir de votre compte Authorize.net.";
$lang['Authorize_net.dev_mode'] = "Mode développeur";
$lang['Authorize_net.dev_mode_note'] = "L'activation de cette option va envoyer les transactions à l'environnement de développement d'Authorize.net. Vous devez avoir un compte de développement et test pour être en mesure d'utiliser cet environnement. ";
$lang['Authorize_net.!error.dev_mode.valid'] = "Mode développeur doit être réglé sur \"vrai\" si on leur donne.";
$lang['Authorize_net.!error.card_number.missing'] = "La date d’expiration ne peut être mise à jour sans le numéro complet de la carte.";
?>