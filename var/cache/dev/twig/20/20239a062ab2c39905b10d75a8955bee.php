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

/* pages/tab-packages.html.twig */
class __TwigTemplate_285b31a8a4cea0a44ea6f222c7126949 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-packages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-packages.html.twig"));

        // line 1
        yield " 
\t<!-- Packages Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"packages\" data-tab=\"packages\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Packages Grid -->
\t\t\t<div class=\"package-group\" data-package=\"1\">
\t\t\t\t<!-- Step 1: Packages Card -->
\t\t\t\t<div class=\"step step-card flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "\t\t\t\t\t\t<!-- card  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\"> 
\t\t\t\t\t\t\t\t<img src=\"";
            // line 13
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "packageImage", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "packageImage", [], "any", false, false, true, 13), 13, $this->source), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.png"), "html", null, true)));
            yield "\" alt=\"Asset Image\" class=\"w-full h-48 md-max:w-full object-cover\" />

\t\t\t\t\t\t\t\t<button class=\"open-package capitalize absolute text-center text-[14px] font-black translate-y-2 bg-black text-white py-3 px-8 rounded-lg\" data-package-btn=\"1\">
\t\t\t\t\t\t\t\t\topen package
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex justify-between px-3\">
\t\t\t\t\t\t\t\t<div class=\"flex flex-col py-[14px]\">
\t\t\t\t\t\t\t\t\t<div class=\"flex uppercase text-basic-blue gap-2 font-black text-sm\">
\t\t\t\t\t\t\t\t\t\tpackages
\t\t\t\t\t\t\t\t\t\t<span class=\"text-accent-blue\">[21 assets]</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"text-lg font-semibold\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 26
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "packageTitle", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "packageTitle", [], "any", false, false, true, 26), 26, $this->source), "html", null, true)) : ("Package Name"));
            yield "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Share Icon.png"), "html", null, true);
            yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 34
        if (!$context['_iterated']) {
            // line 35
            yield "\t\t\t\t\t\t<p>No package found.</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t\t\t\t</div>
\t\t\t\t<!-- Step 2: Package Details (Initially hidden) -->
\t\t\t\t<div class=\"step step-detail hidden mt-4 flex md-max:flex-col md-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[315px] md-max:max-w-full shadow-lg px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold\">
\t\t\t\t\t\t\tHier steht der Name des Package
\t\t\t\t\t\t\t<span class=\"uppercase text-accent-blue font-black mt-[10px]\">[21 assets]</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Created:</span>
\t\t\t\t\t\t\tFebruary 28, 2024
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Creator</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Tags:</span>
\t\t\t\t\t\t\t<div class=\"flex flex-wrap text-sm font-semibold mt-[14px] gap-2\">
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">tags</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">tags</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t\t<!-- Packages Card 1 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-green.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 2  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/car.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>
\t\t\t\t\t\t\t\t<button class=\"capitalize absolute text-center -translate-x-8 translate-y-2 rounded-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Play.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-green.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">jpg</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 3 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/doctor.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">JPG</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 4-->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 5  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/1.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\"><!-- DE -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 6-->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 7 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/doctor.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">jpg</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 8  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/1.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\"><!-- DE -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Repeat above block for package 2, 3, etc. -->
\t\t</div>
\t</div>
\t<!-- Packages Tabs end -->
 
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
        return "pages/tab-packages.html.twig";
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
        return array (  111 => 37,  104 => 35,  102 => 34,  93 => 30,  86 => 26,  70 => 13,  65 => 10,  60 => 9,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- Packages Tabs start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"packages\" data-tab=\"packages\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<!-- Packages Grid -->
\t\t\t<div class=\"package-group\" data-package=\"1\">
\t\t\t\t<!-- Step 1: Packages Card -->
\t\t\t\t<div class=\"step step-card flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t{% for item in packages %}
\t\t\t\t\t\t<!-- card  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\"> 
\t\t\t\t\t\t\t\t<img src=\"{{ item.packageImage ? item.packageImage : asset('build/images/1.png') }}\" alt=\"Asset Image\" class=\"w-full h-48 md-max:w-full object-cover\" />

\t\t\t\t\t\t\t\t<button class=\"open-package capitalize absolute text-center text-[14px] font-black translate-y-2 bg-black text-white py-3 px-8 rounded-lg\" data-package-btn=\"1\">
\t\t\t\t\t\t\t\t\topen package
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex justify-between px-3\">
\t\t\t\t\t\t\t\t<div class=\"flex flex-col py-[14px]\">
\t\t\t\t\t\t\t\t\t<div class=\"flex uppercase text-basic-blue gap-2 font-black text-sm\">
\t\t\t\t\t\t\t\t\t\tpackages
\t\t\t\t\t\t\t\t\t\t<span class=\"text-accent-blue\">[21 assets]</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"text-lg font-semibold\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{{ item.packageTitle ? item.packageTitle : 'Package Name' }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/Share Icon.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>No package found.</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- Step 2: Package Details (Initially hidden) -->
\t\t\t\t<div class=\"step step-detail hidden mt-4 flex md-max:flex-col md-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[315px] md-max:max-w-full shadow-lg px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold\">
\t\t\t\t\t\t\tHier steht der Name des Package
\t\t\t\t\t\t\t<span class=\"uppercase text-accent-blue font-black mt-[10px]\">[21 assets]</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Created:</span>
\t\t\t\t\t\t\tFebruary 28, 2024
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Creator</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Tags:</span>
\t\t\t\t\t\t\t<div class=\"flex flex-wrap text-sm font-semibold mt-[14px] gap-2\">
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">tags</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">tags</span>
\t\t\t\t\t\t\t\t<span class=\"bg-[#9CD2F0] py-1 px-3 rounded-[4px]\">Beispieltag</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-6 pl-6 z-0 relative\">
\t\t\t\t\t\t<!-- Packages Card 1 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full max-h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-green.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 2  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/car.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>
\t\t\t\t\t\t\t\t<button class=\"capitalize absolute text-center -translate-x-8 translate-y-2 rounded-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Play.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-green.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">jpg</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 3 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/doctor.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">JPG</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 4-->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 5  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/1.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\"><!-- DE -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 6-->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/pdf.png\" alt=\"\" class=\"w-full h-44 object-contain text-center\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 7 -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/doctor.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">jpg</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\">
\t\t\t\t\t\t\t\t\t\tDE
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Packages Card 8  -->
\t\t\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden\" aria-label=\"Packages Card\">
\t\t\t\t\t\t\t<div class=\"relative flex bg-[#99BFDB] items-center justify-center\">
\t\t\t\t\t\t\t\t<img src=\"../src/images/1.png\" alt=\"\" class=\"w-full h-48 md-max:w-[80%] object-cover\"/>

\t\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"../src/images/svg/select-grey-big.svg\" alt=\"Select\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pt-[14px] text-center gap-1 flex flex-col items-center bg-white w-24 h-48\">
\t\t\t\t\t\t\t\t\t<div class=\"font-black text-lg uppercase\">PDF</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"bg-tints-light-blue rounded-[4px] px-[7.5px] w-fit\"><!-- DE -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"my-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Share Icon.png\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"openDownloadModal\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../src/images/Download Icon.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"px-3 py-[14px]\">
\t\t\t\t\t\t\t\tHier steht als Beispiel der sehr lange Dateiname der
\t\t\t\t\t\t\t\t                          Datei
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Repeat above block for package 2, 3, etc. -->
\t\t</div>
\t</div>
\t<!-- Packages Tabs end -->
 
", "pages/tab-packages.html.twig", "/var/www/html/templates/pages/tab-packages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 9];
        static $filters = ["escape" => 13];
        static $functions = ["asset" => 13];

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
