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

$lang['ClientPay.!success.payment_processed'] = "Le paiement a été traité avec succès pour un montant de %1\$s. Numéro de transaction: %2\$s"; // %1$s is the payment amount, %2$s is the transaction number
$lang['ClientPay.!error.invalid_amount'] = "Les montants de paiement autres ne peuvent être négatifs.";
$lang['ClientPay.!error.payment_amounts'] = "Veuillez sélectionner les factures à payer ou entrez un autre montant à payer.";
$lang['ClientPay.index.page_title'] = "Client %1\$s Payer"; // %1$s is the client ID
$lang['ClientPay.index.boxtitle_pay'] = "Faire un paiement";
$lang['ClientPay.index.field_submit'] = "Continuer";
$lang['ClientPay.multipleinvoices.text_amount'] = "Montant à payer";
$lang['ClientPay.multipleinvoices.text_due'] = "Montant dû";
$lang['ClientPay.multipleinvoices.text_invoice'] = "Facture #";
$lang['ClientPay.multipleinvoices.text_datedue'] = "Date d'échéance";
$lang['ClientPay.multipleinvoices.no_results'] = "Il n'y a pas de factures utilisant cette devise.";
$lang['ClientPay.received.page_title'] = "Paiement reçu pour le client %1\$s"; // %1$s is the client ID
$lang['ClientPay.received.boxtitle_received'] = "Merci!";
$lang['ClientPay.received.statement'] = "Votre paiement est en traitement.";
$lang['ClientPay.setcontactview.text_none'] = "Aucun";
$lang['ClientPay.index.field_credit'] = "Autre montant du paiement";
$lang['ClientPay.method.page_title'] = "Méthode de paiement du client %1\$s "; // %1$s is the client ID
$lang['ClientPay.method.boxtitle_method'] = "Faire un paiement";
$lang['ClientPay.method.field_useaccount'] = "Utiliser le compte de paiement";
$lang['ClientPay.method.field_newdetails'] = "Nouveaux détails de paiement";
$lang['ClientPay.method.field_paymentaccount'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_cc'] = "Comptes de carte de crédit";
$lang['ClientPay.method.field_paymentaccount_autodebit'] = "(Débit automatique) %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_ach'] = "Comptes ACH";
$lang['ClientPay.method.field_submit'] = "Réviser et confirmer";
$lang['ClientPay.confirm.page_title'] = "Client %1\$s Confirmer paiement"; // %1$s is the client ID
$lang['ClientPay.confirm.boxtitle_confirm'] = "Confirmer le paiement";
$lang['ClientPay.confirm.payment_details'] = "Détails de paiement";
$lang['ClientPay.confirm.account_info'] = "%1\$s (%2\$s) terminant en %3\$s"; // %1$s is the account type (Credit Card of ACH), %2$s is the type (Savings, Checking, MasterCard, etc.) and %3$s is the last 4 digits of the account
$lang['ClientPay.confirm.account_exp'] = "expiration %1\$s"; // %1$s is the date the credit card expires
$lang['ClientPay.confirm.total'] = "Total:";
$lang['ClientPay.confirm.field_submit'] = "Envoyer paiement";
$lang['ClientPay.confirm.field_edit'] = "Modifier le paiement";
$lang['ClientPay.confirm.description_invoice'] = "Facture #%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_invoice_separator'] = ",";
$lang['ClientPay.confirm.description_invoice_number'] = "#%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_credit'] = "Crédit de paiement";
$lang['ClientPay.!error.invalid_details'] = "Veuillez choisir une option de paiement.";
$lang['ClientPay.method.heading_other_payment_options'] = "Autres options de paiement";
$lang['ClientPay.method.heading_payment_options'] = "Options de paiement";
$lang['ClientPay.method.no_options'] = "Il n'y a pas d'options de paiement disponible.";
$lang['ClientPay.!success.credit_full_processed'] = "Les crédits disponibles ont été appliqués.";
$lang['ClientPay.!success.credit_partial_processed'] = "Les crédits disponibles ont été appliqués mais un solde du existe toujours. Veuillez compléter cette transaction en payant la balance suivante.";
$lang['ClientPay.method.field_apply_credit'] = "Appliquer le crédit ((%1\$s disponible)"; // %1$s is the amount of available credit that may be used
$lang['ClientPay.method.field_credit_submit'] = "Appliquer l'avoir et continuer";
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = "Faire un paiement partiel à la place";
$lang['ClientPay.method.heading_invoice'] = "Facture #%1\$s"; // %1$s is the invoice ID code
$lang['ClientPay.method.invoice_description'] = "Description";
$lang['ClientPay.method.invoice_quantity'] = "Quantité";
$lang['ClientPay.method.invoice_amount'] = "Montant";
$lang['ClientPay.!error.invoice_voided'] = "Cette facture a été annulée et ne peut être payée";
$lang['ClientPay.received.transaction_id'] = "ID de transaction";
$lang['ClientPay.received.amount'] = "Montant";
$lang['ClientPay.received.invoices'] = "Facture #";
?>