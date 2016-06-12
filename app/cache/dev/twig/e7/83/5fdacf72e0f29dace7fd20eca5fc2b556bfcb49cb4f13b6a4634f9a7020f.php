<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_e7835fdacf72e0f29dace7fd20eca5fc2b556bfcb49cb4f13b6a4634f9a7020f extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  30 => 5,  26 => 3,  19 => 1,  437 => 220,  434 => 219,  430 => 135,  427 => 134,  423 => 136,  420 => 134,  417 => 133,  413 => 39,  410 => 38,  406 => 10,  403 => 9,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  381 => 217,  377 => 216,  373 => 215,  369 => 214,  365 => 213,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  341 => 207,  337 => 206,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 133,  230 => 116,  227 => 115,  219 => 110,  216 => 109,  207 => 104,  196 => 98,  191 => 95,  189 => 94,  180 => 88,  170 => 81,  160 => 74,  150 => 67,  140 => 60,  131 => 54,  127 => 53,  112 => 40,  105 => 36,  96 => 33,  91 => 35,  87 => 30,  74 => 26,  70 => 26,  66 => 25,  62 => 24,  58 => 22,  54 => 21,  50 => 15,  46 => 14,  36 => 11,  24 => 2,  85 => 23,  82 => 28,  78 => 27,  75 => 28,  71 => 10,  68 => 9,  61 => 24,  49 => 14,  47 => 12,  44 => 11,  42 => 12,  34 => 9,  31 => 2,  338 => 217,  326 => 216,  322 => 215,  286 => 182,  266 => 166,  263 => 165,  248 => 128,  238 => 121,  232 => 145,  226 => 142,  220 => 139,  214 => 108,  208 => 133,  202 => 131,  198 => 130,  148 => 83,  144 => 82,  110 => 38,  101 => 35,  97 => 47,  64 => 17,  59 => 22,  56 => 13,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 6,);
    }
}
