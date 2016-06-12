<?php

/* MainBundle:AddService:AddService.html.twig */
class __TwigTemplate_8a28a36c8982ceac7c184cc47884efae56fc7f1306e257e9586a4b728e65bbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PageLayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
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
        echo "    Ajout Service  | TuniPharma
";
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        // line 7
        echo "    Ajout de Service 
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
    public function block_corps($context, array $blocks = array())
    {
        // line 13
        echo "    <div class='col-sm-12'>
    <form name=\"formulaire\" class=\"form form-horizontal\" method=\"post\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_add_service_name");
        echo "\" onSubmit=\"return verif_formulaire()\" accept-charset=\"UTF-8\"><input name=\"authenticity_token\" type=\"hidden\" />
        <fieldset class='row'>
            <div class='form-group'>
                <label class=\"col-md-3 control-label\"  for=\"input-select\">Catégorie : </label>
                <div class=\"col-md-5\">
                    <select class='form-control select-categorie' id='categorie-choice' name='categorie'>
                        <option selected></option>
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "                               <option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), 1, array(), "array"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>
                    <div style='height:15px; color:red' id='t1'></div>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">Nom du Service : </label>
                <div class=\"col-md-5\" for=\"input-text\">
                    <input class='form-control text-name' type=\"text\"  id='name-choice' name='nom'>
                    <div style='height:15px; color:red' id='t2'></div>
                </div>
            </div>
            
            <div class='form-group'>
                <label class=\"col-md-3 control-label\"  for=\"nom\">Description : </label>
                <div class=\"col-md-5\" for=\"input-text\">
                    <TEXTAREA class='form-control text-description' id='description-choice' name=\"description\"></textarea>
                    <div style='height:15px; color:red' id='t3'></div>
                </div>
            </div>
        </fieldset>
        <hr class='hr-dashed'>
        <div class='col-sm-7 col-sm-offset-1'>
            <div class='col-md-9 col-md-offset-3'>
                <button class='btn btn-contrast' id='insert-btn' href='#' type='submit'>
                    <i class='icon-save'></i>
                    Ajouter la demande
            </div>
        </div>
    </form>
</div>

";
    }

    // line 57
    public function block_scripts($context, array $blocks = array())
    {
        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script>

    
    function verif_formulaire(){
        document.getElementById('t1').innerHTML = '';
        document.getElementById('t2').innerHTML = '';
        document.getElementById('t3').innerHTML = '';
        
        if (document.formulaire.categorie.value==\"\"){
          document.getElementById('t1').innerHTML = '  Veuillez préciser la categorie du service!';
            return false;  
        }
        
        if (document.formulaire.nom.value==\"\"){
          document.getElementById('t2').innerHTML = '  Veuillez entrer le nom du service!';
            return false;  
        }
        
        if (document.formulaire.description.value==\"\"){
          document.getElementById('t3').innerHTML = '  Veuillez préciser une description du service!';
            return false;  
        }
        
    } 
  

</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:AddService:AddService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  120 => 57,  85 => 24,  76 => 22,  72 => 21,  62 => 14,  59 => 13,  56 => 12,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 3,);
    }
}
