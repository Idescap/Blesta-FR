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

$lang['AdminDepartments.!success.department_created'] = "Le département %1\$s a été créé avec succès."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_updated'] = "Le département %1\$s a été mis à jour avec succès."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_deleted'] = "Le département %1\$s a été effacé avec succès."; // %1$s is the name of the department
$lang['AdminDepartments.index.page_title'] = "Support Manager > Départements";
$lang['AdminDepartments.add.page_title'] = "Gestionnaire du support > Départements > Ajouter un département";
$lang['AdminDepartments.edit.page_title'] = "Gestionnaire du support > Départements > Modifier le département";
$lang['AdminDepartments.index.categorylink_adddepartment'] = "Ajouter un département";
$lang['AdminDepartments.index.boxtitle_departments'] = "Départements";
$lang['AdminDepartments.index.heading_name'] = "Nom";
$lang['AdminDepartments.index.heading_description'] = "Description";
$lang['AdminDepartments.index.heading_email'] = "Courriel";
$lang['AdminDepartments.index.heading_assigned_staff'] = "Personnel assigné";
$lang['AdminDepartments.index.heading_default_priority'] = "Priorité par défaut";
$lang['AdminDepartments.index.heading_options'] = "Options";
$lang['AdminDepartments.index.option_edit'] = "Modifier";
$lang['AdminDepartments.index.option_delete'] = "Effacer";
$lang['AdminDepartments.index.confirm_delete'] = "Les départements avec des billets qui leur sont confiées ne peuvent pas être supprimés jusqu'à ce que tous les billets soient réaffectés à un autre département. Êtes-vous sûr de vouloir supprimer ce service?";
$lang['AdminDepartments.index.no_results'] = "Il n'y a pas de départements.";
$lang['AdminDepartments.assigned_staff.heading_staff'] = "Personnel";
$lang['AdminDepartments.assigned_staff.no_results'] = "Il n'y a pas de membre du personnel assigné à ce département.";
$lang['AdminDepartments.!tooltip.piping_config'] = "Définissez votre chemin comme indiqué, mais assurez-vous d'utiliser le chemin correct vers PHP sur votre serveur. Assurez-vous que pipe.php est exécutable. Vous pouvez également avoir besoin d'éditer pipe.php pour inclure un hashbang sur la ligne 1 qui ressemblerait à quelque chose comme : #!/usr/bin/php";
$lang['AdminDepartments.add.boxtitle_adddepartment'] = "Ajouter un département";
$lang['AdminDepartments.add.field_name'] = "Nom";
$lang['AdminDepartments.add.field_description'] = "Description";
$lang['AdminDepartments.add.field_clients_only'] = "Permettre seulement aux client d'ouvrir des ou répondre à des billets";
$lang['AdminDepartments.add.field_email'] = "Courriel";
$lang['AdminDepartments.add.field_method'] = "Manutention courriel";
$lang['AdminDepartments.add.field_piping_config'] = "Configuration Piping";
$lang['AdminDepartments.add.field_default_priority'] = "Priorité par défaut";
$lang['AdminDepartments.add.field_security'] = "Sécurité";
$lang['AdminDepartments.add.field_box_name'] = "Nom de la boîte";
$lang['AdminDepartments.add.field_mark_messages'] = "Identifier les messages comme";
$lang['AdminDepartments.add.field_host'] = "Hôte";
$lang['AdminDepartments.add.field_user'] = "Utilisateur";
$lang['AdminDepartments.add.field_pass'] = "Passe";
$lang['AdminDepartments.add.field_port'] = "Port";
$lang['AdminDepartments.add.field_status'] = "Statut";
$lang['AdminDepartments.add.field_addsubmit'] = "Ajouter un département";
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = "Modifier le département";
$lang['AdminDepartments.edit.field_name'] = "Nom";
$lang['AdminDepartments.edit.field_description'] = "Description";
$lang['AdminDepartments.edit.field_clients_only'] = "Permettre seulement aux client d'ouvrir ou de répondre à des billets";
$lang['AdminDepartments.edit.field_email'] = "Courriel";
$lang['AdminDepartments.edit.field_method'] = "Manutention de courriels";
$lang['AdminDepartments.edit.field_piping_config'] = "Configuration Piping";
$lang['AdminDepartments.edit.field_default_priority'] = "Priorité par défaut";
$lang['AdminDepartments.edit.field_security'] = "Sécurité";
$lang['AdminDepartments.edit.field_box_name'] = "Nom de la boite";
$lang['AdminDepartments.edit.field_mark_messages'] = "Marquer les messages comme";
$lang['AdminDepartments.edit.field_host'] = "Hôte";
$lang['AdminDepartments.edit.field_user'] = "Utilisateur";
$lang['AdminDepartments.edit.field_pass'] = "Passer";
$lang['AdminDepartments.edit.field_port'] = "Port";
$lang['AdminDepartments.edit.field_status'] = "Status";
$lang['AdminDepartments.edit.field_addsubmit'] = "Modifier le département";
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = "Membre du personnel assigné";
$lang['AdminDepartments.add.field_override_from_email'] = "Changer l'adresse de provenance paramétré dans les modèles courriels avec l'adresse courriel de ce département. ";
$lang['AdminDepartments.edit.field_override_from_email'] = "Remplacer l'expéditeur définie dans les modèles d'e-mail par l'adresse électronique définie pour ce service";
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = "Tous les tickets avec un statut autre que %1\$s dont la dernière réponse provient d'un membre du personnel seront automatiquement fermés si aucune réponse n'a été fournie dans le délai imparti."; // %1$s is the ticket status In Progress
$lang['AdminDepartments.!text.add_response'] = "Définir une réponse prédéfinie d'auto-fermeture";
$lang['AdminDepartments.!text.no_selected_response'] = "Pas de réponse de fermeture automatique sélectionnée.";
$lang['AdminDepartments.!text.remove_response'] = "Enlever";
$lang['AdminDepartments.add.field_close_ticket_interval'] = "Fermer automatiquement les billets";
$lang['AdminDepartments.add.field_response_id'] = "Réponse de fermeture automatique du billet";
$lang['AdminDepartments.edit.field_response_id'] = "Réponse de fermeture automatique de billet";
$lang['AdminDepartments.!tooltip.send_ticket_received'] = "Décocher cette case indique que les nouveaux tickets créés pour ce service (par e-mail ou par le client) n'enverront pas d'avis de réponse au client ou au personnel par l'intermédiaire de l'e-mail de réception du ticket ou de l'e-mail de mise à jour du ticket du personnel..";
$lang['AdminDepartments.add.field_send_ticket_received'] = "Envoyer des e-mails de réponse automatique pour les nouveaux tickets";
$lang['AdminDepartments.edit.field_send_ticket_received'] = "Envoyer des e-mails de réponse automatique pour les nouveaux tickets";
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = "Tous les tickets dont le statut est %1\$s seront automatiquement supprimés s'ils restent dans ce statut pendant la durée sélectionnée."; // %1$s is the ticket status (e.g. Trash)
$lang['AdminDepartments.add.field_delete_ticket_interval'] = "Supprimer automatiquement les tickets";
$lang['AdminDepartments.edit.field_close_ticket_interval'] = "Fermer automatiquement les tickets";
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = "Supprimer automatiquement les tickets";
?>