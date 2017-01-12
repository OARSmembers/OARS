<?php

/* themes/oars_theme/templates/form/color-scheme-form.html.twig */
class __TwigTemplate_1934eb39fa35ae609e1c0bdecd7efc77ab742e0b4225195fa6bdd6bd06245851 extends Twig_Template
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
        $filters = array("without" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
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
        echo "<div class=\"color-form clearfix\">
  ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scheme", array()), "html", null, true));
        echo "
  <div id=\"palette\" class=\"clearfix\">
    ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "palette", array()), "html", null, true));
        echo "
  </div>
  ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "scheme", "palette"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/oars_theme/templates/form/color-scheme-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  51 => 23,  46 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a theme's color form.*/
/*  **/
/*  * AT Core removes the preview, it's not required for most themes.*/
/*  *  <h2>{{ 'Preview'|t }}</h2>*/
/*  *  {{ html_preview }}*/
/*  **/
/*  * Available variables:*/
/*  * - form: Form elements for the color scheme form, including:*/
/*  *   - scheme: A color scheme form element. For example: a select element with*/
/*  *     color theme presets, or a color picker widget.*/
/*  *   - palette: Color fields that can be changed by entering in a new hex value.*/
/*  * - html_preview: A HTML preview of the theme's current color scheme.*/
/*  **/
/*  * @see template_preprocess_color_scheme_form()*/
/*  *//* */
/* #}*/
/* <div class="color-form clearfix">*/
/*   {{ form.scheme }}*/
/*   <div id="palette" class="clearfix">*/
/*     {{ form.palette }}*/
/*   </div>*/
/*   {{ form|without('scheme', 'palette') }}*/
/* </div>*/
/* */
