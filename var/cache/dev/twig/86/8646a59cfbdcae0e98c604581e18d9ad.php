<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flashcards/flashcards.html.twig */
class __TwigTemplate_8985c1620f4beced11e0d93e434dbe10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flashcards/flashcards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flashcards/flashcards.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "flashcards/flashcards.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "flashcards/navbar.html.twig");
        yield "

    <div class=\"container mt-4\">
        <p>
            <a class=\"btn btn-primary mx-2\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Home</a>
            <a class=\"btn btn-primary mx-2\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cards_add");
        yield "\">Add Flashcard</a>
        </p>

        <h1 class=\"text-center\">Flashcards</h1>
        <div class=\"d-flex flex-column align-items-center mt-4\"> <!-- Flex column and center alignment -->

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashcards"]) || array_key_exists("flashcards", $context) ? $context["flashcards"] : (function () { throw new RuntimeError('Variable "flashcards" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["flashcard"]) {
            // line 16
            yield "                    <div class=\"card mb-4\" > 
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "topic", [], "any", false, false, false, 18), "html", null, true);
            yield "</h5>
                            <hr class=\"hr-new\">
                            <p class=\"card-text\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "answer", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                            <a class=\"btn btn-danger\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cards_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">Delete</a>
                            <a class=\"btn btn-primary\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cards_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">Update</a>

                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            yield "                    <p class=\"text-center\">No flashcards available.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashcard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "flashcards/flashcards.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 29,  122 => 27,  112 => 22,  108 => 21,  104 => 20,  99 => 18,  95 => 16,  90 => 15,  81 => 9,  77 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    {{ include('flashcards/navbar.html.twig') }}

    <div class=\"container mt-4\">
        <p>
            <a class=\"btn btn-primary mx-2\" href=\"{{ path('homepage') }}\">Home</a>
            <a class=\"btn btn-primary mx-2\" href=\"{{ path('cards_add') }}\">Add Flashcard</a>
        </p>

        <h1 class=\"text-center\">Flashcards</h1>
        <div class=\"d-flex flex-column align-items-center mt-4\"> <!-- Flex column and center alignment -->

                {% for flashcard in flashcards %}
                    <div class=\"card mb-4\" > 
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ flashcard.topic }}</h5>
                            <hr class=\"hr-new\">
                            <p class=\"card-text\">{{ flashcard.answer }}</p>
                            <a class=\"btn btn-danger\" href=\"{{ path('cards_delete', { 'id': flashcard.id }) }}\">Delete</a>
                            <a class=\"btn btn-primary\" href=\"{{ path('cards_update', { 'id': flashcard.id }) }}\">Update</a>

                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center\">No flashcards available.</p>
                {% endfor %}

        </div>
    </div>
{% endblock %}
", "flashcards/flashcards.html.twig", "/home/grodel/Desktop/flashcards-php/templates/flashcards/flashcards.html.twig");
    }
}
