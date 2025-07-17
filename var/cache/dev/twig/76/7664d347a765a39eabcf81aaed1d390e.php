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

/* partials/footer.twig */
class __TwigTemplate_59aa37aa373eabd01a7cd5edc371df47 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.twig"));

        // line 1
        yield "<footer class=\"px-6 py-10 pl-24 md-max:px-6 max-w-[1430px] w-full relative z-50\" aria-label=\"Site Footer\">
\t<nav class=\"mx-auto max-w-8xl mt-14\" aria-label=\"Footer Navigation\">
\t\t<ul class=\"list-none flex justify-end space-x-12 text-lg font-semibold sm-max:space-x-3 sm-max:justify-between\">
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-1000\" aria-label=\"Legal Notice\">Legal Notice</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-500 hover:ease-in-out\" aria-label=\"Data Protection\">Data Protection</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-500 hover:ease-in-out\" aria-label=\"Contact\">Contact</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"px-6 py-10 pl-24 md-max:px-6 max-w-[1430px] w-full relative z-50\" aria-label=\"Site Footer\">
\t<nav class=\"mx-auto max-w-8xl mt-14\" aria-label=\"Footer Navigation\">
\t\t<ul class=\"list-none flex justify-end space-x-12 text-lg font-semibold sm-max:space-x-3 sm-max:justify-between\">
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-1000\" aria-label=\"Legal Notice\">Legal Notice</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-500 hover:ease-in-out\" aria-label=\"Data Protection\">Data Protection</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"\" class=\"hover:text-accent-blue hover:transition hover:duration-500 hover:ease-in-out\" aria-label=\"Contact\">Contact</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</footer>
", "partials/footer.twig", "/var/www/html/templates/partials/footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
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
