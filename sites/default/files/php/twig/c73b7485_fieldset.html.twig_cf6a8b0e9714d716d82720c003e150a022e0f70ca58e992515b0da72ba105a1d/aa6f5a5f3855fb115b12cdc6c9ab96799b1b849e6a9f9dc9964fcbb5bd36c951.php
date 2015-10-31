<?php

/* core/themes/classy/templates/form/fieldset.html.twig */
class __TwigTemplate_0aa7fe657ab91555fbd44584116a283fafec25ec88a76131173769e8dc377fee extends Twig_Template
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
        // line 24
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper");
        // line 31
        echo "<fieldset";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 33
        $context["legend_span_classes"] = array(0 => "fieldset-legend", 1 => ((        // line 35
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 36
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 39
        echo "  ";
        // line 40
        echo "  <legend";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes", array()), "html", null, true);
        echo ">
    <span";
        // line 41
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes", array()), "addClass", array(0 => (isset($context["legend_span_classes"]) ? $context["legend_span_classes"] : null)), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title", array()), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 44
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 45
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 46
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 49
        echo "    ";
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 50
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 52
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
    ";
        // line 53
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 54
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 56
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) {
            // line 57
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 59
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 59,  81 => 57,  78 => 56,  72 => 54,  70 => 53,  65 => 52,  59 => 50,  56 => 49,  50 => 46,  47 => 45,  45 => 44,  37 => 41,  32 => 40,  30 => 39,  28 => 36,  27 => 35,  26 => 33,  21 => 31,  19 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a fieldset element and its children.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the fieldset element.*/
/*  * - errors: (optional) Any errors for this fieldset element, may not be set.*/
/*  * - required: Boolean indicating whether the fieldeset element is required.*/
/*  * - legend: The legend element containing the following properties:*/
/*  *   - title: Title of the fieldset, intended for use as the text of the legend.*/
/*  *   - attributes: HTML attributes to apply to the legend.*/
/*  * - description: The description element containing the following properties:*/
/*  *   - content: The description content of the fieldset.*/
/*  *   - attributes: HTML attributes to apply to the description container.*/
/*  * - children: The rendered child elements of the fieldset.*/
/*  * - prefix: The content to add before the fieldset children.*/
/*  * - suffix: The content to add after the fieldset children.*/
/*  **/
/*  * @see template_preprocess_fieldset()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'js-form-item',*/
/*     'form-item',*/
/*     'js-form-wrapper',*/
/*     'form-wrapper',*/
/*   ]*/
/* %}*/
/* <fieldset{{ attributes.addClass(classes) }}>*/
/*   {%*/
/*     set legend_span_classes = [*/
/*       'fieldset-legend',*/
/*       required ? 'js-form-required',*/
/*       required ? 'form-required',*/
/*     ]*/
/*   %}*/
/*   {#  Always wrap fieldset legends in a SPAN for CSS positioning. #}*/
/*   <legend{{ legend.attributes }}>*/
/*     <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>*/
/*   </legend>*/
/*   <div class="fieldset-wrapper">*/
/*     {% if errors %}*/
/*       <div class="form-item--error-message">*/
/*         <strong>{{ errors }}</strong>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if prefix %}*/
/*       <span class="field-prefix">{{ prefix }}</span>*/
/*     {% endif %}*/
/*     {{ children }}*/
/*     {% if suffix %}*/
/*       <span class="field-suffix">{{ suffix }}</span>*/
/*     {% endif %}*/
/*     {% if description.content %}*/
/*       <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </fieldset>*/
/* */
