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
use Twig\TemplateWrapper;

/* layouts/base.html.twig */
class __TwigTemplate_59f8659c5ede7a7c0e638734c3983995 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        yield "\">
</head>
<body class=\"overflow-hidden\">
    <div class=\"absolute top-0 w-full drop-shadow\"></div>
    <div id=\"home-hero-bg\" class=\"hidden\"></div>
    ";
        // line 12
        yield from $this->load("partials/navbar.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "    ";
        yield from $this->load("partials/sidebar.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "
    <main class=\"p-4 mb-5\" style=\"height: 100vh; overflow-y: scroll;\">
      ";
        // line 16
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 17
        yield "    
      ";
        // line 18
        yield from $this->load("pages/tab-assets.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "      ";
        yield from $this->load("pages/tab-account.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "      ";
        yield from $this->load("pages/tab-branding.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "      ";
        yield from $this->load("pages/tab-collection.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "      ";
        yield from $this->load("pages/tab-home.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "      ";
        yield from $this->load("pages/tab-packages.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "      ";
        yield from $this->load("pages/tab-uploads.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    </main>

    ";
        // line 28
        yield from $this->load("partials/footer.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield " 
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/4.1.11/lib.min.js\" integrity=\"sha512-tE7j0ptGYRtx0sHRAOkHNLAuIqVW7udzmjvNh1A6vIEnWUJnx7j7khwTEjemjDaauV+lHo0jEtdW8jn5weoxhw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  150 => 16,  128 => 6,  112 => 29,  110 => 28,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  85 => 18,  82 => 17,  80 => 16,  76 => 14,  73 => 13,  71 => 12,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{% block title %}{% endblock %}</title>
  <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
</head>
<body class=\"overflow-hidden\">
    <div class=\"absolute top-0 w-full drop-shadow\"></div>
    <div id=\"home-hero-bg\" class=\"hidden\"></div>
    {% include 'partials/navbar.twig' %}
    {% include 'partials/sidebar.twig' %}

    <main class=\"p-4 mb-5\" style=\"height: 100vh; overflow-y: scroll;\">
      {% block content %}{% endblock %}
    
      {% include 'pages/tab-assets.html.twig' %}
      {% include 'pages/tab-account.html.twig' %}
      {% include 'pages/tab-branding.html.twig' %}
      {% include 'pages/tab-collection.html.twig' %}
      {% include 'pages/tab-home.html.twig' %}
      {% include 'pages/tab-packages.html.twig' %}
      {% include 'pages/tab-uploads.html.twig' %}

    </main>

    {% include 'partials/footer.twig' %}
    {{ encore_entry_script_tags('app') }} 
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/4.1.11/lib.min.js\" integrity=\"sha512-tE7j0ptGYRtx0sHRAOkHNLAuIqVW7udzmjvNh1A6vIEnWUJnx7j7khwTEjemjDaauV+lHo0jEtdW8jn5weoxhw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
</body>
</html>", "layouts/base.html.twig", "/var/www/html/templates/layouts/base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 6, "include" => 12];
        static $filters = ["escape" => 7];
        static $functions = ["asset" => 7, "encore_entry_script_tags" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
                ['escape'],
                ['asset', 'encore_entry_script_tags'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
