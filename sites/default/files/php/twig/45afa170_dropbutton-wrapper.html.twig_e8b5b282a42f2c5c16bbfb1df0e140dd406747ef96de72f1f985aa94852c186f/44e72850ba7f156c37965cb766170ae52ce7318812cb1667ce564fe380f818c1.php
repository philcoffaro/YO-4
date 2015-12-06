<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_e8c32997b8b377466d719f87569c0cc52fbbd1d6b6ce5467931501e926a7aaee extends Twig_Template
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
        $tags = array("if" => 13, "spaceless" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
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

        // line 13
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 14
            echo "  ";
            ob_start();
            // line 15
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  48 => 15,  45 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a dropbutton wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Contains the child elements of the dropbutton menu.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_dropbutton_wrapper()*/
/*  *//* */
/* #}*/
/* {% if children %}*/
/*   {% spaceless %}*/
/*     <div class="dropbutton-wrapper">*/
/*       <div class="dropbutton-widget">*/
/*         {{ children }}*/
/*       </div>*/
/*     </div>*/
/*   {% endspaceless %}*/
/* {% endif %}*/
/* */
