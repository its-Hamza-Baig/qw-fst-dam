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

/* pages/tab-assets.html.twig */
class __TwigTemplate_62f62d27d47dc1aa93eb7928586f0cf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-assets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-assets.html.twig"));

        // line 1
        yield " 
\t<!-- Assets Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"assets\" data-tab=\"assets\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Asset Grid -->
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t<!-- Asset 1  -->
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            yield "\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Asset Card\">
\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\"> 
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<img src=\"";
            // line 14
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "assetImage", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "assetImage", [], "any", false, false, true, 14), 14, $this->source), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.png"), "html", null, true)));
            yield "\" alt=\"Asset Image\" class=\" sm:w-[80%] w-full h-48 object-cover\" style=\"max-width: 80%;\" />
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<button class=\"open-assets capitalize absolute text-center text-[14px] font-black -translate-x-8 translate-y-2 bg-black text-white py-3 px-8 rounded-lg\">
\t\t\t\t\t\t\t\topen asset
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/select-green.svg"), "html", null, true);
            yield "\" alt=\"Select\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">JPG</div>
\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Share Icon.png"), "html", null, true);
            yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Download Icon.png"), "html", null, true);
            yield "\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "assetTitle", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "assetTitle", [], "any", false, false, true, 37), 37, $this->source), "html", null, true)) : ("Hier steht als Beispiel der sehr lange Dateiname der Datei"));
            yield "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "\t\t\t\t\t<p>No assets found.</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "  
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Assets Tabs end -->
 
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
        return "pages/tab-assets.html.twig";
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
        return array (  123 => 43,  116 => 41,  114 => 40,  106 => 37,  97 => 31,  91 => 28,  80 => 20,  71 => 14,  66 => 11,  61 => 10,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- Assets Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"assets\" data-tab=\"assets\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Asset Grid -->
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t<!-- Asset 1  -->
\t\t\t\t{% for item in assets %}
\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Asset Card\">
\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\"> 
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<img src=\"{{ item.assetImage ? item.assetImage : asset('build/images/1.png') }}\" alt=\"Asset Image\" class=\" sm:w-[80%] w-full h-48 object-cover\" style=\"max-width: 80%;\" />
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<button class=\"open-assets capitalize absolute text-center text-[14px] font-black -translate-x-8 translate-y-2 bg-black text-white py-3 px-8 rounded-lg\">
\t\t\t\t\t\t\t\topen asset
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/select-green.svg') }}\" alt=\"Select\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">JPG</div>
\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Share Icon.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Download Icon.png') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t{{ item.assetTitle ? item.assetTitle : 'Hier steht als Beispiel der sehr lange Dateiname der Datei' }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<p>No assets found.</p>
\t\t\t\t{% endfor %}
  
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Assets Tabs end -->
 
", "pages/tab-assets.html.twig", "/var/www/html/templates/pages/tab-assets.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 10];
        static $filters = ["escape" => 14];
        static $functions = ["asset" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['asset'],
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
