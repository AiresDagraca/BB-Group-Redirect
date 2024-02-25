function block_users_by_role_from_single_group() {
    if (function_exists('bp_is_active') && bp_is_active('groups')) {
        // Check if on a single group page
        if (bp_is_group()) {
            $restricted_roles = array('basic'); // Specify restricted roles here
            $redirect_url = '/custom-sale-page/'; // Change this to your custom sale page URL
            
            $user_has_restricted_role = false;
            foreach ($restricted_roles as $role) {
                if (current_user_can($role)) {
                    $user_has_restricted_role = true;
                    break;
                }
            }

            // If the user has a restricted role, redirect them
            if ($user_has_restricted_role) {
                wp_redirect(home_url($redirect_url));
                exit;
            }
        }
    }
}
add_action('bp_template_redirect', 'block_users_by_role_from_single_group');
