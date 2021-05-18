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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig */
class __TwigTemplate_9f082ff85b7e08f49167c3eeb9691372327b39abc744504db8e4f34fc2c4bf7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "if" => 4, "for" => 23];
        $filters = ["escape" => 2, "length" => 23];
        $functions = ["range" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 2
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " data-animate-cta=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_animation", []), 0, [], "array")), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "  </div>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "       ";
        if ((($context["bundle"] ?? null) == "remote_video")) {
            // line 5
            echo "          <div class=\"video_background_";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["provider"] ?? null)), "html", null, true);
            echo "\">
            <div class=\"video_foreground_";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["provider"] ?? null)), "html", null, true);
            echo "\">
              <iframe src=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
       ";
        } else {
            // line 11
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_call_to_action_media", [])), "html", null, true);
            echo "
       ";
        }
        // line 13
        echo "        <section class=\"center_content container px-3\">
            ";
        // line 14
        if ((($context["cta_logo"] ?? null) == 1)) {
            // line 15
            echo "            <img class=\"logo\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" />
            ";
        }
        // line 17
        echo "            <h1 class=\"title-header\" >";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_header", []), 0, [], "array")), "html", null, true);
        echo "</h1>
            ";
        // line 18
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_subtext", []), 0, [], "array"))) {
            // line 19
            echo "            <p class=\"lead\" >";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_subtext", []), 0, [], "array")), "html", null, true);
            echo "</p>
            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), 0, [], "array"))) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "                ";
                if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"))) {
                    // line 25
                    echo "                <a class=\"btn btn-dark\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                    echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
                ";
                }
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </section>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 29,  156 => 28,  150 => 27,  142 => 25,  139 => 24,  134 => 23,  132 => 22,  129 => 21,  123 => 19,  121 => 18,  116 => 17,  110 => 15,  108 => 14,  105 => 13,  99 => 11,  92 => 7,  88 => 6,  83 => 5,  80 => 4,  77 => 3,  72 => 31,  70 => 3,  63 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block paragraph %}
  <div{{ attributes.addClass(classes) }} data-animate-cta=\"{{ content.field_call_to_action_animation[0] }}\">
    {% block content %}
       {% if bundle == 'remote_video' %}
          <div class=\"video_background_{{ provider }}\">
            <div class=\"video_foreground_{{ provider }}\">
              <iframe src=\"{{ url }}\" width=\"100%\" height=\"100%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
       {% else %}
          {{ content.field_call_to_action_media }}
       {% endif %}
        <section class=\"center_content container px-3\">
            {%  if cta_logo == 1 %}
            <img class=\"logo\" src=\"{{ logo }}\" width=\"100%\" height=\"100%\" />
            {% endif %}
            <h1 class=\"title-header\" >{{ content.field_call_to_action_header[0] }}</h1>
            {% if true in content.field_call_to_action_subtext[0] %}
            <p class=\"lead\" >{{ content.field_call_to_action_subtext[0] }}</p>
            {% endif %}

            {%  if true in content.field_call_to_action_hyperlink[0] %}
            {% for i in 0..content.field_call_to_action_hyperlink|length %}
                {% if content.field_call_to_action_hyperlink[i] is not null %}
                <a class=\"btn btn-dark\" href=\"{{ content.field_call_to_action_hyperlink[i]['#url'] }}\">{{ content.field_call_to_action_hyperlink[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
                {% endif %}
            {% endfor %}
            {% endif %}
        </section>
    {% endblock %}
  </div>
{% endblock paragraph %}", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig");
    }
}
