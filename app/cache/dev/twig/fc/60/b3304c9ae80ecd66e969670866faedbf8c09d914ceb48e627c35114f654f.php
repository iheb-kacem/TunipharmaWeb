<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_fc60b3304c9ae80ecd66e969670866faedbf8c09d914ceb48e627c35114f654f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <div class=\"col-md-5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 220,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  559 => 201,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  340 => 136,  307 => 82,  261 => 73,  287 => 77,  12 => 36,  975 => 278,  972 => 277,  969 => 276,  965 => 309,  944 => 299,  933 => 297,  928 => 295,  922 => 293,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  898 => 284,  895 => 283,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  762 => 224,  757 => 221,  736 => 217,  732 => 216,  716 => 213,  713 => 212,  705 => 210,  703 => 209,  688 => 203,  686 => 202,  673 => 199,  670 => 198,  667 => 197,  655 => 194,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 223,  611 => 182,  587 => 169,  574 => 205,  571 => 183,  560 => 166,  552 => 166,  545 => 198,  538 => 312,  532 => 192,  530 => 163,  492 => 136,  458 => 119,  438 => 116,  418 => 109,  415 => 127,  412 => 126,  380 => 101,  370 => 128,  364 => 101,  336 => 86,  330 => 103,  234 => 39,  692 => 205,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 182,  565 => 324,  540 => 308,  510 => 293,  500 => 142,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 179,  244 => 140,  226 => 35,  152 => 61,  551 => 199,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 294,  513 => 148,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  489 => 135,  479 => 153,  475 => 152,  448 => 139,  443 => 137,  424 => 91,  421 => 90,  399 => 116,  386 => 103,  375 => 106,  372 => 155,  354 => 142,  310 => 83,  302 => 79,  292 => 91,  155 => 53,  320 => 87,  317 => 121,  284 => 76,  275 => 86,  256 => 79,  237 => 71,  232 => 84,  188 => 48,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 307,  958 => 253,  955 => 304,  952 => 303,  950 => 302,  947 => 249,  939 => 243,  936 => 298,  934 => 241,  931 => 296,  923 => 236,  920 => 292,  918 => 234,  915 => 233,  903 => 229,  900 => 285,  897 => 227,  894 => 226,  892 => 225,  889 => 281,  881 => 220,  878 => 219,  876 => 274,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 251,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 227,  769 => 171,  767 => 170,  764 => 169,  751 => 220,  749 => 162,  746 => 161,  739 => 218,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 211,  707 => 148,  699 => 142,  697 => 141,  696 => 206,  695 => 139,  694 => 138,  689 => 137,  683 => 201,  680 => 200,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 191,  643 => 120,  640 => 119,  638 => 118,  635 => 226,  619 => 113,  617 => 183,  614 => 111,  596 => 106,  593 => 171,  576 => 101,  564 => 99,  557 => 96,  555 => 200,  550 => 94,  547 => 93,  527 => 162,  524 => 161,  515 => 85,  503 => 143,  496 => 161,  493 => 155,  490 => 154,  470 => 121,  464 => 121,  459 => 116,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 119,  405 => 49,  400 => 233,  390 => 43,  350 => 91,  344 => 193,  342 => 88,  316 => 16,  290 => 90,  266 => 366,  263 => 365,  222 => 66,  194 => 52,  184 => 48,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 225,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 215,  722 => 219,  719 => 214,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 196,  661 => 380,  658 => 195,  652 => 193,  648 => 198,  646 => 197,  641 => 368,  624 => 224,  607 => 218,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 168,  581 => 167,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 175,  558 => 174,  554 => 232,  548 => 164,  542 => 149,  539 => 148,  536 => 194,  529 => 191,  523 => 189,  521 => 166,  518 => 180,  512 => 84,  509 => 83,  507 => 165,  504 => 164,  501 => 163,  483 => 154,  481 => 129,  478 => 128,  476 => 147,  467 => 72,  462 => 146,  456 => 68,  450 => 114,  447 => 113,  441 => 136,  428 => 112,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 90,  401 => 89,  388 => 112,  382 => 115,  376 => 153,  366 => 126,  363 => 32,  359 => 144,  356 => 105,  348 => 100,  346 => 99,  335 => 133,  332 => 20,  325 => 93,  306 => 95,  303 => 94,  291 => 84,  286 => 82,  267 => 74,  250 => 93,  321 => 100,  295 => 78,  274 => 135,  242 => 113,  153 => 56,  104 => 40,  358 => 139,  351 => 141,  347 => 140,  343 => 132,  327 => 102,  323 => 88,  319 => 82,  315 => 98,  301 => 80,  299 => 83,  293 => 109,  289 => 77,  281 => 75,  277 => 78,  271 => 50,  260 => 44,  251 => 101,  239 => 64,  213 => 32,  197 => 119,  148 => 49,  270 => 84,  253 => 78,  206 => 57,  198 => 55,  137 => 29,  129 => 180,  84 => 34,  77 => 31,  113 => 44,  81 => 32,  20 => 11,  65 => 30,  97 => 41,  371 => 35,  367 => 259,  331 => 226,  311 => 80,  308 => 88,  272 => 134,  225 => 67,  212 => 60,  90 => 39,  383 => 102,  338 => 99,  326 => 129,  318 => 86,  313 => 84,  304 => 184,  300 => 93,  288 => 107,  280 => 87,  276 => 395,  192 => 53,  126 => 179,  124 => 51,  118 => 46,  114 => 174,  134 => 182,  23 => 12,  296 => 167,  282 => 161,  279 => 104,  228 => 68,  202 => 55,  190 => 49,  185 => 61,  181 => 160,  146 => 70,  165 => 73,  178 => 48,  174 => 42,  53 => 18,  262 => 81,  259 => 149,  245 => 335,  236 => 109,  233 => 304,  231 => 69,  223 => 106,  211 => 81,  195 => 54,  161 => 71,  218 => 123,  215 => 126,  210 => 59,  200 => 54,  186 => 51,  175 => 47,  172 => 46,  167 => 56,  100 => 81,  76 => 35,  434 => 114,  420 => 110,  417 => 243,  410 => 113,  406 => 111,  403 => 117,  394 => 106,  391 => 163,  389 => 104,  385 => 159,  377 => 37,  373 => 215,  369 => 148,  361 => 207,  357 => 211,  353 => 92,  349 => 209,  345 => 208,  333 => 132,  329 => 130,  265 => 99,  257 => 103,  255 => 74,  248 => 336,  216 => 100,  207 => 58,  191 => 69,  180 => 49,  170 => 74,  160 => 57,  150 => 56,  127 => 52,  110 => 172,  70 => 27,  58 => 22,  34 => 18,  480 => 75,  474 => 122,  469 => 158,  461 => 120,  457 => 153,  453 => 139,  444 => 118,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 81,  312 => 97,  309 => 117,  305 => 87,  298 => 79,  294 => 85,  285 => 3,  283 => 138,  278 => 160,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  107 => 38,  61 => 29,  273 => 85,  269 => 100,  254 => 43,  243 => 66,  240 => 72,  238 => 41,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 67,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 78,  159 => 70,  143 => 69,  135 => 81,  119 => 108,  102 => 37,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  87 => 36,  201 => 56,  196 => 52,  183 => 50,  171 => 44,  166 => 100,  163 => 58,  158 => 75,  156 => 38,  151 => 72,  142 => 30,  138 => 49,  136 => 66,  121 => 52,  117 => 175,  105 => 170,  91 => 37,  62 => 24,  49 => 21,  94 => 41,  89 => 42,  85 => 32,  75 => 30,  68 => 28,  56 => 23,  38 => 21,  25 => 12,  21 => 11,  28 => 14,  24 => 12,  31 => 15,  26 => 14,  19 => 11,  93 => 35,  88 => 38,  78 => 34,  46 => 22,  44 => 18,  27 => 14,  79 => 31,  72 => 29,  69 => 27,  47 => 25,  40 => 17,  37 => 20,  22 => 12,  246 => 67,  157 => 56,  145 => 54,  139 => 67,  131 => 181,  123 => 47,  120 => 46,  115 => 45,  111 => 39,  108 => 171,  101 => 43,  98 => 36,  96 => 44,  83 => 36,  74 => 29,  66 => 30,  55 => 21,  52 => 22,  50 => 21,  43 => 18,  41 => 23,  35 => 16,  32 => 16,  29 => 15,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 52,  187 => 69,  182 => 80,  176 => 58,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 48,  112 => 105,  109 => 46,  106 => 104,  103 => 44,  99 => 42,  95 => 35,  92 => 27,  86 => 37,  82 => 34,  80 => 31,  73 => 34,  64 => 27,  60 => 28,  57 => 18,  54 => 25,  51 => 26,  48 => 25,  45 => 24,  42 => 15,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
