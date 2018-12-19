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

$lang['Services.!error.key.empty'] = "La clé du champ de service ne doit pas être vide.";
$lang['Services.!error.value.empty'] = "La valeur du champ du service ne doit pas être vide.";
$lang['Services.!error.encrypted.format'] = "Format invalide pour le chiffrage.";
$lang['Services.!error.parent_service_id.exists'] = "ID de service parent invalide.";
$lang['Services.!error.parent_service_id.parent'] = "L'ID de service parent existe déjà en tant qu'enfant d'un autre service.";
$lang['Services.!error.id_format.empty'] = "Aucun format d'ID de facture défini.";
$lang['Services.!error.id_format.length'] = "Le format de l'identifiant des factures ne doit pas excéder 64 caractères.";
$lang['Services.!error.id_value.valid'] = "Impossible de déterminer la valeur du numéro de facture.";
$lang['Services.!error.module_row_id.exists'] = "ID de rangée du module invalide.";
$lang['Services.!error.qty.format'] = "Quantité doit être un nombre.";
$lang['Services.!error.qty.length'] = "La valeur de Quantité ne doit pas dépasser 10 caractères.";
$lang['Services.!error.status.format'] = "Statut invalide.";
$lang['Services.!error.date_added.format'] = "Invalide format Date ajoutée.";
$lang['Services.!error.date_renews.format'] = "Format de date de renouvellement invalide.";
$lang['Services.!error.date_last_renewed.format'] = "le format de date de dernier renouvellement est Invalide ";
$lang['Services.!error.date_suspended.format'] = "Format de la date de suspension invalide.";
$lang['Services.!error.date_canceled.format'] = "Format de date d'annulation invalide.";
$lang['Services.!error.use_module.format'] = "Format de module d'utilisation non valide.";
$lang['Services.!error.fields[][key].empty'] = "Une clé est vide dans les champs de service.";
$lang['Services.!error.fields[][value].empty'] = "Une valeur est vide dans les champs de service.";
$lang['Services.!error.fields[][encrypted].format'] = "Un champ de l'encryption est dans un format invalide";
$lang['Services.getStatusTypes.active'] = "Actif";
$lang['Services.getStatusTypes.canceled'] = "Annulé";
$lang['Services.getStatusTypes.pending'] = "En attente";
$lang['Services.getStatusTypes.suspended'] = "Suspendu";
$lang['Services.!error.coupon_id.valid'] = "Ce coupon ne semble pas valide.";
$lang['Services.!error.invoice_method.valid'] = "Vous devez choisir une méthode de facturation valide.";
$lang['Services.!error.pricing_id.valid'] = "Vous devez choisir un terme valide.";
$lang['Services.!error.date_canceled.valid'] = "Vous devez définir une date valide d'annulation de service.";
$lang['Services.getActions.suspend'] = "Suspendre";
$lang['Services.getActions.unsuspend'] = "Réactiver";
$lang['Services.getActions.cancel'] = "Annuler";
$lang['Services.getActions.schedule_cancel'] = "Annulation de program ";
$lang['Services.!error.package_group_id.exists'] = "ID du groupe d'ensemble invalide";
$lang['Services.!error.client_id.exists'] = "Le client n'existe pas.";
$lang['Services.!error.date_renews.valid'] = "La date de renouvèlement doit être supérieure à la dernière date de renouvèlement (%1\$s). "; // %1$s is the last renew date
$lang['Services.getStatusTypes.in_review'] = "En révision";
$lang['Services.getActions.change_renew'] = "Changer la date de renouvellement";
$lang['Services.!error.qty.available'] = "Quantité limite atteinte. Si possible, veuillez sélectionner une plus petite quantité.";
$lang['Services.!error.status.valid'] = "Seuls les services en attente ou en révision peuvent être supprimés.";
$lang['Services.!error.service_id.has_children'] = "Ce service en attente ne peut pas être supprimé car il a des services rattachés. S'il vous plaît annuler ou supprimer ces services et essayez à nouveau.";
$lang['Services.!error.client_id.allowed'] = "Le client ne peut accéder cet ensemble.";
$lang['Services.!error.configoptions.valid'] = "Une des options configurable sélectionnée n'est pas valide pour ce service.";
$lang['Services.!error.pricing_id.overrides'] = "Les termes de l'ensemble ne peuvent être changés lorsqu'il y a ajustement de prix.";
$lang['Services.!error.override_price.format'] = "Le remplacement de prix doit être un nombre.";
$lang['Services.!error.override_price.override'] = "À la fois un prix et la devise doivent être réglés pour remplacer le prix actuel.";
$lang['Services.!error.override_currency.format'] = "Veuillez choisir une devise valide.";
$lang['Services.!error.prorate.format'] = "Que vous permettiez le Pro Rata doit être à \"vrai\" ou \"faux\"";
$lang['Services.!error.pricing_id.exists'] = "Veuillez choisir un terme valide.";
$lang['Services.!error.service_id.exists'] = "ID de service invalide.";
$lang['Services.getActions.update_coupon'] = "Modifier le coupon";
?>