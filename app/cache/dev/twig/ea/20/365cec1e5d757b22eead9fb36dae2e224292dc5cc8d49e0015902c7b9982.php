<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_ea20365cec1e5d757b22eead9fb36dae2e224292dc5cc8d49e0015902c7b9982 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  788 => 486,  727 => 476,  706 => 473,  702 => 472,  698 => 471,  690 => 469,  682 => 467,  679 => 466,  677 => 465,  634 => 456,  567 => 414,  549 => 411,  517 => 404,  378 => 157,  334 => 141,  328 => 139,  672 => 345,  668 => 344,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  629 => 454,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  591 => 309,  588 => 308,  533 => 284,  522 => 406,  519 => 278,  505 => 270,  473 => 254,  471 => 253,  465 => 249,  454 => 244,  436 => 235,  397 => 213,  205 => 108,  297 => 179,  612 => 220,  601 => 446,  599 => 215,  594 => 212,  585 => 307,  580 => 207,  559 => 296,  526 => 190,  514 => 167,  497 => 267,  485 => 124,  463 => 248,  455 => 115,  340 => 145,  307 => 128,  261 => 73,  287 => 77,  12 => 36,  975 => 278,  972 => 277,  969 => 276,  965 => 309,  944 => 299,  933 => 297,  928 => 295,  922 => 293,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  898 => 284,  895 => 283,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 492,  807 => 491,  804 => 239,  799 => 310,  797 => 274,  792 => 488,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  762 => 224,  757 => 221,  736 => 217,  732 => 216,  716 => 213,  713 => 212,  705 => 210,  703 => 209,  688 => 203,  686 => 468,  673 => 199,  670 => 198,  667 => 197,  655 => 194,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 325,  623 => 185,  620 => 451,  611 => 182,  587 => 169,  574 => 205,  571 => 183,  560 => 166,  552 => 293,  545 => 291,  538 => 312,  532 => 410,  530 => 163,  492 => 136,  458 => 119,  438 => 236,  418 => 224,  415 => 180,  412 => 222,  380 => 160,  370 => 128,  364 => 101,  336 => 86,  330 => 103,  234 => 39,  692 => 205,  676 => 385,  656 => 378,  645 => 369,  631 => 327,  625 => 453,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 303,  575 => 328,  569 => 300,  565 => 324,  540 => 308,  510 => 293,  500 => 142,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 113,  244 => 140,  226 => 84,  152 => 46,  551 => 199,  546 => 182,  543 => 181,  541 => 290,  537 => 178,  531 => 283,  525 => 280,  520 => 170,  516 => 294,  513 => 148,  511 => 166,  506 => 166,  502 => 164,  499 => 268,  489 => 262,  479 => 256,  475 => 152,  448 => 240,  443 => 137,  424 => 91,  421 => 90,  399 => 116,  386 => 159,  375 => 106,  372 => 155,  354 => 142,  310 => 83,  302 => 125,  292 => 91,  155 => 47,  320 => 127,  317 => 185,  284 => 76,  275 => 105,  256 => 96,  237 => 71,  232 => 88,  188 => 90,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 307,  958 => 253,  955 => 304,  952 => 303,  950 => 302,  947 => 249,  939 => 243,  936 => 298,  934 => 241,  931 => 296,  923 => 236,  920 => 292,  918 => 234,  915 => 233,  903 => 229,  900 => 285,  897 => 227,  894 => 226,  892 => 225,  889 => 281,  881 => 220,  878 => 219,  876 => 274,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 251,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  785 => 178,  783 => 177,  772 => 227,  769 => 171,  767 => 170,  764 => 169,  751 => 220,  749 => 479,  746 => 478,  739 => 218,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 148,  699 => 142,  697 => 141,  696 => 206,  695 => 139,  694 => 470,  689 => 137,  683 => 201,  680 => 200,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 462,  643 => 120,  640 => 334,  638 => 118,  635 => 226,  619 => 113,  617 => 183,  614 => 111,  596 => 106,  593 => 310,  576 => 101,  564 => 99,  557 => 295,  555 => 200,  550 => 94,  547 => 93,  527 => 408,  524 => 161,  515 => 276,  503 => 143,  496 => 161,  493 => 155,  490 => 154,  470 => 121,  464 => 121,  459 => 246,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 176,  405 => 49,  400 => 214,  390 => 43,  350 => 327,  344 => 119,  342 => 137,  316 => 16,  290 => 119,  266 => 366,  263 => 95,  222 => 83,  194 => 70,  184 => 63,  786 => 238,  780 => 176,  777 => 234,  775 => 485,  771 => 231,  768 => 225,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 215,  722 => 219,  719 => 214,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 342,  661 => 380,  658 => 195,  652 => 193,  648 => 198,  646 => 197,  641 => 368,  624 => 224,  607 => 218,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 168,  581 => 305,  572 => 204,  568 => 178,  566 => 203,  563 => 298,  561 => 175,  558 => 174,  554 => 232,  548 => 292,  542 => 149,  539 => 148,  536 => 194,  529 => 409,  523 => 189,  521 => 166,  518 => 180,  512 => 84,  509 => 272,  507 => 165,  504 => 164,  501 => 163,  483 => 258,  481 => 129,  478 => 128,  476 => 147,  467 => 72,  462 => 202,  456 => 68,  450 => 114,  447 => 113,  441 => 196,  428 => 230,  425 => 132,  422 => 184,  419 => 130,  416 => 129,  404 => 90,  401 => 172,  388 => 112,  382 => 115,  376 => 205,  366 => 126,  363 => 153,  359 => 144,  356 => 105,  348 => 140,  346 => 99,  335 => 134,  332 => 116,  325 => 129,  306 => 107,  303 => 122,  291 => 102,  286 => 112,  267 => 101,  250 => 93,  321 => 135,  295 => 178,  274 => 110,  242 => 113,  153 => 56,  104 => 32,  358 => 151,  351 => 141,  347 => 191,  343 => 146,  327 => 114,  323 => 128,  319 => 82,  315 => 125,  301 => 80,  299 => 83,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 50,  260 => 44,  251 => 101,  239 => 64,  213 => 78,  197 => 71,  148 => 49,  270 => 102,  253 => 100,  206 => 57,  198 => 55,  137 => 29,  129 => 180,  84 => 24,  77 => 20,  113 => 38,  81 => 23,  20 => 1,  65 => 22,  97 => 41,  371 => 156,  367 => 155,  331 => 140,  311 => 80,  308 => 287,  272 => 134,  225 => 67,  212 => 78,  90 => 27,  383 => 207,  338 => 135,  326 => 138,  318 => 111,  313 => 183,  304 => 181,  300 => 121,  288 => 118,  280 => 87,  276 => 111,  192 => 53,  126 => 179,  124 => 51,  118 => 49,  114 => 174,  134 => 47,  23 => 12,  296 => 121,  282 => 161,  279 => 104,  228 => 68,  202 => 94,  190 => 76,  185 => 66,  181 => 65,  146 => 70,  165 => 60,  178 => 64,  174 => 65,  53 => 12,  262 => 98,  259 => 103,  245 => 335,  236 => 109,  233 => 87,  231 => 83,  223 => 106,  211 => 81,  195 => 54,  161 => 63,  218 => 123,  215 => 126,  210 => 77,  200 => 72,  186 => 51,  175 => 65,  172 => 62,  167 => 56,  100 => 39,  76 => 34,  434 => 114,  420 => 110,  417 => 243,  410 => 221,  406 => 111,  403 => 117,  394 => 168,  391 => 163,  389 => 160,  385 => 159,  377 => 37,  373 => 156,  369 => 148,  361 => 146,  357 => 123,  353 => 149,  349 => 209,  345 => 147,  333 => 132,  329 => 131,  265 => 105,  257 => 103,  255 => 101,  248 => 94,  216 => 79,  207 => 75,  191 => 69,  180 => 49,  170 => 84,  160 => 57,  150 => 55,  127 => 35,  110 => 41,  70 => 19,  58 => 25,  34 => 5,  480 => 75,  474 => 122,  469 => 158,  461 => 120,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 215,  398 => 88,  393 => 211,  387 => 164,  384 => 121,  381 => 157,  379 => 154,  374 => 217,  368 => 103,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 22,  322 => 101,  314 => 81,  312 => 124,  309 => 129,  305 => 87,  298 => 120,  294 => 85,  285 => 175,  283 => 115,  278 => 106,  268 => 373,  264 => 74,  258 => 94,  252 => 68,  247 => 75,  241 => 90,  229 => 85,  220 => 81,  214 => 63,  177 => 43,  169 => 44,  140 => 58,  132 => 42,  128 => 47,  107 => 40,  61 => 17,  273 => 174,  269 => 107,  254 => 43,  243 => 92,  240 => 72,  238 => 41,  235 => 89,  230 => 62,  227 => 86,  224 => 81,  221 => 67,  219 => 101,  217 => 64,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 81,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 18,  59 => 14,  87 => 41,  201 => 106,  196 => 92,  183 => 50,  171 => 44,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 59,  142 => 30,  138 => 49,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 19,  68 => 30,  56 => 16,  38 => 6,  25 => 13,  21 => 2,  28 => 3,  24 => 2,  31 => 4,  26 => 3,  19 => 1,  93 => 27,  88 => 32,  78 => 18,  46 => 13,  44 => 20,  27 => 3,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 47,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 26,  66 => 25,  55 => 24,  52 => 12,  50 => 22,  43 => 9,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 55,  162 => 59,  154 => 60,  149 => 35,  147 => 54,  144 => 42,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 52,  106 => 51,  103 => 43,  99 => 31,  95 => 34,  92 => 43,  86 => 35,  82 => 28,  80 => 27,  73 => 20,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
