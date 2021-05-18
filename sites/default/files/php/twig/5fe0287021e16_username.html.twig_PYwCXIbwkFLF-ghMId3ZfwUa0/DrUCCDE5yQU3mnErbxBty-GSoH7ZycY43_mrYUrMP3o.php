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

/* themes/contrib/cavalla_theme/templates/user/username.html.twig */
class __TwigTemplate_a7cfbf8c102b31872388802ffca8c4c4f7990114acfb4abbadf1b1b06804b3fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/contrib/cavalla_theme/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,);
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
 * Theme override for displaying a username.
 *
 * Available variables:
 * - account: The full account information for the user.
 * - uid: The user ID, or zero if not a user. As used in anonymous comments.
 * - name: The user's name, sanitized, and optionally truncated.
 * - name_raw: The user's name, un-truncated.
 * - truncated: Whether the user's name was truncated.
 * - extra: Additional text to append to the user's name, sanitized.
 * - profile_access: Whether the current user has permission to access this
     users profile page.
 * - link_path: The path or URL of the user's profile page, home page,
 *   or other desired page to link to for more information about the user.
 * - homepage: (optional) The home page of the account, only set for non users.
 * - link_options: Options to set on the \\Drupal\\Core\\Url object if linking the
 *   user's name to the user's page.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_username()
 */
#}
{{ name }}", "themes/contrib/cavalla_theme/templates/user/username.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/cavalla_theme/templates/user/username.html.twig");
    }
}
