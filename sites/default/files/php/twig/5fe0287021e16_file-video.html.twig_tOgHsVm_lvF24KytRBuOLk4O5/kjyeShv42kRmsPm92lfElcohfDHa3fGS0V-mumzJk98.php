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

/* themes/contrib/cavalla_theme/templates/field/file-video.html.twig */
class __TwigTemplate_571c07e1c5b5f16959f6c832a454bc00d484e61eac46626ea4a50a82d6df785e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 19];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        // line 18
        echo "<video playsinline=\"playsinline\" muted=\"muted\" autoplay loop>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 20
            echo "    <source ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["file"], "source_attributes", [])), "html", null, true);
            echo " />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</video>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/cavalla_theme/templates/field/file-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  62 => 20,  58 => 19,  55 => 18,);
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
* Default theme implementation to display the file entity as a video tag.
*
* Available variables:
* - attributes: An array of HTML attributes, intended to be added to the
*   video tag.
* - files: And array of files to be added as sources for the video tag. Each
*   element is an array with the following elements:
*   - file: The full file object.
*   - source_attributes: An array of HTML attributes for to be added to the
*     source tag.
*
* @ingroup themeable
*/
#}
<video playsinline=\"playsinline\" muted=\"muted\" autoplay loop>
  {% for file in files %}
    <source {{ file.source_attributes }} />
  {% endfor %}
</video>
", "themes/contrib/cavalla_theme/templates/field/file-video.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/cavalla_theme/templates/field/file-video.html.twig");
    }
}
