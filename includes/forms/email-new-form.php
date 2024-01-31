<?php
/**
 * Contains the form that is used on the new account request page
 *
 * @package		ProjectSend
 * @subpackage	Files
 *
 */
?>
<form action="index.php" name="email_new" role="form" id="email_new" method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />
    <input type="hidden" name="do" value="login">
    <fieldset>
        <div class="form-group">
            <label for="razao">Razão Social</label>
            <input type="text" name="razao" id="razao" value="" class="form-control" autofocus />
        </div>

        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" />
        </div>

        <div class="form-group">
            <label for="equipamento">Informe o(s) Modelo(s) Do(s) Equipamento(s) (separados por vírgula)</label>
            <input type="textarea" name="equipamento" id="equipamento" class="form-control" />
        </div>

        <div class="form-group">
            <label for="serie">Informe o(s) Nº(s) De Série Do(s) Equipamento(s) (separados por vírgula)</label>
            <input type="textarea" name="serie" id="serie" class="form-control" />
        </div>

        <div class="form-group">
            <label for="whatsapp">WhatsApp Para Contato</label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control" />
        </div>

        <div class="inside_form_buttons">
            <button type="submit" id="btn_submit" class="btn btn-wide btn-primary" data-text="Enviar" data-loading-text="Enviar">Enviar</button>
        </div>

    </fieldset>
</form>
