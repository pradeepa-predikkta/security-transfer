<form action="<?php  echo esc_url(home_url('/')); ?>/" method="get">
    <fieldset>
        <input type="text" name="s" id="s" placeholder="<?php echo esc_html__('Search for...', 'montserrat'); ?>" value="<?php echo esc_html__('Search for...', 'montserrat'); ?>" />
        <input type="submit" id="searchsubmit" value="<?php echo esc_html__('Search', 'montserrat'); ?>" />
    </fieldset>
</form>