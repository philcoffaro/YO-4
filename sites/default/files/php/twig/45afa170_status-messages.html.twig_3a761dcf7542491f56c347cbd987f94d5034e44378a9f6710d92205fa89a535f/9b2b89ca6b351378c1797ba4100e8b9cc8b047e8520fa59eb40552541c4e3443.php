<?php

/* themes/bootstrap/templates/system/status-messages.html.twig */
class __TwigTemplate_36213d902066a7ad377b2c62cc968ed857a093a9eca8a28aae94de9634f2a8bc extends Twig_Template
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
        $tags = array("for" => 28, "if" => 29, "set" => 30);
        $filters = array("length" => 49, "first" => 56);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('length', 'first'),
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

        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  ";
            if (($context["type"] == "status")) {
                // line 30
                echo "    ";
                $context["type"] = "info";
                // line 31
                echo "  ";
            } elseif (($context["type"] == "error")) {
                // line 32
                echo "    ";
                $context["type"] = "danger";
                // line 33
                echo "  ";
            }
            // line 34
            echo "
    ";
            // line 36
            $context["classes"] = array(0 => "alert", 1 => ("alert-" .             // line 38
$context["type"]));
            // line 41
            echo "
  <div class=\"";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true));
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\">
    ";
            // line 43
            if (($context["type"] == "error")) {
                // line 44
                echo "      <div role=\"alert\">
    ";
            }
            // line 46
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 47
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 49
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 50
                echo "        <ul class=\"messages__list\">
          ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 52
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </ul>
      ";
            } else {
                // line 56
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 58
            echo "    ";
            if (($context["type"] == "error")) {
                // line 59
                echo "      </div>
    ";
            }
            // line 61
            echo "  </div>
  ";
            // line 63
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  128 => 61,  124 => 59,  121 => 58,  115 => 56,  111 => 54,  102 => 52,  98 => 51,  95 => 50,  92 => 49,  86 => 47,  83 => 46,  79 => 44,  77 => 43,  71 => 42,  68 => 41,  66 => 38,  65 => 36,  62 => 34,  59 => 33,  56 => 32,  53 => 31,  50 => 30,  47 => 29,  43 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% for type, messages in message_list %}*/
/*   {% if type == 'status' %}*/
/*     {% set type = 'info' %}*/
/*   {% elseif type == 'error' %}*/
/*     {% set type = 'danger' %}*/
/*   {% endif %}*/
/* */
/*     {%*/
/*     set classes = [*/
/*       'alert',*/
/*       'alert-' ~ type,*/
/*     ]*/
/*   %}*/
/* */
/*   <div class="{{ attributes.addClass(classes).class }}" role="contentinfo" aria-label="{{ status_headings[type] }}">*/
/*     {% if type == 'error' %}*/
/*       <div role="alert">*/
/*     {% endif %}*/
/*       {% if status_headings[type] %}*/
/*         <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*       {% endif %}*/
/*       {% if messages|length > 1 %}*/
/*         <ul class="messages__list">*/
/*           {% for message in messages %}*/
/*             <li class="messages__item">{{ message }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         {{ messages|first }}*/
/*       {% endif %}*/
/*     {% if type == 'error' %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   {# Remove type specific classes. #}*/
/*   {{ attributes.removeClass(classes) }}*/
/* {% endfor %}*/
/* */
