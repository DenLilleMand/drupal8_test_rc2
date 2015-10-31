<?php

/* {# inline_template_start #}<div class="block-filter-text-source">{{ label }}</div> */
class __TwigTemplate_dc071b48c9599e8f738d091a25fcb216f054a4c232faea5afab70ae80b9f1590 extends Twig_Template
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
        echo "<div class=\"block-filter-text-source\">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"block-filter-text-source\">{{ label }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {# inline_template_start #}<div class="block-filter-text-source">{{ label }}</div>*/
