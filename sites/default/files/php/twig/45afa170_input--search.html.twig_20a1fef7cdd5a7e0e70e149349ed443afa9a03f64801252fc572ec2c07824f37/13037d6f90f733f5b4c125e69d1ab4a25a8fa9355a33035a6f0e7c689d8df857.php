<?php

/* themes/bootstrap/templates/search/input--search.html.twig */
class __TwigTemplate_606f85df723e3008fd36a822ccbc60168257771e5190118dccb50cb4c2545780 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 11
        echo "<div class=\"input-group\">
  <input";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  <span class=\"input-group-btn\">
    <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span></button>
  </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/search/input--search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  43 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * input--search.html.twig*/
/*  **/
/*  * Markup for Bootstrap search forms.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <div class="input-group">*/
/*   <input{{ attributes }} />{{ children }}*/
/*   <span class="input-group-btn">*/
/*     <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>*/
/*   </span>*/
/* </div>*/
/* */
