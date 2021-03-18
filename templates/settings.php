<?php $pluginName = 'shortcode_enablr' ?>

<div class="wrap">
    <h2>Shortcode Enablr Settings</h2>

    <?php if (isset($message)): ?>
        <p><?= $message; ?></p>
    <?php endif ?>

    <?php if (isset($errorMessage)): ?>
        <p><?= $errorMessage; ?></p>
    <?php endif ?>

    <form action="options-general.php?page=<?= $pluginName ?>" method="post">
        <p>
            <label for="<?= $pluginName ?>_acf_enable"><strong>Enable ACF field shortcodes</strong></label>
            <input name="<?= $pluginName ?>_acf_enable" id="<?= $pluginName ?>_acf_enable" type="checkbox" <?= get_option($pluginName . '_acf_enable') === 'yes' ? 'checked' : '' ?> />
        </p>
        <p>
            <label for="<?= $pluginName ?>_yoast_title_enable"><strong>Enable Yoast title shortcodes</strong></label>
            <input name="<?= $pluginName ?>_yoast_title_enable" id="<?= $pluginName ?>_yoast_title_enable" type="checkbox" <?= get_option($pluginName . '_yoast_title_enable')  === 'yes' ? 'checked' : '' ?> />
        </p>
        <?php wp_nonce_field($pluginName, $pluginName . '_nonce'); ?>
        <p>
            <input name="submit" type="submit" name="Submit" class="button button-primary" value="Save" />
        </p>
    </form>
    <p>This plugin was built to work with our Dynamic Keyword Insertion tool - <a href="https://wordpress.org/plugins/the-insertr/" target="_blank">The Insertr</a>!</p>
</div>