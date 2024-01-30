<?php
/* Smarty version 4.3.2, created on 2024-01-26 20:28:42
  from 'C:\xampp\htdocs\mvc_app\libs\debug.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65b3976a602839_24103887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace28d471886881a8c26b7e7a5beb9a1385c7cf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\libs\\debug.tpl',
      1 => 1705928191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b3976a602839_24103887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mvc_app\\libs\\plugins\\modifier.debug_print_var.php','function'=>'smarty_modifier_debug_print_var',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, '_smarty_debug', 'debug_output', null);?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Smarty Debug Console</title>
        <style>
            
            body, h1, h2, h3, td, th, p {
                font-family: sans-serif;
                font-weight: normal;
                font-size: 0.9em;
                margin: 1px;
                padding: 0;
            }

            h1 {
                margin: 0;
                text-align: left;
                padding: 2px;
                background-color: #f0c040;
                color: black;
                font-weight: bold;
                font-size: 1.2em;
            }

            h2 {
                background-color: #9B410E;
                color: white;
                text-align: left;
                font-weight: bold;
                padding: 2px;
                border-top: 1px solid black;
            }

            h3 {
                text-align: left;
                font-weight: bold;
                color: black;
                font-size: 0.7em;
                padding: 2px;
            }

            body {
                background: black;
            }

            p, table, div {
                background: #f0ead8;
            }

            p {
                margin: 0;
                font-style: italic;
                text-align: center;
            }

            table {
                width: 100%;
            }

            th, td {
                font-family: monospace;
                vertical-align: top;
                text-align: left;
            }

            td {
                color: green;
            }

            tr:nth-child(odd) {
                background-color: #eeeeee;
            }

            tr:nth-child(even) {
                background-color: #fafafa;
            }

            .exectime {
                font-size: 0.8em;
                font-style: italic;
            }

            #bold div {
                color: black;
                font-weight: bold;
            }

            #blue h3 {
                color: blue;
            }

            #normal div {
                color: black;
                font-weight: normal;
            }

            #table_assigned_vars th {
                color: blue;
                font-weight: bold;
            }

            #table_config_vars th {
                color: maroon;
            }
            
        </style>
    </head>
    <body>

    <h1>Smarty <?php echo htmlspecialchars((string) Smarty::SMARTY_VERSION, ENT_QUOTES, 'UTF-8');?>
 Debug Console
        -  <?php if ((isset($_smarty_tpl->tpl_vars['template_name']->value))) {
echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['template_name']->value);?>
 <?php }
if (!empty($_smarty_tpl->tpl_vars['template_data']->value)) {?>Total Time <?php echo htmlspecialchars((string) sprintf("%.5f",$_smarty_tpl->tpl_vars['execution_time']->value), ENT_QUOTES, 'UTF-8');
}?></h1>

    <?php if (!empty($_smarty_tpl->tpl_vars['template_data']->value)) {?>
        <h2>included templates &amp; config files (load time in seconds)</h2>
        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_data']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                <span style="color: brown;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br>&nbsp;&nbsp;<span class="exectime">
                (compile <?php echo htmlspecialchars((string) sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['compile_time']), ENT_QUOTES, 'UTF-8');?>
) (render <?php echo htmlspecialchars((string) sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['render_time']), ENT_QUOTES, 'UTF-8');?>
) (cache <?php echo htmlspecialchars((string) sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['cache_time']), ENT_QUOTES, 'UTF-8');?>
)
                 </span>
                <br>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

    <h2>assigned template variables</h2>

    <table id="table_assigned_vars">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_vars']->value, 'vars');
$_smarty_tpl->tpl_vars['vars']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vars']->key => $_smarty_tpl->tpl_vars['vars']->value) {
$_smarty_tpl->tpl_vars['vars']->do_else = false;
$__foreach_vars_2_saved = $_smarty_tpl->tpl_vars['vars'];
?>
            <tr>
                <td>
                    <h3 style="color: blue;">$<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vars']->key, ENT_QUOTES, 'UTF-8');?>
</h3>
                    <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['nocache']))) {?><strong>Nocache</strong><br><?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['scope']))) {?><strong>Origin:</strong> <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['scope']);
}?>
                </td>
                <td>
                    <h3>Value</h3>
                    <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['value'],10,80);?>

                </td>
                <td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['attributes']))) {?>
                        <h3>Attributes</h3>
                        <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['attributes']);?>

                    <?php }?>
                </td>
         <?php
$_smarty_tpl->tpl_vars['vars'] = $__foreach_vars_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

    <h2>assigned config file variables</h2>

    <table id="table_config_vars">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config_vars']->value, 'vars');
$_smarty_tpl->tpl_vars['vars']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vars']->key => $_smarty_tpl->tpl_vars['vars']->value) {
$_smarty_tpl->tpl_vars['vars']->do_else = false;
$__foreach_vars_3_saved = $_smarty_tpl->tpl_vars['vars'];
?>
            <tr>
                <td>
                    <h3 style="color: blue;">#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vars']->key, ENT_QUOTES, 'UTF-8');?>
#</h3>
                    <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['scope']))) {?><strong>Origin:</strong> <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['scope']);
}?>
                </td>
                <td>
                    <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value['value'],10,80);?>

                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['vars'] = $__foreach_vars_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
    </body>
    </html>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo '<script'; ?>
 type="text/javascript">
    _smarty_console = window.open("", "console<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['targetWindow']->value, ENT_QUOTES, 'UTF-8');?>
", "width=1024,height=600,left=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8');?>
,top=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8');?>
,resizable,scrollbars=yes");
    _smarty_console.document.write("<?php echo strtr((string)$_smarty_tpl->tpl_vars['debug_output']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
");
    _smarty_console.document.close();
<?php echo '</script'; ?>
>
<?php }
}
