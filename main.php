<html
  xmlns="http://www.w3.org/1999/xhtml"
  xml:lang="<?php echo $conf['lang']?>"
  lang="<?php echo $conf['lang']?>"
  dir="<?php echo $lang['direction']?>">
  <head>
    <?php tpl_metaheaders()?>
    <title><?php tpl_pagetitle()?> - <?php echo hsc($conf['title'])?></title>
  </head>
  <body>
    <div class="dokuwiki">
      <table border=1 cellpadding=0 cellspacing=0><tr><td>
        <?php tpl_link(wl($ID,'do=backlink'),"Backlinks")?>
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
        <?php tpl_button('recent')?>
        <?php tpl_searchform()?>
        <?php tpl_button('subscribe')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
        <?php tpl_button('top')?>
      </td></tr></table>
      <?php html_msgarea()?>
      <?php if ($conf['breadcrumbs']) { tpl_breadcrumbs(); } ?>
      <?php if ($conf['youarehere']) { tpl_youarehere(); } ?>
      <?php tpl_content(false); ?>
      <?php tpl_toc(); ?>
      <?php tpl_pageinfo()?> - <?php tpl_userinfo()?>
      <?php tpl_indexerWebBug(); ?>
    </div>
  </body>
</html>
