<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/cavalla/modules/cavalla_content_types/cavalla_basic_page/templates/node--cavalla-basic-page.html.twig */
class __TwigTemplate_deda4999443cb99d8e5f43b06cf556392b4da9fb9b309ff7536a06145659f5d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "spaceless" => 7];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"basic_page_cavalla\">
 ";
        // line 2
        if (twig_in_filter("Off", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bp_hero_image_hide", []), 0, [], "array"))) {
            // line 3
            echo "  <!--Hero Image-->
    <section class=\"hero_image\">
      ";
            // line 5
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bp_hero_image", []), 0, [], "array"))) {
                // line 6
                echo "        <picture class=\"\">
          <img  class=\"background_image\" src=\"";
                // line 7
                ob_start();
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_bp_hero_image", []), 0, [], "array")), "html", null, true);
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                echo "\" />
        </picture>

    \t  <section class=\"marketing_background_text center_text\">
    \t\t  <section class=\"container\">
    \t\t\t\t<h1 class=\"title-header\">";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
                echo "</h1>
    \t\t\t</section>
    \t\t</section>
      ";
            }
            // line 16
            echo "    </section>
      <!--Hero Image-->

      <!--Breadcrumb-->
      <section class=\"breadcrumb_section p-3\">
          <div class=\"container\">
              <nav aria-label=\"breadcrumb\" class=\"breadcrumb\">
                  ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
              </nav>
          </div>
      </section>
     <!--Breadcrumb-->
  ";
        }
        // line 29
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_bp_widgets", [])), "html", null, true);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_content_types/cavalla_basic_page/templates/node--cavalla-basic-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  95 => 23,  86 => 16,  79 => 12,  69 => 7,  66 => 6,  64 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"basic_page_cavalla\">
 {% if 'Off' in content.field_cavalla_bp_hero_image_hide[0] %}
  <!--Hero Image-->
    <section class=\"hero_image\">
      {%  if true in content.field_cavalla_bp_hero_image[0] %}
        <picture class=\"\">
          <img  class=\"background_image\" src=\"{% spaceless %}{{content.field_cavalla_bp_hero_image[0]}}{% endspaceless %}\" />
        </picture>

    \t  <section class=\"marketing_background_text center_text\">
    \t\t  <section class=\"container\">
    \t\t\t\t<h1 class=\"title-header\">{{node.title.value}}</h1>
    \t\t\t</section>
    \t\t</section>
      {% endif %}
    </section>
      <!--Hero Image-->

      <!--Breadcrumb-->
      <section class=\"breadcrumb_section p-3\">
          <div class=\"container\">
              <nav aria-label=\"breadcrumb\" class=\"breadcrumb\">
                  {{ breadcrumb }}
              </nav>
          </div>
      </section>
     <!--Breadcrumb-->
  {% endif %}
  {{ content.field_cavalla_bp_widgets }}
</section>
", "modules/contrib/cavalla/modules/cavalla_content_types/cavalla_basic_page/templates/node--cavalla-basic-page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_content_types/cavalla_basic_page/templates/node--cavalla-basic-page.html.twig");
    }
}
