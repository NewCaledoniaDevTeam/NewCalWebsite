<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
        <a href="https://php.net" title="Powered by PHP" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-php.svg" width="160" height="30" alt="Powered by PHP" /></a>
        <a href="//validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-html5.svg" width="160" height="30" alt="Valid HTML5" /></a>
        <a href="//jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-css.svg" width="160" height="30" alt="Valid CSS" /></a>
        <a href="https://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.svg" width="160" height="30"
            alt="Driven by DokuWiki" /></a>
			<!---https://img.shields.io/badge/DokuWiki-lightgray?style=flat&logo=data:image/png;base64,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--->
		<br>
		<br>
		<p>Made by Mountain Top</p>
    </div>
</div></div><!-- /footer -->

<?php
tpl_includeFile('footer.html');
