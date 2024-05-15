<?php
/**
 * Contains the form that is used on the new account request page
 *
 * @package		ProjectSend
 * @subpackage	Files
 *
 */
?>
<form action="" name="email_new" role="form" id="email_new" method="post">
    <?php addCsrf(); ?>
    <input type="hidden" name="do" value="mail">
    <fieldset>
        <div class="form-group">
            <label for="razao"><?php _e('Razão Social', 'cftp_admin'); ?></label>
            <input type="text" name="razao" id="razao" value="" class="form-control" autofocus />
        </div>

        <div class="form-group">
            <label for="cnpj"><?php _e('CNPJ', 'cftp_admin'); ?></label>
            <input type="text" name="cnpj" id="cnpj" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email"><?php _e('E-mail', 'cftp_admin'); ?></label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>

        <div class="form-group">
            <label for="equipamento"><?php _e('Informe o(s) Modelo(s) Do(s) Equipamento(s) (separados por vírgula)', 'cftp_admin'); ?></label>
            <textarea name="equipamento" id="equipamento" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="serie"><?php _e('Informe o(s) Nº(s) De Série Do(s) Equipamento(s) (separados por vírgula)', 'cftp_admin'); ?></label>
            <textarea name="serie" id="serie" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="whatsapp"><?php _e('WhatsApp Para Contato', 'cftp_admin'); ?></label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control" />
        </div>

        <div class="inside_form_buttons">
            <button type="submit" id="btn_submit" class="btn btn-wide btn-primary" data-text="<?php _e('Enviar', 'cftp_admin'); ?>" data-loading-text="<?php _e('Enviar', 'cftp_admin'); ?>"><?php _e('Enviar', 'cftp_admin'); ?></button>
        </div>

    </fieldset>
</form>
