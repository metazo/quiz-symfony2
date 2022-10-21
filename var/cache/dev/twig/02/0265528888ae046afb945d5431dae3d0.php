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

/* registration/index.html.twig */
class __TwigTemplate_dba3db8893677660a1ba35323b7012c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 style=\"margin-top: 70px\">Inscription</h1><br>
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                <div class=\"card-body text-center\">
                    <h2 style=\"margin-top: 70px\">Vous êtes déjà inscrit<br><br>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 20
            echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
        <div class=\"card-body\">
          <div class=\"card-header mb-3\">Veuillez remplir les champs ci-dessous :</div>
          ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
            echo "
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
              <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-btn fa-user\"></i>S'inscrire
              </button>
            </div>
          </div>
          ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
            echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 61
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  161 => 54,  148 => 44,  140 => 39,  132 => 34,  124 => 29,  118 => 26,  110 => 20,  100 => 13,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
<h1 style=\"margin-top: 70px\">Inscription</h1><br>
{% if app.user %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                <div class=\"card-body text-center\">
                    <h2 style=\"margin-top: 70px\">Vous êtes déjà inscrit<br><br>{{ app.user.name }}</h2><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
{% else %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
        <div class=\"card-body\">
          <div class=\"card-header mb-3\">Veuillez remplir les champs ci-dessous :</div>
          {{ form_start(form) }}
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.password.first, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.password.second, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
              <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-btn fa-user\"></i>S'inscrire
              </button>
            </div>
          </div>
          {{ form_end(form) }}
        </div>
      </div>
    </div>
  </div>
</div>
{% endif %}


{% endblock %}
", "registration/index.html.twig", "/Users/mac/Downloads/my_quizz-mter/templates/registration/index.html.twig");
    }
}
