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

/* themes/contrib/cavalla_theme/templates/page/page.html.twig */
class __TwigTemplate_acdbf5cb33462909afff40fcdfad8887eb00041a48c3d98e41c3a457421e2861 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 37, "if" => 43];
        $filters = ["escape" => 41];
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/header.html.twig"), "themes/contrib/cavalla_theme/templates/page/page.html.twig", 37)->display($context);
        // line 38
        echo "

<main id=\"content\" class=\"column\" role=\"main\">
          ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "

          ";
        // line 43
        if ((($context["logged_in"] ?? null) && $this->getAttribute(($context["page"] ?? null), "admin_tabs", []))) {
            // line 44
            echo "            <div class=\"admin--tabs\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "admin_tabs", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 46
        echo "      
          ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "alerts", [])), "html", null, true);
        echo "
      
          ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          
        ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
</main>    


";
        // line 55
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/footer.html.twig"), "themes/contrib/cavalla_theme/templates/page/page.html.twig", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/cavalla_theme/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 55,  91 => 51,  86 => 49,  81 => 47,  78 => 46,  72 => 44,  70 => 43,  65 => 41,  60 => 38,  58 => 37,  55 => 36,);
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
      
          {{ page.alerts }}
      
          {{ page.help }}
          
        {{ page.content }}
</main>    


{% include directory ~ '/templates/_includes/global/footer.html.twig' %}
", "themes/contrib/cavalla_theme/templates/page/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/cavalla_theme/templates/page/page.html.twig");
    }
}
