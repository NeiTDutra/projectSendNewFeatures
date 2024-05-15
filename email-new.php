<?php
/**
 * Show the form to request a new account.
 *
 * @package		ProjectSend
 * @subpackage	Clients
 *
 */
require_once 'bootstrap.php';

global $flash;

$page_title = __('Email de solicitação de cadastro', 'cftp_admin');


include_once ADMIN_VIEWS_DIR . DS . 'header-unlogged.php';

if ($_POST) {
    // Obtenha os dados do formulário
    $nome = $_POST['razao'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $equipamento = $_POST['equipamento'];
    $serie = $_POST['serie'];
    $whats = $_POST['whatsapp'];

    // Verifique se os dados foram fornecidos corretamente
    if (empty($nome) || empty($email) || empty($cnpj) || empty($equipamento) || empty($serie) || empty($whats)) {
        $flash->warning(__('Por favor, preencha todos os campos...', 'cftp_admin'));
    } else {
        // Crie a mensagem de email
        $to = get_option('new_account_email_address');
        $mensagem = "
            <p><b>Razão:</b> $nome</p>
            <p><b>CNPJ:</b> $cnpj</p>
            <p><b>E-mail:</b> $email</p>
            <p><b>Contato:</b> $whats</p>
            <p><b>Equipamento(s):</b> $equipamento</p
            <p><b>Nº Série(s):</b> $serie</p>
        ";
        // Instancia a classe e envia o email
        $mail = new \ProjectSend\Classes\Emails;
        $mail->send([
            'type' => 'new_account_request',
            'to' => $to,
            'message' => $mensagem,
        ]);

        if ($mail) {
            $flash->success(__('Sua solicitação foi enviada com sucesso! Entraremos em contato em breve.', 'cftp_admin'));
        } else {
            $flash->error( __('Ocorreu um erro ao enviar a solicitação. Por favor, tente novamente mais tarde.', 'cftp_admin'));
        }
    }
}
?>

<div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-4">
<!--
    <div class="row">
        <div class="col-xs-12 branding_unlogged">
            <?php echo get_branding_layout(); ?>
        </div>
    </div>
-->
    <div class="white-box">
        <div class="white-box-interior">
            <div class="ajax_response">
                <?php
                    if ($flash->hasMessages()) {
                        echo $flash;
                    }
                ?>
            </div>

            <?php
            // Inclua o formulário
            include_once FORMS_DIR . DS . 'email-new-form.php';
            ?>

            <div class="login_form_links">
                <p><a href="<?php echo BASE_URI; ?>" target="_self"><?php _e('Go back to the homepage.','cftp_admin'); ?></a></p>
            </div>
        </div>
    </div>
</div>

<?php

include_once ADMIN_VIEWS_DIR . DS . 'footer.php';
?>
