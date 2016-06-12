<?php

/* MainBundle:Recherche:Search.html.twig */
class __TwigTemplate_1ca33a14f9fc74e2f2b74a307effd03abb65ab625db36b4b077445dfeeec4035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PageLayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'css' => array($this, 'block_css'),
            'corps' => array($this, 'block_corps'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::PageLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Chercher Une Pharmacie  | TuniPharma
";
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        // line 7
        echo "    Chercher une  Pharmacie 
";
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    // line 12
    public function block_css($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
    }

    // line 15
    public function block_corps($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class='row'>
        <div class='page-header page-header-with-icon no-mg-t'>
            <i class='fa-icon-table'></i>
            <h2>
                Les Pharmacies
            </h2>
        </div>
        <div class='col-sm-12'>
            <div id='map-canvas'></div>
        </div>
        <div class='page-header page-header-with-icon no-mg-t'></div>
        <div class='row'>
            <div class='col-xs-12'>
                <div class='panel-group accordion' id='accordion'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <a class='accordion-toggle collapsed' data-parent='#accordion' data-toggle='collapse' href='#accordion-item-2'>
                                    Recherche Avancé
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='accordion-item-2'>
                            <div class='panel-body'>
                                <form class=\"form form-horizontal\">
                                    <div class=\"row\">
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='col-md-3 control-label' for='input-select'>Gouvernorat</label>
                                                <div class='col-md-5'>
                                                    <select class='form-control  select-gouvernorat' id='input-select' name='gouvernorat'>
                                                        <option></option>
                                                        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gouvernorats"]) ? $context["gouvernorats"] : $this->getContext($context, "gouvernorats")));
        foreach ($context['_seq'] as $context["_key"] => $context["gouvernorat"]) {
            // line 50
            echo "                                                            <option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gouvernorat"]) ? $context["gouvernorat"] : $this->getContext($context, "gouvernorat")), 1, array(), "array"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gouvernorat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class='form-group'>

                                                <label class='col-md-3 control-label' for='input-select'>Délégation</label>
                                                <div class='col-md-5'>
                                                    <select class='form-control select-delegation' id='input-select'  name='delegation'>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='col-md-3 control-label'> Type</label>
                                                <div class='col-md-9'>
                                                    <div class='radio'>
                                                        <label>
                                                            <input name='radio' type='radio' value='Pharmacie de Jour'>
                                                            Pharmacie de jour
                                                        </label>
                                                    </div>
                                                    <div class='radio'>
                                                        <label>
                                                            <input name='radio' type='radio' value='Pharmacie de Nuit'>
                                                            Pharmacie de nuit                          </label>
                                                    </div>
                                                    <div class='radio'>
                                                        <label>
                                                            <input name='garde' type='radio' value='Pharmacie de Garde'>
                                                            Pharmacie de garde                          </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class='col-sm-12'>
                                            <div class='col-md-2 col-md-offset-3'>
                                                <button class='btn btn-contrast' type='button' onclick=\"search()\">
                                                    <i class='icon-save'></i>
                                                    Rechercher
                                                </button>
                                            </div>
                                            <div class='col-md-2'>
                                                <button class='btn btn-contrast' type='reset'>
                                                    <i class='icon-save'></i>
                                                    Initialiser
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='page-header page-header-with-icon no-mg-t'></div>
        <div class='row'>
            <div class='col-xs-12'>
                <div class='table-responsive'>

                    <table class='table table-hover' id=\"example\">
                        <thead>
                            <tr>
                                <th>
                                    <i class='fa-icon-envelope-alt text-contrast'></i>
                                    Nom
                                </th>
                                <th>
                                    <i class='fa-icon-user text-contrast'></i>
                                    Adresse
                                </th>
                                <th>
                                    <i class='fa-icon-user text-contrast'></i>
                                    Type
                                </th>
                                <th>
                                    <i class='fa-icon-user text-contrast'></i>
                                    Gouvernorat
                                </th>
                                <th>
                                    <i class='fa-icon-user text-contrast'></i>
                                    Delegation
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 153
    public function block_scripts($context, array $blocks = array())
    {
        // line 154
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyApra_QEBW3-pPoaWIQNmCpY5e0skbX3pQ&sensor=false\">
    </script>
    <script>
        var data = [];
        var markers = [];
        ";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Pharmacies"]) ? $context["Pharmacies"] : $this->getContext($context, "Pharmacies")));
        foreach ($context['_seq'] as $context["_key"] => $context["phar"]) {
            // line 163
            echo "            data.push([\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "nom"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "adresse"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "type"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "ville"), "gouvernorat"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "ville"), "delegation"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "garde"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "lat"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "log"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pharmacie", array("id" => $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "id"))), "html", null, true);
            echo "\"]);
            //marker.push([\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "lat"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "log"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "nom"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pharmacie", array("id" => $this->getAttribute($this->getAttribute((isset($context["phar"]) ? $context["phar"] : $this->getContext($context, "phar")), "pharmacie"), "id"))), "html", null, true);
            echo "\"]);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            var table;
            function initTable() {

                table = \$('#example').DataTable({
                    data: data,
                    \"columnDefs\": [
                        {
                            \"targets\": [5, 6, 7, 8],
                            \"visible\": false
                        }
                    ],
                    \"fnRowCallback\": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                        \$(nRow).attr(\"href\", href = aData[8]);
                        return nRow;
                    }
                });
                \$('#example')
                        .removeClass('display')
                        .addClass('table table-striped table-bordered');
            }

            function search() {
                table.draw();
            }
            \$(document).ready(function() {
                initTable();
                
                \$.fn.dataTable.ext.search.push(
                        function(settings, data, dataIndex) {
                            var type = \$('input[name=radio]:checked').val();
                            if (typeof type === \"undefined\") {
                                type = '';
                            }
                            var garde = \$('input[name=garde]:checked').val();
                            if (typeof garde === \"undefined\") {
                                garde = '';
                            } else {
                                garde = 'true';
                            }
                            var gouvernorat = \$('.select-gouvernorat option:selected').val();
                            if (typeof gouvernorat === \"undefined\") {
                                gouvernorat = '';
                            }
                            var delegation = \$('.select-delegation option:selected').val();
                            if (typeof delegation === \"undefined\") {
                                delegation = '';
                            }
                            if ((type.length === 0 || type === data[2]) &&
                                    (garde.length === 0 || garde === data[5]) &&
                                    (gouvernorat.length <= 1 || gouvernorat === data[3]) &&
                                    (delegation.length <= 1 || delegation === data[4]))
                            {
                                markers[dataIndex].setMap(maCarte);
                                return true;
                            } else {
                                markers[dataIndex].setMap(null);
                                return false;
                            }
                        }
                );
                \$('.select-gouvernorat').change(function(e) {
                    var gouvernorat = \$(this).find(\"option:selected\").val();
                    \$('.select-delegation').html('');
                    \$.ajax({
                        url: '";
        // line 230
        echo $this->env->getExtension('routing')->getPath("_rechercher_delegations");
        echo "',
                        data: {gouvernorat: gouvernorat},
                        success: function(data) {
                            \$('.select-delegation').append('<option value=\" \"> </option>');
                            \$.each(data, function(index, val) {
                                \$('.select-delegation').append('<option value=\"' + val[1] + '\">' + val[1] + '</option>');
                            });
                        }
                    });
                });




                \$('table tbody tr').click(function() {
                    window.location = \$(this).attr('href');
                    return false;
                });
            });

            var maCarte;

            function initialisation() {
                var optionsCarte = {
                    zoom: 6,
                    center: new google.maps.LatLng(34.9931605, 9.9607654),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                }
                maCarte = new google.maps.Map(document.getElementById(\"map-canvas\"), optionsCarte);
                for (var i = 0, I = data.length; i < I; i++) {
                    ajouteMarqueur(data[i][6], data[i][7], data[i][0], data[i][8]);
                }
            }
            function ajouteMarqueur(lat, lng, nom, href) {
                var optionsMarqueur = {
                    map: maCarte,
                    position: new google.maps.LatLng(lat, lng)
                };
                var marker = new google.maps.Marker(optionsMarqueur);
                markers.push(marker);
                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(marker, 'click', (function(marker, nom, href) {
                    return function() {
                        infowindow.setContent('<a href=\"' + href + '\">' + nom + '</a>');
                        infowindow.open(maCarte, marker, href);
                    }
                })(marker, nom, href));
            }

            google.maps.event.addDomListener(window, 'load', initialisation);

    </script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Recherche:Search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 230,  278 => 166,  264 => 164,  243 => 163,  239 => 162,  229 => 155,  224 => 154,  221 => 153,  118 => 52,  109 => 50,  105 => 49,  70 => 16,  67 => 15,  60 => 13,  57 => 12,  52 => 10,  49 => 9,  44 => 7,  41 => 6,  36 => 4,  33 => 3,);
    }
}
