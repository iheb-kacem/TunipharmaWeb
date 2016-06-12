<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_cb1ba3eca661ec422cea45e29025d3481c62e83aaacf5ff36039a9100c0b87c0 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  30 => 5,  26 => 3,  19 => 1,  437 => 220,  434 => 219,  430 => 135,  427 => 134,  423 => 136,  420 => 134,  417 => 133,  413 => 39,  410 => 38,  406 => 10,  403 => 9,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  381 => 217,  377 => 216,  373 => 215,  369 => 214,  365 => 213,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  341 => 207,  337 => 206,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 133,  230 => 116,  227 => 115,  219 => 110,  216 => 109,  207 => 104,  196 => 98,  191 => 95,  189 => 94,  180 => 88,  170 => 81,  160 => 74,  150 => 67,  140 => 60,  131 => 54,  127 => 53,  112 => 40,  105 => 36,  96 => 33,  91 => 35,  87 => 30,  74 => 26,  70 => 26,  66 => 25,  62 => 24,  58 => 22,  54 => 21,  50 => 15,  46 => 14,  36 => 11,  24 => 2,  85 => 23,  82 => 28,  78 => 27,  75 => 28,  71 => 10,  68 => 9,  61 => 24,  49 => 14,  47 => 12,  44 => 11,  42 => 12,  34 => 9,  31 => 2,  338 => 217,  326 => 216,  322 => 215,  286 => 182,  266 => 166,  263 => 165,  248 => 128,  238 => 121,  232 => 145,  226 => 142,  220 => 139,  214 => 108,  208 => 133,  202 => 131,  198 => 130,  148 => 83,  144 => 82,  110 => 38,  101 => 35,  97 => 47,  64 => 17,  59 => 22,  56 => 13,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 6,);
    }
}
