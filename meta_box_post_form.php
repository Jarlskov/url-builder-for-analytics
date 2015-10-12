<table class="form-table">
    <tbody>
        <tr>
            <th scope="row">
                <label for="campaign_source"><?= __( 'Campaign source', 'url-builder-for-analytics' ); ?> *</label>
            </th>
            <td>
                <input type="text" name="campaign_source" class="large-text">
                <br>
                <?= __( 'referrer: google, newsletter', 'url-builder-for-analytics' ); ?>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="campaign_medium"><?= __( 'Campaign medium', 'url-builder-for-analytics' ); ?> *</label>
            </th>
            <td>
                <input type="text" name="campaign_medium" class="large-text">
                <br>
                <?= __( 'marketing medium: cpc, banner, email', 'url-builder-for-analytics' ); ?>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="campaign_term"><?= __( 'Campaign term', 'url-builder-for-analytics' ); ?></label>
            </th>
            <td>
                <input type="text" name="campaign_term" class="large-text">
                <br>
                <?= __( 'identify the paid keywords', 'url-builder-for-analytics' ); ?>
            </td>
        </tr>
        <tr>
            <th scope="row">
            <label for="campaign_content"><?= __( 'Campaign content', 'url-builder-for-analytics' ); ?></label>
            </th>
            <td>
                <input type="text" name="campaign_content" class="large-text">
                <br>
                <?= __( 'use to differentiate ads', 'url-builder-for-analytics' ); ?>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="campaign_name"><?= __( 'Campaign name', 'url-builder-for-analytics' ); ?> *</label>
            </th>
            <td>
                <input type="text" name="campaign_name" class="large-text">
                <br>
                <?= __( 'product, promo code og slogan', 'url-builder-for-analytics' ); ?>
            </td>
        </tr>
        <tr>
            <th scope="row">
                    <label for="final_url"><?= __( 'Final url', 'url-builder-for-analytics' ); ?></label>
            </th>
            <td>
                <input type="text" name="final_url" id="final_url" class="large-text" readonly>
            </td>
        </tr>
    </tbody>
</table>
<input type="hidden" name="post_url" value="<?= get_permalink(); ?>">
<input name="generate_analytics_submit" type="button" class="button button-primary button-large" id="generate_analytics_url_submit" value="<?= __( 'Generate URL', 'url-builder-for-analytics' ); ?>">
            
