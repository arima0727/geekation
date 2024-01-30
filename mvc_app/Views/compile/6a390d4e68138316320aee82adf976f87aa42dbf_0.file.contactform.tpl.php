<?php
/* Smarty version 4.3.2, created on 2024-01-31 00:56:49
  from 'C:\xampp\htdocs\mvc_app\Views\contacts\contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65b91c419071f4_68455856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a390d4e68138316320aee82adf976f87aa42dbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contacts\\contactform.tpl',
      1 => 1706630208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b91c419071f4_68455856 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/contacts/contactform" id='my-action' method="post" class="bg-white p-3 rounded mb-5">
                <div class="form-group">
                    <label form="name">名前</label><span>必須</span>
                    <input type="text" class="form-control" name="name" id="name" placeholder="テスト太郎" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label form="name">フリガナ</label><span>必須</span>
                    <input type="text" class="form-control" name="kana" id="kana" placeholder="テストタロウ" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label form="email">メールアドレス</label><span>必須</span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@cin-group.co.jp" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label form="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="0000000000" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label form="contact">お問い合わせ内容</label><span>必須</span>
                    <textarea rows='4' type="text" class="form-control" name="body" id="body" placeholder="お問い合わせ内容"></textarea>
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div action='UserController.php' method="post">
                    <button type='submit' class='btn bg-warning my-1' id="btnSubmit">内容確認</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center wrap my-5">
        <div class="title w-10">名前</div>
        <div class="title w-15">フリガナ</div>
        <div class="title w-15">電話番号</div>
        <div class="title w-20">メールアドレス</div>
        <div class="title w-25">お問い合わせ内容</div>
        <div class="title w-5"></div>
        <div class="title w-5"></div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <div class="w-10"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
        <div class="w-15"><?php echo $_smarty_tpl->tpl_vars['data']->value['kana'];?>
</div>
        <div class="w-15"><?php echo $_smarty_tpl->tpl_vars['data']->value['tel'];?>
</div>
        <div class="w-20"><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</div>
        <div class="w-25"><?php echo $_smarty_tpl->tpl_vars['data']->value['body'];?>
</div>
        <div class="w-5"><a href="/contacts/update?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="button" name='update'>編集</a></div>
        <div class="w-5"><a href="/contacts/delete?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="button" name='delete' onclick="return confirm('本当に削除しますか?')">削除</a></div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div>
        <div class="row justify-content-md-center text-center">
            <div class="col-lg-6 mx-auto col-md-8">
                <div class="bg-white p-3 rounded mb-5">
                    <div class="m-1">
                        <a href="/">トップページへ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body><?php }
}
