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

/* question/index.html.twig */
class __TwigTemplate_1ee6bd99204474fc56683aafa3103e16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/index.html.twig", 1);
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

        echo "Question";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; font: 20px/1.5 sans-serif; }
</style>

<div class=\"col-9\">
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " \"</h1><br><br>
        <div class=\"card\">
            <div class=\"card-header\">
                <br><h4>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()), "question", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4><br>
            </div>

            <div class=\"card-body\">
                <form action=\"\" name=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 21
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, $context["reponse"], "id_question", [], "any", false, false, false, 21))) {
                // line 22
                echo "                            <input type=\"radio\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" name=\"reponse\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse_expected", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                            <label for=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 23), "html", null, true);
                echo "</label><br>
                        ";
            }
            // line 25
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    <br><input type=\"submit\" class=\"btn btn-secondary\" value=\"Valider\">
                </form>
            </div>

            <div class=\"card-footer text-center\">
            ";
        // line 31
        if (((isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 31, $this->source); })()) > (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            
                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 33, $this->source); })()), "reponse_expected", [], "any", false, false, false, 33) == (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                       Bonne réponse !
                    </div>
                    <a href=\"/categorie/";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Résultat</button></a>
                ";
            } elseif ((            // line 38
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 38, $this->source); })()) == null)) {
                // line 39
                echo "                ";
            } else {
                // line 40
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 41, $this->source); })()), "reponse", [], "any", false, false, false, 41), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Résultat</button></a><br>
                ";
            }
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 46, $this->source); })()), "reponse_expected", [], "any", false, false, false, 46) == (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Question suivante</button></a>
                    <p>score : ";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "</p>
                ";
            } elseif ((            // line 52
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 52, $this->source); })()) == null)) {
                // line 53
                echo "                ";
            } else {
                // line 54
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 55, $this->source); })()), "reponse", [], "any", false, false, false, 55), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\"><button>Question suivante</button></a><br>
                    <p>score : ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "</p>
                ";
            }
            // line 60
            echo "            ";
        }
        // line 61
        echo "                
            </div>
            
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 61,  234 => 60,  229 => 58,  221 => 57,  216 => 55,  213 => 54,  210 => 53,  208 => 52,  204 => 51,  196 => 50,  191 => 47,  188 => 46,  185 => 45,  178 => 43,  173 => 41,  170 => 40,  167 => 39,  165 => 38,  159 => 37,  154 => 34,  152 => 33,  149 => 32,  147 => 31,  140 => 26,  134 => 25,  127 => 23,  120 => 22,  117 => 21,  113 => 20,  109 => 19,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; font: 20px/1.5 sans-serif; }
</style>

<div class=\"col-9\">
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"{{ categories.name }} \"</h1><br><br>
        <div class=\"card\">
            <div class=\"card-header\">
                <br><h4>{{ questions.question }}</h4><br>
            </div>

            <div class=\"card-body\">
                <form action=\"\" name=\"{{ questions.id }}\">
                    {% for reponse in reponses %}
                        {% if questions.id == reponse.id_question %}
                            <input type=\"radio\" id=\"{{ reponse.id }}\" name=\"reponse\" value=\"{{ reponse.reponse_expected }}\">
                            <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label><br>
                        {% endif %}
                    {% endfor %}
                    <br><input type=\"submit\" class=\"btn btn-secondary\" value=\"Valider\">
                </form>
            </div>

            <div class=\"card-footer text-center\">
            {% if nextQuest > last %}
            
                {% if expected.reponse_expected == validate %}
                    <div class=\"alert alert-success\" role=\"alert\">
                       Bonne réponse !
                    </div>
                    <a href=\"/categorie/{{ cat }}/{{ score }}\"><button class=\"btn btn-primary\">Résultat</button></a>
                {% elseif validate == null %}
                {% else %}
                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : {{ expected.reponse }}
                    </div><br>
                    <a href=\"/categorie/{{ cat }}/{{ score }}\"><button class=\"btn btn-primary\">Résultat</button></a><br>
                {% endif %}
            {% else %}
                {% if expected.reponse_expected == validate %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/{{ cat }}/{{ nextQuest }}/{{ score }}\"><button class=\"btn btn-primary\">Question suivante</button></a>
                    <p>score : {{ score }}</p>
                {% elseif validate == null %}
                {% else %}
                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : {{ expected.reponse }}
                    </div><br>
                    <a href=\"/categorie/{{ cat }}/{{ nextQuest }}/{{ score }}\"><button>Question suivante</button></a><br>
                    <p>score : {{ score }}</p>
                {% endif %}
            {% endif %}
                
            </div>
            
        </div>
    </div>
</div>
{% endblock %}
", "question/index.html.twig", "/Users/mac/Downloads/my_quizz-mter/templates/question/index.html.twig");
    }
}
