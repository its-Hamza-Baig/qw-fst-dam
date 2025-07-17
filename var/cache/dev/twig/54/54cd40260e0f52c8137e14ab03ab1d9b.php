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

/* pages/tab-branding.html.twig */
class __TwigTemplate_3d091cc5aa301b9c8ca0b7c0d768a67d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-branding.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-branding.html.twig"));

        // line 1
        yield " 
\t<!-- Branding tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"branding\" data-tab=\"branding\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Branding Grid -->
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t<!-- Branding Card 1 -->
\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Branding Card\">
\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t<img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/pdf.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>
\t\t\t\t\t\t<button class=\"open-assets pdf capitalize absolute text-center text-[14px] font-black -translate-x-8 translate-y-2 bg-black text-white py-3 px-8 rounded-lg\">
\t\t\t\t\t\t\topen asset
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/select-green.svg"), "html", null, true);
        yield "\" alt=\"Select\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Share Icon.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Download Icon.png"), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der Datei
\t\t\t\t\t</p>
\t\t\t\t</div> 
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Branding Tab end -->
 
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
        return "pages/tab-branding.html.twig";
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
        return array (  88 => 28,  82 => 25,  71 => 17,  63 => 12,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- Branding tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"branding\" data-tab=\"branding\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Branding Grid -->
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t<!-- Branding Card 1 -->
\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Branding Card\">
\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t<img src=\"{{ asset('build/images/pdf.png') }}\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>
\t\t\t\t\t\t<button class=\"open-assets pdf capitalize absolute text-center text-[14px] font-black -translate-x-8 translate-y-2 bg-black text-white py-3 px-8 rounded-lg\">
\t\t\t\t\t\t\topen asset
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/select-green.svg') }}\" alt=\"Select\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Share Icon.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Download Icon.png') }}\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der Datei
\t\t\t\t\t</p>
\t\t\t\t</div> 
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Branding Tab end -->
 
", "pages/tab-branding.html.twig", "/var/www/html/templates/pages/tab-branding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 12];
        static $functions = ["asset" => 12];

        try {
            $this->sandbox->checkSecurity(
                [],
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
