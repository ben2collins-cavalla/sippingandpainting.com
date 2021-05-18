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

/* themes/contrib/cavalla_theme/templates/page/page--404.html.twig */
class __TwigTemplate_7edd57827f73f6883eab488b06af7f96db09271638f00eae81d58d6b503e6dcd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 37, "if" => 42];
        $filters = ["escape" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        // line 36
        echo "
";
        // line 37
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/header.html.twig"), "themes/contrib/cavalla_theme/templates/page/page--404.html.twig", 37)->display($context);
        // line 38
        echo "<main id=\"content\" class=\"column\" role=\"main\">

  ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "

  ";
        // line 42
        if ((($context["logged_in"] ?? null) && $this->getAttribute(($context["page"] ?? null), "admin_tabs", []))) {
            // line 43
            echo "     <div class=\"admin--tabs\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "admin_tabs", [])), "html", null, true);
            echo "</div>
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  <section id=\"basic_page_cavalla\">
    <!--Hero Image-->
      <section class=\"bp_hero_image\">
        <picture class=\"\">
          <img  class=\"background_image\" src=\"";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "themes/contrib/cavalla_theme/src/images/404_error.jpg\" />
        </picture>
        <section class=\"marketing_background_text center_text\">
            <section class=\"container\">
              <h1 class=\"title-header\">404 Error</h1>
            </section>
          </section>
      </section>
        <!--Hero Image-->
      <section class=\"container py-5\">
        ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "alerts", [])), "html", null, true);
        echo "

        ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </section>
  </section>
  ";
        // line 67
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/footer.html.twig"), "themes/contrib/cavalla_theme/templates/page/page--404.html.twig", 67)->display($context);
        // line 68
        echo "</main>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/cavalla_theme/templates/page/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 68,  113 => 67,  107 => 64,  102 => 62,  89 => 52,  80 => 46,  77 => 45,  71 => 43,  69 => 42,  64 => 40,  60 => 38,  58 => 37,  55 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *

 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{% include directory ~ '/templates/_includes/global/header.html.twig' %}
<main id=\"content\" class=\"column\" role=\"main\">

  {{ messages }}

  {% if logged_in and page.admin_tabs  %}
     <div class=\"admin--tabs\">{{ page.admin_tabs }}</div>
  {% endif %}

  {{ page.help }}

  <section id=\"basic_page_cavalla\">
    <!--Hero Image-->
      <section class=\"bp_hero_image\">
        <picture class=\"\">
          <img  class=\"background_image\" src=\"{{ base_url }}themes/contrib/cavalla_theme/src/images/404_error.jpg\" />
        </picture>
        <section class=\"marketing_background_text center_text\">
            <section class=\"container\">
              <h1 class=\"title-header\">404 Error</h1>
            </section>
          </section>
      </section>
        <!--Hero Image-->
      <section class=\"container py-5\">
        {{ page.alerts }}

        {{ page.content }}
      </section>
  </section>
  {% include directory ~ '/templates/_includes/global/footer.html.twig' %}
</main>
", "themes/contrib/cavalla_theme/templates/page/page--404.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/cavalla_theme/templates/page/page--404.html.twig");
    }
}
