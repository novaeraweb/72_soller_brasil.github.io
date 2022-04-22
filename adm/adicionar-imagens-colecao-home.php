<?php
  if($nomevar_home != Null)
  {
        switch($_FILES[$nomevar_home]['type']):
            case 'image/jpeg';
            case 'image/pjpeg';
                    

            $nome_arquivo = 'arquivos/'.$_FILES[$nomevar_home]['name'];
            $arquivo_temporario = $_FILES[$nomevar_home]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");
                
                
            break;
            
            //Caso a imagem seja extensão PNG cai nesse CASE
            case 'image/png':
            case 'image/x-png';
                
                
            $nome_arquivo = 'arquivos/'.$_FILES[$nomevar_home]['name'];
            $arquivo_temporario = $_FILES[$nomevar_home]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");

                
            break;
        endswitch;
        
        
        // Descobre a extensao:
        $ext = pathinfo($$nomevar_home, PATHINFO_EXTENSION);
        $ponto = ".";
        // Gera novo nome
        $novo_home = 'soller-brasil-'.rand().$ponto.$ext;
        $var = $dir.$$nomevar_home;
        $var_novo_home = $dir.$novo_home;

        $arquivo_novo_home = $novo_home;
        rename($var, $var_novo_home);
  }