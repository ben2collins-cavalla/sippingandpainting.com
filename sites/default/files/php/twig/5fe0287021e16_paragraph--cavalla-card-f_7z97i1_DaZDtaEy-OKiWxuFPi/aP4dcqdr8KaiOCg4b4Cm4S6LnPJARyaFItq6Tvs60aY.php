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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_cards/templates/paragraph--cavalla-card-field.html.twig */
class __TwigTemplate_e380ef30946ffb20f940b59c538324d189b117439a255d1fcf98691847ccac36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5, "for" => 9];
        $filters = ["escape" => 3, "length" => 9];
        $functions = ["range" => 9];

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
        echo "<div class=\"card\" >
    <div class=\"card-body\">
        ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_card_field_image", [])), "html", null, true);
        echo "
        <h5 class=\"card-title card__head\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_header_text", []), 0, [], "array")), "html", null, true);
        echo "</h5>
        ";
        // line 5
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_sub_text", []), 0, [], "array"))) {
            // line 6
            echo "            <p class=\"card-text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_sub_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <section class=\"text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_card_field_link", []))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "            ";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_link", []), $context["i"], [], "array"))) {
                // line 11
                echo "            <a class=\"btn btn-dark\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_link", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_field_link", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
            ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_cards/templates/paragraph--cavalla-card-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 14,  93 => 13,  85 => 11,  82 => 10,  78 => 9,  75 => 8,  69 => 6,  67 => 5,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" >
    <div class=\"card-body\">
        {{ content.field_card_field_image }}
        <h5 class=\"card-title card__head\">{{ content.field_card_field_header_text[0] }}</h5>
        {%  if true in content.field_card_field_sub_text[0] %}
            <p class=\"card-text\">{{ content.field_card_field_sub_text[0] }}</p>
        {% endif %}
        <section class=\"text-center\">
        {% for i in 0..content.field_card_field_link|length %}
            {% if content.field_card_field_link[i] is not null %}
            <a class=\"btn btn-dark\" href=\"{{ content.field_card_field_link[i]['#url'] }}\">{{ content.field_card_field_link[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
            {% endif %}
        {% endfor %}
        </section>
    </div>
</div>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_cards/templates/paragraph--cavalla-card-field.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_cards/templates/paragraph--cavalla-card-field.html.twig");
    }
}
