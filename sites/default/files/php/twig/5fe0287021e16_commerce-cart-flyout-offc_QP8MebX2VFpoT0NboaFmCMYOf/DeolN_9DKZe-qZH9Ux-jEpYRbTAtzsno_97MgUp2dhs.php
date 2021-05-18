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

/* modules/contrib/cavalla/modules/cavalla_commerce/templates/commerce-cart-flyout-offcanvas--default.html.twig */
class __TwigTemplate_e81a20157fa50b14429913fd3a4f5fc29d66e9b223985940835ebcc7baa9e1ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
        echo "<div class=\"cart--cart-offcanvas\">
  <div class=\"cart--cart-offcanvas__close container mb-2\">
    <button class=\"button btn fa fa-times-circle float-right\"><span class=\"visually-hidden\"> ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close cart"));
        echo "</span> </button>
  </div>
<% if (count > 0) { %>
  <div class=\"cart-block--offcanvas-contents\">
    <div class=\"cart-block--offcanvas-contents__inner\">
      <div class=\"cart-block--offcanvas-contents__items\"></div>
     ";
        // line 12
        echo "    </div>
  </div>
<% } else { %>
  <div>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Your cart is empty"));
        echo "</div>
<% } %>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_commerce/templates/commerce-cart-flyout-offcanvas--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  68 => 12,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cart--cart-offcanvas\">
  <div class=\"cart--cart-offcanvas__close container mb-2\">
    <button class=\"button btn fa fa-times-circle float-right\"><span class=\"visually-hidden\"> {{ 'Close cart'|t }}</span> </button>
  </div>
<% if (count > 0) { %>
  <div class=\"cart-block--offcanvas-contents\">
    <div class=\"cart-block--offcanvas-contents__inner\">
      <div class=\"cart-block--offcanvas-contents__items\"></div>
     {#  <div class=\"cart-block--offcanvas-contents__links\">
        <%= links %>
      </div> #}
    </div>
  </div>
<% } else { %>
  <div>{{ 'Your cart is empty'|t }}</div>
<% } %>
</div>
", "modules/contrib/cavalla/modules/cavalla_commerce/templates/commerce-cart-flyout-offcanvas--default.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_commerce/templates/commerce-cart-flyout-offcanvas--default.html.twig");
    }
}
