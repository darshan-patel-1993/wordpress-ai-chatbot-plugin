<?php

$settings = WPAI_Settings::get();

if (
    isset($_POST['wpai_save'])
    && check_admin_referer('wpai_save_settings')
) {

    WPAI_Settings::save([
        'provider' => sanitize_text_field($_POST['provider']),
        'api_key' => sanitize_text_field($_POST['api_key']),
        'api_url' => esc_url_raw($_POST['api_url']),
        'model' => sanitize_text_field($_POST['model']),
        'system_prompt' => sanitize_textarea_field($_POST['system_prompt'])
    ]);

    echo '<div class="notice notice-success"><p>Settings Saved</p></div>';

    $settings = WPAI_Settings::get();
}
?>

<div class="wrap">

<h1>WP AI Chatbot</h1>

<form method="post">

<?php wp_nonce_field('wpai_save_settings'); ?>

<table class="form-table">

<tr>
<th>Provider</th>
<td>
<select name="provider">
<option value="gemini">Gemini</option>
<option value="openai">OpenAI</option>
<option value="claude">Claude</option>
</select>
</td>
</tr>

<tr>
<th>API URL</th>
<td>
<input
type="text"
name="api_url"
value="<?php echo esc_attr($settings['api_url']); ?>"
class="regular-text">
</td>
</tr>

<tr>
<th>Model</th>
<td>
<input
type="text"
name="model"
value="<?php echo esc_attr($settings['model']); ?>"
class="regular-text">
</td>
</tr>

<tr>
<th>API Key</th>
<td>
<input
type="password"
name="api_key"
value="<?php echo esc_attr($settings['api_key']); ?>"
class="regular-text">
</td>
</tr>

<tr>
<th>System Prompt</th>
<td>
<textarea
name="system_prompt"
rows="5"
class="large-text"><?php echo esc_textarea($settings['system_prompt']); ?></textarea>
</td>
</tr>

</table>

<p>
<input
type="submit"
name="wpai_save"
class="button button-primary"
value="Save Settings">
</p>

</form>

</div>