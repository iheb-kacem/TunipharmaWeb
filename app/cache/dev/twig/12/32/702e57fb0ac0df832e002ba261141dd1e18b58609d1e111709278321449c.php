<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_1232702e57fb0ac0df832e002ba261141dd1e18b58609d1e111709278321449c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  156 => 64,  152 => 62,  150 => 61,  141 => 58,  138 => 57,  134 => 55,  123 => 52,  109 => 46,  105 => 44,  101 => 42,  99 => 41,  90 => 38,  74 => 30,  62 => 24,  56 => 21,  53 => 20,  37 => 17,  29 => 15,  26 => 14,  975 => 278,  972 => 277,  969 => 276,  965 => 309,  961 => 307,  955 => 304,  952 => 303,  950 => 302,  944 => 299,  936 => 298,  933 => 297,  931 => 296,  928 => 295,  922 => 293,  920 => 292,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  900 => 285,  898 => 284,  895 => 283,  889 => 281,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  876 => 274,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  841 => 251,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  772 => 227,  768 => 225,  762 => 224,  757 => 221,  751 => 220,  739 => 218,  736 => 217,  732 => 216,  725 => 215,  719 => 214,  716 => 213,  713 => 212,  710 => 211,  705 => 210,  703 => 209,  696 => 206,  692 => 205,  688 => 203,  686 => 202,  683 => 201,  680 => 200,  673 => 199,  670 => 198,  667 => 197,  664 => 196,  658 => 195,  655 => 194,  652 => 193,  649 => 191,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 184,  617 => 183,  611 => 182,  607 => 180,  593 => 171,  587 => 169,  584 => 168,  581 => 167,  577 => 231,  574 => 228,  571 => 183,  569 => 182,  566 => 181,  563 => 167,  560 => 166,  554 => 232,  552 => 166,  548 => 164,  545 => 163,  538 => 312,  536 => 237,  532 => 235,  530 => 163,  527 => 162,  524 => 161,  513 => 148,  507 => 145,  503 => 143,  500 => 142,  492 => 136,  489 => 135,  481 => 129,  478 => 128,  474 => 125,  470 => 123,  464 => 121,  461 => 120,  458 => 119,  444 => 118,  438 => 116,  434 => 114,  428 => 112,  420 => 110,  418 => 109,  415 => 108,  412 => 107,  394 => 106,  391 => 105,  389 => 104,  386 => 103,  383 => 102,  380 => 101,  376 => 157,  372 => 155,  370 => 128,  366 => 126,  364 => 101,  353 => 92,  350 => 91,  347 => 90,  342 => 88,  336 => 86,  333 => 85,  330 => 84,  321 => 83,  319 => 82,  314 => 81,  311 => 80,  306 => 158,  303 => 90,  301 => 80,  298 => 79,  295 => 78,  289 => 77,  284 => 53,  275 => 51,  271 => 50,  264 => 46,  260 => 44,  254 => 43,  246 => 42,  238 => 41,  234 => 39,  231 => 38,  226 => 35,  217 => 33,  213 => 32,  210 => 31,  207 => 30,  201 => 26,  198 => 25,  192 => 23,  186 => 316,  184 => 161,  181 => 160,  179 => 78,  175 => 74,  168 => 69,  165 => 73,  151 => 72,  146 => 70,  143 => 69,  139 => 67,  110 => 62,  104 => 60,  102 => 59,  97 => 57,  93 => 39,  91 => 38,  88 => 37,  76 => 23,  70 => 29,  67 => 20,  61 => 18,  58 => 22,  49 => 14,  46 => 19,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 75,  167 => 56,  164 => 55,  162 => 68,  157 => 51,  148 => 49,  144 => 59,  136 => 66,  133 => 65,  129 => 44,  120 => 51,  116 => 50,  113 => 63,  111 => 47,  107 => 37,  98 => 35,  94 => 34,  86 => 30,  83 => 29,  81 => 33,  77 => 31,  73 => 22,  64 => 19,  59 => 23,  55 => 16,  52 => 15,  50 => 20,  45 => 18,  42 => 17,  39 => 16,  34 => 16,  28 => 14,);
    }
}
