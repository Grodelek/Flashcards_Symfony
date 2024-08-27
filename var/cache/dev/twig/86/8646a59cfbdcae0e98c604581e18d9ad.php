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
        yield "    <!-- Navbar -->
    ";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "flashcards/navbar.html.twig");
        yield "

    <!-- Navigation Buttons -->
    <div class=\"container mt-4\">
        <p>
            <a class=\"btn btn-primary mx-2\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Home</a>
            <a class=\"btn btn-primary mx-2\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("flashcards_add");
        yield "\">Add Flashcard</a>
        </p>

        <!-- Main Content -->
        <div class=\"container mt-4\">
            <h1 class=\"text-center\">All Flashcards!</h1>
            <div class=\"row\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashcards"]) || array_key_exists("flashcards", $context) ? $context["flashcards"] : (function () { throw new RuntimeError('Variable "flashcards" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["flashcard"]) {
            // line 19
            yield "                    <div class=\"col-md-4 mb-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "topic", [], "any", false, false, false, 22), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashcard"], "answer", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            yield "                    <p class=\"text-center\">No flashcards available.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashcard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </div>
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
        return array (  125 => 30,  118 => 28,  108 => 23,  104 => 22,  99 => 19,  94 => 18,  84 => 11,  80 => 10,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <!-- Navbar -->
    {{ include('flashcards/navbar.html.twig') }}

    <!-- Navigation Buttons -->
    <div class=\"container mt-4\">
        <p>
            <a class=\"btn btn-primary mx-2\" href=\"{{ path('homepage') }}\">Home</a>
            <a class=\"btn btn-primary mx-2\" href=\"{{ path('flashcards_add') }}\">Add Flashcard</a>
        </p>

        <!-- Main Content -->
        <div class=\"container mt-4\">
            <h1 class=\"text-center\">All Flashcards!</h1>
            <div class=\"row\">
                {% for flashcard in flashcards %}
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ flashcard.topic }}</h5>
                                <p class=\"card-text\">{{ flashcard.answer }}</p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center\">No flashcards available.</p>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "flashcards/flashcards.html.twig", "/home/grodel/Desktop/flashcards-php/templates/flashcards/flashcards.html.twig");
    }
}
