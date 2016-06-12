<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_a9cb79102679fc66f221632e40a33aa1d73a7a0ef754bd3effbffd5fd87a11fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"col-md-3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  540 => 308,  510 => 293,  500 => 291,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 179,  244 => 140,  226 => 131,  152 => 62,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 294,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  489 => 157,  479 => 153,  475 => 152,  448 => 139,  443 => 137,  424 => 128,  421 => 244,  399 => 116,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  310 => 171,  302 => 168,  292 => 81,  155 => 53,  320 => 122,  317 => 121,  284 => 106,  275 => 103,  256 => 96,  237 => 70,  232 => 84,  188 => 83,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 365,  619 => 113,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 317,  550 => 94,  547 => 93,  527 => 91,  524 => 297,  515 => 85,  503 => 81,  496 => 161,  493 => 78,  490 => 287,  470 => 278,  464 => 275,  459 => 273,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 119,  405 => 49,  400 => 233,  390 => 43,  350 => 26,  344 => 193,  342 => 97,  316 => 16,  290 => 5,  266 => 366,  263 => 365,  222 => 81,  194 => 248,  184 => 64,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 380,  658 => 124,  652 => 376,  648 => 198,  646 => 197,  641 => 368,  624 => 194,  607 => 349,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  548 => 313,  542 => 149,  539 => 148,  536 => 306,  529 => 299,  523 => 167,  521 => 166,  518 => 165,  512 => 84,  509 => 83,  507 => 160,  504 => 292,  501 => 80,  483 => 154,  481 => 155,  478 => 74,  476 => 147,  467 => 72,  462 => 146,  456 => 68,  450 => 64,  447 => 137,  441 => 136,  428 => 59,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 125,  401 => 124,  388 => 112,  382 => 115,  376 => 113,  366 => 33,  363 => 32,  359 => 107,  356 => 105,  348 => 100,  346 => 99,  335 => 21,  332 => 20,  325 => 93,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  267 => 74,  250 => 93,  321 => 152,  295 => 142,  274 => 135,  242 => 113,  153 => 56,  104 => 67,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  327 => 154,  323 => 125,  319 => 92,  315 => 173,  301 => 144,  299 => 83,  293 => 109,  289 => 163,  281 => 105,  277 => 78,  271 => 374,  260 => 77,  251 => 101,  239 => 97,  213 => 82,  197 => 119,  148 => 64,  270 => 157,  253 => 95,  206 => 71,  198 => 53,  137 => 46,  129 => 57,  84 => 39,  77 => 31,  113 => 41,  81 => 33,  20 => 11,  65 => 30,  97 => 39,  371 => 35,  367 => 259,  331 => 226,  311 => 118,  308 => 88,  272 => 134,  225 => 298,  212 => 279,  90 => 38,  383 => 261,  338 => 99,  326 => 189,  318 => 188,  313 => 90,  304 => 184,  300 => 183,  288 => 107,  280 => 78,  276 => 395,  192 => 85,  126 => 42,  124 => 31,  118 => 29,  114 => 71,  134 => 55,  23 => 18,  296 => 167,  282 => 161,  279 => 104,  228 => 68,  202 => 266,  190 => 108,  185 => 68,  181 => 80,  146 => 49,  165 => 59,  178 => 100,  174 => 60,  53 => 24,  262 => 105,  259 => 149,  245 => 335,  236 => 109,  233 => 304,  231 => 133,  223 => 106,  211 => 81,  195 => 51,  161 => 71,  218 => 123,  215 => 126,  210 => 75,  200 => 73,  186 => 111,  175 => 74,  172 => 46,  167 => 48,  100 => 40,  76 => 31,  434 => 256,  420 => 134,  417 => 243,  410 => 127,  406 => 10,  403 => 117,  394 => 222,  391 => 113,  389 => 219,  385 => 225,  377 => 37,  373 => 215,  369 => 111,  361 => 207,  357 => 211,  353 => 103,  349 => 209,  345 => 208,  333 => 205,  329 => 96,  265 => 99,  257 => 103,  255 => 74,  248 => 336,  216 => 100,  207 => 269,  191 => 69,  180 => 62,  170 => 74,  160 => 58,  150 => 61,  127 => 76,  110 => 42,  70 => 29,  58 => 22,  34 => 18,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  309 => 117,  305 => 87,  298 => 91,  294 => 85,  285 => 3,  283 => 138,  278 => 160,  268 => 373,  264 => 73,  258 => 354,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 75,  177 => 61,  169 => 57,  140 => 52,  132 => 44,  128 => 47,  107 => 25,  61 => 27,  273 => 394,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 107,  159 => 70,  143 => 48,  135 => 81,  119 => 28,  102 => 74,  71 => 19,  67 => 31,  63 => 24,  59 => 49,  87 => 65,  201 => 65,  196 => 65,  183 => 96,  171 => 102,  166 => 100,  163 => 45,  158 => 75,  156 => 64,  151 => 188,  142 => 61,  138 => 49,  136 => 168,  121 => 75,  117 => 51,  105 => 44,  91 => 56,  62 => 24,  49 => 20,  94 => 69,  89 => 35,  85 => 34,  75 => 33,  68 => 31,  56 => 21,  38 => 32,  25 => 12,  21 => 12,  28 => 14,  24 => 13,  31 => 15,  26 => 14,  19 => 11,  93 => 39,  88 => 37,  78 => 34,  46 => 19,  44 => 21,  27 => 13,  79 => 32,  72 => 25,  69 => 32,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 60,  131 => 48,  123 => 52,  120 => 51,  115 => 50,  111 => 47,  108 => 39,  101 => 42,  98 => 37,  96 => 67,  83 => 37,  74 => 30,  66 => 25,  55 => 25,  52 => 17,  50 => 23,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 96,  203 => 122,  199 => 265,  193 => 50,  189 => 240,  187 => 69,  182 => 80,  176 => 65,  173 => 134,  168 => 69,  164 => 72,  162 => 68,  154 => 67,  149 => 50,  147 => 52,  144 => 51,  141 => 58,  133 => 67,  130 => 57,  125 => 46,  122 => 45,  116 => 44,  112 => 49,  109 => 46,  106 => 104,  103 => 46,  99 => 41,  95 => 43,  92 => 38,  86 => 36,  82 => 33,  80 => 36,  73 => 57,  64 => 51,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 19,  33 => 6,  30 => 14,);
    }
}
