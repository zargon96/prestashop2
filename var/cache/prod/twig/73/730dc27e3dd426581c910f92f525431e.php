<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_edition_basic/views/templates/admin/homepage.html.twig */
class __TwigTemplate_09f91e7433d1c192774d3e87ce49de76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/ps_edition_basic/views/templates/admin/homepage.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <!-- TODO: Migrer le hook pour créer des blocs dynamiques -->

    <div id=\"vue-app\" data-context=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["jsContext"] ?? null));
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_edition_basic/views/templates/admin/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  50 => 22,  46 => 21,  35 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_edition_basic/views/templates/admin/homepage.html.twig", "C:\\laragon\\www\\prestashop\\modules\\ps_edition_basic\\views\\templates\\admin\\homepage.html.twig");
    }
}
