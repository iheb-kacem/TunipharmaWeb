<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_67061f522662a698b966266f74af1a37fb025071530d152ca880605cad2a30fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  975 => 278,  972 => 277,  969 => 276,  965 => 309,  944 => 299,  933 => 297,  928 => 295,  922 => 293,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  898 => 284,  895 => 283,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  762 => 224,  757 => 221,  736 => 217,  732 => 216,  716 => 213,  713 => 212,  705 => 210,  703 => 209,  688 => 203,  686 => 202,  673 => 199,  670 => 198,  667 => 197,  655 => 194,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 184,  611 => 182,  587 => 169,  574 => 228,  571 => 183,  560 => 166,  552 => 166,  545 => 163,  538 => 312,  532 => 235,  530 => 163,  492 => 136,  458 => 119,  438 => 116,  418 => 109,  415 => 108,  412 => 107,  380 => 101,  370 => 128,  364 => 101,  336 => 86,  330 => 84,  234 => 39,  692 => 205,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 231,  575 => 328,  569 => 182,  565 => 324,  540 => 308,  510 => 293,  500 => 142,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 179,  244 => 140,  226 => 35,  152 => 62,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 294,  513 => 148,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  489 => 135,  479 => 153,  475 => 152,  448 => 139,  443 => 137,  424 => 128,  421 => 244,  399 => 116,  386 => 103,  375 => 106,  372 => 155,  354 => 102,  310 => 171,  302 => 168,  292 => 81,  155 => 53,  320 => 122,  317 => 121,  284 => 53,  275 => 51,  256 => 96,  237 => 70,  232 => 84,  188 => 48,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 307,  958 => 253,  955 => 304,  952 => 303,  950 => 302,  947 => 249,  939 => 243,  936 => 298,  934 => 241,  931 => 296,  923 => 236,  920 => 292,  918 => 234,  915 => 233,  903 => 229,  900 => 285,  897 => 227,  894 => 226,  892 => 225,  889 => 281,  881 => 220,  878 => 219,  876 => 274,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 251,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 227,  769 => 171,  767 => 170,  764 => 169,  751 => 220,  749 => 162,  746 => 161,  739 => 218,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 211,  707 => 148,  699 => 142,  697 => 141,  696 => 206,  695 => 139,  694 => 138,  689 => 137,  683 => 201,  680 => 200,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 191,  643 => 120,  640 => 119,  638 => 118,  635 => 365,  619 => 113,  617 => 183,  614 => 111,  596 => 106,  593 => 171,  576 => 101,  564 => 99,  557 => 96,  555 => 317,  550 => 94,  547 => 93,  527 => 162,  524 => 161,  515 => 85,  503 => 143,  496 => 161,  493 => 78,  490 => 287,  470 => 123,  464 => 121,  459 => 273,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 119,  405 => 49,  400 => 233,  390 => 43,  350 => 91,  344 => 193,  342 => 88,  316 => 16,  290 => 5,  266 => 366,  263 => 365,  222 => 81,  194 => 66,  184 => 161,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 225,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 215,  722 => 219,  719 => 214,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 196,  661 => 380,  658 => 195,  652 => 193,  648 => 198,  646 => 197,  641 => 368,  624 => 194,  607 => 180,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 168,  581 => 167,  572 => 180,  568 => 178,  566 => 181,  563 => 167,  561 => 175,  558 => 174,  554 => 232,  548 => 164,  542 => 149,  539 => 148,  536 => 237,  529 => 299,  523 => 167,  521 => 166,  518 => 165,  512 => 84,  509 => 83,  507 => 145,  504 => 292,  501 => 80,  483 => 154,  481 => 129,  478 => 128,  476 => 147,  467 => 72,  462 => 146,  456 => 68,  450 => 64,  447 => 137,  441 => 136,  428 => 112,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 125,  401 => 124,  388 => 112,  382 => 115,  376 => 157,  366 => 126,  363 => 32,  359 => 107,  356 => 105,  348 => 100,  346 => 99,  335 => 21,  332 => 20,  325 => 93,  306 => 158,  303 => 90,  291 => 84,  286 => 82,  267 => 74,  250 => 93,  321 => 83,  295 => 78,  274 => 135,  242 => 113,  153 => 56,  104 => 60,  358 => 139,  351 => 102,  347 => 90,  343 => 132,  327 => 154,  323 => 125,  319 => 82,  315 => 173,  301 => 80,  299 => 83,  293 => 109,  289 => 77,  281 => 105,  277 => 78,  271 => 50,  260 => 44,  251 => 101,  239 => 97,  213 => 32,  197 => 119,  148 => 49,  270 => 157,  253 => 95,  206 => 71,  198 => 25,  137 => 46,  129 => 27,  84 => 39,  77 => 25,  113 => 63,  81 => 26,  20 => 1,  65 => 30,  97 => 57,  371 => 35,  367 => 259,  331 => 226,  311 => 80,  308 => 88,  272 => 134,  225 => 298,  212 => 279,  90 => 27,  383 => 102,  338 => 99,  326 => 189,  318 => 188,  313 => 90,  304 => 184,  300 => 183,  288 => 107,  280 => 78,  276 => 395,  192 => 23,  126 => 55,  124 => 25,  118 => 46,  114 => 71,  134 => 55,  23 => 13,  296 => 167,  282 => 161,  279 => 104,  228 => 68,  202 => 266,  190 => 108,  185 => 61,  181 => 160,  146 => 70,  165 => 73,  178 => 100,  174 => 42,  53 => 24,  262 => 105,  259 => 149,  245 => 335,  236 => 109,  233 => 304,  231 => 38,  223 => 106,  211 => 81,  195 => 51,  161 => 71,  218 => 123,  215 => 126,  210 => 31,  200 => 54,  186 => 316,  175 => 77,  172 => 46,  167 => 56,  100 => 40,  76 => 23,  434 => 114,  420 => 110,  417 => 243,  410 => 127,  406 => 10,  403 => 117,  394 => 106,  391 => 105,  389 => 104,  385 => 225,  377 => 37,  373 => 215,  369 => 111,  361 => 207,  357 => 211,  353 => 92,  349 => 209,  345 => 208,  333 => 85,  329 => 96,  265 => 99,  257 => 103,  255 => 74,  248 => 336,  216 => 100,  207 => 30,  191 => 69,  180 => 62,  170 => 74,  160 => 38,  150 => 35,  127 => 76,  110 => 62,  70 => 21,  58 => 19,  34 => 14,  480 => 75,  474 => 125,  469 => 158,  461 => 120,  457 => 153,  453 => 139,  444 => 118,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 81,  312 => 90,  309 => 117,  305 => 87,  298 => 79,  294 => 85,  285 => 3,  283 => 138,  278 => 160,  268 => 373,  264 => 46,  258 => 354,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 75,  177 => 43,  169 => 57,  140 => 52,  132 => 28,  128 => 47,  107 => 37,  61 => 18,  273 => 394,  269 => 100,  254 => 43,  243 => 89,  240 => 139,  238 => 41,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 67,  219 => 101,  217 => 33,  208 => 124,  204 => 66,  179 => 78,  159 => 70,  143 => 69,  135 => 81,  119 => 28,  102 => 59,  71 => 29,  67 => 20,  63 => 22,  59 => 23,  87 => 14,  201 => 26,  196 => 52,  183 => 46,  171 => 75,  166 => 100,  163 => 45,  158 => 75,  156 => 64,  151 => 72,  142 => 61,  138 => 49,  136 => 66,  121 => 24,  117 => 51,  105 => 20,  91 => 38,  62 => 24,  49 => 14,  94 => 34,  89 => 35,  85 => 32,  75 => 32,  68 => 31,  56 => 21,  38 => 7,  25 => 12,  21 => 12,  28 => 14,  24 => 13,  31 => 17,  26 => 2,  19 => 11,  93 => 55,  88 => 33,  78 => 34,  46 => 13,  44 => 21,  27 => 16,  79 => 31,  72 => 31,  69 => 32,  47 => 22,  40 => 18,  37 => 17,  22 => 12,  246 => 42,  157 => 37,  145 => 60,  139 => 67,  131 => 48,  123 => 48,  120 => 47,  115 => 45,  111 => 40,  108 => 42,  101 => 37,  98 => 36,  96 => 18,  83 => 29,  74 => 30,  66 => 23,  55 => 18,  52 => 17,  50 => 25,  43 => 12,  41 => 11,  35 => 22,  32 => 21,  29 => 16,  209 => 96,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 69,  182 => 80,  176 => 58,  173 => 134,  168 => 74,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 65,  130 => 57,  125 => 46,  122 => 45,  116 => 64,  112 => 49,  109 => 46,  106 => 104,  103 => 38,  99 => 30,  95 => 43,  92 => 38,  86 => 30,  82 => 33,  80 => 13,  73 => 24,  64 => 19,  60 => 26,  57 => 20,  54 => 19,  51 => 21,  48 => 8,  45 => 18,  42 => 13,  39 => 12,  36 => 6,  33 => 16,  30 => 15,);
    }
}
