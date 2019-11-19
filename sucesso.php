<?php
    if ($_POST)
    {
        $envioEmail = mail($email,$assunto,$mens,$headers);
    
        if ($envioEmail)
        {
        ?>
            <div class="sucesso">E-mail enviado com sucesso!</div>
        <?php
        }
        else
        {
        ?>
            <div class="erro">Erro no envio do e-mail.</div>
        <?php
        }
    }
    
?>