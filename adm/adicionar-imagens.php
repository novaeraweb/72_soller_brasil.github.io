<?php


  if($nomevar != Null)
  {
        switch($_FILES[$nomevar]['type']):
            case 'image/jpeg';
            case 'image/pjpeg';
                    

            $nome_arquivo = 'arquivos/'.$_FILES[$nomevar]['name'];
            $arquivo_temporario = $_FILES[$nomevar]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");
                
                
            break;
            
            //Caso a imagem seja extensão PNG cai nesse CASE
            case 'image/png':
            case 'image/x-png';
                
                
            $nome_arquivo = 'arquivos/'.$_FILES[$nomevar]['name'];
            $arquivo_temporario = $_FILES[$nomevar]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");

                
            break;
        endswitch;
        
        
        // Descobre a extensao:
        $ext = pathinfo($$nomevar, PATHINFO_EXTENSION);
        $ponto = ".";
        // Gera novo nome
        $novo = 'soller-brasil-'.rand().$ponto.$ext;
        $var = $dir.$$nomevar;
        $var_novo = $dir.$novo;

        $arquivo_novo = $novo;
        rename($var, $var_novo);
  }

  if($nomevar_mobile != Null)
  {
        switch($_FILES[$nomevar_mobile]['type']):
            case 'image/jpeg';
            case 'image/pjpeg';
                    

            $nome_arquivo_mobile = 'arquivos/'.$_FILES[$nomevar_mobile]['name'];
            $arquivo_temporario_mobile = $_FILES[$nomevar_mobile]["tmp_name"];
            move_uploaded_file($arquivo_temporario_mobile, "$nome_arquivo_mobile");
                
                
            break;
            
            //Caso a imagem seja extensão PNG cai nesse CASE
            case 'image/png':
            case 'image/x-png';
                
                
            $nome_arquivo_mobile = 'arquivos/'.$_FILES[$nomevar_mobile]['name'];
            $arquivo_temporario_mobile = $_FILES[$nomevar_mobile]["tmp_name"];
            move_uploaded_file($arquivo_temporario_mobile, "$nome_arquivo_mobile");

                
            break;
        endswitch;
        
        
        // Descobre a extensao:
        $ext = pathinfo($$nomevar_mobile, PATHINFO_EXTENSION);
        $ponto = ".";
        // Gera novo nome
        $novo_mobile = 'soller-brasil-mobile'.rand().$ponto.$ext;
        $var_mobile = $dir.$$nomevar_mobile;
        $var_novo_mobile = $dir.$novo_mobile;

        $arquivo_novo_mobile = $novo_mobile;
        rename($var_mobile, $var_novo_mobile);
  }