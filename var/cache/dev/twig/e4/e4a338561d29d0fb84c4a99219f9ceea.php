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

/* index.html.twig */
class __TwigTemplate_ba73fbd49a380bd5228f61cc65c4181b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"border\" style=\"border: 2px outset green;  height: 600px;\"></div>
    <form id=\"test\" method=\"post\" >
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput\">Kullanıcı adı</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"kullanıcı adı\">
        </div>
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput2\">mesaj</label>
            <input type=\"text\" class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"mesaj\">
        </div>
        <button type=\"submit\"  class=\"btn btn-success\">submit</button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"border\" style=\"border: 2px outset green;  height: 600px;\"></div>
    <form id=\"test\" method=\"post\" >
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput\">Kullanıcı adı</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"kullanıcı adı\">
        </div>
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput2\">mesaj</label>
            <input type=\"text\" class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"mesaj\">
        </div>
        <button type=\"submit\"  class=\"btn btn-success\">submit</button>
    </form>
{% endblock %}


", "index.html.twig", "/var/www/friely/templates/index.html.twig");
    }
}
