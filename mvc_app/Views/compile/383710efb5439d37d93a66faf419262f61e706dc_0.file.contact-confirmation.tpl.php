<?php
/* Smarty version 4.3.2, created on 2024-02-03 22:54:49
  from 'C:\xampp\htdocs\mvc_app\Views\contacts\contact-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65be45a9417744_31805026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383710efb5439d37d93a66faf419262f61e706dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contacts\\contact-confirmation.tpl',
      1 => 1706630099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65be45a9417744_31805026 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php echo '<script'; ?>
 defer src="../js/validation.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="p-4 container-field form-orange">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto col-md-8">
            <h2 class="mb-4">お問い合わせ</h2>
            <form action="/contacts/contact-complete"method='POST'>
                <div class="form-group">
                    <label>氏名</label>
                    <input type="text" class="form-control" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>
                <div class="form-group">
                    <label>フリガナ</label>
                    <input type="text" class="form-control" name="kana" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" class="form-control" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>
                <div class="form-group">
                    <label>電話番号</label>
                    <input type="text" class="form-control" name="tel" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div> 
                <div class="form-group">
                    <label>お問い合わせ内容</label>
                    <textarea rows="4" type="text" class="form-control" name="body" readonly><?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                </div>
                
                <p> <class="label-text">上記の内容でよろしいですか。</p>   
                <input class="btn" type="button" onclick="history.back(-1)" value='キャンセル'>                   
                <input type="submit" class="btn bg-warning my-1" name="btn_submit" value="送信">
            </form>
        </div>
    </div>
</div>
    
</body><?php }
}
