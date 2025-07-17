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

/* pages/tab-collection.html.twig */
class __TwigTemplate_aac4b845c467a411e13e2d1b395cdfee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-collection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-collection.html.twig"));

        // line 1
        yield " 
\t<!-- collection Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"collections\" data-tab=\"collections\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Packages Grid -->
\t\t\t<div
\t\t\t\tclass=\"collection-group\" data-collection=\"1\">
\t\t\t\t<!-- Step 1: Packages Card -->
\t\t\t\t<div
\t\t\t\t\tclass=\"step step-card flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t<!-- card 1 -->
\t\t\t\t\t<div class=\"asset-card open-collection w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"collections Card\" data-collection-btn=\"1\">
\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t<img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/collection.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-48 md-max:w-full object-cover\"/>
\t\t\t\t\t\t\t<img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/share-collection.png"), "html", null, true);
        yield "\" alt=\"\" class=\"absolute left-5 top-4\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex justify-between px-3\">
\t\t\t\t\t\t\t<div class=\"flex flex-col py-[14px]\">
\t\t\t\t\t\t\t\t<div class=\"flex uppercase text-basic-blue gap-2 font-black text-sm\">
\t\t\t\t\t\t\t\t\tCollection
\t\t\t\t\t\t\t\t\t<span class=\"text-accent-blue\">[21 assets]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"text-lg font-semibold\">Collection Name</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/delete.svg"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openDeleteModal\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<!-- Step 2: Package Details (Initially hidden) -->
\t\t\t\t<div class=\"step step-detail hidden mt-4 flex md-max:flex-col md-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[315px] md-max:max-w-full shadow-lg px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold pr-4\">
\t\t\t\t\t\t\t\tThis is where the collection name appears
\t\t\t\t\t\t\t\t<span class=\"uppercase text-accent-blue font-black mt-[10px]\">[8 assets]</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"edit cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/edit-blue.svg"), "html", null, true);
        yield "\" alt=\"Edit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Created:</span>
\t\t\t\t\t\t\tFebruary 28, 2024
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Creator:</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"accessBtn flex font-light pb-2 pt-6 text-base items-center gap-2 cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/view.png"), "html", null, true);
        yield "\" alt=\"\" class=\"h-3\"/>
\t\t\t\t\t\t\t<span class=\"text-basic-blue text-base font-semibold border-b-2 border-basic-blue\">Show who has access</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t\t<!-- Packages Card 1 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Asset Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/pdf.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/select-green.svg"), "html", null, true);
        yield "\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Share Icon.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Download Icon.png"), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Repeat above block for package 2, 3, etc. -->
\t\t</div>
\t</div>
\t<!-- collection Tabs end -->
 
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
        return "pages/tab-collection.html.twig";
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
        return array (  152 => 77,  146 => 74,  135 => 66,  129 => 63,  116 => 53,  101 => 41,  84 => 27,  70 => 16,  66 => 15,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- collection Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"collections\" data-tab=\"collections\">
\t\t<div
\t\t\tclass=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Packages Grid -->
\t\t\t<div
\t\t\t\tclass=\"collection-group\" data-collection=\"1\">
\t\t\t\t<!-- Step 1: Packages Card -->
\t\t\t\t<div
\t\t\t\t\tclass=\"step step-card flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t<!-- card 1 -->
\t\t\t\t\t<div class=\"asset-card open-collection w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"collections Card\" data-collection-btn=\"1\">
\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/collection.png') }}\" alt=\"\" class=\"w-full h-48 md-max:w-full object-cover\"/>
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/share-collection.png') }}\" alt=\"\" class=\"absolute left-5 top-4\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex justify-between px-3\">
\t\t\t\t\t\t\t<div class=\"flex flex-col py-[14px]\">
\t\t\t\t\t\t\t\t<div class=\"flex uppercase text-basic-blue gap-2 font-black text-sm\">
\t\t\t\t\t\t\t\t\tCollection
\t\t\t\t\t\t\t\t\t<span class=\"text-accent-blue\">[21 assets]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"text-lg font-semibold\">Collection Name</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/delete.svg') }}\" class=\"h-12 w-12 object-cover openDeleteModal\" alt=\"\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<!-- Step 2: Package Details (Initially hidden) -->
\t\t\t\t<div class=\"step step-detail hidden mt-4 flex md-max:flex-col md-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[315px] md-max:max-w-full shadow-lg px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold pr-4\">
\t\t\t\t\t\t\t\tThis is where the collection name appears
\t\t\t\t\t\t\t\t<span class=\"uppercase text-accent-blue font-black mt-[10px]\">[8 assets]</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"edit cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/edit-blue.svg') }}\" alt=\"Edit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Created:</span>
\t\t\t\t\t\t\tFebruary 28, 2024
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Creator:</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"accessBtn flex font-light pb-2 pt-6 text-base items-center gap-2 cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/view.png') }}\" alt=\"\" class=\"h-3\"/>
\t\t\t\t\t\t\t<span class=\"text-basic-blue text-base font-semibold border-b-2 border-basic-blue\">Show who has access</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t\t<!-- Packages Card 1 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Asset Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/pdf.png') }}\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/select-green.svg') }}\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Share Icon.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Download Icon.png') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Repeat above block for package 2, 3, etc. -->
\t\t</div>
\t</div>
\t<!-- collection Tabs end -->
 
", "pages/tab-collection.html.twig", "/var/www/html/templates/pages/tab-collection.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 15];
        static $functions = ["asset" => 15];

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
