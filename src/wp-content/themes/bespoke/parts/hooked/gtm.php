<?php

if (defined('GTM_ID') && GTM_ID) :
    if ($args['head']) :
        ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', '<?php echo GTM_ID; // phpcs:ignore ?>');
        </script>
        <?php
    else :
        ?>
        <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GTM_ID; // phpcs:ignore ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <?php
    endif;
endif;
