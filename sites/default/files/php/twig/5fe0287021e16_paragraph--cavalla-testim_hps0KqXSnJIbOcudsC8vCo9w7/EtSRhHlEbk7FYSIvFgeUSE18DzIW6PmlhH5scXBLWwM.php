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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials.html.twig */
class __TwigTemplate_f6e941e4de47f19bdda2d29b651335b4fd05b88e6173ba50263268102f18ac8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "for" => 17];
        $filters = ["escape" => 1, "length" => 17];
        $functions = ["range" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['range']
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
        echo "<section class=\"py-3 testimonials_bundle\" data-animate-testimonial=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_animation", []), 0, [], "array")), "html", null, true);
        echo "\" >
\t<div class=\"container\">
\t\t<section class=\"text-center\">
\t\t\t";
        // line 4
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_header", []), 0, [], "array"))) {
            // line 5
            echo "\t\t\t<h1 class=\"header_text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_header", []), 0, [], "array")), "html", null, true);
            echo "</h1>
\t\t\t";
        }
        // line 7
        echo "
\t\t\t";
        // line 8
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_text", []), 0, [], "array"))) {
            // line 9
            echo "\t\t\t<p class=\"lead\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 11
        echo "\t\t</section>
\t\t<section class=\"card-deck\">
\t\t\t";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonial_widget", [])), "html", null, true);
        echo "
\t\t</section>
\t\t";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_hyperlink", []), 0, [], "array")) {
            // line 16
            echo "\t\t<section class=\"text-center hyperlinks mt-4\">
\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_testimonial_hyperlink", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "\t\t\t\t";
                if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_hyperlink", []), $context["i"], [], "array"))) {
                    // line 19
                    echo "\t\t\t\t<a class=\"btn btn-dark\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_hyperlink", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_hyperlink", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                    echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t";
                }
                // line 21
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</section>
\t\t";
        }
        // line 24
        echo "\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  116 => 22,  110 => 21,  102 => 19,  99 => 18,  95 => 17,  92 => 16,  90 => 15,  85 => 13,  81 => 11,  75 => 9,  73 => 8,  70 => 7,  64 => 5,  62 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"py-3 testimonials_bundle\" data-animate-testimonial=\"{{ content.field_testimonial_animation[0] }}\" >
\t<div class=\"container\">
\t\t<section class=\"text-center\">
\t\t\t{%  if true in content.field_testimonial_header[0] %}
\t\t\t<h1 class=\"header_text\">{{ content.field_testimonial_header[0] }}</h1>
\t\t\t{% endif %}

\t\t\t{%  if true in content.field_testimonial_text[0] %}
\t\t\t<p class=\"lead\">{{ content.field_testimonial_text[0] }}</p>
\t\t\t{% endif %}
\t\t</section>
\t\t<section class=\"card-deck\">
\t\t\t{{ content.field_testimonial_widget }}
\t\t</section>
\t\t{% if content.field_testimonial_hyperlink[0] %}
\t\t<section class=\"text-center hyperlinks mt-4\">
\t\t\t{% for i in 0..content.field_testimonial_hyperlink|length %}
\t\t\t\t{% if content.field_testimonial_hyperlink[i] is not null %}
\t\t\t\t<a class=\"btn btn-dark\" href=\"{{ content.field_testimonial_hyperlink[i]['#url'] }}\">{{ content.field_testimonial_hyperlink[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</section>
\t\t{% endif %}
\t</div>
</section>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_testimonials/templates/paragraph--cavalla-testimonials.html.twig");
    }
}
