<?php return [
    'plugin'     => [
        'name'        => 'Toolbox',
        'description' => 'Toolbox est un ensemble d\'helpers pour un développement plus rapide avec OctoberCMS.',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => 'Nom',
        'title'                    => 'Titre',
        'active'                   => 'Actif',
        'hidden'                   => 'Caché',
        'code'                     => 'Code',
        'slug'                     => 'URL',
        'external_id'              => 'ID Externe',
        'preview_text'             => 'Prévisualiser le texte',
        'preview_image'            => 'Prévisualiser l\'image',
        'image'                    => 'Image',
        'images'                   => 'Images (galerie)',
        'description'              => 'Description',
        'category'                 => 'Catégorie',
        'email'                    => 'Email',
        'phone'                    => 'Téléphone',
        'moderation'               => 'Modération',
        'mode'                     => 'Mode de fonctionnement',
        'status'                   => 'Statut',
        'city'                     => 'Ville',
        'address'                  => 'Adresse',
        'street'                   => 'Rue',
        'lat'                      => 'lat',
        'lng'                      => 'lng',
        'type'                     => 'Type',
        'avatar'                   => 'Avatar',
        'property'                 => 'Propriété',
        'property_list_value'      => 'Valeurs de propriété disponibles',
        'property_mode'            => 'Mode de propriété',
        'property_tab'             => 'Nom de l\'onglet',
        'property_is_translatable' => 'La propriété est traduisible',
        'key'                      => 'Clé',
        'value'                    => 'Valeur',
        'label'                    => 'Étiquette',
        'date'                     => 'Date',
        'datetime'                 => 'Date et heure',
        'time'                     => 'Heure',
        'file'                     => 'Fichier',
        'decimals'                 => 'Nombre de décimales',
        'dec_point'                => 'Séparateur décimal',
        'thousands_sep'            => 'Séparateur de milliers',
        'dot'                      => 'Point',
        'comma'                    => 'Virgule',
        'together'                 => 'Fusionner',
        'space'                    => 'Espace',
        'date_begin'               => 'Date du début',
        'date_end'                 => 'Date de la fin',
        'discount_value'           => 'Valeur de remise',
        'discount_type'            => 'Type de remise',
        'discount_price'           => 'Prix de la remise',
        'discount'                 => 'Remise',
        'product'                  => 'Produit',
        'priority'                 => 'Priorité',
        'group'                    => 'Groupe',
        'count'                    => 'Compter',
        'length'                   => 'Longueur',
        'amount'                   => 'Montant',
        'author'                   => 'Auteur',
        'link'                     => 'Lien',
        'view_count'               => 'View count',
        'is_default'               => 'Est par défaut',
        'symbol'                   => 'Symbole',
        'field'                    => 'Field',

        'sort_order' => 'Tri',
        'created_at' => 'Créé',
        'updated_at' => 'Actualisé',
        'deleted_at' => 'Supprimé',
        'deleted'    => 'supprimé',
        'empty'      => 'Vide',
        'password'   => 'Mot de passe',

        'site_settings'                 => 'Paramètres de l\'application',
        'site_settings_description'     => 'Paramètres généraux de l\'application',
        'queue_on'                      => 'Envoi de messages de la file d\'attente (queue)',
        'queue_name'                    => 'Nom de la queue pour l\'envoi d\'emails',
        'import_queue_on'               => 'Use queue when processing import items',
        'import_queue_name'             => 'The name of the queue for processing import items',
        'email_list_description'        => 'Remplir une liste d\'emails séparés par des virgules',
        'import_deactivate'             => 'Deactivate elements',
        'import_deactivate_description' => 'All active elements that are not in file will be deactivated.',

        'country'  => 'Pays',
        'state'    => 'Etat',
        'house'    => 'Numéro de maison',
        'flat'     => 'Numéro d\'appartement',
        'address1' => 'Adresse 1',
        'address2' => 'Adresse 2',
        'postcode' => 'Code postal',

        'import_file_list'             => 'Import file list',
        'import_from_file'             => 'Import from file',
        'import_file_path'             => 'Relative path from storage folder to file',
        'import_image_folder'          => 'Relative path from storage folder to image folder',
        'import_path_to_list'          => 'Path to node with list of elements',
        'import_path_to_list_example'  => 'main/elements/element',
        'import_field_list'            => 'Field list',
        'import_path_to_field'         => 'Path to field node',
        'import_path_to_field_example' => 'fields/field[@code="active"]',
    ],
    'tab'        => [
        'preview_content' => 'Prévisualiser le contenu',
        'full_content'    => 'Contenu',
        'images'          => 'Images',
        'files'           => 'Files',
        'settings'        => 'Paramètres',
        'description'     => 'Description',
        'properties'      => 'Propriétés',
        'mail'            => 'Envoi d\'emails',
        'import'          => 'Import',
        'permissions'     => 'Gérer les paramètres du site',
        'prices_format'   => 'Format de prix',
    ],
    'component'  => [
        'property_name_error_404' => 'Voir la page 404',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Le slug est requis',
        'property_url_check'      => 'Smart url check',
        'pagination'              => 'Pagination',
        'pagination_desc'         => 'Afficher le bouton de pagination',

        'property_redirect_page'         => 'Page de redirection',
        'property_redirect_success_page' => 'Redirect success page',
        'property_redirect_fail_page'    => 'Redirect fail page',
        'property_redirect_on'           => 'Redirection ON',
        'property_flash_on'              => 'Flash ON',
        'property_mode'                  => 'Mode du component',
        'mode_submit'                    => 'Soumission par form',
        'mode_ajax'                      => 'Ajax',
    ],
    'message'    => [
        'create_success'                  => 'Create :name was successful',
        'update_success'                  => 'Update :name was successful',
        'delete_success'                  => 'Delete :name was successful',
        'restore_confirm'                 => 'Voulez-vous restaurer les éléments sélectionnés ?',
        'restore_success'                 => 'Restore elements was successful',
        'e_not_correct_request'           => 'La requête est incorrecte',
        'row_is_empty'                    => 'Row is empty.',
        'external_id_is_empty'            => 'External ID is empty.',
        'import_additional_info'          => 'Additional import information.',
        'import_active_field_info'        => 'Value of “active” field will be set to “true”, if it is not in CSV file.',
        'import_preview_image_field_info' => 'Path to preview image file must be set relative to storage directory of your project. For example: "app/media/image.jpg".',
        'import_images_field_info'        => 'Path to image file must be set relative to storage directory of your project. For example: "app/media/image.jpg". Paths to image files must be separated by commas.',
        'import_from_xml_confirm'         => 'Start import from XML file?',
        'import_from_xml_report'          => 'Import results: created - :created, updated - :updated, skipped - :skipped, processed - :processed.',

        'table_toolbox_helper' => 'Display command list.',
        'table_toolbox_create' => 'Create :description',

        'choice_field_list'   => 'Choice available fields (Example: 1,2,3,4)',
        'choice_sorting'      => 'Choice sorting',
        'choice_lang_list'    => 'Choice lang',
        'choice_extend_model' => 'Choice extend model',
        'set'                 => 'Set :name (Example: :example)',
        'create'              => 'Create :name?',
        'force_file'          => 'File :file already exists. Create forced?',
        'add_side_menu'       => 'Add side menu to plugin.yaml?',
        'version_up'          => 'Add new version to version.yaml?',
    ],
    'settings'   => [
        'count_per_page'                => 'Compter les éléments par page',
        'available_count_per_page'      => 'List of available values for "count_per_page"',
        'available_count_per_page_desc' => 'Set allowed values separated by commas.',
        'number_validation'             => 'Vous devez entrer le numéro',
        'pagination_limit'              => 'Maximum de boutons',
        'active_class'                  => 'Classe du bouton actif',
        'button_list'                   => 'Liste des boutons',
        'button_list_description'       => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'                   => 'Nom du bouton',
        'button_limit'                  => 'Afficher le bouton après la page',
        'button_number'                 => 'Afficher le nombre du bouton',
        'button_class'                  => 'Classe CSS',
        'last_button'                   => 'Bouton "Last"',
        'last-more_button'              => 'Bouton "More" (avant "Last")',
        'next_button'                   => 'Bouton "Next"',
        'next-more_button'              => 'Bouton "More" (avant "Next")',
        'prev_button'                   => 'Bouton "Prev"',
        'prev-more_button'              => 'Bouton "More" (après "Prev")',
        'first_button'                  => 'Bouton "First"',
        'first-more_button'             => 'Bouton "More" (après "First")',
        'main_button'                   => 'Bouton "Main"',
        'slug_is_translatable'          => 'URL is translatable',
    ],
    'button'     => [
        'add_property_value' => 'Ajouter une valeur de propriété',
        'import_from_csv'    => 'Import from CSV',
        'export_in_csv'      => 'Export in CSV',
        'import_button'      => 'Import records',
        'import_from_xml'    => 'Import from XML',
    ],
    'type'       => [
        'input'            => 'Champ de texte (input)',
        'number'           => 'Text field (number)',
        'textarea'         => 'Champ de texte (textarea)',
        'rich_editor'      => 'Text field (wysiwyg)',
        'single_checkbox'  => 'Single checkbox',
        'switch'           => 'Switch',
        'checkbox'         => 'Liste de cases à cocher (checkbox)',
        'balloon_selector' => 'Balloon selector',
        'tag_list'         => 'Tag list',
        'select'           => 'Sélectionner (select)',
        'radio'            => 'Radio button',
        'date'             => 'Sélecteur de date (datetime)',
        'colorpicker'      => 'Sélecteur de couleur (colorpicker)',
        'mediafinder'      => 'Fichier',
    ],
    'permission' => [
        'settings' => 'Gérer les paramètres',
    ],
];
