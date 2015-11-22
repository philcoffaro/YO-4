<?php

/* themes/bootstrap/templates/system/form-element-label.html.twig */
class __TwigTemplate_42609e6deef4d59cd56250c7972ed44d7f8c14cd18bf6305b3fa636a4a8bb475 extends Twig_Template
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
        $tags = array("set" => 20, "if" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 20
        $context["classes"] = array(0 => (((        // line 21
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 22
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 23
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 26
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 27
            echo "<label";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
    ";
            // line 28
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 29
                echo "      <p class=\"help-block\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                echo "</p>
    ";
            }
            // line 31
            echo "  </label>
  ";
            // line 32
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 33
                echo "    <span class=\"form-required\">*</span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  69 => 32,  66 => 31,  60 => 29,  58 => 28,  50 => 27,  48 => 26,  46 => 23,  45 => 22,  44 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - element: an input element.*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - description: element description.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/* set classes = [*/
/* title_display == 'after' ? 'option',*/
/* title_display == 'invisible' ? 'visually-hidden',*/
/* required ? 'form-required',*/
/* ]*/
/* %}*/
/* {% if title is not empty or required -%}*/
/*   <label{{ attributes.addClass(classes) }}>{{ element }}{{ title }}*/
/*     {% if description %}*/
/*       <p class="help-block">{{ description }}</p>*/
/*     {% endif %}*/
/*   </label>*/
/*   {% if required %}*/
/*     <span class="form-required">*</span>*/
/*   {% endif %}*/
/* {%- endif %}*/
/* */
