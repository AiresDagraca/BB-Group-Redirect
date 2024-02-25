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
