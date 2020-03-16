<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Nimate pravic za dostop do želene strani.',
    'permissionJson' => 'Nimate dovoljenja za izvedbo zahtevanega dejanja.',

    // Auth
    'error_user_exists_different_creds' => 'Uporabnik z e-pošto :email že obstaja, vendar z drugačnimi poverilnicami.',
    'email_already_confirmed' => 'E-naslov je že bil potrjen, poskusite se prijaviti.',
    'email_confirmation_invalid' => 'Ta potrditveni žeton ni veljaven ali je že bil uporabljen. Poizkusite znova.',
    'email_confirmation_expired' => 'Potrditveni žeton je pretečen. Nova potrditvena e-pošta je bila poslana.',
    'email_confirmation_awaiting' => 'Potrebno je potrditi e-naslov',
    'ldap_fail_anonymous' => 'Dostop do LDAP ni uspel z anonimno povezavo',
    'ldap_fail_authed' => 'Neuspešen LDAP dostop z danimi podrobnostimi dn & gesla',
    'ldap_extension_not_installed' => 'PHP razširitev za LDAP ni nameščen',
    'ldap_cannot_connect' => 'Ne morem se povezati na LDAP strežnik, neuspešna začetna povezava',
    'saml_already_logged_in' => 'Že prijavljen',
    'saml_user_not_registered' => 'Uporabniško ime :name ni registrirano in avtomatska registracija je onemogočena',
    'saml_no_email_address' => 'Nisem našel e-naslova za tega uporabnika v podatkih iz zunanjega sistema za preverjanje pristnosti',
    'saml_invalid_response_id' => 'Zahteva iz zunanjega sistema za preverjanje pristnosti ni prepoznana s strani procesa zagnanega s strani te aplikacije. Pomik nazaj po prijavi je lahko povzročil te težave.',
    'saml_fail_authed' => 'Prijava z uporabo :system ni uspela, sistem ni zagotovil uspešne avtorizacije',
    'social_no_action_defined' => 'Akcija ni določena',
    'social_login_bad_response' => "Napaka pri :socialAccount prijavi:\n:error",
    'social_account_in_use' => 'Ta :socialAccount je že v uporabi. Poskusite se prijaviti z :socialAccount možnostjo.',
    'social_account_email_in_use' => 'The email :email is already in use. If you already have an account you can connect your :socialAccount account from your profile settings.',
    'social_account_existing' => 'This :socialAccount is already attached to your profile.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'This :socialAccount account is not linked to any users. Please attach it in your profile settings. ',
    'social_account_register_instructions' => 'If you do not yet have an account, You can register an account using the :socialAccount option.',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'Your :socialAccount social settings are not configured correctly.',
    'invite_token_expired' => 'This invitation link has expired. You can instead try to reset your account password.',

    // System
    'path_not_writable' => 'File path :filePath could not be uploaded to. Ensure it is writable to the server.',
    'cannot_get_image_from_url' => 'Cannot get image from :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'uploaded'  => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'image_upload_error' => 'An error occurred uploading the image',
    'image_upload_type_error' => 'The image type being uploaded is invalid',
    'file_upload_timeout' => 'The file upload has timed out.',

    // Attachments
    'attachment_page_mismatch' => 'Page mismatch during attachment update',
    'attachment_not_found' => 'Attachment not found',

    // Pages
    'page_draft_autosave_fail' => 'Failed to save draft. Ensure you have internet connection before saving this page',
    'page_custom_home_deletion' => 'Cannot delete a page while it is set as a homepage',

    // Entities
    'entity_not_found' => 'Entity not found',
    'bookshelf_not_found' => 'Bookshelf not found',
    'book_not_found' => 'Book not found',
    'page_not_found' => 'Page not found',
    'chapter_not_found' => 'Chapter not found',
    'selected_book_not_found' => 'The selected book was not found',
    'selected_book_chapter_not_found' => 'The selected Book or Chapter was not found',
    'guests_cannot_save_drafts' => 'Guests cannot save drafts',

    // Users
    'users_cannot_delete_only_admin' => 'You cannot delete the only admin',
    'users_cannot_delete_guest' => 'You cannot delete the guest user',

    // Roles
    'role_cannot_be_edited' => 'This role cannot be edited',
    'role_system_cannot_be_deleted' => 'This role is a system role and cannot be deleted',
    'role_registration_default_cannot_delete' => 'This role cannot be deleted while set as the default registration role',
    'role_cannot_remove_only_admin' => 'This user is the only user assigned to the administrator role. Assign the administrator role to another user before attempting to remove it here.',

    // Comments
    'comment_list' => 'An error occurred while fetching the comments.',
    'cannot_add_comment_to_draft' => 'You cannot add comments to a draft.',
    'comment_add' => 'An error occurred while adding / updating the comment.',
    'comment_delete' => 'An error occurred while deleting the comment.',
    'empty_comment' => 'Cannot add an empty comment.',

    // Error pages
    '404_page_not_found' => 'Page Not Found',
    'sorry_page_not_found' => 'Sorry, The page you were looking for could not be found.',
    'sorry_page_not_found_permission_warning' => 'If you expected this page to exist, you might not have permission to view it.',
    'return_home' => 'Return to home',
    'error_occurred' => 'An Error Occurred',
    'app_down' => ':appName is down right now',
    'back_soon' => 'It will be back up soon.',

    // API errors
    'api_no_authorization_found' => 'No authorization token found on the request',
    'api_bad_authorization_format' => 'An authorization token was found on the request but the format appeared incorrect',
    'api_user_token_not_found' => 'No matching API token was found for the provided authorization token',
    'api_incorrect_token_secret' => 'The secret provided for the given used API token is incorrect',
    'api_user_no_api_permission' => 'The owner of the used API token does not have permission to make API calls',
    'api_user_token_expired' => 'The authorization token used has expired',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Error thrown when sending a test email:',

];