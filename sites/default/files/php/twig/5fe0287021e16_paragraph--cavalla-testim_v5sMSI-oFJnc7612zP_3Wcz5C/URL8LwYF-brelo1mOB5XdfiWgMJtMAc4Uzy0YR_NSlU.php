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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials-field.html.twig */
class __TwigTemplate_76c28febf93b53762e8240c11caa35e04a2e792fd2e05f0da766c0c7e3928f14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"testimonial_bundle card\">
    <div class=\"testimonial\">
        ";
        // line 3
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_field_image", []), 0, [], "array"))) {
            // line 4
            echo "            <div class=\"avatar\">
                <div class=\"pic\" style=\"background-image: url('";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_field_image", []), 0, [], "array")), "html", null, true);
            echo "')\">&nbsp;</div>
            </div>
        ";
        }
        // line 8
        echo "        <div class=\"container text-center py-3\">
            <div class=\"col-12\">
                <p class=\"quote lead text-center\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_field_quote", []), 0, [], "array")), "html", null, true);
        echo "</p>
                <strong class=\"cite\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_field_name", []), 0, [], "array")), "html", null, true);
        echo "</strong>
                <small>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_field_job", []), 0, [], "array")), "html", null, true);
        echo "</small>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  78 => 11,  74 => 10,  70 => 8,  64 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testimonial_bundle card\">
    <div class=\"testimonial\">
        {% if true in content.field_testimonial_field_image[0] %}
            <div class=\"avatar\">
                <div class=\"pic\" style=\"background-image: url('{{ content.field_testimonial_field_image[0] }}')\">&nbsp;</div>
            </div>
        {% endif %}
        <div class=\"container text-center py-3\">
            <div class=\"col-12\">
                <p class=\"quote lead text-center\">{{ content.field_testimonial_field_quote[0] }}</p>
                <strong class=\"cite\">{{ content.field_testimonial_field_name[0] }}</strong>
                <small>{{ content.field_testimonial_field_job[0] }}</small>
            </div>
        </div>
    </div>
</div>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials-field.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials-field.html.twig");
    }
}
