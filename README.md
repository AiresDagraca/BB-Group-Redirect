# BB-Group-Redirect
# BuddyBoss Role-Based Group Access Control

This WordPress snippet provides a solution for restricting access to single BuddyBoss group pages based on user roles. If a user with a restricted role attempts to access a group page, they are redirected to a custom sale page. This functionality is especially useful for membership sites or communities that want to offer exclusive content or privileges to certain roles.

## Features

- Role-based access control for BuddyBoss group pages.
- Redirects restricted users to a custom sale or promotional page.
- Easily customizable to fit different roles and redirect URLs.

## Installation

1. **Copy the Snippet**: Copy the provided PHP code.
2. **Add to WordPress**: Paste the code into your theme's `functions.php` file or a custom plugin.
3. **Customize**: Adjust the `$restricted_roles` array to include the WordPress roles you wish to restrict. Update the `$redirect_url` to the path of your custom sale page.

## Configuration

- **Restricted Roles**: Modify the `$restricted_roles` array within the function to specify which WordPress roles should be restricted from accessing single group pages. Example roles include `subscriber`, `contributor`, etc.

  ```php
  $restricted_roles = array('subscriber', 'contributor'); // Add or remove roles as needed

## Usage
Once installed and configured, the function automatically checks the role of the user attempting to access any single group page. If the user's role is in the restricted list, they will be redirected to the specified sale page. No additional steps are required for the function to work after setup.

## Support
This snippet is provided as-is without warranty. If you encounter any issues or require customizations, consider hiring a WordPress developer.

## Contributing
Contributions to improve this snippet are welcome. Please feel free to submit pull requests or open issues to suggest improvements.

## License
This snippet is open-source and can be used freely in personal and commercial projects.
