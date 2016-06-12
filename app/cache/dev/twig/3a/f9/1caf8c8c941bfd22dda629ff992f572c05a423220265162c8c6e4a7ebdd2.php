<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_3af91caf8c8c941bfd22dda629ff992f572c05a423220265162c8c6e4a7ebdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\">
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((array_key_exists("query", $context) && (!((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false)))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  540 => 308,  510 => 293,  500 => 291,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 179,  244 => 140,  226 => 131,  152 => 62,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 294,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  489 => 157,  479 => 153,  475 => 152,  448 => 139,  443 => 137,  424 => 128,  421 => 244,  399 => 116,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  310 => 171,  302 => 168,  292 => 81,  155 => 53,  320 => 122,  317 => 121,  284 => 106,  275 => 103,  256 => 96,  237 => 70,  232 => 84,  188 => 48,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 365,  619 => 113,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 317,  550 => 94,  547 => 93,  527 => 91,  524 => 297,  515 => 85,  503 => 81,  496 => 161,  493 => 78,  490 => 287,  470 => 278,  464 => 275,  459 => 273,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 119,  405 => 49,  400 => 233,  390 => 43,  350 => 26,  344 => 193,  342 => 97,  316 => 16,  290 => 5,  266 => 366,  263 => 365,  222 => 81,  194 => 66,  184 => 64,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 380,  658 => 124,  652 => 376,  648 => 198,  646 => 197,  641 => 368,  624 => 194,  607 => 349,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  548 => 313,  542 => 149,  539 => 148,  536 => 306,  529 => 299,  523 => 167,  521 => 166,  518 => 165,  512 => 84,  509 => 83,  507 => 160,  504 => 292,  501 => 80,  483 => 154,  481 => 155,  478 => 74,  476 => 147,  467 => 72,  462 => 146,  456 => 68,  450 => 64,  447 => 137,  441 => 136,  428 => 59,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 125,  401 => 124,  388 => 112,  382 => 115,  376 => 113,  366 => 33,  363 => 32,  359 => 107,  356 => 105,  348 => 100,  346 => 99,  335 => 21,  332 => 20,  325 => 93,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  267 => 74,  250 => 93,  321 => 152,  295 => 142,  274 => 135,  242 => 113,  153 => 56,  104 => 67,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  327 => 154,  323 => 125,  319 => 92,  315 => 173,  301 => 144,  299 => 83,  293 => 109,  289 => 163,  281 => 105,  277 => 78,  271 => 374,  260 => 77,  251 => 101,  239 => 97,  213 => 82,  197 => 119,  148 => 49,  270 => 157,  253 => 95,  206 => 71,  198 => 53,  137 => 46,  129 => 27,  84 => 39,  77 => 12,  113 => 40,  81 => 31,  20 => 1,  65 => 30,  97 => 39,  371 => 35,  367 => 259,  331 => 226,  311 => 118,  308 => 88,  272 => 134,  225 => 298,  212 => 279,  90 => 16,  383 => 261,  338 => 99,  326 => 189,  318 => 188,  313 => 90,  304 => 184,  300 => 183,  288 => 107,  280 => 78,  276 => 395,  192 => 85,  126 => 55,  124 => 25,  118 => 46,  114 => 71,  134 => 55,  23 => 18,  296 => 167,  282 => 161,  279 => 104,  228 => 68,  202 => 266,  190 => 108,  185 => 61,  181 => 80,  146 => 34,  165 => 59,  178 => 100,  174 => 42,  53 => 24,  262 => 105,  259 => 149,  245 => 335,  236 => 109,  233 => 304,  231 => 133,  223 => 106,  211 => 81,  195 => 51,  161 => 71,  218 => 123,  215 => 126,  210 => 75,  200 => 54,  186 => 47,  175 => 74,  172 => 46,  167 => 56,  100 => 40,  76 => 31,  434 => 256,  420 => 134,  417 => 243,  410 => 127,  406 => 10,  403 => 117,  394 => 222,  391 => 113,  389 => 219,  385 => 225,  377 => 37,  373 => 215,  369 => 111,  361 => 207,  357 => 211,  353 => 103,  349 => 209,  345 => 208,  333 => 205,  329 => 96,  265 => 99,  257 => 103,  255 => 74,  248 => 336,  216 => 100,  207 => 269,  191 => 69,  180 => 62,  170 => 74,  160 => 38,  150 => 35,  127 => 76,  110 => 42,  70 => 29,  58 => 24,  34 => 15,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  309 => 117,  305 => 87,  298 => 91,  294 => 85,  285 => 3,  283 => 138,  278 => 160,  268 => 373,  264 => 73,  258 => 354,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 75,  177 => 43,  169 => 57,  140 => 52,  132 => 28,  128 => 47,  107 => 37,  61 => 28,  273 => 394,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 67,  219 => 101,  217 => 56,  208 => 124,  204 => 66,  179 => 44,  159 => 70,  143 => 33,  135 => 81,  119 => 28,  102 => 19,  71 => 32,  67 => 31,  63 => 24,  59 => 23,  87 => 14,  201 => 65,  196 => 52,  183 => 46,  171 => 57,  166 => 100,  163 => 45,  158 => 75,  156 => 64,  151 => 188,  142 => 61,  138 => 49,  136 => 58,  121 => 24,  117 => 51,  105 => 20,  91 => 38,  62 => 24,  49 => 20,  94 => 34,  89 => 35,  85 => 34,  75 => 34,  68 => 31,  56 => 21,  38 => 18,  25 => 12,  21 => 12,  28 => 14,  24 => 13,  31 => 15,  26 => 2,  19 => 11,  93 => 17,  88 => 37,  78 => 34,  46 => 19,  44 => 21,  27 => 14,  79 => 35,  72 => 25,  69 => 32,  47 => 22,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 37,  145 => 60,  139 => 59,  131 => 48,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 18,  83 => 32,  74 => 30,  66 => 30,  55 => 22,  52 => 21,  50 => 25,  43 => 21,  41 => 18,  35 => 17,  32 => 4,  29 => 3,  209 => 96,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 69,  182 => 80,  176 => 58,  173 => 134,  168 => 41,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 41,  112 => 49,  109 => 46,  106 => 104,  103 => 41,  99 => 41,  95 => 43,  92 => 38,  86 => 33,  82 => 36,  80 => 13,  73 => 27,  64 => 24,  60 => 22,  57 => 27,  54 => 26,  51 => 21,  48 => 8,  45 => 18,  42 => 17,  39 => 16,  36 => 6,  33 => 16,  30 => 14,);
    }
}
