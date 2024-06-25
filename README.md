# LearnDash Revisions Plugin

## Description

The LearnDash Revisions plugin enables the revisions feature for LearnDash course post types in WordPress. It also limits the number of revisions saved for these post types to improve performance and manage database size.

## Installation

### Method 1: Upload via WordPress Admin

1. Download the `learndash-revisions.zip` file.
2. Log in to your WordPress admin panel.
3. Navigate to **Plugins** > **Add New**.
4. Click **Upload Plugin**.
5. Select the `learndash-revisions.zip` file and click **Install Now**.
6. Activate the plugin after installation.

### Method 2: FTP Upload

1. Unzip the `learndash-revisions.zip` file on your computer.
2. Upload the `learndash-revisions` folder to the `/wp-content/plugins/` directory on your server.
3. Log in to your WordPress admin panel.
4. Navigate to **Plugins** and activate the **LearnDash Revisions** plugin.

## Usage

Once the plugin is activated, revisions will be enabled for the following LearnDash post types:

- Courses (`sfwd-courses`)
- Lessons (`sfwd-lessons`)
- Topics (`sfwd-topic`)
- Quizzes (`sfwd-quiz`)
- Assignments (`sfwd-assignment`)

By default, the plugin limits the number of revisions saved for these post types to 5. You can change this limit by modifying the number in the `learndash_revision_limit` function in the plugin code.

## Changelog

### Version 1.1
- Added a feature to limit the number of revisions saved.

### Version 1.0
- Initial release.

## Author

Developed by Jesse Rie Santamina.

## License

This plugin is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Support

If you encounter any issues or have questions about this plugin, please contact jessesantamina@icloud.com.
